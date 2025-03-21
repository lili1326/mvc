<?php 

require_once 'models/User.php';

class ProfileController {

    public function index() {
 if($_SERVER['REQUEST_METHOD'] === "POST") {
   $email = $_POST['email'];
   $password = $_POST['password'];
   $user = new User($email,$password);

   $loader = new Twig\Loader\FilesystemLoader('templates');   
   $twig = new Twig\Environment($loader);
   
// Chargement du modèle Twig 
   $template = $twig->load('profile.twig');

// Génération du rendu HTML avec les variables
  echo  $template->render([
   
       'base_url' => BASE_URL,
       'email' => $user->getEmail(),
       'password' =>$user->getPassword(),
  ]);
 }  
}
}