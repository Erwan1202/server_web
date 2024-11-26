<?php
    
    class Personne{
       private $nom;
       private $age;
   
       public function __construct($nom, $age){
           $this->nom = $nom;
           $this->age = $age;
       }
   
       public function sePresenter(){
           echo "Bonjour, je m'appelle ".$this->nom." et j'ai ".$this->age." ans";
       }
       
    }


   
    class Employe extends Personne{
   
       protected $poste;
   
       public function __construct($nom, $age, $poste){
           parent::__construct($nom, $age);
           $this->poste = $poste;
       }
   
       public function afficherPoste(){
           echo "Je suis ".$this->poste;
       }
    }
   
    class Manager extends Employe{
   
       private $nombreEmployes;
   
       public function __construct($nom, $age, $poste, $nombreEmployes){
           parent::__construct($nom, $age, $poste);
           $this->nombreEmployes = $nombreEmployes;
       }
   
       public function afficherNombreEmployes(){
           echo "Je suis manager et j'ai ".$this->nombreEmployes." employés";
       }
    }

?>