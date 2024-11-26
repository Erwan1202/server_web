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

        // render method
        private function render($view)
        {
            include __DIR__ . '/../views/' . $view . '.php';
        }
        
    }




?>