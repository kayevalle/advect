<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include '../parts/head.php'; ?>
  </head>

  <body id="home">

    <!-- Navigation -->
   <!--  <header class="header">
      <nav class="navbar nav-menu-container navbar-expand-lg fixed-top">
        <a href="index.html" class="navbar-brand">
          <img src="img/logo/logo.png">
        </a>  
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span></span><span></span><span></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav nav-menu ml-auto align-items-start align-items-lg-center">
            <li class="nav-item"><a href="#about" class="nav-link link-scroll">About Us</a></li>
            <li class="nav-item"><a href="#products" class="nav-link link-scroll">Products</a></li>
            <li class="nav-item"><a href="#services" class="nav-link link-scroll">Services</a></li>
            <li class="nav-item"><a href="#careers" class="nav-link link-scroll">Careers</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link link-scroll">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </header> -->
    <header id="header">
      <div class="container">

        <div id="logo" class="pull-left" style="float: left;width: 40%">
          <a href="#body" class="scrollto"><img src="img/logo/logo.png"></a>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#partners">Brand Partners</a></li>
            <li><a href="#careers">Careers</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
    </header>

<!--     <section id="banner" class="banner banner-home bg-gray">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-7 text order-2 order-lg-1">
            
            <h2 class="banner-text">Country's premiere distribution company of fast moving consumer goods for almost 15 years.</h2>
            <div class="CTA"><a href="#about" class="btn btn-primary btn-shadow btn-gradient link-scroll">Learn More</a></div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2"><img src="" width="70%" class="img-fluid">something image dito</div>
        </div>
      </div>
    </section> -->

    <section id="intro" class=" bg-white">
      <div class="container">
        <div class="row d-flex intro-content">
          <div class="col-lg-6 text order-2 order-lg-1">
            <h1>Country's premiere distribution company</h1>
            <p class="hero-text">We are a Trading & Distribution Firm with 11 solid years of strong existence in the industry.</p>
            <a href="#about" class="btn-get-started scrollto">Learn More</a>
          </div>
          <div class="col-lg-6 order-1 order-lg-2"><img src="img/intro/distribution-center-02.png" alt="..." class="img-fluid"></div>
        </div>
      </div>
    </section>

    <section id="services" class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <!-- <div class="section-header">
              <h4>Services we offer</h4>
            </div> -->
            <div class="card-deck text-center">
              <div class="card service-box">
                <div class="card-body services-item">
                  <div class="services-icon"><i class="fas fa-chart-line fa-3x"></i></div>
                  <p class="card-title services_title">Sales</p>
                  <div class=""></div>
                  <p class="card-text">Do your products need to be sold? Then our Advect Sales Team is the way to go! Join us and let your products reach millions of end users.</p>
                </div>
              </div>
              <div class="card service-box">
                <div class="card-body services-item">
                  <div class="services-icon"><i class="fas fa-truck fa-3x"></i></div>
                  <p class="card-title services_title">Delivery</p>
                  <div class=""></div>
                  <p class="card-text">With Advect's Delivery Team, your products are taken care of while in transit and will arrived at their mid-point destination intact.</p>
                </div>
              </div>
              <div class="card service-box">
                <div class="card-body services-item">
                  <div class="services-icon"><i class="fas fa-users fa-3x"></i></div>
                  <p class="card-title services_title">Admin</p>
                  <div class=""></div>
                  <p class="card-text">Your transactions will be processed by Advect's Admin Team and we will ensure that the right orders are placed and delivered.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="partners" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-header text-center">
              <h2>Brand Partners</h2>
              <!-- <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p> -->
            </div>

            <div class="owl-carousel partners-carousel">
              <img src="img/clients/partner-1-01.png" alt="">
              <img src="img/clients/partner-2-01.png" alt="">
              <img src="img/clients/partner-3.png" alt="">
              <!-- <img src="img/clients/partner-4-01.png" alt=""> -->
              <!-- <img src="img/clients/partner-5-01.png" alt=""> -->
              <img src="img/clients/partner-6.png" alt="">
              <!-- <img src="img/clients/client-7.png" alt=""> -->
              <!-- <img src="img/clients/client-8.png" alt=""> -->
            </div>
          </div>
        </div>
      </div>
    </section>

