<?php
spl_autoload_register(function($class){
    $file = __DIR__ . '/controller/' . $class . '.php';
    if (file_exists($file))
        require $file;
});
$route=new Route();
