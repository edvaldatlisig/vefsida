<?php 
include 'include/config.php'; 
?>
<!doctype html>
<html lang="en">

<head>
	<title><?php echo($all['titill']); ?></title>
	<?php style(); ?>
</head>
<style type="text/css">
#map_canvas{
    width:100%;
    height:40em !important;
}

</style>


<body>
<div id="preloader">
	<div id="status"></div>
</div>
<div>
	<header>
	<?php nav(); ?>
	</header>
	<body>
	
	
		<div class="container-fluid marketing" id="features">
		<div class="bil"></div>
		<!-- Lína á milli div'a -->
<!-- 		<hr class="featurette-divider">
 -->		<!-- / Lína á milli div'a -->
	
      <!-- 3 Columns -->
    	
	      <div class="3columns row center">
	        <div class="col-lg-4">
	          <div class="hringur center"><i class="fa fa-car fa-5x"></i></div>
	          <h2>Great Selection</h2>
	          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	      						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	      						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	      						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	      						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	      						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
	      </div><!-- /.col-lg-4 -->
	        <div class="col-lg-4">
	          <div class="flugvel center"><i class="fa fa-plane fa-5x"></i></div>

	          <h2>Shipping</h2>
	          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	      						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	      						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	      						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	      						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	      						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
	        </div><!-- /.col-lg-4 -->
	        <div class="col-lg-4">
	          <div class="checkfont center"><i class="fa fa-check-circle fa-5x"></i></div>
	          <h2>Guarantees</h2>
	          	          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	      						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	      						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	      						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	      						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	      						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
	        </div><!-- /.col-lg-4 -->
	      </div><!-- /.row -->

	        <!--  <div class="bil"></div> -->
	        <hr class="featurette-divider">

		<div class="row">
    <div class="col-md-6">
        <div class="col-xs-3 large-icon text-center red"><i class="fa fa-phone fa-5x"></i></div>
        <div class="col-xs-9 call">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="red">8224166</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="col-xs-3 large-icon text-center"><i class="fa fa-users fa-5x"></i></div>
        <div class="col-xs-9 users">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
            <p class="red">699</p>
        </div>
    </div>
