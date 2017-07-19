<!DOCTYPE html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Foodies Lovers</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> <!--Including the minified version of css For Bootstrap-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
			.affix {
		      top: 0;
		      width: 100%;
		      -webkit-transition: all .5s ease-in-out;
		      transition: all .5s ease-in-out;
		  }
		  .affix-top {
		      position: static;
		      top: -35px;
		  }
		  .affix + .container-fluid {
		      padding-top: 70px;
		  }
		</style>
	</head>
	<body>
		<div id="header">        
				        <img class="hidden-sm hidden-xs"  src="images/2nd_logo.jpg" style="width:100%; height:50%; background-repeat:no-repeat;">
				        
				        	<nav class="navbar navbar-inverse custom-navbar">
							    <div class="container-fluid">
							      <div class="navbar-header">
							      <div class="visible-sm visible-xs">
								        <form  action="connect.php" method="get" class="navbar-form navbar-right" style="padding-right:20px;">
										   <div class="input-group">
										       <input type="text" name="search" placeholder="Search..." class="form-control" />
										       <div class="input-group-btn">
										           <button class="btn btn-info" type="submit">
										           <span class="glyphicon glyphicon-search"></span>
										           </button>
										       </div>
										   </div>
										</form>
										</div>
							        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							          <span class="icon-bar"></span>
							          <span class="icon-bar"></span>
							          <span class="icon-bar"></span>                        
							        </button>
							      </div>
							      <div class="collapse navbar-collapse" id="myNavbar">
							        <ul class="nav navbar-nav">
							          <li><a href="index.php">Home</a></li>
							          <li><a href="gallery.php">Restaurants</a></li>
							          <li><a href="deals.php">Deals</a></li>
							          <li><a href="foodographies.php">Foodographies</a></li>
							          <li><a href="all_reviews.php">Review</a></li>
							        </ul>
							        <div class="hidden-sm hidden-xs">
								        <form  action="connect.php" method="get" class="navbar-form navbar-right" style="padding-right:20px;">
										   <div class="input-group">
										       <input type="text" name="search" placeholder="Search..." class="form-control" />
										       <div class="input-group-btn">
										           <button class="btn btn-info" type="submit">
										           <span class="glyphicon glyphicon-search"></span>
										           </button>
										       </div>
										   </div>
										</form>
										</div>
							      </div>
							    </div>
  							</nav>
  							
				  <nav class="navbar navbar-inverse custom-navbar navbar-fixed-top" data-spy="affix" data-offset-top="100" style="background:red">
				  <a><img class="hidden-sm hidden-xs" src="images/chilis.jpg" style="height:50px; width:200px; float:right"></a>
				        <ul class="nav navbar-nav">
				          <li class="active"><a href="chilis.php">Chilis Home</a></li>
				          <li><a href="chilis_menu.php">Menu List</a></li>
				        </ul>
				    </div>
				  </nav>

		</div>
				   
		<div id="chilis_map">
			<h1>Chili's Fast Food</h1>
			<hr/>
			<form role="form" method="post" action="review.php">
			<input type="radio" name="review" value="chilis" class="hidden-xs hidden-sm hidden-md hidden-lg" checked="checked" />
			<button type="submit" class="btn btn-success">Review</button><hr>
			</form>
			<div class="map-responsive">
		    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3634.5037100742093!2d88.60080591440058!3d24.36377472098541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xb19f4c48690cb01a!2sChili&#39;s+Fast+Food!5e0!3m2!1sen!2sbd!4v1458879551837" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		    </div>
		</div>

		<!--Footer-->
		<div id="footer" style="margin-top: 0%">
			<h1 style="padding:2px;">About Us</h1>
			<hr style="border-top: 1px solid #ccc; margin-right:80%;">
			</br>
			<p>This is just a demo version.For any information/querry contact us.
				e-mail:foodies_lovers@gmail.com
			</p>
			<p>ALL RIGHTS RESERVED.</p>
		</div>
		<script src="js/jquery.js"></script><!--Including the jquery For Bootstrap-->
		<script src="js/bootstrap.min.js"></script> <!--Including the javascript minified version For Bootstrap-->
	</body>
</html>