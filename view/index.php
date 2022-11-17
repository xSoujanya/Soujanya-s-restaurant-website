<!DOCTYPE html>
<?php
include_once "../helper/connect.php";

?>
<html lang="en">
<head>

	<title>Steak House - Free HTML CSS Template</title>
<!--

Template 2083 Steak House

http://www.tooplate.com/view/2083-steak-house

-->
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
  	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

  	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

  	<link rel="stylesheet" href="css/nivo-lightbox.css">
  	<link rel="stylesheet" href="css/nivo_themes/default/default.css">

  	<link rel="stylesheet" href="css/hover-min.css">
  	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">

  	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Home section -->
<section id="home" class="parallax-section">
  <div class="gradient-overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <h1 class="wow fadeInUp" data-wow-delay="0.6s">ANSA</h1>
              <p class="wow fadeInUp" data-wow-delay="1.0s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
              <a href="#menu" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">Order Online</a>
          </div>

      </div>
    </div>
</section>


<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">ANSA</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#top" class="smoothScroll">Home</a></li>
          <li><a href="#feature" class="smoothScroll">About</a></li>
        <li><a href="#menu" class="smoothScroll">Menu</a></li>
        <li><a href="user_menu.php" class="smoothScroll">Order Online</a></li>

        <!--<li><a href="#about" class="smoothScroll">About</a></li>-->

       <!-- <li><a href="#team" class="smoothScroll">Team</a></li>-->

        <li><a href="#contact" class="smoothScroll">Contact</a></li>
      </ul>
    </div>

  </div>
</div>




<!--About section 





<!--Feature section-->
<section id="feature" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
        <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
          <h2>ABOUT US</h2>

        </div>
      </div>

      <div class="clearfix"></div>

      <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="feature-thumb">
          <div class="feature-icon">
            <span><i class="fa fa-coffee"></i></span>
          </div>
          <h3>MASALA TEA</h3>
          <p>We serve the incredible masala tea with the real taste of Gujarat. Keep yourself refreshing for the day ahead.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
        <div class="feature-thumb">
          <div class="feature-icon">
            <span><i class="fa fa-cutlery"></i></span>
          </div>
          <h3>WELCOME</h3>
          <p>We welcome you to the delicious taste of traditional Gujarati snacks. Hope to look forward in near future.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
        <div class="feature-thumb">
          <div class="feature-icon">
            <span><i class="fa fa-cutlery"></i></span>
          </div>
          <h3>SNACKS</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus.</p>
        </div>
      </div>

    </div>
  </div>
</section>


Menu section -->
<section id="menu" class="parallax-section ">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Food Menu</h2>
                </div>
            </div>



            <?php
            $query = "SELECT * FROM menu ORDER BY id ASC";
            $result = mysqli_query($connect,$query);
            $i=1;
            while(($row = mysqli_fetch_array($result)) &&( $i<=6)) {
                $i++;

                ?>

                <div class="col-md-6 col-sm-12">
                    <div class="media wow fadeInUp" data-wow-delay="0.6s">
                        <div class="media-object pull-left">
                            <img src="<?php echo $row["image"]; ?>" class="img-responsive"  alt="Food Menu"/>
                            <!-- <span class="menu-price">Rs. <?php echo $row["price"]; ?></span>-->
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo strtoupper($row["dish_name"]); ?> <span style="float:right"   class="menu-price">Rs. <?php echo $row["price"]; ?></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et.</p>
                        </div>
                    </div>
                </div>


                <?php
            }
            ?>


            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <a href="user_menu.php" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">For More..</a>
                </div>
            </div>



        </div>

    </div>
    </div>
</section>



