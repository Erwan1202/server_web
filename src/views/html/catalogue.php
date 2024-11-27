<?php

require_once __DIR__ . '/../src/controllers/MainController.php';
$router = require_once __DIR__ . '/../src/router/router.php';

// Débogage : voir les routes et la correspondance
var_dump($router->getRoutes());

$match = $router->match();

if ($match) {
    var_dump($match); // Voir ce qu'AltoRouter détecte pour la requête
    [$controller, $method] = explode('#', $match['target']);
    
    if (class_exists($controller) && method_exists($controller, $method)) {
        (new $controller())->$method();
    } else {
        (new MainController())->notFound();
    }
} else {
    (new MainController())->notFound();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue - Ma boutique</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto py-4 text-center">
            <h1 class="text-3xl font-bold">Catalogue</h1>
            <a href="../index.html" class="text-yellow-500 hover:underline">Retour à l'accueil</a>
        </div>
    </header>

    <section class="py-12">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4">Nos produits</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Produit 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="./articles/article1.html">
                        <img src="../image/mon_oiseau.jpg" alt="Image produit" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h4 class="text-xl font-bold mb-2">Mon oiseau</h4>
                        <p class="text-gray-700 mb-2">Prix : <span class="font-bold text-yellow-600">20€</span></p>
                        <a href="./articles/article1.html" class="text-blue-500 hover:underline">Voir plus</a>
                    </div>
                </div>

                <!-- Produit 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="./articles/article1.html">
                        <img src="../image/mon_oiseau.jpg" alt="Image produit" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h4 class="text-xl font-bold mb-2">Mon chat</h4>
                        <p class="text-gray-700 mb-2">Prix : <span class="font-bold text-yellow-600">30€</span></p>
                        <a href="./articles/article1.html" class="text-blue-500 hover:underline">Voir plus</a>
                    </div>
                </div>

                <!-- Produit 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="./articles/article1.html">
                        <img src="../image/mon_oiseau.jpg" alt="Image produit" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h4 class="text-xl font-bold mb-2">Mon chien</h4>
                        <p class="text-gray-700 mb-2">Prix : <span class="font-bold text-yellow-600">50€</span></p>
                        <a href="./articles/article1.html" class="text-blue-500 hover:underline">Voir plus</a>
                    </div>
                </div>

                <!-- Produit 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="./articles/article1.html">
                        <img src="../image/mon_oiseau.jpg" alt="Image produit" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h4 class="text-xl font-bold mb-2">Mon poisson</h4>
                        <p class="text-gray-700 mb-2">Prix : <span class="font-bold text-yellow-600">15€</span></p>
                        <a href="./articles/article1.html" class="text-blue-500 hover:underline">Voir plus</a>
                    </div>
                </div>

                <!-- Produit 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="./articles/article1.html">
                        <img src="../image/mon_oiseau.jpg" alt="Image produit" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h4 class="text-xl font-bold mb-2">Mon hamster</h4>
                        <p class="text-gray-700 mb-2">Prix : <span class="font-bold text-yellow-600">10€</span></p>
                        <a href="./articles/article1.html" class="text-blue-500 hover:underline">Voir plus</a>
                    </div>
                </div>

                <!-- Produit 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="./articles/article1.html">
                        <img src="../image/mon_oiseau.jpg" alt="Image produit" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h4 class="text-xl font-bold mb-2">Mon lapin</h4>
                        <p class="text-gray-700 mb-2">Prix : <span class="font-bold text-yellow-600">25€</span></p>
                        <a href="./articles/article1.html" class="text-blue-500 hover:underline">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container mx-auto py-4 text-center">
            <p class="text-gray-700">© 2021 Ma boutique (no scam)</p>
        </div>
    </footer>
</body>
</html>
