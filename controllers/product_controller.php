<?php
if (session_status() == 0) session_start();
require_once "models/product.php";

class Product_Controller
{
    public static function search()
    {
        if (isset($_SESSION["user"])) {
            $obj = new Product();
            $result = $obj->index();

            $titulo = "Productos";
            require_once "views/templates/header.php";
            require_once "views/templates/navbar.php";
            require_once "views/products/search.php";
            require_once "views/templates/footer.php";
        } else {
            header("location:index.php?" . "c=" . Security::encode("Home") . "&m=" . Security::encode("error") . "&msg= Recurso restringido");
        }
    }

    /*public function show($id){
        
         }*/

    public static function show()
    {
        if (isset($_SESSION["user"])) {
            if (isset($_POST["id_product"])) {
                if (is_numeric($_POST["id_product"])) {
                    $id = filter_var($_POST["id_product"], FILTER_SANITIZE_SPECIAL_CHARS);
                    $obj = new Product($id);
                    $result = $obj->show();

                    $titulo = "Resultados de la búsqueda del producto";
                    require_once "views/templates/header.php";
                    require_once "views/templates/navbar.php";
                    require_once "views/products/show.php";
                    require_once "views/templates/footer.php";
                }
            }
        }else{
            header("location:index.php?" . "c=" . Security::encode("Home") . "&m=" . Security::encode("error") . "&msg= Acceso denegado");
        }
    }
}
