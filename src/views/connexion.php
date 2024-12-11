<?php

require_once __DIR__ . '/../controllers/mainController.php';
$router = require_once __DIR__ . '/../router/router.php';



$match = $router->match();

if ($match) {
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
    <title>Connexion - Ma boutique</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto py-4 text-center">
            <h1 class="text-3xl font-bold">Connexion</h1>
            <a href="/server_web/Public/index" class="text-yellow-500 hover:underline">Retour à l'accueil</a>
        </div>
    </header>
    <section class="py-12">
        <div class="container mx-auto">
            <form class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-6 text-center">Connectez-vous</h2>
                <label class="block mb-2">Adresse e-mail :</label>
                <input type="email" class="w-full border border-gray-300 rounded-lg p-2 mb-4" required>
                <label class="block mb-2">Mot de passe :</label>
                <input type="password" class="w-full border border-gray-300 rounded-lg p-2 mb-6" required>
                <button class="w-full bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-600">Se connecter</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="container mx-auto py-4 text-center">
            <p class="text-gray-700">© 2021 Ma boutique (no scam)</p>
        </div>
        
    </footer>
</body>
</html>
