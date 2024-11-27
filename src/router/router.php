<?php
    
    require_once __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__ . '/../vendor/altorouter/altorouter/AltoRouter.php';
    require_once __DIR__ . '/../controllers/mainController.php';

    $router = new AltoRouter();


    $basePath = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';
    $router->setBasePath($basePath);

    $router->map('GET', '/', 'MainController#home', 'home');
    $router->map('GET', '/about', 'MainController#about', 'about');

    return $router;

?>