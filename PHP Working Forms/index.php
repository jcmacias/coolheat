<?php
session_start();
$message='';
/********chnage Below Settings as per your requirement********/
$mailHeaderSender="Ewebcraft <ewebcraft@gmail.com>"; //NOTE : This email will be used for sending email. Update this email address accordingly
$recipientEmail="din@ewebcraft.com"; //Email where form submission data will recieve.
$emailSubject="New Estimate Request from Roofer Landing Page"; //Email subject of which recieve in INBOX
/***************End Settings**********************/
if(isset($_POST['submitEstimate']) && $_POST['submitEstimate']=='getEstimate')
{
	if( $_SESSION['security_code'] == $_POST['security_code'] && isset($_SESSION['security_code']))
	{
		$Headers = "MIME-Version: 1.0\nContent-type: text/html; charset=iso-8859-1\nFrom:".$mailHeaderSender."\n"; 
		$to=$recipientEmail;
		$subject=$emailSubject;
		$email_message='<html>';
			foreach($_POST['f'] as $label=>$fieldvalue)
			{
				$email_message.='<p><strong>'.$label.'</strong>&nbsp;&nbsp; : &nbsp;&nbsp; '.$fieldvalue.'</p>';
			}
		$email_message.='</html>'; 
		if(@mail($to,$subject,$email_message,$Headers))
		{
			$message="<p class='sent alert alert-success'>Estimate request sent successfully!</p>";
		}else $message="<p class='warning alert alert-danger'>Server is unable to send email!</p>";	
		
	}else $message="<p class='warning alert alert-danger'>Security code is wrong!</p>";	
	header('location:#estimation');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>HVAC Quote Open</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="css/animate-custom.css">
<link rel="stylesheet" type="text/css" href="css/royalslider.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/rs-minimal-white.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
</head>
<body>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left bgcolor"></div>
    <div class="loader-section section-right bgcolor"></div>
    <div class="load_title">HVAC Premier HTML</div>
</div>
<div class="container">
    <a href="#" class="back-to-top text-center bgcolor" style="display: inline;">
    <i class="fa fa-angle-up"></i>
    </a>
</div>
<header>
    <div class="container">
      <div class="row text-center top-info">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12 info">
                        <address>
                        <i class="fa fa-map-marker"></i>
                        Brooklyn, NY 10036, United States  
                        </address>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 info">
                        <span class="address">
                        <i class="fa fa-phone"></i>
                         1-800-123-1234 
                        </span>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 info">
                        <span class="address">
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:example@hvac.com">example@hvac.com</a>
                        </span>
                    </div>
                </div>
            </div>

           <div class="col-md-6 col-sm-6 col-xs-6">
               <div class="row timing">
                   <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                        <span class="address">
                        <span class="color">Mon-Fri:</span> 8:30am-5:30pm 
                        </span>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                        <span class="address">
                        <span class="color">Sat:</span> 9:00am-12:00pm
                        </span>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-right">
        
                        <span class="address">
        
                        <span class="color">Sat:</span> 9:00am-12:00pm
        
                        </span>
                    </div>
                </div>
          </div>
        </div>
    </div> <!--CONTAINER-->
</header>

<div class="navigation">
  <span class="bgcolor"></span>
  <div class="container">
      <div class="row">
          <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="logo bgcolor">
            <span></span>
              <a href="index.html">
                <img src="images/logo.png" alt="logo" class="img-responsive"></a>
            </div>
            </div>
            
            <div class="col-md-9 col-sm-8 col-xs-12">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                   <!--<a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" class="img-responsive"></a>-->
                </div>
                <div class="collapse navbar-collapse nav-collapse">
                  <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown active bgcolor"><a href="index.html" class="dropdown-toggle" data-toggle="dropdown"> Home <b class="caret"></b> </a>
                          <ul class="dropdown-menu bgcolor">
                            <li><a href="../roofers/index.html">Roofers</a></li>
                            <li><a href="index.html">HVAC </a></li>
                            <li><a href="../plumbing/index.html">Plumbing</a></li>                  
                            <li><a href="../cleaning/index.html">Cleaning</a></li>
                            <li><a href="../constructor/index.html">Constructor</a></li>
                          </ul>
                        </li>
                        <li class="hover"><a href="about.html"> About </a></li>
                        <li class="dropdown hover">
                          <a href="services.html" class="dropdown-toggle" data-toggle="dropdown">
                          Ac Services <b class="caret"></b></a>
                          <ul class="dropdown-menu bgcolor">
                            <li><a href="services.html">Ac Services </a></li>
                            <li><a href="services-detail.html">Services Details</a></li>
                          </ul>
                        </li>
                        
                        <li class="dropdown hover">
                          <a href="our-work.html" class="dropdown-toggle" data-toggle="dropdown">
                          Our Work <b class="caret"></b></a>
                          <ul class="dropdown-menu bgcolor">
                            <li><a href="our-work.html">Our Work </a></li>
                            <li><a href="work-detail.html">Work Details</a></li>
                          </ul>
                        </li>
                        <li class="hover"><a href="locations.html"> Locations </a></li>
                        <li class="hover"><a href="news.html"> News </a></li>
                        <li class="hover"><a href="contact.html"> Contact Us </a></li>
                        
                    </ul>
                    <div class="search-container hidden-sm hidden-xs">
                     <form class="searchbox navbar-form ">
                    <input type="text" class="searchbox-input search" placeholder="search here" name="search" required>
                    <button type="submit" class="searchbox-submit searchbox-icon" value=""><i class="fa fa-search"></i>
                    </button>
                    </form>
                    </div>
               </div>
           </nav>
           </div>
        </div>
    </div>
</div>

<!-- Color-Switcher -->
<div class="color-scheme text-center">
      <div class="color-icon clearfix">
        <a href="javascript:void(0)">
          <i class="fa fa-cog fa-2x "></i>
        </a>
      </div>
        <div class="color-scheme-inner clearfix">
          <h2 class="bgcolor"> STYLE SWITCHER  </h2>
            <div class="roofer-colors">
              <p>Patterns for HVAC</p>
                <ul class="colors clearfix">
                    <li data-color="#ff9c11">&nbsp;</li>
                    <li data-color="#0064c8">&nbsp;</li>
                    <li data-color="#499f0f">&nbsp;</li>
                    <li data-color="#992000">&nbsp;</li>
                    <li data-color="#006333">&nbsp;</li>
                    <li data-color="#c00f0f">&nbsp;</li>
                    <li data-color="#6b86b8">&nbsp;</li>
                    <li data-color="#00cc33">&nbsp;</li>
                    <li data-color="#696969">&nbsp;</li>
                    <li data-color="#69a8aa">&nbsp;</li>                   
                    <li data-color="#ff9cc1">&nbsp;</li>
                    <li data-color="#cc64c8">&nbsp;</li>
                    <li data-color="#c99542">&nbsp;</li>
                    <li data-color="#cc2000">&nbsp;</li>
                    <li data-color="#ff6333">&nbsp;</li>
                    <li data-color="#cfff0f">&nbsp;</li>
                    <li data-color="#999033">&nbsp;</li>
                    <li data-color="#cf990f">&nbsp;</li>
                    <li data-color="#776b5a">&nbsp;</li>
                    <li data-color="#67759c">&nbsp;</li>
                    <li data-color="#0ccc33">&nbsp;</li>
                    <li data-color="#f55345">&nbsp;</li>
                </ul>
                <p><a id="resetSchemeDefault" href="javaScript:void(0)"><strong>Reset to Default Scheme</strong></a></p>
            </div>
        </div>
</div>
  <!-- Color-Switcher -->



<section class="section2">



  <div id="slider-with-blocks-1" class="owl-carousel">

  <div class="item slide1">

  <div class="rsABlock" data-move-offset="bottom">

  <!--<img class="img-responsive" src="images/overlay-slider.png" alt="banner">-->

  </div>

  <div class="container">

    <div class="bContainer">

      <h2 class="rsABlock" data-move-effect="bottom">Welcome to <strong>HVAC,</strong> Services</h2>

      <h1 class="rsABlock" data-move-effect="left">Residential, Commercial and Industrial<br>
HVAC Contractor</h1>

        <span class="rsABlock" data-move-effect="bottom">

             <a href="#" class="red-button  btn-4 btn-4c bgcolor">

             <span>read more</span>

             </a>

       </span>

    </div>

    </div>

  </div>

  <div class="item slide2">

  <div class="rsABlock" data-move-offset="bottom">

  <!--<img class="img-responsive" src="images/overlay-slider.png" alt="banner">-->

  </div>

  <div class="container">

    <div class="bContainer">

      <h2 class="rsABlock" data-move-effect="top">

      Aliq erat volutpat ut <strong>Augue</strong> dui,HVAC

      </h2>

      <h1 class="rsABlock" data-move-effect="left">Residential, Shingle Replacement and<br> Ac Leak Repair
        </h1>

          <span class="rsABlock" data-move-effect="bottom">

             <a href="#" class="red-button  btn-4 btn-4c bgcolor">

             <span>read more</span>

             </a></span>

    </div>

  </div>

  </div>

  <div class="item slide3">

  <div class="rsABlock" data-move-offset="bottom">

  <!--<img src="images/overlay-slider.png" alt="banner">-->

  </div>

  <div class="container">

    <div class="bContainer">

      <h2 class="rsABlock" data-move-effect="top">

      Aenean <strong>sociis</strong> natoque penatibus
      </h2>

      <h1 class="rsABlock" data-move-effect="left">Ac Maintenance, Commercial and<br> Industrial
      Heatproofing</h1>

          <span class="rsABlock" data-move-effect="bottom">

             <a href="#" class="red-button  btn-4 btn-4c bgcolor">

             <span>read more</span>

             </a>

         </span>

    </div>

  </div>

  </div>

 
  <div class="item slide4">

  	<div class="rsABlock" data-move-offset="bottom">

    <!--<img src="images/overlay-slider.png" alt="banner">-->

    </div>

    <div class="container">

   	 <div class="bContainer">

      <h2 class="rsABlock" data-move-effect="top">

      Aliq erat volutpat ut <strong>augue</strong> dui, lacinia scesque

      </h2>

      <h1 class="rsABlock" data-move-effect="left">Ac Replacement , Ac Inspections <br class="hidden-xs"> Ac Prevetative </h1>

          <span class="rsABlock" data-move-effect="bottom">

             <a href="#" class="red-button  btn-4 btn-4c bgcolor">

             <span>read more</span>

             </a></span>

    </div>

    </div>

    </div>

</div>   
</section>





 <!--ROOFERS-->

<section class="roofers-bg">
    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                <h1>Welcome to HVAC Company</h1>

                <hr class="center bgcolor">

                <p class="jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeInDown">

                Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing vitae est<br>. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
                </p>

            </div>

        </div>

       
        <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-12">

            <div class="roofers text-center jw-animate-gen noOpacity" data-gen-offset="90%" data-gen="fadeInUp">

            <img src="images/emergancy.png" alt="">
            <p> 24/7 Emergency Available</p>
            </div>

        </div>

        <div class="col-md-3 col-sm-3 col-xs-12">

            <div class="roofers text-center jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInUp">

            <img src="images/professional.png" alt="">

            <p>Expert and Professional</p>

            </div>

        </div>

        <div class="col-md-3 col-sm-3 col-xs-12">

            <div class="roofers text-center jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInUp">

            <img src="images/satisfaction.png" alt="">

            <p>Satisfaction Guarantee</p>

            </div>

        </div>

        <div class="col-md-3 col-sm-3 col-xs-12">

            <div class="roofers text-center jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeInUp">

            <img src="images/inspiration.png" alt="">

            <p>Free Inspection</p>

            </div>

        </div>

       
        </div>

    </div>

</section>





 <!--ESTIMATION-->

<section id="estimation">
  <div class="container">

    <div class="row">

        <div class="col-md-12 text-center">

            <h1 class="jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">

            Get Free Estimation/Quote!</h1>

            <hr class="center bgcolor">

           <p class="text-center jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">

             Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed<br>
			 varius at lacinia dui sed, ultricies sapien.
            </p>

        </div>
    </div>

  </div>


  <div class="container estimation-container">

	<div class="row estimation-toggle">

	   <div class="col-lg-10 col-lg-offset-1 col-md-9 col-md-offset-2 text-center">

	       <div class="estimation clearfix jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInRight">
				<?php echo $message?>
	         <form class="form-inline" role="form" method="post">

	           <div class="row">

		           <div class=" col-md-6 col-sm-6 col-xs-12">

		             <div class="form-group">

		                <input type="text" class="form-control" id="name" name="f[Name]" placeholder="Name" required>

		              </div>

		              </div>

		              <div class=" col-md-6 col-sm-6 col-xs-12 nospace">

		              <div class="form-group">

		                <input type="email" class="form-control" id="email" placeholder="Email" name="f[Email]" required>

		              </div>

		              </div>

		              <div class=" col-md-6 col-sm-6 col-xs-12">

		              <div class="form-group">

		                <input type="text" class="form-control" id="phone" placeholder="Phone" name="f[Phone]" required>

		              </div>

		              </div>

		              <div class=" col-md-6 col-sm-6 col-xs-12 nospace">

		              <div class="form-group">

		                <input type="text" class="form-control" id="address" placeholder="Address" name="f[Address]" required>

		              </div>

		              </div>

		              </div>

		              <textarea  rows="9" placeholder="Message" name="f[Message]"></textarea>
					  
                      <div class="col-sm-6 text-left" >
                      	<img src="captcha/CaptchaSecurityImages.php?width=100&height=40&characters=5" /><input id="security_code" name="security_code" type="text" class="form-control" style="width:150px; margin-left:15px;"  required placeholder="Security Code">
                      </div>
                      
                      		
		              <div class="text-right col-sm-6">

		                 <button type="submit" name="submitEstimate" value="getEstimate"  class="btn btn-default btn-4 btn-4c bgcolor" >
                         	<span>Submit</span>
                         </button>

		                 

		              </div>

		     </form>

		    </div>

	    </div>

    </div>

  </div>   
  <!-- </div> -->

	<span class="toggle text-center btn-toggle bgcolor"></span>



</section>



<!-- Services -->

<section class="services">

<div class="container">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12 text-center">

        	<h1 class="jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">

            Our HVAC Services</h1>

            <hr class="center bgcolor">

        </div>

       
    </div>



  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">

    <div class="carousel slide myCarousel">

        <div class="carousel-inner">

            <div class="item active">

                    <ul>

                        <li class="col-md-4 col-sm-4 col-xs-12">

                           <div class="effect jw-animate-gen noOpacity" data-gen-offset="90%" data-gen="fadeIn">

                             <img src="images/service1.png" alt="services" class="img-responsive">

                             	<span class="overlay-effect">

                                  Ac Leak Repair

                                 </span>

                             	<span class="button-effect">

                                <a href="services-detail.html" class="red-button  btn-4 btn-4c bgcolor">

                                 <span>read more</span>

                                </a>

                               </span>

                            </div>

                        </li>

                        <li class="col-md-4 col-sm-4 col-xs-12">

                           <div class="effect jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeIn">

                             <img src="images/service2.png" alt="services" class="img-responsive">

                                <span class="overlay-effect">

                                  Ac Leak Repair

                                </span>

                             	<span class="button-effect">

                                <a href="services-detail.html" class="red-button  btn-4 btn-4c bgcolor">

                                 <span>read more</span>

                                </a>

                              </span>

                            </div>

                           
                        </li>

                        <li class="col-md-4 col-sm-4 col-xs-12">

                           <div class="effect jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeIn">

                             <img src="images/service3.png" alt="services" class="img-responsive">

                                <span class="overlay-effect">

                                  Ac Leak Repair

                                </span>

                             	<span class="button-effect">

                                <a href="services-detail.html" class="red-button  btn-4 btn-4c bgcolor">

                                 <span>read more</span>

                                </a>

                              </span>

                            </div>

                           
                        </li>

                       
                    </ul>

              </div><!-- /Slide1 -->
            <div class="item">

                    <ul>

                        <li class="col-md-4 col-sm-4 col-xs-12">

                           <div class="effect jw-animate-gen noOpacity" data-gen-offset="90%" data-gen="fadeIn">

                             <img src="images/service4.png" alt="services" class="img-responsive">

                                <span class="overlay-effect">

                                  Ac Leak Repair

                                </span>

                             	<span class="button-effect">

                                <a href="services-detail.html" class="red-button  btn-4 btn-4c bgcolor">

                                 <span>read more</span>

                                </a>

                               </span>

                            </div>

                           
                        <li class="col-md-4 col-sm-4 col-xs-12">

                           <div class="effect jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeIn">

                             <img src="images/service5.png" alt="services" class="img-responsive">

                                <span class="overlay-effect">

                                  Ac Leak Repair

                                </span>

                             	<span class="button-effect">

                                <a href="services-detail.html" class="red-button  btn-4 btn-4c bgcolor">

                                 <span>read more</span>

                                </a>

                              </span>

                            </div>

                           
                        </li>

                        <li class="col-md-4 col-sm-4 col-xs-12">

                           <div class="effect jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeIn">

                              <img src="images/service6.png" alt="services" class="img-responsive">

                                <span class="overlay-effect">

                                  Ac Leak Repair

                                  </span>

                             	<span class="button-effect">

                                <a href="services-detail.html" class="red-button  btn-4 btn-4c bgcolor">

                                 <span>read more</span>

                                </a>

                              </span>

                            </div>

                           
                        </li>

                       
                    </ul>

              </div><!-- /Slide2 -->
           
        </div>

         <div class="control-box">
        <div class="jw-animate-gen noOpacity" data-gen-offset="90%" data-gen="fadeIn">                          
            <a data-slide="prev" href=".myCarousel" class="carousel-control left bgcolor">

            <span><i class="fa fa-angle-left"></i></span>

            </a>

            </div>

            <div class="jw-animate-gen noOpacity" data-gen-offset="90%" data-gen="fadeIn">

            <a data-slide="next" href=".myCarousel" class="carousel-control right bgcolor">

            <span><i class="fa fa-angle-right"></i></span>

            </a>

            </div>

        </div><!-- /.control-box -->
    </div><!-- myCarousel -->

       
    </div>

  </div>

</div>

</section>



 <!--LATEST NEWS-->

<section class="latest-news">
  <div class="container">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12 text-center">

            <h1 class="jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">

            Latest News</h1>

            <hr class="center bgcolor">

           <p class="text-center jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">

             Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed<br>
varius at lacinia dui sed, ultricies sapien.

            </p>

        </div>
        </div>

        <div class="row">

        <div class="col-md-6 col-sm-6 col-xs-12">

            <div class="news-detail clearfix jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInLeft">

                <div class="col-md-5 col-sm-5 col-xs-12">

                <img src="images/latestnews.png" alt="latest news" class="img-responsive">
                </div>

               
                <div class="col-md-7 col-sm-7 col-xs-12">

                <h3>We know your home Is important to you</h3>

                <p>

                Curabitur ullamcorper, felis bibendum rutrum consectetur, justo...

                </p>

                 <a href="news.html" class="red-button  btn-4 btn-4c bgcolor">

                  <span>read more</span>

                  </a>

                </div>

            </div>   
        </div>

       
        <div class="col-md-6 col-sm-6 col-xs-12">

            <div class="news-detail clearfix jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInRight">

                <div class="col-md-5 col-sm-5 col-xs-12">

                <img src="images/latestnews2.png" alt="latest news" class="img-responsive">
                </div>

               
                <div class="col-md-7 col-sm-7 col-xs-12">

                <h3>Premier Commercial HVAC Company</h3>

                <p>

                Curabitur ullamcorper, felis bibendum rutrum consectetur, justo...

                </p>

                 <a href="news.html" class="red-button  btn-4 btn-4c bgcolor">

                  <span>read more</span>

                  </a>

                </div>

             </div>

        </div>

    </div>

  </div>

</section>





 <!-- FEATURED WORK -->

<section class="feature">



<div class="container">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12 text-center">

        	<h1 class="jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInDown">

            Our Featured Work</h1>

            <hr class="center bgcolor">         
        </div>      
    </div>

   
    <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">

      <div class="mosaicflow clearfix" data-item-height-calculation="attribute">

		<div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="90%" data-gen="fadeIn">

		<img src="images/feature-work1.png"  alt="" class="img-responsive">

			<span class="hoover text-center">

            <a href="work-detail.html"><i class=" fa fa-external-link bgcolor"></i></a>

            </span>

		</div>



		<div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeIn">

		<img src="images/feature-work2.png"  alt="" class="img-responsive">

			<span class="hoover text-center">

            <a href="work-detail.html"><i class=" fa fa-external-link bgcolor"></i></a>

            </span>

		</div>



		<div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeIn">

		<img src="images/feature-work3.png"  alt="" class="img-responsive">

			<span class="hoover text-center">

            <a href="our-work.html"><i class=" fa fa-external-link bgcolor"></i></a>

            </span>

		</div>



		<div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeIn">

		<img src="images/feature-work4.png"  alt="" class="img-responsive">

			<span class="hoover text-center">

            <a href="work-detail.html"><i class=" fa fa-external-link bgcolor"></i></a>

            </span>

		</div>

       
        <div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeIn">

		<img src="images/feature-work5.png"  alt="" class="img-responsive">

			<span class="hoover text-center">

            <a href="work-detail.html"><i class=" fa fa-external-link bgcolor"></i></a>

            </span>

		</div>

       
        <div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeIn">

		<img src="images/feature-work6.png"  alt="" class="img-responsive">

			<span class="hoover text-center">

            <a href="work-detail.html"><i class=" fa fa-external-link bgcolor"></i></a>

            </span>

		</div>

       
        <div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeIn">

		<img src="images/feature-work7.png"  alt="" class="img-responsive">

			<span class="hoover text-center">

            <a href="work-detail.html"><i class=" fa fa-external-link bgcolor"></i></a>

            </span>

		</div>

       
        <div class="mosaicflow__item jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeIn">

		<img src="images/feature-work8.png"  alt="" class="img-responsive">

			<span class="hoover text-center">

            <a href="work-detail.html"><i class=" fa fa-external-link bgcolor"></i></a>

            </span>

		</div>



	</div>                         
    </div>

  </div>

</div>

</section>



<!-- Price-Plan -->

<section class="plans">

  <div class="container">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12 text-center">

          <h1 class="jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInDown">

           Price &amp; Packages</h1>

            <hr class="center price-line bgcolor">

            <p class="text-center jw-animate-gen noOpacity animated fadeInDown" data-gen="fadeInDown" data-gen-offset="80%">

              Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed

              <br>

              varius at lacinia dui sed, ultricies sapien.

            </p>         
        </div>      
    </div>

    <div class="row text-center price-plan">

      <div class="col-md-3 col-sm-6 jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInUp">

        <div class="panel panel-default standard-membership">

          <h2>$65</h2>

          <p>Standard</p>

          <hr class="center bgcolor">

          <div class="panel-body price-panel-body">

            <ul>

              <li>Dolor sit amet, consetetur</li>

              <li>Invidunt ut labore et</li>

              <li>Eirmod tempor invidunt</li>

              <li>Mod tempor invidunt</li>

              <li>Events Invitation</li>

              <li>Camping &amp; riding Tips</li>

            </ul>

          </div>

          <a class="red-button btn-4 btn-4c bgcolor" href="#">

            <span>Read More</span>

          </a>

        </div>

      </div>

      <div class="col-md-3 col-sm-6 jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInUp">

        <div class="panel panel-default standard-membership">

          <h2>$79</h2>

          <p>Silver</p>

          <hr class="center bgcolor">

          <div class="panel-body price-panel-body">

            <ul>

              <li>Dolor sit amet, consetetur</li>

              <li>Invidunt ut labore et</li>

              <li>Eirmod tempor invidunt</li>

              <li>Mod tempor invidunt</li>

              <li>Events Invitation</li>

              <li>Camping &amp; riding Tips</li>

            </ul>

          </div>

          <a class="red-button btn-4 btn-4c bgcolor" href="#">

            <span>Read More</span>

          </a>

        </div>

      </div>

      <div class="col-md-3 col-sm-6 jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInUp">

        <div class="panel panel-default standard-membership">

          <h2>$88</h2>

          <p>Gold</p>

          <hr class="center bgcolor">

          <div class="panel-body price-panel-body">

            <ul>

              <li>Dolor sit amet, consetetur</li>

              <li>Invidunt ut labore et</li>

              <li>Eirmod tempor invidunt</li>

              <li>Mod tempor invidunt</li>

              <li>Events Invitation</li>

              <li>Camping &amp; riding Tips</li>

            </ul>

          </div>

          <a class="red-button btn-4 btn-4c bgcolor" href="#">

            <span>Read More</span>

          </a>

          <div class="triangle">

            <span class="sale-text">

              Popular

            </span>

          </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-6 jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeInUp">

        <div class="panel panel-default standard-membership">

          <h2>$99</h2>

          <p>Platinum</p>

          <hr class="center bgcolor">

          <div class="panel-body price-panel-body">

            <ul>

              <li>Dolor sit amet, consetetur</li>

              <li>Invidunt ut labore et</li>

              <li>Eirmod tempor invidunt</li>

              <li>Mod tempor invidunt</li>

              <li>Events Invitation</li>

              <li>Camping &amp; riding Tips</li>

            </ul>

          </div>

          <a class="red-button btn-4 btn-4c bgcolor" href="#">

            <span>Read More</span>

          </a>

        </div>

      </div>

    </div>

  </div>

</section>



<!--containing multiple logos-->

<section id="partners" class="partners">
  <div class="container">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">

            <h1 class="jw-animate-gen noOpacity" data-gen-offset="85%" data-gen="fadeIn">

            Our Partners</h1>

        </div>
       
        <div class="col-md-12 col-sm-12 col-xs-12 jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">

         <div id="owl-example" class="owl-carousel">

		    <div class="item">

          <img src="images/logo1.png" alt="Logo">

        </div>

		    <div class="item">

          <img src="images/logo2.png" alt="Logo">

        </div>

		    <div class="item">

          <img src="images/logo3.png" alt="Logo">

        </div>

		    <div class="item">

          <img src="images/logo4.png" alt="Logo">

        </div>

		    <div class="item">

          <img src="images/logo1.png" alt="Logo">

        </div>

		    <div class="item">

          <img src="images/logo2.png" alt="Logo">

        </div>

		    <div class="item">

          <img src="images/logo3.png" alt="Logo">

        </div>

		    <div class="item">

          <img src="images/logo4.png" alt="Logo">

        </div>

		     </div>

       </div>

    </div>

  </div>

</section>



<!-- news-letter -->



  <section class="news-letter module parallax parallax-1">

    <div class="container">

      <div class="row text-center jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">

        <h1>Get our Daily News and Offers</h1>

        <p>Nunc lorem mi, pulvinar quis Class aptent taciti molestie tincidunt</p>

      </div>

      <div class="row news-letter-form jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">

        <div class="col-sm-9 col-sm-offset-0 col-lg-7 col-lg-offset-2 col-xs-12 col-xs-offset-0 wow fadeInUp" data-wow-duration="2s">

          <form class="form-inline col-xs-12">

            <div class="form-group">

           
            <div class="col-xs-11 form-input">

              <label class="sr-only" for="userEmail">Email Address</label>

              <input type="email" class="form-control" id="userEmail" placeholder="Email Adrress" required>

            </div> 
            <div class="col-xs-1 form-input">

              <button type="submit" class="btn btn-default submit-button bgcolor bordercolor">

                Join us Now!

              </button>

            </div> 
             
            </div>

          </form>

        </div>

      </div>

    </div>

   
  </section>



<!-- news-letter -->



<footer id="footer" class="bordercolor">

    <div class="container">

        <div class="row">

          <div class="col-md-4 col-sm-4 col-xs-12">

                <div class="footer-detail jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInUp">

                 <h3>Latest Posts</h3>

                 <hr class="center bgcolor">

                 <div class="row">

                     <div class="col-md-3 col-sm-4 col-xs-3">

                     <img src="images/latest-post.png" alt="our posts" class="img-responsive">
                     </div>

                           
                    <div class="col-md-9 col-sm-8 col-xs-9 nospace">

                    <a href="news.html">Sed ut perspiciatis unde omnisiste natus error</a>

                    </div>

                </div>

                  <div class="row">

                     <div class="col-md-3 col-sm-4 col-xs-3">

                     <img src="images/latest-post2.png" alt="our posts" class="img-responsive">
                     </div>

                           
                    <div class="col-md-9 col-sm-8 col-xs-9 nospace">

                    <a href="news.html">ut perspiciatis unde omnis iste natus error</a>

                    </div>

                </div>

                  <div class="row">

                     <div class="col-md-3 col-sm-4 col-xs-3">

                     <img src="images/latest-post3.png" alt="our posts" class="img-responsive">
                     </div>

                           
                    <div class="col-md-9 col-sm-8 col-xs-9 nospace">

                    <a href="news.html">Sed ut perspiciatis unde omnis iste natus error</a>

                    </div>

                </div>               
            </div>

          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">

            <div class="footer-detail jw-animate-gen noOpacity" data-gen-offset="90%" data-gen="fadeInUp">

              <h3>Our Services</h3>

              <hr class="center bgcolor">

              <ul class="inline">

                <li>

                  <a href="services-detail.html">

                    <i class="fa fa-angle-double-right"></i>
                      Residential 

                  </a>

                </li>

                <li>

                  <a href="services-detail.html">

                    <i class="fa fa-angle-double-right"></i>
                      Commercial 

                  </a>

                </li>

                <li>

                  <a href="services-detail.html">

                    <i class="fa fa-angle-double-right"></i>
                      Ac Replacement

                  </a>

                </li>

                <li>

                  <a href="services-detail.html">

                    <i class="fa fa-angle-double-right"></i>
                      Ac Repair

                  </a>

                </li>

                <li>

                  <a href="services-detail.html">

                    <i class="fa fa-angle-double-right"></i>
                      Ac Maintainance

                  </a>

                </li>

                <li>

                  <a href="services-detail.html">

                    <i class="fa fa-angle-double-right"></i>
                      Emergency Response

                  </a>

                </li>

              </ul>

            </div>

          </div>           
          <div class="col-md-4 col-sm-4 col-xs-12">

            <div class="footer-detail jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInUp">

              <h3>Latest Project</h3>

              <hr class="center bgcolor">

              <div class="col-md-4 col-sm-4 col-xs-6 latest-project">

                <img class="img-responsive" src="images/latest-project-1.jpg" alt="project-1">

                <a href="work-detail.html">

                  <span class="latest-project-overlay">

                  <i class="fa fa-external-link bgcolor"></i>

                  </span>

                </a>

              </div>

              <div class="col-md-4 col-sm-4 col-xs-6 latest-project">

                <img class="img-responsive" src="images/latest-project-2.jpg" alt="project-2">

                <a href="work-detail.html">

                  <span class="latest-project-overlay">

                  <i class="fa fa-external-link bgcolor"></i>

                  </span>

                </a>

              </div>

              <div class="col-md-4 col-sm-4 col-xs-6 latest-project">

                <img class="img-responsive" src="images/latest-project-3.jpg" alt="project-3">

                <a href="work-detail.html">

                  <span class="latest-project-overlay">

                  <i class="fa fa-external-link bgcolor"></i>

                  </span>

                </a>

              </div>

              <div class="col-md-4 col-sm-4 col-xs-6 latest-project">

                <img class="img-responsive" src="images/latest-project-4.jpg" alt="project-4">

                <a href="work-detail.html">

                  <span class="latest-project-overlay">

                  <i class="fa fa-external-link bgcolor"></i>

                  </span>

                </a>

              </div>

              <div class="col-md-4 col-sm-4 col-xs-6 latest-project">

                <img class="img-responsive" src="images/latest-project-5.jpg" alt="project-5">

                <a href="work-detail.html">

                  <span class="latest-project-overlay">

                    <i class="fa fa-external-link bgcolor"></i>

                  </span>

                </a>

              </div>

              <div class="col-md-4 col-sm-4 col-xs-6 latest-project">

                <img class="img-responsive" src="images/latest-project-6.jpg" alt="project-6">

                <a href="work-detail.html">

                  <span class="latest-project-overlay">

                  <i class="fa fa-external-link bgcolor"></i>

                  </span>

                </a>

              </div>

            </div>

          </div>           
        </div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
            <p class="copy-right text-center bordercolor">
            Copyright 2015 - HVAC Co. Inc. All Rights Reserved. Designed by
            <a href="#"> ewebcraft.com</a>
            </p>
            </div>
        </div>       
    </div>
</footer>
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.mosaicflow.js" type="text/javascript"></script>
<script src="js/waypoints.js" type="text/javascript"></script>
<script src="js/smoothScroll.js" type="text/javascript"></script>
<script src="js/jquery.royalslider.min.js" type="text/javascript"></script>
<script src="js/jquery.easing-1.3.js" type="text/javascript"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/owl-slider.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/color-switcher.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
</body>
</html>

