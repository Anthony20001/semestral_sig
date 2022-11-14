<?php 
    if (session_status() == 0) session_start();
    require_once "models/user.php";

    class User_Controller{
        public static function login(){
            $msg = isset($_GET["msg"]) ? $_GET["msg"] : "";
            $titulo = "HomePage";
            require_once "views/templates/header.php";
            require_once "views/templates/navbar.php";
            require_once "views/user/login.php";
            require_once "views/templates/footer.php";
        }

        public static function validate(){
            if(!isset($_POST["token"]) || !Security::validate_session($_POST["token"])){
                echo "Acceso restringido";
                exit();
            }

            $obj = new User($_POST["input_user_user"], $_POST["input_user_password"], "", "");
            $result = $obj->validate_user();
            
            if(count($result) > 0){
                $_SESSION["user"] = $result["user"];
                $_SESSION["name"] = $result["name"];
                if(isset($_POST["input_checkbox_remember_user"])){
                    setcookie("user", Security::encode($result["user"]), time()+60);
                    setcookie("name", Security::encode($result["name"]), time()+60);
                }
                header("location:index.php");
            }else{
                header("location:index.php?"."c=".Security::encode("User")."&m=".Security::encode("login")."&msg= Usuario o password incorrecto");
            }
        }

        public static function signoff(){
            session_destroy();
            setcookie("user", Security::encode($_SESSION["user"]), time()-60);
            setcookie("name", Security::encode($_SESSION["name"]), time()-60);
            header("location:index.php");
        }
    }
?>