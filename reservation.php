<!DOCTYPE HTML>
<html>
    
    <?php include "./includes/header.php" ?>

    <section class="site-hero inner-page overlay" style="background-image: url(/images/jungle_photo.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Formulario de reservación</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.html">Inico</a></li>
              <li>&bullet;</li>
              <li>Formulario de reservación</li>
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

    <section class="section contact-section" id="next">
      <div class="container">
        <div class="row">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            
            <form action="<?php echo '/payment.php'?>" method="post" class="bg-white p-md-5 p-4 mb-5 border">
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
                  <input type="email" id="email" class="form-control" disabled value="<?php echo $_GET['room'] ?>" name="room">
                </div>
              </div>
              <?php }?>

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
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Reservar ahora" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                </div>
              </div>
            </form>

          </div>
          <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
            <img src="/images/right_img_eco2.png" class="img-fluid mt-5"/>
          </div>
        </div>
      </div>
    </section>

      <?php include("./includes/footer.php")?>
  </body>
</html>