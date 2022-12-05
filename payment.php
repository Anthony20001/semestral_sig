<!DOCTYPE HTML>
<html>
    
<?php include "./includes/header.php" ?>

<form action="" method="post" class="container mx-3" style="margin-top: 150px;">
    <div class="btn-group d-block mb-4" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
        <label class="btn btn-outline-primary" for="btnradio2">Tarjeta de crédito</label>
        <br>
    
        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio2">Tarjeta de débito</label>
        <br>
    
        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio3">Paypal</label>
        <br>
    </div>

    <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Nombre de la tarjeta</label>
        <input type="text" class="form-control w-25" id="exampleInputText1" aria-describedby="textHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Número de la tarjeta</label>
        <input type="text" class="form-control w-25" id="exampleInputText1" aria-describedby="textHelp">
    </div>

    <div class="d-flex">
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Vencimiento</label>
            <input type="number" class="form-control w-50" id="exampleInputText1" aria-describedby="textHelp">
        </div>

        <div class="mb-5">
            <label for="exampleInputText1" class="form-label">CVV</label>
            <input type="number" class="form-control w-50" id="exampleInputText1" aria-describedby="textHelp">
        </div>
    </div>
</form>


<?php include("./includes/footer.php")?>
  </body>
</html>