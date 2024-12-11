<?php

require_once __DIR__ . '/../controllers/mainController.php';
$router = require_once __DIR__ . '/../router/router.php';



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
    <title>Panier - Ma boutique</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto py-4 text-center">
            <h1 class="text-3xl font-bold">Votre panier</h1>
            <a href="../index.html" class="text-yellow-500 hover:underline">Retour à l'accueil</a>
        </div>
    </header>
    <section class="py-12">
        <div class="container mx-auto">
            <table class="w-full bg-white rounded-lg shadow-lg">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4">Produit</th>
                        <th class="py-2 px-4">Prix</th>
                        <th class="py-2 px-4">Quantité</th>
                        <th class="py-2 px-4">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemples -->
                    <tr>
                        <td class="py-2 px-4">Mon oiseau</td>
                        <td class="py-2 px-4">20€</td>
                        <td class="py-2 px-4">1</td>
                        <td class="py-2 px-4">20€</td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-8 text-right">
                <button class="bg-yellow-500 text-white px-6 py-2 rounded-lg hover:bg-yellow-600">Commander</button>
            </div>
        </div>
    </section>
</body>
</html>
