<?php 
error_log(E_ALL);
ini_set('display_errors',"On");
date_default_timezone_set('Europe/Istanbul');
require_once("autoloader.php");
$route->GET("/", function () {
      echo "<h4>Merhaba</h4>";
});
