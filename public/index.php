<?php


session_start();


const BASE_PATH = __DIR__.'/../';

require BASE_PATH.'Core/functions.php';

spl_autoload_register(function ($class) {
//  $class = "Core\Database"
$class = str_replace('\\', DIRECTORY_SEPARATOR, $class);



    require base_path($class . '.php');
});

require base_path('bootstrap.php');

// require base_path('Core/router.php');
// $router  = new core\router();

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];





