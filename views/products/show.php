<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Costo de compra</th>
                        <th scope="col">Precio de venta</th>
                        <th scope="col">Cantidad en existencia</th>
                    </tr>
                </thead>

                <?php if(isset($id)){?>
                    <?php if(count($result) > 0){?>
                        <tbody>
                            <tr>
                                <td><?php echo $result["id"];?></td>
                                <td><?php echo $result["name"];?></td>
                                <td><?php echo $result["description"];?></td>
                                <td><?php echo $result["cost"];?></td>
                                <td><?php echo $result["price"];?></td>
                                <td><?php echo $result["stock"];?></td>
                            </tr>
                        </tbody>
                    <?php }else{?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>No encontrado</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php }?>
                <?php }else{?>
                    
                <tbody>
                    <tr>
                        <td><?php echo $result["id"];?></td>
                        <td><?php echo $result["name"];?></td>
                        <td><?php echo $result["description"];?></td>
                        <td><?php echo $result["cost"];?></td>
                        <td><?php echo $result["price"];?></td>
                        <td><?php echo $result["stock"];?></td>
                    </tr>
                </tbody>
                <?php }?>

            </table>
        </div>
    </div>
</div>