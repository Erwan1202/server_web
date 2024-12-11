<?php
// Inclure le fichier du contrôleur principal
require_once __DIR__ . '/../controllers/MainController.php';

// Initialiser le contrôleur
$controller = new MainController();

// Définir les routes disponibles
$routes = [
    'GET' => [
        '/' => 'home',
        '/about' => 'about',
        '/catalogue' => 'catalogue',
        '/article' => 'article',
        '/inscription' => 'inscription',
        '/connexion' => 'connexion',
        '/panier' => 'panier'
    ]
];

// Récupérer la méthode HTTP et l'URL demandée
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['REQUEST_URI'];

// Nettoyer l'URL pour supprimer les paramètres éventuels (ex: ?id=1)
$path = strtok($path, '?');

// Vérifier si la route existe
if (isset($routes[$method][$path])) {
    $action = $routes[$method][$path];
    if (method_exists($controller, $action)) {
        // Appeler la méthode correspondante dans le contrôleur
        $controller->$action();
    } else {
        // Méthode non définie dans le contrôleur
        echo "Erreur : Méthode '$action' non trouvée dans MainController.";
    }
} else {
    // Route non trouvée
    $controller->notFound();
}
?>
