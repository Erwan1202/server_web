<?php
class MainController
{
    // Page d'accueil
    public function home()
    {
        $this->render('home');
    }

    // Page about
    public function about()
    {
        $this->render('about');
    }

    // Page catalogue
    public function catalogue()
    {
        $this->render('catalogue');
    }

    // Page article
    public function article()
    {
        $this->render('article');
    }

    // Page inscription
    public function inscription()
    {
        $this->render('inscription');
    }

    // Page connexion
    public function connexion()
    {
        $this->render('connexion');
    }

    // Page panier
    public function panier()
    {
        $this->render('panier');
    }

    // Gestion des routes non définies
    public function notFound()
    {
        $this->render('404'); // Rendre une vue 404 personnalisée
    }

    private function render($view, $data = [])
{
    // Transmet les données aux vues
    extract($data);

    // Construire le chemin du fichier de vue
    $viewFile = __DIR__ . '/../views/' . $view . '.php';

    // Vérifier si le fichier existe
    if (file_exists($viewFile)) {
        require_once $viewFile;
    } else {
        echo "Erreur : Vue introuvable - $viewFile";
    }
}

}
?>
