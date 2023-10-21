<?php
define("DB_NAME", "teste_php");

define("DB_USER", "postgres");

define("DB_PASSWORD", "654789123");

define("DB_HOST", "localhost");

if (!define("ABSPATH")) {
    define('ABSPATH', dirname(__FILE__).'/');
};

if(!defined('BASEURL')) {
    define('BASEURL', '/CRUD-BASICO-PHP/');
}

if(!defined('DBAPI')) {
    define('DBAPI', ABSPATH.'inc/database.php');
}
    
   
?>