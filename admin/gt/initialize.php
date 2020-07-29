<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.
require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."function.php");
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."accounts.php");
require_once(LIB_PATH.DS."autonumbers.php");
require_once(LIB_PATH.DS."departments.php");  
require_once(LIB_PATH.DS."divisions.php");  
require_once(LIB_PATH.DS."sidebarFunction.php");   
require_once(LIB_PATH.DS."employees.php"); 
require_once(LIB_PATH.DS."educationbackground.php"); 
require_once(LIB_PATH.DS."familybackgrounds.php"); 
require_once(LIB_PATH.DS."leavescredit.php");
require_once(LIB_PATH.DS."children.php");
require_once(LIB_PATH.DS."civilserviceeligibility.php");
require_once(LIB_PATH.DS."workexperience.php");
require_once(LIB_PATH.DS."involveothercivic.php");
require_once(LIB_PATH.DS."involveothereducational.php");
require_once(LIB_PATH.DS."trainingprogram.php");

require_once(LIB_PATH.DS."database.php");
?>


