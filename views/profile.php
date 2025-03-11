<?php
require_once "models/User.php";
$email = $_POST['email'];
$user = new User($email); //crée un nouvel utilisateur
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>

<body>
    <h1>Profile</h1>
    <p>Bienvenue sur votre page profile</p>
    <ul>
        <li>Email: <?php echo $user->getEmail();?></li>
        <!--récupérer le nouveau email et l'affiche-->
    </ul>
    <a href="<?php echo BASE_URL;?>/logout">Se déconnecter</a>
</body>

</html>