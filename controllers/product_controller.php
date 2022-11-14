<?php 
    class Product_Controller{
         public static function search(){
            if(isset($_SESSION["user"])){
                $titulo = "Creación de comentario de contacto";
                require_once "views/templates/header.php";
                require_once "views/templates/navbar.php";
                require_once "views/products/search.php";

                Product_Controller::show();

                require_once "views/products/show.php";
                require_once "views/templates/footer.php";
            }else{
                header("location:index.php?"."c=".Security::encode("Home")."&m=".Security::encode("error")."&msg= Recurso restringido");
            }
         }

         /*public function show($id){
        
         }*/

         public static function show(){
            if(isset($_GET["id"]) & is_numeric($_GET["id"])){
                $id = filter_var($_GET["id"], FILTER_SANITIZE_SPECIAL_CHARS) ;
                $obj = new Product($id);
                $result = $obj->getProducts();
                require_once "views/products/show.php";
            }
        }
    }

    
?>