</div>
</div><!-- /.col-lg-4 -->

	      <!-- Lína á milli div'a -->
		<div class="bil"></div>
		<!-- / Lína á milli div'a -->
	      </div>
	     <div class="main-body">
	     	
	     </div>		     
		   <div class="container-fluid marketing ">
				<h2 class="text-center">ORDER BMW</h2>
			<form action="email.php" method="post" id="contact-form">
			<div style="margin:0;padding:0;display:inline">    
				<div class="row contact-form mt80">
			       		 <div class="col-md-6">
				       		   <label>First Name:</label>
				       		   <input type="text" id="name" name="firstname" class="form-control" required patttern="[a-zA-Z0-9]+"/>
				       		   <label>Last Name: </label>
				       		   <input type="text" name="lastname" class="form-control" required patttern="[a-zA-Z0-9]+"/>
				       		   <label>Email:</label>
				       		   <input type="email" id="email" name="email" class="form-control" required/>
			       		 </div>
			       		 <div class="col-md-6">
				       		 	<label>Phone:</label>
				       		   	<input type="phone" name="phone number" class="form-control" required/>
				       		   	<label>Color:</label>  
				       		   	<div class="controls">
                   					<select name="Type" class="form-control" required>
	                   					<option value="M1">M1</option>
	                   					<option value="M2">M2</option>
	                   					<option value="M3">M3</option>
	                   					<option value="M4">M4</option>
	                   					<option value="M5">M5</option>
                   					</select>
                   				</div>
				       		   	<label>Type:</label>  
				       		   	<div class="controls">
                   					<select name="Type" class="form-control" required>
	                   					<option value="M1">M1</option>
	                   					<option value="M2">M2</option>
	                   					<option value="M3">M3</option>
	                   					<option value="M4">M4</option>
	                   					<option value="M5">M5</option>
                   					</select>
                   				</div>
				       		   <div class="bil"></div>
				       		   <input type="submit" value="Submit" class="btn btn-danger btn-lg" required/>      
			       		 </div>
	      			</div>
	      		</div>
			</form>
			</div>
	      <div class="bil"></div>
		     <!-- <div class="t-bg"> -->

	     	<!-- Count to start -->
				<section class="module bg-dark-60 t-bg"  data-background="http://i.imgur.com/T5ylW4g.jpg">
			<div class="container">

				<div class="row">

					<div class="col-sm-6 col-sm-offset-3">

						<h2 class="module-title font-alt">Features</h2>

					</div>

				</div><!-- .row -->

				<div class="row multi-columns-row">

					<!-- CountTo start -->
					<div class="col-sm-6 col-md-3 col-lg-3">
						<div class="count-item mb-sm-40">
							<div class="count-icon">
								<i class="fa fa-tachometer"></i>
							</div>
							<h3 class="count-to font-alt"><?php echo(rand(1000,7000)); ?></h3>
							<h5 class="count-title font-serif">Cars Sold Last Week</h5>
						</div>
					</div>
					<!-- CountTo end -->

					<!-- CountTo start -->
					<div class="col-sm-6 col-md-3 col-lg-3">
						<div class="count-item mb-sm-40">
							<div class="count-icon">
								<i class="fa fa-globe"></i>
							</div>
							<h3 class="count-to font-alt"><?php echo(rand(1,10)); ?></h3>
							<h5 class="count-title font-serif">We ship Glopal</h5>
						</div>
					</div>
					<!-- CountTo end -->

					<!-- CountTo start -->
					<div class="col-sm-6 col-md-3 col-lg-3">
						<div class="count-item mb-sm-40">
							<div class="count-icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<h3 class="count-to font-alt"><?php echo(rand(100,200)); ?></h3>
							<h5 class="count-title font-serif">Headquarters</h5>
						</div>
					</div>
					<!-- CountTo end -->

					<!-- CountTo start -->
					<div class="col-sm-6 col-md-3 col-lg-3">
						<div class="count-item mb-sm-40">
							<div class="count-icon">
								<i class="fa fa-truck"></i>
							</div>
							<h3 class="h3talaupp count-to font-alt"> <?php echo(rand(1,50)); ?> </h3>
							<h5 class="count-title font-serif">Free shiping</h5>
						</div>
					</div>
					<!-- CountTo end -->

				</div><!-- .row -->

			</div>
		</section>
		<!-- Count to end -->
		<!-- Subscribe start -->
		<section class="module-small bg-dark">
			<div class="container">

				<div class="row">

					<div class="col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">

						<div class="callout-text font-alt">
							<h3 class="callout-title">Subscribe now</h3>
							We will not spam your email.
						</div>

					</div>

					<div class="col-sm-6 col-md-6 col-lg-4">

						<div class="callout-btn-box">

							<form id="subscription-form" role="form">
								<div class="input-group">
									<input type="email" id="semail" name="semail" class="form-control" placeholder="Your Email" required data-validation-required-message="Please enter your email address.">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-g btn-round">Submit</button>
									</span>
								</div>
							</form>

							<!-- Ajax response -->
							<div id="subscription-response" class="ajax-response"></div>

						</div>

					</div>

				</div><!-- .row -->

			</div>
		</section>
		<!-- Subscribe end -->


	     	<!-- </div> -->
	     	<div class="container-fluid marketing">
                <div class="row mb-60">
                    	<div class="col-sm-8 col-sm-offset-2">
                    	<h2 class="text-center">NEWS</h2>
                    	<?php
					            $query = 'SELECT * FROM `post` WHERE ID > 0 ORDER BY ID DESC LIMIT 3 ';
					            $result = mysqli_query($db, $query) or die("Nigga u dead");
					            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					                echo "<h2>";
					                echo $row['title'];
					                echo "</h2>";
					                echo "<p>";
					                echo $row['body'];
					                echo "</p>";
					            }
					 ?>
                    </div>
                </div>
            </div>

	     	<div class="container-fluid marketing">
				<div class="Flexible-container">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1740.1692387547532!2d-21.92493400000003!3d64.141348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48d674cb65ecde75%3A0x11daee4c4c757a2f!2zVMOma25pc2vDs2xpbm4!5e0!3m2!1sen!2sis!4v1428439248896" frameborder="0" style="border:0"></iframe>				
				</div>
				<div class="bil"></div>
	     	</div>


      <!-- Widgets start -->

		<div class="module-small bg-dark">
			<div class="container">
	
				<div class="row">
	
					<div class="col-sm-3">
	
						<!-- Widget start -->
						<div class="widget">
							<h5 class="widget-title font-alt">About BMW</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
							<p>Email: <a href="mailto:bmw@bmw.com">bmw@bmw.com</a></p>
						</div>
						<!-- Widget end -->
	
					</div>
	
					<div class="col-sm-3">
	
						<!-- Widget start -->
						<div class="widget">
							<h5 class="widget-title font-alt">Recent Reviews</h5>
							<ul class="icon-list">
								<li>Aron on <a href="#">Lorem ipsum dolor sit amet</a></li>
								<li>Eddi on <a href="#">Lorem ipsum dolor sit amet</a></li>
								<li>Oliver on <a href="#">Lorem ipsum dolor sit amet</a></li>
								<li>Aron on <a href="#">Lorem ipsum dolor sit amet</a></li>
								<li>Eddi on <a href="#">Lorem ipsum dolor sit amet</a></li>
							</ul>
						</div>
						<!-- Widget end -->
	
					</div>
	
					<div class="col-sm-3">
	
						<!-- Widget start -->
						<div class="widget">
							<h5 class="widget-title font-alt">Categories</h5>
							<ul class="icon-list">
								<li><a href="#">Design - 5</a></li>
								<li><a href="#">Marketing - 100</a></li>
								<li><a href="#">Feelings - 16</a></li>
							</ul>
						</div>
						<!-- Widget end -->
	
					</div>
	
					<div class="col-sm-3">
	
						<!-- Widget start -->
						<div class="widget">
							<h5 class="widget-title font-alt">Popular Pictures</h5>
							<ul class="widget-posts">
	
								<li class="clearfix">
									<div class="widget-posts-image">
										<a href="#"><img src="http://i.imgur.com/D6LRmhi.jpg" alt=""></a>
									</div>
									<div class="widget-posts-body">
										<div class="widget-posts-title">
											<a href="#">Black BMW</a>
										</div>
										<div class="widget-posts-meta">
											7 April
										</div>
									</div>
								</li>
	
								<li class="clearfix">
									<div class="widget-posts-image">
										<a href="#"><img src="http://i.imgur.com/7LWDCXa.jpg" alt=""></a>
									</div>
									<div class="widget-posts-body">
										<div class="widget-posts-title">
											<a href="#">Blue BMW</a>
										</div>
										<div class="widget-posts-meta">
											7 April
										</div>
									</div>
								</li>
	
							</ul>
						</div>
						<!-- Widget end -->
      
</div>
<div class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-double-up"></i></a>
	</div>
<?php script(); ?>
</body>
</html>