<!--     <section id="services" style="padding: 0 0 75px 0">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4" style="border: 1px solid red">sales</div>
          <div class="col-lg-4" style="border: 1px solid red">delivery</div>
          <div class="col-lg-4" style="border: 1px solid red">admin</div>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <div class="card-group">
            <div class="card-body" style="border: 1px solid red">sales</div>
            <div class="card-body" style="border: 1px solid red">delivery</div>
            <div class="card-body" style="border: 1px solid red">admin</div>
          </div>
          </div>
        </div>
      </div>
    </section> -->

<!--     <section id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 order-lg-2">
            <div class="p-2">
              <img class="img-fluid img-thumbnail" src="img/warehouse.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-5 order-lg-1">
            <div class="p-6">
              <h4 class="display-6">About Us</h4>
              <p>
                Advect Marketing Corporation is a one of the most leading business builders in product distribution such as RFM, Universal Canning Inc., Uni- President, Abott, Montosco Inc., Fly Ace Corporation, Mabisco, Scotch Brite, Candyline, Zuellig Pharma, Lorenza Food Corp., Neumann & Mueller Philippines, Inc. since 2002. We are a quality organization, well equipped to deal with changes that appear in market trends. Each year, we extend our core products and develop new ones. We always strive to serve our customers, stakeholders and people better. <br><br>

                Advect Marketing Corporation is continuing to grow constantly, dominating the regions of the Luzon and aiming to expand the business year after year. </p>

            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <div class="section-header">
              <h4>About us</h4><br>
              <p>Advect Marketing Corporation is a one of the most leading business builders in product distribution such as RFM, Universal Canning Inc., Uni- President, Abott, Montosco Inc., Fly Ace Corporation, Mabisco, Scotch Brite, Candyline, Zuellig Pharma, Lorenza Food Corp., Neumann & Mueller Philippines, Inc. since 2002. We are a quality organization, well equipped to deal with changes that appear in market trends. Each year, we extend our core products and develop new ones. We always strive to serve our customers, stakeholders and people better. 
              <br><br>
              Advect Marketing Corporation is continuing to grow constantly, dominating the regions of the Luzon and aiming to expand the business year after year.</p>
            </div>
          </div> 
        </div>
        <div class="row core-v-card">      
          <div class="col-lg-10 offset-lg-1">
            <div class="card">
              <div class="card-body text-center">
                <span class="fa-stack fa-4x core-v-icons">
                  <i class="fas fa-square fa-stack-2x"></i>
                  <i class="fas fa-rocket fa-stack-1x fa-inverse " data-fa-transform=""></i>
                </span>
              <h4 class="card-title">Core Values</h4>
              <p class="card-text core-v-text">
                                  <p>
                    - Passion for Excellence
                    - Reliability
                    - Efficiency and Effectiveness              
                    - Hard-work and Enthusiasm
                  </p>
                  <p>
                    - Excellent Customer Service               
                    - Fairness and Equality
                    - Integrity           
                    - Social Responsibility
                  </p>
              </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row core-v-card">      
          <div class="col-lg-10 offset-lg-1">
            <div class="card">
              <div class="card-body text-center">
                <span class="fa-stack fa-4x core-v-icons">
                  <i class="fas fa-square fa-stack-2x"></i>
                  <i class="far fa-eye fa-stack-1x fa-inverse " data-fa-transform=""></i>
                </span>
              <h4 class="card-title">Vision</h4>
              <div class="card-text core-v-text">
                <p>
                To be the country’s premier distribution company of fast moving consumer goods.  
                </p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row core-v-card">      
          <div class="col-lg-10 offset-lg-1">
            <div class="card">
              <div class="card-body text-center">
                <span class="fa-stack fa-4x core-v-icons">
                  <i class="fas fa-square fa-stack-2x"></i>
                  <i class="fas fa-rocket fa-stack-1x fa-inverse " data-fa-transform=""></i>
                </span>
              <h4 class="card-title">Mission</h4>
              <div class="card-text core-v-text">
                <p>
                To provide products and services that exceeds its customers’ expectations. To represent reputable companies and brands in the most professional manner. To value its employees and extend recognition of their key contributions to business. To make every business partnership viable and mutually profitable. 
                </p>
              </div>
              </div>
            </div>
          </div>
        </div>

    </section>    

