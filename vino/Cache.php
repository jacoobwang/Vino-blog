<?php

namespace Vino;
  
use phpFastCache\CacheManager;

/**
 * redis cache 
**/ 
class Cache {

  private $_instance;

  /**
   * make a redis instance
   */
  public function init($driver, $config)
  {
    CacheManager::setDefaultConfig(array(
      $driver => $config,
    ));
    $this->_instance = CacheManager::getInstance($driver);
  }

  /**
   * test if an item exists
   */
  public function has($key)
  {
    return $this->_instance->hasItem($key);
  }

  /**
   * retrieves an item and return false if empty item
   **/
  public function get($key)
  {
    $CachedString = $this->_instance->getItem($key);

    if (is_null($CachedString)) {
      return false; 
    } else {
      return $CachedString;  
    } 
  }

  /**
   * set a cache item immediately
   */
  public function set($cache)
  {
    return $this->_instance->save($cache);
  }

  /**
   * delete an item
   **/
  public function delete($key)
  {
    return $this->_instance->deleteItem($key);
  }

  /**
   * claer all
   **/
  public function clear()
  {
      return $this->_instance->clear();
  }
  
  /**
   * increment
   **/
  public function increment($tag)
  {
    return $this->_instance->incrementItemsByTag($tag);
  }

  /**
   * decrement
   **/
  public function decrement($tag)
  {
      return $this->_instance->decrementItemsByTag($tag);
  }

}

  
?>