<?php

namespace Mphp;


/**
 * 分页状态数据生成，并提供获取当前页码以及用于SQL的LIMIT子句的 offset 参数。
 * Class Pagination
 * @package Cutephp
 */
class Pagination {
    /**
     * 默认的标识页码参数名称
     */
    const DEFAULT_PAGE_KEY = 'page';

    /**
     * @var int
     */
    private $per_page_count = 15;

    /**
     * @var int
     */
    private $total_count;

    /**
     * @var int
     */
    private $page_count;



    /**
     * @param int $total 总记录数
     * @param null|int $per_page_count 每页记录数
     */
    public function __construct($total, $per_page_count = null) {
        if (!is_null($per_page_count)) {
            $this->setPerPageCount($per_page_count);
        }

        $this->setTotalCount($total);

        $this->recalculate();
    }



    /**
     * 返回总的页数
     * @return int
     */
    public function getPageCount() {
        return $this->page_count;
    }

    /**
     * 设置每页显示记录数
     * @param int $per_page_count
     * @throws \Exception
     */
    public function setPerPageCount($per_page_count) {
        if ($per_page_count <= 0) {
            throw ExceptionHelper::create('Per page count can not is zero.', 669926);
        }
        $this->per_page_count = $per_page_count;
        $this->recalculate();
    }

    /**
     * 获取每页记录数
     * @return int
     */
    public function getPerPageCount() {
        return $this->per_page_count;
    }

    /**
     * 设置总的记录数
     * @param int $total_count
     */
    public function setTotalCount($total_count) {
        if ($total_count < 0) {
            $total_count = 0;
        }

        $this->total_count = $total_count;
        $this->recalculate();
    }

    /**
     * 获取总的记录数
     * @return int
     */
    public function getTotalCount() {
        return $this->total_count;
    }


    /**
     * 获取页码
     * @param $offset 记录位移
     * @return int
     */
    public function getPageNo($offset) {
        $p = intval($offset / $this->per_page_count) + 1;
        return $p;
    }


    /**
     * 重新计算分页状态信息
     */
    private function recalculate() {
        if ($this->total_count == 0) {
            $this->page_count = 0;
            return;
        }

        $this->page_count = intval($this->total_count / $this->per_page_count);
        if ($this->per_page_count * $this->page_count != $this->total_count) {
            ++$this->page_count;
        }
    }


    /**
     * 返回SQL limit 记录范围
     * @param $page_no 页码
     * @return array (start, limit)
     */
    public function limitRange($page_no) {
        if ($this->page_count < $page_no) {
            $page_no = $this->page_count;
        }
        if ($page_no <= 0) {
            $page_no = 1;
        }

        $start = ($page_no - 1) * $this->per_page_count;

        return array($start, $this->per_page_count);
    }


    /**
     * 返回SQL limit 子句内容
     * @param int $page_no 页码
     * @return string SQL: limit [offset], [limit]
     */
    public function limitString($page_no) {
        $arr = $this->limitRange($page_no);
        return sprintf('%d, %d', $arr[0], $arr[1]);
    }


    /**
     * 分页的状态信息
     * @param int $cur_page 当前页码
     * @return array array('page'=>'页码', 'pages' => '总页数', 'perPage' => '每页记录数', 'total' => '总记录数')
     */
    public function toArray($cur_page = 1) {
        if ($cur_page <= 0) {
            $cur_page = 1;
        } else if ($cur_page > $this->page_count) {
            $cur_page = $this->page_count;
        }

        return array('page' => $cur_page, 'pages' => $this->page_count, 'perPage' => $this->per_page_count, 'total' => $this->total_count,);
    }


    /**
     * 简单输出分页导航数据，包括导航页码和对应链接地址
     * @param int $cur_page 当前页码
     * @param null $url_fmt 地址格式
     * @return array
     */
    public function htmlNavSelf($cur_page = 1, $url_fmt = null, $force_return_status=false) {
        return self::htmlNav($this->toArray($cur_page), $url_fmt, $force_return_status);
    }


    /**
     * 简单输出分页导航数据，包括导航页码和对应链接地址
     * @param $page_arr
     * @param null|string $url_fmt 导航链接地址模板，页码位置由_page_表示，如：/index?name=dayu&page=_page_&ok=1
     * @return array array('status' => [page_arr,分页状态数据， 包含页码链接模板], 'prev' => '链接地址', '1' => '链接地址', '2'=>'链接地址', '...'=>'', 'next'=>'链接地址');
     */
    public static function htmlNav($page_arr, $url_fmt = null, $force_return_status=false) {
        $ret = array();
        $padding = 2;
        $page = $page_arr['page'];
        $pages = $page_arr['pages'];

        // 没有2页时不显任何翻页内容
        if ($pages <= 1) {
            if (!$force_return_status) {
                return [];
            } else {
                return array(
                    'status' => $page_arr,
                );
            }
        }

        $holder = '_page_';
        if (empty($url_fmt)) {
            $uri_arr = parse_url($_SERVER['REQUEST_URI']);
            $qs = array();
            if (isset($uri_arr['query'])){
                parse_str($uri_arr['query'], $qs);
            }
            $qs[self::DEFAULT_PAGE_KEY] = $holder;
            $url_fmt = '?' . http_build_query($qs);
            // HTML锚点
            if (isset($uri_arr['fragment'])) {
                $url_fmt  .= ('#'.$uri_arr['fragment']);
            }
        }
        //        echo $url_fmt;
        $page_arr['url_fmt'] = $url_fmt;


        if ($page > 1) {
            $ret['prev'] = str_replace($holder, $page - 1, $url_fmt);
        }

        $i = $page - $padding;
        $j = $page + $padding * 2;
        $last = $pages;
        for (; $i <= $j; ++$i) {
            if ($i > 0 && $i <= $pages) {
                $ret[$i] = str_replace($holder, $i, $url_fmt);
            }
            $last = $i;
            if (count($ret) >= 2 * $padding + 2) {
                break;
            }
        }

        $more = $pages - $last;
        if ($more >= 2) {
            $ret['...'] = '';
        }
        if ($more >= 1) {
            $ret[$pages] = str_replace($holder, $pages, $url_fmt);
        }

        if ($page < $pages) {
            $ret['next'] = str_replace($holder, $page + 1, $url_fmt);
        }

        foreach ($ret as $k => &$v) {
            if (is_int($k) && $k == $page) {
                $v = '';
                break;
            }
        }

        $ret['status'] = $page_arr;

        return $ret;
    }


    /**
     * 获取当前页面页码
     * @param null|string $key
     * @return int
     */
    public static function paramPage($key = null) {
        if (empty($key)) {
            $key = self::DEFAULT_PAGE_KEY;
        }

        $page = intval(Request::getSingleton()->paramGet($key));
        if ($page <= 0) {
            $page = 1;
        }
        return $page;
    }


    /**
     * @param int $per_page  每页显示的记录数
     * @param null|int $page_no 页码
     * @return mixed
     */
    public static function pageOffset($per_page, $page_no = null) {
        if (empty($page_no)) {
            $page_no = self::paramPage();
        }
        return $per_page * ($page_no - 1);
    }


}
