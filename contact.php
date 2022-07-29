<?php
    include('connect.php');
    if(isset($_POST['btnsubmit']))
    {
        $policy = $_POST['cbpolicy'];
        $firstname = $_POST['txtfirstname'];
        $lastname = $_POST['txtlastname'];
        $email = $_POST['txtemail'];
        $phone = $_POST['txtphonenumber'];
        $message = $_POST['txtmessage'];

        if($policy == 'Agree')
        {
           
            $insert = "INSERT INTO contact_us(FirstName, LastName, EmailAddress, PhoneNumber, Message)
            values('$firstname', '$lastname', '$email', '$phone', '$message')";

            $query = mysqli_query($connect, $insert);

            if($query)
            {
                echo "<script> alert('Thank you for your message. We will contact you soon!') </script>";
                echo "<script> window.location='index.html' </script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us | HGE</title>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
		
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <link rel="shortcut icon" type="image/icon" href="assets/images/logo/favicon.png"/>
    
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/hover-min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link href="assets/css/bootsnav.css" rel="stylesheet"/>	

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <section class="header">
        <div class="container">	
            <div class="header-left">
                <ul class="pull-left">
                    <li>
                        <a href="#">
                            <i class="fa fa-phone" aria-hidden="true"></i> +44 0000 000000
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-envelope" aria-hidden="true"></i>mail@hge.com
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header-right pull-right">
                <ul>
                    <li class="reg">
                        <a href="register.php">
                            Register
                        </a>
                            /
                        <a href="login.php">
                            Log in
                        </a>
                        
                        
        
                    </li>
                    <li>
                        <div class="social-icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="menu">
        <div class="container">
            <div class="menubar">
                <nav class="navbar navbar-default">
                
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                        <li ><a href="index.html">Home</a></li>
								<li><a href="information.php">Information</a></li>
								<li><a href="wanted.php">Wanted</a></li>
								<li><a href="workshop.html">Workshop</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li class="active"><a href="contact.php">Contact</a></li>
								<li><a href="featured.php">Featured</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <section  class="contact">
            <div class="container">
                <div class="contact-details">
                    <div class="section-header contact-head  text-center">
                        <h2>contact us</h2>
                        
                    </div><!--/.section-header-->
                    <div class="contact-content">
                        <div class="row">
                            <div class="col-sm-offset-1 col-sm-5">
                                <div class="single-contact-box">
                                    <div class="contact-right">
                                        <div class="contact-adress">
                                            <div class="contact-office-address">
                                                <h3>contact info</h3>
                                                <p>
                                                    125, Thames, London
                                                </p>
                                                <div class="contact-online-address">
                                                    <div class="single-online-address">
                                                        <i class="fa fa-phone"></i>
                                                        +44-0000-000000
                                                    </div><!--/.single-online-address-->
                                                    
                                                    <div class="single-online-address">
                                                        <i class="fa fa-envelope-o"></i>
                                                        <span>mail@hge.com</span>
                                                    </div><!--/.single-online-address-->
                                                </div><!--/.contact-online-address-->
                                            </div><!--/.contact-office-address-->
                                            <div class="contact-office-address">
                                                <h3>social partner</h3>
                                                <div class="contact-icon">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><!--/li-->
                                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><!--/li-->
                                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><!--/li-->
                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><!--/li-->
                                                    </ul><!--/ul-->
                                                </div><!--/.contact-icon-->
                                            </div><!--/.contact-office-address-->
                                            
                                        </div><!--/.contact-address-->
                                    </div><!--/.contact-right-->
                                </div><!--/.single-contact-box-->
                            </div>
                            <div class="col-sm-5">
                                <div class="single-contact-box">
                                    <div class="contact-form">
                                        <h3>Leave us a Message Here</h3>
                                        <form action="contact.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"  placeholder="First Name" name="txtfirstname">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"  placeholder="Last Name" name="txtlastname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email" name="txtemail">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Phone" name="txtphonenumber">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="7" placeholder="Message" name="txtmessage"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="checkbox" value="Agree" name="cbpolicy" required><span class="terms-privacy-policy">You agree to our <a href="#">Terms & Privacy Policy</a>.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="single-contact-btn pull-right">
                                                        
                                                        <input type="submit" name="btnsubmit" value="send message" class="contact-btn">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <div class="cookie-disclaimer">
			<div class="cookie-close accept-cookie"><i class="fa fa-times"></i></div>
			<div class="container">
				<p>This is a dummy information for cookie. By using our website, you agree to our <a href="#">Terms & Privacy Policy</a>. 
				<br>For further information, please contact us via our Contact Us form.</p>
				<button type="button" class="btn accept-cookie">Agree!</button>
			</div>
		</div>

        <section class="hm-footer">
			<div class="container">
				<div class="hm-footer-details">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title ">
									<div class="logo">
										<a href="index.html">
											<img src="assets/images/logo/logo.png" alt="logo" />
										</a>
									</div><!-- /.logo-->
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-para">
									<p>
										
									</p>
								</div><!--/.hm-foot-para-->
								<div class="hm-foot-icon">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><!--/li-->
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><!--/li-->
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><!--/li-->
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-icon-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-2 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>Useful Links</h4>
								</div><!--/.hm-foot-title-->
								<div class="footer-menu ">	  
									<ul class="">
                                        <li><a href="home.php" >Home</a></li>
                                        <li><a href="information.php">Information</a></li>
                                        <li><a href="wanted.php">Wanted</a></li>
                                        <li><a href="workshop.html">Workshop</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="contact.php">Contact us</a></li>
                                        <li><a href="featured.php">Featured</a></li>
									</ul>
								</div><!-- /.footer-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-para-news">
									<a href="blog_single.html">
										You are at the Contact page.
									</a>
								</div><!--/.hm-para-news-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6  col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4> Our Newsletter</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-para">
									<p class="para-news">
										Subscribe to our newsletter to get the latest News and offers..
									</p>
								</div><!--/.hm-foot-para-->
								<div class="hm-foot-email">
									<div class="foot-email-box">
										<input type="text" class="form-control" placeholder="Email Address">
									</div><!--/.foot-email-box-->
									<div class="foot-email-subscribe">
										<button type="button" >go</button>
									</div><!--/.foot-email-icon-->
								</div><!--/.hm-foot-email-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.hm-footer-details-->
			</div><!--/.container-->

		</section><!--/.hm-footer-details-->
		<!--hm-footer end-->
		
		<!-- footer-copyright start -->
		<footer class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="foot-copyright pull-left">
							<p>
								&copy; All Rights Reserved @ HGE
							</p>
						</div><!--/.foot-copyright-->
					</div><!--/.col-->
					<div class="col-sm-5">
						<div class="foot-menu pull-right">	  
							<ul>
								<li ><a href="#">legal</a></li>
								<li ><a href="#">sitemap</a></li>
								<li ><a href="#">privacy policy</a></li>
							</ul>
						</div><!-- /.foot-menu-->
					</div><!--/.col-->
				</div><!--/.row-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->



		<!-- jaquery link -->

		<script src="assets/js/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        
        <!--modernizr.min.js-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		
		<!--bootstrap.min.js-->
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>
		
		<!-- for manu -->
		<script src="assets/js/jquery.hc-sticky.min.js" type="text/javascript"></script>

		
		<!-- vedio player js -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>


		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


		<!--owl.carousel.js-->
        <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
		
		<!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
        
        <!--Custom JS-->
        <script type="text/javascript" src="assets/js/jak-menusearch.js"></script>
        <script type="text/javascript" src="assets/js/custom.js"></script>
</body>
</html>