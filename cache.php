<?php
/**
* @Copyright MIT License / No copying
* @Author Nigel Gatsfield
* @Version 1.0
* @Revision 2019-03-08 16:30
*
*/

/* Caching */
//Depending on their preference
//Different profiles can be utilized
header('Cache-Control: no-store')
//additional cache-control options: no-cache
//additional cache-control options: private(store it, but only for the user) or public (store the cache)
header('X-Content-Type-Options: nosniff');
header('Cache-Control: max-age=3600');
header('Cache-Control: must-revalidate');
//once max-age expires, the resource must be reloaded
header('Cache-Control: protected');
header('Expires:'.time()+3600);

#APC
/**
 *
 */
class Cache
{

  function __construct()
  {

  }

  #Memcache

  protected function MemCache()
  {

  }

  protected function SessionCache()
  {
    #Sessioncache
    //protected
    //private_no_expire
    //private
    session_cache_limiter("protected");
    //nocache
    session_cache_expire(10);
  }

  protected function FileCache()
  {
    #Filecache
    clearstatcache(__FILE__);
    //int minutes
  }

  protected function RarCache()
  {
    var_dump(rar_wrapper_cache_stats());
  }

  protected function PathCache()
  {
    var_dump(realpath_cache_get());
    var_dump(realpath_cache_size());
  }

  #WinCache

  #OPCache

}

?>
