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
    <title>Ma boutique (no scam)</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <!-- Header -->
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto py-4 text-center">
            <h1 class="text-5xl font-extrabold mb-2">Ma boutique (no scam)</h1>
            <nav class="flex justify-center space-x-4">
                <a href="index.php" class="hover:text-yellow-500">Accueil</a>
                <a href="./catalogue" class="hover:text-yellow-500">Catalogue</a>
                <a href="./connexion" class="hover:text-yellow-500">Connexion</a>
                <a href="./inscription" class="hover:text-yellow-500">Inscription</a>
                <a href="./panier" class="hover:text-yellow-500">Panier</a>
            </nav>
        </div>
    </header>

    <!-- Présentation -->
    <section class="bg-white py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Bienvenue sur ma boutique</h2>
            <p class="text-lg text-gray-700">Vous trouverez ici des produits de qualité à des prix imbattables.</p>
        </div>
    </section>

    <!-- Catalogue -->
    <section class="py-12">
        <div class="container mx-auto">
            <h3 class="text-3xl font-bold text-center mb-8">Nos produits</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Produit 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="./article">
                        <img src="image/mon_oiseau.jpg" alt="Image produit" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h4 class="text-xl font-bold mb-2">Mon oiseau</h4>
                        <a href="./article" class="text-blue-500 hover:underline">Voir plus</a>
                    </div>
                </div>

                <!-- Produit 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <a href="./article">
                    <img src="image/mon_oiseau.jpg" alt="Image produit" class="w-full h-48 object-cover">
                </a>
                    <div class="p-4 text-center">
                        <h4 class="text-xl font-bold mb-2">Mon oiseau</h4>
                        <a href="./article" class="text-blue-500 hover:underline">Voir plus</a>
                    </div>
                </div>

                <!-- Produit 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <a href="./article">
                    <img src="image/mon_oiseau.jpg" alt="Image produit" class="w-full h-48 object-cover">
                </a>
                    <div class="p-4 text-center">
                        <h4 class="text-xl font-bold mb-2">Mon oiseau</h4>
                        <a href="./article" class="text-blue-500 hover:underline">Voir plus</a>
                    </div>
                </div>

                <!-- Produit 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <a href="./article">
                    <img src="image/mon_oiseau.jpg" alt="Image produit" class="w-full h-48 object-cover">
                </a>
                    <div class="p-4 text-center">
                        <h4 class="text-xl font-bold mb-2">Mon oiseau</h4>
                        <a href="./article" class="text-blue-500 hover:underline">Voir plus</a>
                    </div>
                </div>

                <!-- Produit 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <a href="./article">
                    <img src="image/mon_oiseau.jpg" alt="Image produit" class="w-full h-48 object-cover">
                </a>
                    <div class="p-4 text-center">
                        <h4 class="text-xl font-bold mb-2">Mon oiseau</h4>
                        <a href="./article" class="text-blue-500 hover:underline">Voir plus</a>
                    </div>
                </div>

                <!-- Produit 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <a href="./article">
                    <img src="image/mon_oiseau.jpg" alt="Image produit" class="w-full h-48 object-cover">
                </a>
                    <div class="p-4 text-center">
                        <h4 class="text-xl font-bold mb-2">Mon oiseau</h4>
                        <a href="./article" class="text-blue-500 hover:underline">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="./catalogue" class="bg-yellow-500 text-white px-6 py-3 rounded-full shadow-lg hover:bg-yellow-600 transition">
                    Accéder au catalogue
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container mx-auto py-4 text-center">
            <p class="text-gray-700">© 2021 Ma boutique (no scam)</p>
        </div>
    </footer>
</body>
</html>
