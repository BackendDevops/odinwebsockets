<?php 
date_default_timezone_set('Europe/Istanbul');
require_once("autoloader.php");
$route->GET("/", function () {
      echo "<h4>Merhaba</h4>";
});
