<?php
    session_start();
    include('connect.php');
    include('ShoppingCartFunctions.php');

    if(isset($_GET['Buy']))
    {
        $txtProductID = $_GET['txtProductID'];
        $txtBuyQty = $_GET['txtBuyQty'];
        AddShoppingCart($txtProductID, $txtBuyQty);
    }

    if(isset($_GET['ProductID']))
    {
        $ProductID = $_GET['ProductID'];

        $query = "SELECT p.*, pt.ProductTypeID, pt.ProductTypeName
        FROM product p, producttype pt 
        WHERE p.ProductID = '$ProductID' 
        AND p.ProductTypeID = pt.ProductTypeID";

        $result = mysqli_query($connect, $query);

        $row = mysqli_fetch_array($result);
        $ProductName = $row['ProductName'];
        $Price = $row['Price'];
        $Year = $row['Year'];
        $Quantity = $row['Quantity'];
        $ProductType = $row['ProductTypeID'];
        $ProductImage1 = $row['ProductImage1'];
        $ProductImage2 = $row['ProductImage2'];
        $ProductImage3 = $row['ProductImage3'];
        $Description = $row['Description'];
        $ProductCondition = $row['ProductCondition'];
    }
    else
    {
        echo "<script>Product Not Found </script>";
    }
?>
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- META DATA -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
		
        <!-- TITLE OF SITE -->
        <title>Product Detail | HGE</title>

        <!-- for title img -->
		<link rel="shortcut icon" type="image/icon" href="assets/images/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!--linear icon css-->
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
		
		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">
		
		<!--hover.css-->
        <link rel="stylesheet" href="assets/css/hover-min.css">
		
		<!--vedio player css-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link href="assets/css/owl.theme.default.min.css" rel="stylesheet"/>


        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link href="assets/css/bootsnav.css" rel="stylesheet"/>	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
       

    </head>
    <body>
        <section class="header">
			<div class="container">	
				<div class="header-left">
					<ul class="pull-left">
						<li>
							<a href="#">
								<i class="fa fa-phone" aria-hidden="true"></i> +44 000 000 000
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
						</div><!--/.navbar-header -->

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li ><a href="index.html">Home</a></li>
								<li><a href="information.php">Information</a></li>
								<li><a href="wanted.php">Wanted</a></li>
								<li><a href="workshop.html">Workshop</a></li>
								<li class="active"><a href="gallery.php">Gallery</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="featured.php">Featured</a></li>
							</ul><!-- / ul -->
						</div><!-- /.navbar-collapse -->
					</nav><!--/nav -->
				</div><!--/.menubar -->
			</div><!-- /.container -->
		</section><!--/#menu-->
		<!--menu end-->
        </footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->

        <section  class="service">
				<div class="container">
					<div class="service-details">
						<div class="section-header text-center">
							<h2><?php echo $ProductName ?></h2>
							<p>
								<?php echo $Description ?>
							</p>
						</div><!--/.section-header-->
						<div class="service-content-one">
							<div class="row">
								<div class="col-sm-4 col-xs-12">
									<div class="service-single text-center">
										<div class="blog-img">
											<img src="<?php echo $ProductImage1 ?>" alt="image of product" />
										</div><!--/.service-img-->
									</div><!--/.service-single-->
								</div><!--/.col-->
								<div class="col-sm-4 col-xs-12">
									<div class="service-single text-center">
										<div class="blog-img">
											<img src="<?php echo $ProductImage2 ?>" alt="image of product" />
										</div><!--/.service-img-->
									</div>
								</div>
								<div class="col-sm-4 col-xs-12">
									<div class="service-single text-center">
										<div class="service-img">
											<img src="<?php echo $ProductImage3 ?>" alt="image of product" />
										</div>
									</div><!--/.service-single-->
								</div><!--/.col-->
							</div><!--/.row-->
						</div><!--/.service-content-one-->
                        <div class="section-header text-center">
                            <h2>Product Details</h2>
							<p>Price              : ??<?php echo $Price ?></p>
                            <p>Manufacturing Date : <?php echo $Year ?></p>
                            <p>Product Condition  : <?php echo $ProductCondition ?></p>
                            <p>Stock : <?php echo $Quantity ?></p>
						</div><!--/.section-header-->
					</div><!--/.service-details-->
				</div><!--/.container-->
		</section><!--/.service-->
		<!--service end-->

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
							<div class="hm-foot-title">
								
							</div><!--/.hm-foot-title-->
							<div class="hm-para-news">
								<a href="">
									You are at a product detail page.
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