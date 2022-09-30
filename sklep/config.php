<?php
$root = pathinfo($_SERVER['SCRIPT_FILENAME']);
define('PROJECT_NAME', 'sklep');
define('BASE_FOLDER', basename($root['dirname']));
define('SITE_ROOT', realpath(dirname(__FILE__)));
?>