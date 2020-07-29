<?php
defined('server') ? null : define("server", "localhost");
defined('user') ? null : define ("user", "nardustc_user") ;
defined('pass') ? null : define("pass","1234567890qwer@");
defined('database_name') ? null : define("database_name", "nardustc_apdb") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
?>