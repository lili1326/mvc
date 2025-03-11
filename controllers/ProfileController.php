<?php 
require_once 'models/User.php';
class ProfileController {
    public function index() {
 if($_SERVER['REQUEST_METHOD'] === "POST") {
    require_once 'views/profile.php';
 }  
}
}