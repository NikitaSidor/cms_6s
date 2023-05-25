<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);
define('ENV', 'Admin');
require_once ROOT_DIR . '/engine/boostrap.php';
?>