<?php

use Core\app;
use Core\container;
use Core\Database;

$container=  new container();

$container->bind('Core\Database', function (){
    $config = require base_path('config.php');
    return  new Database($config['database']);
    
});

$db = $container->resolve('Core\Database');
app::setContainer($container);


