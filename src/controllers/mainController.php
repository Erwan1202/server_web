<?php
    class MainController{
        
        //page d'accueil
        public function home()
        {
            $this->render('home');
        }

        //page about
        public function about()
        {
            $this->render('about');
        }

        //page catalogue
        public function catalogue()
        {
            $this->render('catalogue');
        }


        //page article
        public function article()
        {
            $this->render('article');
        }

        //page inscription
        public function inscription()
        {
            $this->render('inscription');
        }

        //page connexion
        public function connexion()
        {
            $this->render('connexion');
        }

        //page panier
        public function panier()
        {
            $this->render('panier');
        }
        

    
    private function render($view, $data = [])
        {
        // Transmet les données aux vues
        extract($data);

        // Inclut la vue demandée
        $viewFile = __DIR__ . '/../views' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } 
        else {
            echo "View not found: $view";
        }
        }

    }
?>