<!--Team section 
<section id="team" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Meet Our Chefs</h2>
            <h4>we are food specialists</h4>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="team-thumb">
            <img src="images/chef1.jpg" class="img-responsive" alt="Team">  
                <div class="team-des">
                  <h3>Sandar</h3>
                  <h4>Kitchen Manager</h4>
                    <ul class="social-icon">
                      <li><a href="#" class="fa fa-facebook"></a></li>
                      <li><a href="#" class="fa fa-twitter"></a></li>
                      <li><a href="#" class="fa fa-dribbble"></a></li>
                    </ul>
                </div>
          </div>
      </div>

      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
          <div class="team-thumb">
            <img src="images/chef2.jpg" class="img-responsive" alt="Team">  
              <div class="team-des">
                <h3>Candy</h3>
                <h4>Co-Founder</h4>
                  <ul class="social-icon">
                      <li><a href="#" class="fa fa-twitter"></a></li>
                  </ul>
              </div>
          </div>
      </div>

      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
          <div class="team-thumb">
            <img src="images/chef3.jpg" class="img-responsive" alt="Team">  
              <div class="team-des">
                <h3>Mama</h3>
                <h4>Senior Chef</h4>
                  <ul class="social-icon">
                      <li><a href="#" class="fa fa-facebook"></a></li>
                      <li><a href="#" class="fa fa-twitter"></a></li>
                  </ul>
              </div>
          </div>
      </div>

      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1.1s">
          <div class="join-team">
            <i class="fa fa-plus"></i>
            <p>Fusce interdum libero id libero volutpat varius convallis at sem.</p>
            <a href="#" class="btn btn-default hvr-bounce-to-bottom">JOIN US</a>
          </div>
      </div>

      <div class="clearfix"></div>

      <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.3s">
        <h2>Our Taste</h2>
         <p>Fusce lobortis quis nisl nec facilisis. Donec fringilla ipsum arcu, quis maximus est molestie eget. Nunc ullamcorper suscipit neque, ac malesuada purus molestie non. Phasellus sollicitudin urna sed ultrices dictum.</p>
      </div>

      <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.6s">
        <h2>Our Service</h2>
         <p>Maecenas dictum cursus dui, quis mattis eros ultricies sed. Maecenas ligula nulla, dictum eu cursus id, semper in orci. Fusce vel nisi hendrerit justo viverra vehicula in nec nunc. Curabitur blandit fringilla quam.</p>
      </div>

    </div>
  </div>
</section>

Gallery section 
<section id="gallery" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-12">

       <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Food Gallery</h2>
            <h4>we have special foods</h4>
        </div>
      </div>
        
           iso section 
          <div class="iso-section wow fadeInUp" data-wow-delay="0.6s">

            		<ul class="filter-wrapper clearfix">
                        <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".breakfast">Breakfast</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".pizza">Pizza</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".lunch">Lunch</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".dinner">Dinner</a></li>
                    </ul>

                    iso box section 
                    <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                      <div class="iso-box-wrapper col4-iso-box">

                        <div class="iso-box breakfast pizza lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img1.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img1.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Lorem One</h3>
                        </div>

                        <div class="iso-box breakfast lunch dinner col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img2.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img2.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Lorem ipsum two</h3>
                        </div>

                        <div class="iso-box dinner col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img3.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img3.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Third Lorem ipsum</h3>
                        </div>

                        <div class="iso-box breakfast col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img4.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img4.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Lorem ipsum fourth</h3>
                        </div>

                        <div class="iso-box lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img5.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img5.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Fifth Lorem ipsum</h3>
                        </div>

                        <div class="iso-box pizza lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="images/gallery-img6.jpg" data-lightbox-gallery="food-gallery">
                              <img src="images/gallery-img6.jpg" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Sixth Lorem ipsum</h3>
                        </div>

                       </div>
                    </div>

          </div>

      </div>

    </div>
  </div>
</section>

Contact section -->
<section id="contact" class="parallax-section">
  <div class="overlay"></div>
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
            <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                <h2>Say hello</h2>
                <h4>we are always ready to serve you!</h4>
            </div>
				<div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
					<form id="contact-form" method="post" action="#">
						<input name="name" type="text" class="form-control" placeholder="Your Name" required>
						<input name="email" type="email" class="form-control" placeholder="Your Email" required>
						<textarea name="message" class="form-control" placeholder="Message" rows="5" required></textarea>
						<input type="submit" class="form-control submit" value="SEND MESSAGE">
					</form>
				</div>
			</div>
			
		</div>
	</div>
</section>

<!-- Footer section -->
<footer>
	<div class="container">
		<div class="row">

              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
                <h3>About the house</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
                	tincidunt ut laoreet. Dolore magna aliquam erat volutpat ipsum.</p>
              </div>  
        
              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.6s">
                <h3>Contact Detail</h3>
                <p>123 Delicious Street, San Francisco, CA 10110</p>
                <p>010-020-0780</p>
                <p>hello@company.com</p>
              </div> 
        
              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.9s">
                <h3>Opening Hours</h3>
                <strong>Monday - Friday</strong>
                <p>11:00 AM - 10:00 PM</p>
                <strong>Saturday - Sunday</strong>
                <p>10:00 AM - 09:00 PM</p>
              </div> 

		</div>
	</div>
</footer>

<!-- Copyright section -->
<section id="copyright">
  <div class="container">
    <div class="row">

      <div class="col-md-8 col-sm-8 col-xs-8">
        <p>Copyright © 2022 Steak House Company - Designed by <a class="designed-by" href="https://plus.google.com/+Tooplate/" target="_blank">Tooplate</a></p>
      </div>  

      <div class="col-md-4 col-sm-4 text-right">
        <a href="#home" class="fa fa-angle-up smoothScroll gototop"></a>
      </div>

    </div>
  </div>
</section>

<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>

<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>