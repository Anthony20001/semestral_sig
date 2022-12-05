<!DOCTYPE HTML>
<html>


<?php include("./includes/header.php") ?>

<section class="site-hero inner-page overlay" style="background-image: url(/images/jungle_photo.jpg)"
  data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="heading mb-3">Habitaciones</h1>
        <ul class="custom-breadcrumbs mb-4">
          <li><a href="index.html">Inicio</a></li>
          <li>&bullet;</li>
          <li>Habitaciones</li>
        </ul>
      </div>
    </div>
  </div>

  <a class="mouse smoothscroll" href="#next">
    <div class="mouse-icon">
      <span class="mouse-wheel"></span>
    </div>
  </a>
</section>
<!-- END section -->


<section class="section">
  <div class="container">

    <div class="row">
      <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
        <a href="#" class="room">
          <figure class="img-wrap">
            <img src="images/soledad/soledad1.jpg" alt="Free website template" class="img-fluid mb-3">
          </figure>
          <div class="p-3 text-center room-info">
            <h2>Soledad</h2>
            <span class="text-uppercase letter-spacing-1">90$ / por noche</span>
            <a href="" class="btn btn-primary mt-2 font-weight-bold" data-toggle="modal"
              data-target="#exampleModalCenter">Reservar</a>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
        <a href="#" class="room">
          <figure class="img-wrap">
            <img src="images/bamboo_house/img1.jpg" alt="Free website template" class="img-fluid mb-3">
          </figure>
          <div class="p-3 text-center room-info">
            <h2>Bamboo House</h2>
            <span class="text-uppercase letter-spacing-1">120$ / por noche</span>
            <a href="" class="btn btn-primary mt-2 font-weight-bold" data-toggle="modal"
              data-target="#exampleModalCenter">Reservar</a>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
        <a href="#" class="room">
          <figure class="img-wrap">
            <img src="images/casa_alta/img1.jpg" alt="Free website template" class="img-fluid mb-3">
          </figure>
          <div class="p-3 text-center room-info">
            <h2>Casa Alta</h2>
            <span class="text-uppercase letter-spacing-1">250$ / por noche</span>
            <a href="" class="btn btn-primary mt-2 font-weight-bold" data-toggle="modal"
              data-target="#exampleModalCenter">Reservar</a>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
        <a href="#" class="room">
          <figure class="img-wrap">
            <img src="images/dos_ramas/img1.jpg" alt="Free website template" class="img-fluid mb-3">
          </figure>
          <div class="p-3 text-center room-info">
            <h2>Dos ramas</h2>
            <span class="text-uppercase letter-spacing-1">90$ / por noche</span>
            <a href="" class="btn btn-primary mt-2 font-weight-bold" data-toggle="modal"
              data-target="#exampleModalCenter">Reservar</a>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
        <a href="#" class="room">
          <figure class="img-wrap">
            <img src="images/serena/img1.jpg" alt="Free website template" class="img-fluid mb-3">
          </figure>
          <div class="p-3 text-center room-info">
            <h2>Serena</h2>
            <span class="text-uppercase letter-spacing-1">120$ / por noche</span>
            <a href="" class="btn btn-primary mt-2 font-weight-bold" data-toggle="modal"
              data-target="#exampleModalCenter">Reservar</a>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>


<!-- Modal payment-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true" style="scroll-behavior:smooth;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="font-family: arial;">Información de pago
          - Tarjeta débito</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/pay.php" method="post">

          <div class="row mt-2">
            <div class="col-md-12 form-group">
              <label for="email" style="color: rgb(141, 141, 141);">Correo electrónico</label>
              <input type="email" id="email" class="form-control " name="email">
            </div>
          </div>

          <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Nombre de la tarjeta</label>
            <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="name">
          </div>

          <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Número de la tarjeta</label>
            <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
          </div>

          <div class="d-flex">
            <div class="mb-3 mr-2">
              <label for="exampleInputText1" class="form-label mr-1">Vencimiento</label>
              <input type="number" class="form-control" id="exampleInputText1" aria-describedby="textHelp"
                placeholder="12/23">
            </div>

            <div class="mb-4">
              <label for="exampleInputText1" class="form-label">CVV</label>
              <input type="number" class="form-control" id="exampleInputText1" aria-describedby="textHelp"
                placeholder="576">
            </div>
          </div>


          <button type="button" class="btn btn-secondary mt-2" data-dismiss="modal">Cancelar</button>
          <input type="submit" class="btn btn-primary mt-2" value="Aceptar" />
        </div>
      </form>
    </div>

  </div>
</div>
</div>



<!-- Modal reservation -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-family: arial;">Información de reservación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div action="" class="bg-white p-md-5 p-4 mb-5 border">
          <div class="row">
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="name">Nombre</label>
              <input type="text" id="name" class="form-control " name="name">
            </div>
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="phone">Teléfono</label>
              <input type="text" id="phone" class="form-control " name="phone">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 form-group">
              <label class="text-black font-weight-bold" for="email">Correo electrónico</label>
              <input type="email" id="email" class="form-control " name="email">
            </div>
          </div>

          <?php if(isset($_GET['room'])){?>
          <div class="row">
            <div class="col-md-12 form-group">
              <label class="text-black font-weight-bold" for="email">Habitación</label>
              <input type="email" id="email" class="form-control" disabled value="<?php echo $_GET['room'] ?>"
                name="room">
            </div>
          </div>
          <?php }?>

          <div class="form-floating mb-3">
            <label for="exampleInputText1" class="form-label font-weight-bold mb-2" >Habitación</label>
            <select class="form-select p-2 w-100 pr-4" id="floatingSelect" aria-label="Floating label select example"
              style="border-radius: 5px; border: solid 2px rgb(226, 226, 226); color: rgb(0, 0, 0); font-family: sans-serif; ">
              <option value="1">Casa Alta</option>
              <option value="2">Serena</option>
              <option value="3">Soledad</option>
              <option value="3">Dos ramas</option>
              <option value="3">Bamboo House</option>
            </select>

          </div>
<!-- pevq2j&cnHewzcA*Rrps-->
          <div class="row">
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="checkin_date">Fecha de entrada</label>
              <input type="text" id="checkin_date" class="form-control" name="date_1">
            </div>
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="checkout_date">Fecha de salida</label>
              <input type="text" id="checkout_date" class="form-control" name="date_2">
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 form-group">
              <label for="adults" class="font-weight-bold text-black">Adultos</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="adult" id="adults" class="form-control">
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                  <option value="">4+</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 form-group">
              <label for="children" class="font-weight-bold text-black">Niños</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="children" id="children" class="form-control">
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                  <option value="">4+</option>
                </select>
              </div>
            </div>
          </div>


          <div class="row mb-4">
            <div class="col-md-12 form-group">
              <label class="text-black font-weight-bold" for="message">Notas</label>
              <textarea name="message" id="message" class="form-control " cols="30" rows="2"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group d-flex">
              <button type="button" class="btn btn-primary text-white py-2 px-5 font-weight-bold" data-toggle="modal"
                data-target="#exampleModal" data-dismiss="modal">Reservar ahora</button>
              <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- 
Large modal process success
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div> -->

<!-- Small modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content text-success p-4">
      <span style="font-size: 20px;"> Su reservación ha sido procesada exitósamente!</span>
    </div>
  </div>
</div> -->

<?php include("./includes/footer.php")?>
</body>

</html>