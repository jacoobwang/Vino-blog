<?php

/**
 * User: jacoob
 * Date: 12-8-16
 * Time: AM10:41
 * To change this template use File | Settings | File Templates.
 *
 *
 * 用Redis实现分布式锁
 * Redis有一系列的命令，特点是以NX结尾，NX是Not eXists的缩写，如SETNX命令就应该理解为：SET if Not eXists。这系列的命令非常有用，这里讲使用SETNX来实现分布式锁。
 * 用SETNX实现分布式锁
 * 利用SETNX非常简单地实现分布式锁。例如：某客户端要获得一个名字foo的锁，客户端使用下面的命令进行获取：
 * SETNX lock.foo <current Unix time + lock timeout + 1>
 * 如返回1，则该客户端获得锁，把lock.foo的键值设置为时间值表示该键已被锁定，该客户端最后可以通过DEL lock.foo来释放该锁。
 * 如返回0，表明该锁已被其他客户端取得，这时我们可以先返回或进行重试等对方完成或等待锁超时。
 * 解决死锁
 * 上面的锁定逻辑有一个问题：如果一个持有锁的客户端失败或崩溃了不能释放锁，该怎么解决？我们可以通过锁的键对应的时间戳来判断这种情况是否发生了，如果当前的时间已经大于lock.foo的值，说明该锁已失效，可以被重新使用。
 * 发生这种情况时，可不能简单的通过DEL来删除锁，然后再SETNX一次，当多个客户端检测到锁超时后都会尝试去释放它，这里就可能出现一个竞态条件,让我们模拟一下这个场景：
 * C0操作超时了，但它还持有着锁，C1和C2读取lock.foo检查时间戳，先后发现超时了。
 * C1 发送DEL lock.foo
 * C1 发送SETNX lock.foo 并且成功了。
 * C2 发送DEL lock.foo
 * C2 发送SETNX lock.foo 并且成功了。
 * 这样一来，C1，C2都拿到了锁！问题大了！
 * 幸好这种问题是可以避免D，让我们来看看C3这个客户端是怎样做的：
 * C3发送SETNX lock.foo 想要获得锁，由于C0还持有锁，所以Redis返回给C3一个0
 * C3发送GET lock.foo 以检查锁是否超时了，如果没超时，则等待或重试。
 * 反之，如果已超时，C3通过下面的操作来尝试获得锁：
 * GETSET lock.foo <current Unix time + lock timeout + 1>
 * 通过GETSET，C3拿到的时间戳如果仍然是超时的，那就说明，C3如愿以偿拿到锁了。
 * 如果在C3之前，有个叫C4的客户端比C3快一步执行了上面的操作，那么C3拿到的时间戳是个未超时的值，这时，C3没有如期获得锁，需要再次等待或重试。留意一下，尽管C3没拿到锁，但它改写了C4设置的锁的超时值，不过这一点非常微小的误差带来的影响可以忽略不计。
 * 注意：为了让分布式锁的算法更稳键些，持有锁的客户端在解锁之前应该再检查一次自己的锁是否已经超时，再去做DEL操作，因为可能客户端因为某个耗时的操作而挂起，操作完的时候锁因为超时已经被别人获得，这时就不必解锁了。
 *
 * 示例伪代码
 *
 * 根据上面的代码，我写了一小段Fake代码来描述使用分布式锁的全过程：
 *
 * # get lock
 * lock = 0
 * while lock != 1:
 * timestamp = current Unix time + lock timeout + 1
 * lock = SETNX lock.foo timestamp
 * if lock == 1 or (now() > (GET lock.foo) and now() > (GETSET lock.foo timestamp)):
 * break;
 * else:
 * sleep(10ms)
 *
 * # do your job
 * do_job()
 *
 * # release
 * if now() < GET lock.foo:
 * DEL lock.foo
 * 是的，要想这段逻辑可以重用，使用python的你马上就想到了Decorator，而用Java的你是不是也想到了那谁？AOP + annotation？行，怎样舒服怎样用吧，别重复代码就行。
 *
 *
 * Source Url: http://hi.baidu.com/shut_ups/item/d19beadc103917fe93a974a3
 *
 *
 */
class RedisLock {

    // CuteLock
    const KEY_PREFIX = 'RLCK_';

    // 锁的键名
    private $key = '';

    // 锁的过期时间
    private $timeout = 15;

    //锁的状态（是否持有锁）
    private $locked = false;

    private $_redis = null;


    /**
     * @param $redis Redis 实例
     * @param $key 锁定的KEY
     * @param int $timeout 超时
     */
    public function __construct($redis, $key, $timeout = 15) {
        $this->key = self::KEY_PREFIX . $key;
        $this->timeout = $timeout;
        $this->_redis = $redis;
    }

    /**
     * @param int $retry
     * @return bool
     */
    public function getLock($retry = 3) {
        $redis = $this->_redis;
        $key = $this->key;
        $timeout = $this->timeout;

        $this->locked = false;

        $try = 0;
        while (true) {
            $now = time();
            $stamp = $now + $timeout + 1;
            $lock = $redis->setnx($key, $stamp);
            if ($lock || (($now > $redis->get($key)) && ($now > $redis->getSet($key, $stamp)))) {
                $this->locked = true;
                return true;
            } else {
                ++$try;
                if ($try > $retry) {
                    return false;
                } else {
                    sleep(1);
                }
            }
        }


        /*
        lock = 0
        while lock != 1:
        timestamp = current Unix time + lock timeout + 1
        lock = SETNX lock.foo timestamp
        if lock == 1 or (now() > (GET lock.foo) and now() > (GETSET lock.foo timestamp)):
            break;
        else:
            sleep(10ms)
        */

        return false;
    }

    /**
     * releaseLock
     */
    public function releaseLock() {
        if ($this->locked) {
            $redis = $this->_redis;
            $key = $this->key;
            $now = time();

            $stamp = $redis->get($key);
            if ($stamp && ($now < $stamp)) {
                $redis->del($key);
            }
        }
    }


}
