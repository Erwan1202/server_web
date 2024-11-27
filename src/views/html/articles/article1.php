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
    <title>Mon oiseau - Ma boutique</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto py-4 text-center">
            <h1 class="text-3xl font-bold">Détails du produit</h1>
            <a href="../../index.html" class="text-yellow-500 hover:underline">Retour à l'accueil</a>
            <span class="mx-4">|</span>
            <a href="../catalogue.html" class="text-yellow-500 hover:underline">Retour au catalogue</a>
        </div>
    </header>
    <main class="py-12">
        <div class="container mx-auto">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden p-6">
                <div class="flex flex-col lg:flex-row items-center">
                    <img src="../../image/mon_oiseau.jpg" alt="Mon oiseau" class="w-full lg:w-1/3 h-64 object-cover mb-4 lg:mb-0 lg:mr-8">
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold mb-4">Mon oiseau</h2>
                        <p class="text-gray-700 mb-4">Découvrez notre magnifique oiseau, parfait pour apporter une touche exotique à votre maison.</p>
                        <p class="text-gray-700 mb-4">Voici la description du produit : </p>
                        <p class="text-gray-700 mb-4">
                            NIQUE LES SALOPES<br>
                            QUI PARLENT EN SCRED<br>
                            SI LE SAVOIR EST UNE ARME<br>
                            ET BAH NIQUE TA MERE<br>
                            LA RUE C'EST DANGEREUX POTO<br>
                            LE MONDE APPARTIENT A CEUX<br>
                            QUI LEVENT LE YAMAHA 4 TEMPS<br>
                            NIQUE LA CANINE ET LES STUPS<br>
                            QUI SY FROTTE EFFRITE<br>
                            PLAN WEED BIEN SERVI<br>
                            8€ LE GRAMME<br>
                            0683647893
                        </p>
                        <p class="text-gray-700 mb-4">Prix : <span class="font-bold text-yellow-600">20€</span></p>
                        <p class="text-gray-700 mb-4">Disponibilité : En stock</p>
                        <a href="#" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">Ajouter au panier</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container mx-auto py-4 text-center">
            <p class="text-gray-700">© 2021 Ma boutique (no scam)</p>
        </div>
    </footer>
</body>
</html>
