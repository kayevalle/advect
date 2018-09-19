
<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include 'parts/head.php'; ?>
  </head>

  <body id="contact-us">

    <?php include 'parts/header.php' ?>

    <section class="body-content">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 col-md-12 order-2 order-md-1">
            <div class="section-header">
              <H4 class="contact-head">Contact us</H4>
            </div>
            <form id="contact-form" name="contact_form" class="default-form" action="" method="post" novalidate="novalidate">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Phone" />
                <div class="validation"></div>
              </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit" class="btn-contact-send">Send Message</button></div>
            </form>
          </div>

          <div class="col-lg-4 col-md-12 order-1 order-md-2">
            <div class="section-header">
              <H4 class="contact-head">Our Addresses</H4>
            </div>
            <div class="contact-info">
              <ul style="list-style-type: none;" class="info">

                <li>
                  <div class="icon_box">
                      <i class="fa fa-map-marker-alt con-icon"></i>
                  </div>
                  <div class="text-box">
                      <p><b>Address:</b> <br> Pan-Philippine Highway, San Leonardo Nueva Ecija</p>
                  </div>
                </li>
                <li>
                  <div class="icon_box">
                      <i class="fa fa-phone con-icon"></i>
                  </div>
                  <div class="text-box">
                      <p><b>Call us:</b> <br> 940 1956</p>
                  </div>
                </li>
                <li>
                  <div class="icon_box">
                      <i class="fa fa-envelope con-icon"></i>
                  </div>
                  <div class="text-box">
                      <p><b>Mail us:</b> <br> inquiry@advect.com.ph</p>
                  </div>
                </li>

              </ul>
            </div>

          </div>
        </div> <!--end row-->

        </div>
    </section>


    <!-- Footer -->
    <?php include 'parts/footer.php' ?>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <?php include 'parts/script.php'; ?>


  </body>

</html>