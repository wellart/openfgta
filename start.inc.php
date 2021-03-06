<?php
define('__ROOT_DIR', dirname(__FILE__));
define('__USERCONFIG_FOLDER', __ROOT_DIR.'/../'.basename(__ROOT_DIR).'.conf');


// EasyUI yang digunakan
define('__EASYUI_PATH', 'js/jquery-easyui-1.4.5');

// JQuery yang digunakan
define('__JQUERY', 'js/jquery-2.1.1.min.js');
define('__JQUERYMOBILE_CSS', 'js/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css');
define('__JQUERYMOBILE_JS', 'js/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js');


define('__SELECTION_DEFAULT_TEXT', '- - PILIH - -');
define('__SELECTION_DEFAULT_VALUE', '0');
define('__SELECTION_DEFAULT', "{'id':'".__SELECTION_DEFAULT_VALUE."','text':'".__SELECTION_DEFAULT_TEXT."'}");


if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
  define('__IS_WINDOWS', true);
  ini_set("include_path", ".;".__ROOT_DIR."\\__LIB2");
} else {
   define('__IS_WINDOWS', false);		
  ini_set("include_path", ".:".__ROOT_DIR.'/__LIB2');
}


ini_set('display_errors', 1);
date_default_timezone_set('Asia/Jakarta');
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
