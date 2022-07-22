<?php
	session_start();
	include('connect.php');
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];

	if(!isset($_SESSION['CustomerID']))
	{
		echo "<script>window.alert('Please Log in')</script>";
		echo "<script>window.location='login.php'</script>";
	}
?>
<!Doctype html>
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
        <title>Wanted | HGE</title>

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
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
		<!--header start-->
		<section class="header">
			<div class="container">	
				<div class="header-left">
					<ul class="pull-left">
						<li>
							<a href="#">
								<i class="fa fa-phone" aria-hidden="true"></i> +44 0000 000000
							</a>
						</li><!--/li-->
						<li>
							<a href="#">
								<i class="fa fa-envelope" aria-hidden="true"></i>mail@hge.com
							</a>
						</li><!--/li-->
					</ul><!--/ul-->
				</div><!--/.header-left -->
				<div class="header-right pull-right">
					<ul>
						<li class="reg">
							<a href="register.php" >
								Register
							</a>
							||
						</li><!--/li -->
						<li>
							<div class="social-icon">
								<?php
									$CustomerID = $_SESSION['CustomerID'];
									$insert = "SELECT * FROM customer WHERE CustomerID = '$CustomerID'";
									$query = mysqli_query($connect, $insert);
									$count = mysqli_num_rows($query);
									if($count > 0)
									{
										$data = mysqli_fetch_array($query);
										$customername = $data['CustomerName'];
										echo $customername;
									}
								?>
							</div>
						</li>
					</ul><!--/ul -->
				</div><!--/.header-right -->
			</div><!--/.container -->	
		</section><!--/.header-->	
		<!--header end-->
        
        <!--menu start-->
		<section id="menu">
			<div class="container">
				<div class="menubar">
					<nav class="navbar navbar-default">
					
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="home.php">
								<img src="assets/images/logo/logo.png" alt="logo">
							</a>
						</div><!--/.navbar-header -->

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.html">Home</a></li>
								<li><a href="information.php">Information</a></li>
								<li class="active"><a href="wanted1.php">Wanted</a></li>
								<li><a href="workshop.html">Workshop</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="featured.php">Featured</a></li>
								<li class="search">
									<form action="wanted1.php" method="POST">
										<input type="text" name="txtsearch" placeholder="Search....">
										<a href="#" name="btnSearch">
											<span class="lnr lnr-magnifier"></span>
										</a>
									</form>
									<?php
										if (isset($_POST['btnSearch']))
										{
											$second = "SELECT * FROM product WHERE ProductCondition = 'Used'
														AND ProductName LIKE '%$second%'";
											$result = mysqli_query($connect, $query);
											$count = mysqli_num_rows($result);

											if($count > 0)
											{
												for ($i = 0; $i < $count; $i+=5)
												{
													$query1 = "SELECT * FROM product WHERE ProductCondition = 'Used'
																AND ProductName LIKE '%$second%' LIMIT $i,5";
													$result1 = mysqli_query($connect, $query1);
													$count1 = mysqli_num_rows($result1);
												}
											}
										}
									?>
								</li>
							</ul><!-- / ul -->
						</div><!-- /.navbar-collapse -->
					</nav><!--/nav -->
				</div><!--/.menubar -->
			</div><!-- /.container -->
		</section><!--/#menu-->
		<!--menu end-->

		<section  class="service">
			<div class="container">
				<div class="service-details">
					<div class="section-header text-center">
						<h2>second hand products</h2>
						<p>
							Shop second hand products with our limited warranty
						</p>
					</div><!--/.section-header-->
					<div class="service-content-one">
						<?php
							$query = "SELECT * FROM product ORDER BY ProductID DESC";
							$ret = mysqli_query($connect, $query);

							$count = mysqli_num_rows($ret);

							if ($count == 0)
							{
								echo "<p>No product found</p>";
								exit();
							}
							else
							{
								for($a = 0; $a < $count; $a+=3)
								{
									$query1 = "SELECT * FROM product WHERE ProductCondition = 'Used' ORDER BY ProductID LIMIT $a, 3";
									$ret1 = mysqli_query($connect, $query1);

									$count1 = mysqli_num_rows($ret1);

									echo '<div class="row">';

									for($i = 0; $i < $count1; $i++)
									{
										$data = mysqli_fetch_array($ret1);
										$ProductID = $data['ProductID'];
										$ProductName = $data['ProductName'];
										$Price = $data['Price'];
										$Year = $data['Year'];
										$Quantity = $data['Quantity'];
										$ProductImage1 = $data['ProductImage1'];
										$ProductImage2 = $data['ProductImage2'];
										$Description = $data['Description'];
										$ProductTypeID = $data['ProductTypeID'];
										$ProductCondition = $data['ProductCondition'];
						?>
							<div class="col-sm-4 col-xs-12">
								<div class="service-single text-center">
									<div class="service-img">
										<img src="<?php echo $ProductImage1 ?>" alt="image of product"/>
									</div><!--/.service-img-->
									<div class="service-txt">
										<h2>
											<a href=""><?php echo $ProductName ?></a>
											<p>Condition : <?php echo $ProductCondition ?></p>
										</h2>
										<p>
											<?php echo "<p>£ $Price"; ?>
										</p>
										
										<a href="ProductDetails.php?ProductID=<?php echo $ProductID?>">See more</a>
									</div><!--/.service-txt-->
								</div><!--/.service-single-->
							</div><!--/.col-->
						<?php
									}
									echo "</div>";
								}
							}
						?>
					</div><!--/.service-content-one-->
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