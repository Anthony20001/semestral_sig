<div class="container-fluid mt-3">
    <div class="row d-flex justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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

               
                    <?php if(count($result) > 0){?>
                        <tbody>
                            <tr>
                                <td><?php echo $result["id"];?></td>
                                <td><?php echo $result["name"];?></td>
                                <td class="w-25"><?php echo $result["description"];?></td>
                                <td><?php echo $result["cost"];?></td>
                                <td><?php echo $result["price"];?></td>
                                <td><?php echo $result["stock"];?></td>
                            </tr>
                        </tbody>

                    <?php }else{?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>El producto no pudo ser encontrado</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php }?>
            </table>
        </div>
    </div>
</div>