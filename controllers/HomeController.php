<?php






class HomeController {

    public function index() { 
   
 // Définition du chemin des templates Twig ( $loader)
// Création de l'environnement Twig
       
$loader = new Twig\Loader\FilesystemLoader('templates');
$twig = new Twig\Environment($loader);   
        
 // Chargement du modèle Twig 
 $template = $twig->load('form.twig');

// Génération du rendu HTML avec les variables
echo  $template->render([
    'base_url' => BASE_URL,
]);           
    }
    }