<?php 



?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include 'parts/head.php'; ?>
  </head>

  <body id="home">

    <?php include 'parts/header.php'; ?>

    <div>
      
    <section id="intro" class="scrollto background-overlay" >
          <div class="container">
            <div class="row d-flex intro-content text-center">

              

              <div class="col-lg-10 text order-2 order-lg-1 offset-lg-1">
                <h1 class="wow fadeInDown" id="intro-text" style="color: white">Country's premiere distribution company</h1>
                <p class="hero-text wow fadeIn" style="color: white">A Trading & Distribution Firm with 11 solid years of strong existence in the industry.</p>
                <a href="#intro-comp" class="scrollto scroll-down"><i class="fas fa-angle-double-down fa-3x"></i></a>
              </div>
              <!-- <div class="col-lg-6 order-1 order-lg-2 wow fadeIn"><img src="../img/intro/distribution-center-02.png" alt="..." class="img-fluid"></div> -->
            </div>
          </div>
        </section>
        
        <section class="scrollto" id="intro-comp">
          <div class="container text-center">
            <p style="color: white">We are a Trading & Distribution Firm with 11 solid years of strong existence in the industry. <br>Looking for dynamic Professionals.</p>
            <a href="about-us.php" class="btn-get-started scrollto">Learn More</a>
          </div>  
        </section>

        <section id="intro-desc">
          <div class="container">
            <div class="card-deck">
              <div class="card wow fadeInUp">
                <img class="card-img-top" src="img/intro/placeholder.png" alt="Card image cap">
                <div class="card-body">
                  <h2 class="card-title">Our Company</h2>
                  <a href="about-us.php" class="btn-learn-more scrollto">Learn More</a>
                </div>
              </div>
              <div class="card wow fadeInUp" data-wow-delay="0.2s">
                <img class="card-img-top" src="img/intro/placeholder.png" alt="Card image cap">
                <div class="card-body">
                  <h2 class="card-title">Services</h2>
                  <a href="services.php" class="btn-learn-more scrollto">Learn More</a>
                </div>
              </div>
              <div class="card wow fadeInUp" data-wow-delay="0.5s">
                <img class="card-img-top" src="img/intro/placeholder.png" alt="Card image cap">
                <div class="card-body">
                  <h2 class="card-title">Careers</h2>
                  <a href="Careers.php" class="btn-learn-more scrollto">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </section>

    <!-- Footer -->
    <?php include 'parts/footer.php' ?>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <?php include 'parts/script.php'; ?>


  </body>

</html>
