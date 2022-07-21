<?php
    session_start();
    include('connect.php');
    if(isset($_POST['btnlogin']))
    {
        $email = $_POST['txtemail'];
        $password = $_POST['txtpassword'];

        $insert = "SELECT * FROM customer where EmailAddress='$email' and Password='$password'";
        $query = mysqli_query($connect, $insert);
        $count = mysqli_num_rows($query);

        if($count > 0)
        {
            $update = "UPDATE customer set ViewCount = ViewCount + 1
                        WHERE EmailAddress = '$email' and Password = '$password'";
             mysqli_query($connect, $update);
            $row = mysqli_fetch_array($query);
            $customerid=$row['CustomerID'];
            $_SESSION['CustomerID'] = $customerid;
            
            echo "<script>window.alert('Logined Successfully')</script>";
             $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
             header("Location: ". $_SESSION['current_page']);
        }
        else
        {
            if(isset($_SESSION['loginError']))
            {
                $counterror = $_SESSION['loginError'];
                if($counterror == 1)
                {
                    $_SESSION['loginError'] = 2;
                    echo "<script>window.alert('Please Try Again. Login Attempt : 2')</script>";
                }
                if($counterror == 2)
                {
                    echo "<script>window.alert('Login failed. Please Wait 10 minutes.')</script>";
                    echo "<script>window.location='logintimer.php'</script>";
                }
            }
            else
            {
                $_SESSION['loginError'] = 1;
                echo "<script>window.alert('Please Try Again. Login Attempt : 1')</script>";
            }
        }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | HGE</title>

   

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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="information.html">Information</a></li>
                            <li><a href="wanted1.php">Wanted</a></li>
                            <li><a href="workshop.html">Workshop</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contact.php">Contact</a></li>
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
                <div class="section-header contact-head text-center">
                    <h2>Log In</h2>

                    <div class="contact-content">
                        <div class="single-contact-box">
                            <div class="contact-form ">
                                <form action="login.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3"></div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" placeholder="Please Enter Your Email" name="txtemail">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3"></div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="Please Enter Your Password" name="txtpassword">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3"></div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-9" id="btn-row">
                                        <div class="single-contact-btn pull-right">
                                            <button class="contact-btn" type="reset" name="btnreset">cancel</button>
                                        </div>
                                        <div class="single-contact-btn pull-right">
                                            <button class="contact-btn" type="submit" name="btnlogin">log in</button>
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
    </section>

    <div class="cookie-disclaimer">
        <div class="cookie-close accept-cookie"><i class="fa fa-times"></i></div>
        <div class="container">
            <p>This is a dummy information for cookie. By using our website, you agree to our <a href="#">Terms & Privacy Policy</a>. 
            <br>For further information, please contact us via our Contact Us form.</p>
            <button type="button" class="btn accept-cookie">Agree!</button>
        </div>
    </div>

    <!--hm-footer start-->
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
									<li><a href="index.html" >Home</a></li>
									<li><a href="about.html">Information</a></li>
									<li><a href="services.html">Wanted</a></li>
									<li><a href="portfolio.html">Workshop</a></li>
									<li><a href="blog.html">Gallery</a></li>
									<li><a href="contact.html">Contact us</a></li>
									<li><a href="contact.html">Featured</a></li> 
								</ul>
							</div><!-- /.footer-menu-->
						</div><!--/.hm-footer-widget-->
					</div><!--/.col-->
					<div class=" col-md-3 col-sm-6 col-xs-12">
						<div class="hm-footer-widget">
							<div class="hm-foot-title">
								
							</div><!--/.hm-foot-title-->
							<div class="hm-para-news">
								<a href="">
									You are at the Login page.
								</a>
							</div><!--/.hm-para-news-->
							<div class="footer-line">
								<div class="border-bottom"></div>
							</div>
							
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
						<div class="foot-menu pull-right
						">	  
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
    


    <script src="assets/js/jquery.js"></script>
   
    
   
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    
   
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    
   
    <script src="assets/js/bootsnav.js"></script>
    
    
    <script src="assets/js/jquery.hc-sticky.min.js" type="text/javascript"></script>

    
    
    <script src="assets/js/jquery.magnific-popup.min.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


    
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    
    
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    
   
    <script type="text/javascript" src="assets/js/jak-menusearch.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>

    
</body>
</html>