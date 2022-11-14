<?php if(isset($_SESSION["user"])){?>
<div class="container mt-5">

    <div class="row">
        
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 mx-auto">
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="number" placeholder="Buscar productos">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 mx-auto">
            <?php require_once "views/products/show.php";?>
        </div>
        
    </div>
</div>
<?php }?>
    
    
