<?php
//Database Constants
defined('DB_SERVER') ? null : define("DB_SERVER","localhost");
defined('DB_USER')   ? null : define("DB_USER","eneej");
defined('DB_PASS')   ? null : define("DB_PASS","SSTRRnnEis");
defined('DB_NAME')   ? null : define("DB_NAME","eneej");
defined('DS')         ? null : define("DS",DIRECTORY_SEPARATOR);
//defined('SITE_ROOT')  ? null : define("SITE_ROOT",DS.''.DS.''.DS.''.DS.'');
defined('MODEL')      ? null : define("MODEL",SITE_ROOT.DS.'model'.DS);
defined('VIEW')       ? null : define("VIEW",SITE_ROOT.DS.'view'.DS);
defined('CONTROLLER') ? null : define("CONTROLLER",SITE_ROOT.DS.'controller'.DS);
?>
