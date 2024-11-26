<?php

    class Articles {

        public $nom;
        public $prix;
        public $description;

        public function __construct($nom, $prix, $description){
            $this->nom = $nom;
            $this->prix = $prix;
            $this->description = $description;
        }

        public function afficherArticle(){
            echo "Nom: ".$this->nom." Prix: ".$this->prix." Description: ".$this->description;
        }

        
    }