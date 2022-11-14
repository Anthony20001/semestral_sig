<?php if(isset($_SESSION["user"])){?>
<div class="container-fluid mt-5">

    <div class="row">
        
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 mx-auto">
            <?php $controller = Security::encode("Product"); $method = Security::encode("show"); ?>
            <form class="d-flex my-2 my-lg-0" method="post" action="<?php echo "index.php?c=".Security::encode("Product")."&m=".Security::encode("show");?>">
                <input class="form-control me-sm-2" type="number" placeholder="Buscar productos" name="id_product">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-auto">
        <table class="table table-striped">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col" class="w-25">Descripción</th>
                        <th scope="col">Costo de compra</th>
                        <th scope="col">Precio de venta</th>
                        <th scope="col">Cantidad en existencia</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach($result as $p){?>
                    <tr>
                        <td><?php echo $p["id"];?></td>
                        <td><?php echo $p["name"];?></td>
                        <td class="w-25"><?php echo $p["description"];?></td>
                        <td><?php echo $p["cost"];?></td>
                        <td><?php echo $p["price"];?></td>
                        <td><?php echo $p["stock"];?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>
<?php }?>
    
    
