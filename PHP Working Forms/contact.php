<?php
session_start();
$message='';
/********chnage Below Settings as per your requirement********/
$mailHeaderSender="Ewebcraft <ewebcraft@gmail.com>"; //NOTE : This email will be used for sending email. Update this email address accordingly
$recipientEmail="din@ewebcraft.com"; //Email where form submission data will recieve.
$emailSubject="New Contact from Roofer Landing Page"; //Email subject of which recieve in INBOX
/***************End Settings**********************/
if(isset($_POST['submitContact']) && $_POST['submitContact']=='SendEmail')
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
	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/animate-custom.css">
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
                <a href="mailto:example@roofers.com">example@roofers.com</a>
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
                        <li class="dropdown hover"><a href="index.html" class="dropdown-toggle" data-toggle="dropdown"> Home <b class="caret"></b> </a>
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
                          Roofing Services <b class="caret"></b></a>
                          <ul class="dropdown-menu bgcolor">
                            <li><a href="services.html">Roofing Services </a></li>
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
                        <li class="active bgcolor"><a href="contact.html"> Contact Us </a></li>
                        
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
              <p>Patterns for Roofers</p>
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

<div class="page-nav">
    <div class="container">
        <div class="row">
            <div class="top-nav2">
                <div class="col-md-9 col-sm-9 col-xs-6 jw-animate-gen noOpacity" data-gen="fadeInLeft" data-gen-offset="50%">
                <span class="heading">Contact Us</span>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 text-right jw-animate-gen noOpacity" data-gen="fadeInRight" data-gen-offset="50%">
                <span class="inner-link">
                <a href="index.html">Home <i class="fa fa-angle-double-right"></i></a>
               </span>
                <span class="inner-link">Contact Us</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jw-animate-gen noOpacity" data-gen="fadeInDown" data-gen-offset="70%">
<div id="googleMap"></div>
</div>
<section class="contact-wrap">
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="contact">
            <h1 class="jw-animate-gen noOpacity" data-gen="fadeInDown" data-gen-offset="90%">
            Contact Us</h1>
            <p class="jw-animate-gen noOpacity" data-gen="fadeInDown" data-gen-offset="85%">
            Lorem ipsum dolor sit amet, mea cu omnium urbanitas, labitur volumus id eum. Ius ignota offendit similique et, sea dolorum vituperata ullamcorper volumus id eum. Ius ignota offendit similique et, sea dolorum vituperata ullamcorper.</p>
            </div>
        </div>
        </div> <!--ROW-->
        <div class="row">
        
        <div class="col-md-3 col-sm-4 col-xs-12">
        	<div class="contact jw-animate-gen noOpacity" data-gen="fadeInLeft" data-gen-offset="80%">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-1">
                	<i class="fa fa-home"></i>
                </div>
                <div class="col-md-10 col-sm-10 col-xs-11 nospace">
                5512 Lorem Ipsum Vestibulum Molesqu, Dolor Sit Amet, 
                Egestas 666 69 
                </div>
            </div>
             <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-1">
                <i class="fa fa-envelope"></i>
                </div>
                <div class="col-md-10 col-sm-10 col-xs-11 nospace">
                <a href="mailto:contact@yourdomain.com">
                 contact@yourdomain.com</a>
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-1">
                <i class="fa fa-phone"></i>
                </div>
                <div class="col-md-10 col-sm-10 col-xs-11 nospace">
                 +1 800 450 6935 <br>
                 +1 800 450 6940 
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
        	<?php echo $message?>
        	<div class="contact">
               <form  class="jw-animate-gen noOpacity" data-gen="fadeInRight" data-gen-offset="85%" method="post">
                   <div class="row">
                       <div class="col-md-4 col-sm-4 col-xs-12">
                           <div class="form-group">
                            <input type="text" class="form-control"  id="exampleInputName" name="f[Name]" placeholder="Name" required>
                          </div>
                          <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" name="f[Email]" placeholder="Email Address" required>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" required name="f[Subject]">
                          </div>
                          
                          <div class="form-group" >
                      		<img src="captcha/CaptchaSecurityImages.php?width=100&height=40&characters=5" /><input id="security_code" name="security_code" type="text" class="form-control" style="width:140px; margin-left:15px; display:inline-block; float:right;"  required placeholder="Security Code">
                      	 </div>
                          
                      </div>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                          <div class="form-group">
                            <textarea rows="5" placeholder="Message" name="f[Message]"></textarea>
                          </div>
                          
                          
                          
                          <div class="text-right jw-animate-gen noOpacity" data-gen="fadeIn" data-gen-offset="70%">
                          <button type="submit" class="btn btn-default btn-4 btn-4c bgcolor" name="submitContact" value="SendEmail">
                            <span>Submit</span>
                          </button>
                          </div>
                      </div>
                  </div>
            </form>
            
            </div>
        </div>
        
        </div> <!--ROW-->
    </div> <!--CONTAINER-->
</section>
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
                      Residential Roofing
                  </a>
                </li>
                <li>
                  <a href="services-detail.html">
                    <i class="fa fa-angle-double-right"></i> 
                      Commercial Roofing
                  </a>
                </li>
                <li>
                  <a href="services-detail.html">
                    <i class="fa fa-angle-double-right"></i> 
                      Roof Replacement
                  </a>
                </li>
                <li>
                  <a href="services-detail.html">
                    <i class="fa fa-angle-double-right"></i> 
                      Roofing Repair
                  </a>
                </li>
                <li>
                  <a href="services-detail.html">
                    <i class="fa fa-angle-double-right"></i> 
                      Roof Maintainance
                  </a>
                </li>
                <li>
                  <a href="services-detail.html">
                    <i class="fa fa-angle-double-right"></i> 
                      Emergency Roofing Response
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
            Copyright 2015 - Roofers Co. Inc. All Rights Reserved. Designed by
            <a href="#"> ewebcraft.com</a>
            </p>
            </div>
        </div>        
    </div>
</footer>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/smoothScroll.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/color-switcher.js" type="text/javascript"></script>
<script src="js/custom.js"></script>
<script src="js/maps.js"></script>
 <script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:14, //increase number if you want to zoop map on page
	scrollwheel: false, //remove this line if you want to enable zoom on mouse wheel
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  /*********Start Map Pin code******/
  marker = new google.maps.Marker({
		map: map,
		title:"Roofers Contracters Theme",
		
		position: new google.maps.LatLng(51.508742,-0.120850)
		
	});
	infowindow = new google.maps.InfoWindow({
			content:"Address at World 220-B City State, Country" 
	});
	google.maps.event.addListener(marker, "click", function(){
		infowindow.open(map,marker);
	});
	/*********End Map Pin code******/
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>