<?php 
    require_once "utils/security.php";
    
    class Home_Controller{
        public static function index(){
            if(isset($_COOKIE["user"])){
                $_SESSION["user"] = Security::decode($_COOKIE["user"]);
                $_SESSION["name"] = Security::decode($_COOKIE["name"]);
            }
            $titulo = "HomePage";
            require_once "views/templates/header.php";
            require_once "views/templates/navbar.php";
            require_once "views/home/home.php";
            require_once "views/templates/footer.php";
        }

        public static function error(){
            $titulo = "HomePage";
            require_once "views/templates/header.php";
            require_once "views/templates/navbar.php";
            require_once "views/home/error.php";
            require_once "views/templates/footer.php";
        }
    }
?>