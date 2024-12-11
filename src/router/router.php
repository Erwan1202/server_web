<?php
    require_once __DIR__ . '/../../vendor/autoload.php';
    require_once __DIR__ . '/../controllers/mainController.php';

    $router = new AltoRouter();
    
    $basePath = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';
    $router->setBasePath($basePath);
    
    $router->map('GET', '/', 'MainController#home', 'home');
    $router->map('GET', '/about', 'MainController#about', 'about');
    $router->map('GET', '/catalogue', 'MainController#catalogue', 'catalogue');
    $router->map('GET', '/article', 'MainController#article', 'article');
    $router->map('GET', '/inscription', 'MainController#inscription', 'inscription');
    $router->map('GET', '/connexion', 'MainController#connexion', 'connexion');
    $router->map('GET', '/panier', 'MainController#panier', 'panier');

    
    return $router;
?>