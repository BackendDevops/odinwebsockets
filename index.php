<?php 
error_log(E_ALL);
ini_set('display_errors',"On");
date_default_timezone_set('Europe/Istanbul');
require_once("autoloader.php");
$route->GET("/", function () {
      echo "<h4>Merhaba</h4>";
});

$route->POST("/post", function () {
      $posted=json_decode(php://input);
      $data['status']="success";
      $data['message']="Connection is alive";                    
      header("application/json");
                          echo json_encode($data,JSON_PRETTY_PRINT);
});