<!--     <section id="services" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <div class="section-header">
              <h4>Services we offer</h4>
            </div>
            <div class="card-deck text-center">
              <div class="card service-box">
                <div class="card-body services-item">
                  <div class="services-icon"><i class="fas fa-chart-line fa-3x"></i></div>
                  <p class="card-title services_title">Sales</p>
                  <div class=""></div>
                  <p class="card-text">Do your products need to be sold? Then our Advect Sales Team is the way to go! Join us and let your products reach millions of end users.</p>
                </div>
              </div>
              <div class="card service-box">
                <div class="card-body services-item">
                  <div class="services-icon"><i class="fas fa-truck fa-3x"></i></div>
                  <p class="card-title services_title">Delivery</p>
                  <div class=""></div>
                  <p class="card-text">With Advect's Delivery Team, your products are taken care of while in transit and will arrived at their mid-point destination intact.</p>
                </div>
              </div>
              <div class="card service-box">
                <div class="card-body services-item">
                  <div class="services-icon"><i class="fas fa-users fa-3x"></i></div>
                  <p class="card-title services_title">Admin</p>
                  <div class=""></div>
                  <p class="card-text">Your transactions will be processed by Advect's Admin Team and we will ensure that the right orders are placed and delivered.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->



    <section id="careers" class="">
      <div class="container">
        
        <div class="section-header">
          <H4>Careers</H4>
        </div>
            <p>
            Whether you’re just starting your career or have been building it for years, Advect Marketing Corporation  is sure to have an opportunity that’s right for you. We take pride in offering an opportunity to you that will surely provide you growth in both your career and personal life.
            </p>

        <span class="career-label mb-4 mt-2">Open Positions</span>
        
        <div class="card-deck text-center">
          <div class="card careers">
              <a href="#" class="careers-text">Driver</a>
          </div>
          <div class="card careers">
              <a href="#" class="careers-text">Sales Agent</a>
          </div>
          <div class="card careers">
              <a href="#" class="careers-text">Feeder</a>
          </div>
        </div>
<!--    <div class="careers-group">
          
          <ul class="list-unstyled">
            <li class="careers-list">

              <a href="" class="career">
                <span class="row justify-content-sm-between align-items-sm-center">
                  <span class="col-sm-6 mb-2 mb-sm-0">Delivery Truck Driver</span>
                  <span class="col-sm-6 text-primary text-sm-right"> 6 vacancy
                    <span class="fa fa-arrow-right small ml-2"></span>
                  </span>
                </span>
              </a>
              <a href="" class="career">
                <span class="row justify-content-sm-between align-items-sm-center">
                  <span class="col-sm-6 mb-2 mb-sm-0">Sales Agent</span>
                  <span class="col-sm-6 text-primary text-sm-right"> 10 vacancy
                    <span class="fa fa-arrow-right small ml-2"></span>
                  </span>
                </span>
              </a>

            </li>
          </ul>
        </div>
 -->
        </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <h3>Contact us</h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
          </div>
          <div class="col-lg-6 mx-auto">
            bjeieng
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <img src="img/logo/logo.png" class="footer-logo">
              <p>&copy; 2017 Advect Marketing Corporation. All rights reserved.                        </p>
            </div>
            <!-- <div class="col-md-5 text-right">
              <p>Template By <a href="https://bootstrapious.com/" class="external">Bootstrapious</a>  </p>
              Please do not remove the backlink to Bootstrapious unless you support us at http://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :)
            </div> -->
          </div>
        </div>
      </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <?php include '../parts/script.php'; ?>

  </body>

</html>
