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

        public function notFound() {

            http_response_code(404);
    
            echo "Page not found";
    
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