<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
	<?php include 'header1.php'?>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bg.png); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree" style="color: #13534f">
							<li><a href="next.php" style="color: #13534f">Home</a></li>
							<li style="color: #13534f">Products</li>
						</ul>
						<h1 class="white-text" style="color: #13534f; font-weight: bold">All Products</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->
		
        <!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row 
				<div class="row">
					<div class="section-header text-center">
						<h2>Explore Courses</h2>
						<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
					</div>
				</div>
				 -->
				
				<!-- tags widget -->
				<div class="widget tags-widget">
					<a class="tag" href="#adobe">Adobe</a>
					<a class="tag" href="#microsoft">Microsoft</a>
				</div>
				<!-- /tags widget -->
				
				<!-- courses -->
				<hr class="section-hr" id="adobe">
				<div id="courses-wrapper" >
                 		
					<!-- row -->
					<div class="row" >
                        <div class="section-header text-center" >
							<h1>Adobe</h1>
						</div>
						   
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="payment_gateway.php" target="_blank" class="course-img">
									<img src="./img/photoshop.png" alt="" style="width: 50%; margin-left:25%;">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="payment_gateway.php" target="_blank" style="font-size:18px; text-align: center; margin-top:-10px; margin-bottom:-10px">Adobe Photoshop</a>
								<div class="course-details" style="margin-top:0px;">
									<!-- <span class="course-category"><button>Buy Product</button></span> -->
									<a class="main-button icon-button" href="payment_gateway.php" style="font-size:14px; 	padding: 10px 25px; display: inline; top:10px">Buy Product</a>
									<span class="course-price course-free" style="font-size:20px; margin-top:4px; padding-right:22px">₹ 16,999</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6" >
							<div class="course">
								<a href="payment_gateway.php" target="_blank" class="course-img">
									<img src="./img/illustrator.png" alt="" style="width: 50%; margin-left:25%;">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="payment_gateway.php" target="_blank" style="font-size:18px; text-align: center; margin-top:-10px; margin-bottom:-10px"><b>Adobe Illustrator</b></a>
								<div class="course-details" style="margin-top:0px;">
									<a class="main-button icon-button" href="payment_gateway.php" style="font-size:14px; 	padding: 10px 25px; display: inline; top:7px">Buy Product</a>
									<span class="course-price course-free" style="font-size:20px; margin-top:4px; padding-right:22px">₹ 12,999</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="payment_gateway.php" target="_blank" class="course-img">
									<img src="./img/after-effects.png" alt="" style="width: 50%; margin-left:25%;">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="payment_gateway.php" target="_blank" style="font-size:18px; text-align: center; margin-top:-10px; margin-bottom:-10px">Adobe After Effects</a>
								<div class="course-details" style="margin-top:0px;">
									<a class="main-button icon-button" href="payment_gateway.php" style="font-size:14px; 	padding: 10px 25px; display: inline; top:7px">Buy Product</a>
									<span class="course-price course-free" style="font-size:20px; margin-top:4px; padding-right:22px">₹ 10,999</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="payment_gateway.php" class="course-img" target="_blank">
									<img src="./img/xd.png" alt="" style="width: 50%; margin-left:25%;">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="payment_gateway.php" target="_blank" style="font-size:18px; text-align: center; margin-top:-10px; margin-bottom:-10px">Adobe XD</a>
								<div class="course-details" style="margin-top:0px;">
									<a class="main-button icon-button" href="payment_gateway.php" style="font-size:14px; 	padding: 10px 25px; display: inline; top:7px">Buy Product</a>
									<span class="course-price course-free" style="font-size:20px; margin-top:4px; padding-right:22px">₹ 8,999</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>










					<div class="row">
                        <div class="section-header text-center">
                            <h2 id="microsoft">Microsoft</h2>
                        </div>

						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="payment_gateway.php" target="_blank" class="course-img">
									<img src="./img/microsoft-excel-icon.png" alt=""  style="width: 50%; margin-left:20%;>
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="payment_gateway.php" target="_blank" style="font-size:18px; text-align: center; margin-top:-10px; margin-bottom:-10px"><b>Microsoft Excel</b></a>
								<div class="course-details" style="margin: 0px;">
									<a class="main-button icon-button" href="payment_gateway.php" style="font-size:14px; 	padding: 10px 25px; display: inline; top:10px">Buy Product</a>
									<span class="course-price course-free" style="font-size:20px; margin-top:4px; padding-right:22px">₹ 5,999</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="payment_gateway.php" target="_blank" class="course-img">
									<img src="./img/microsoft-word-icon.png" alt=""  style="width: 50%; margin-left:20%;>
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="payment_gateway.php" target="_blank" style="font-size:18px; text-align: center; margin-top:-10px; margin-bottom:-10px"><b>Microsoft Word</b></a>
								<div class="course-details" style="margin: 0px;">
									<a class="main-button icon-button" href="payment_gateway.php" style="font-size:14px; 	padding: 10px 25px; display: inline; top:10px">Buy Product</a>
									<span class="course-price course-free" style="font-size:20px; margin-top:4px; padding-right:22px">₹ 5,999</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="payment_gateway.php" target="_blank" class="course-img">
									<img src="./img/microsoft-powerpoint-icon.png" alt=""  style="width: 50%; margin-left:25%;>
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="payment_gateway.php" target="_blank" style="font-size:18px; text-align: center; margin-top:-10px; margin-bottom:-10px"><b>Microsoft Powerpoint</b></a>
								<div class="course-details" style="margin: 0px;">
									<a class="main-button icon-button" href="payment_gateway.php" style="font-size:14px; 	padding: 10px 25px; display: inline; top:10px">Buy Product</a>
									<span class="course-price course-free" style="font-size:20px; margin-top:4px; padding-right:22px">₹ 4,999</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="payment_gateway.php" target="_blank" class="course-img">
									<img src="./img/microsoft-onenote-icon.png" alt=""  style="width: 50%; margin-left:20%;>
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="payment_gateway.php" target="_blank" style="font-size:18px; text-align: center; margin-top:-10px; margin-bottom:-10px"><b>Microsoft OneNote</b></a>
								<div class="course-details" style="margin: 0px;">
									<a class="main-button icon-button" href="payment_gateway.php" style="font-size:14px; 	padding: 10px 25px; display: inline; top:10px">Buy Product</a>
									<span class="course-price course-free" style="font-size:20px; margin-top:4px; padding-right:22px">₹ 3,999</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

				</div>
				<!-- /courses -->

				<!--<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="#">More Courses</a>
					</div>
				</div>-->

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->
		<?php include 'footer.php'?>
		
</html>
