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
				        
				        	<nav class="navbar navbar-inverse custom-navbar navbar-fixed-top" data-spy="affix" data-offset-top="85">
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
							          <li class="active"><a href="index.php">Home</a></li>
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
  							
		</div>

		<!--For Image Slider-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:90%; height:40%; margin: auto; margin-top:20px;">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		      <li data-target="#myCarousel" data-slide-to="4"></li>
		      <li data-target="#myCarousel" data-slide-to="5"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox" style="height:100%; width:100%">
		      <div class="item active">
		        <img src="images/logo0.jpg" alt="IMG1" style="min-height:500px;">    
		      </div>

		      <div class="item">
		        <img src="images/logo1.jpg" alt="IMG2" style="min-height:500px;">   
		      </div>
		    
		      <div class="item">
		        <img src="images/logo2.jpg" alt="IMG3" style="min-height:500px;"> 
		      </div>

		      <div class="item">
		        <img src="images/logo3.jpg" alt="IMG4" style="min-height:500px;">   
		      </div>

		      <div class="item">
		        <img src="images/logo4.jpg" alt="IMG5" style="min-height:500px;">   
		      </div>

		      <div class="item">
		        <img src="images/logo5.jpg" alt="IMG6" style="min-height:500px;">   
		      </div>
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
		</div>
		<!--For location search-->
		<div id="location_search" class="hidden-sm hidden-xs">
			<img class="block_logo hidden-sm hidden-xs" src="images/search_logo.jpg" style="float:left;">
		    <div class="container" style="margin-left:20%; margin-top:2%;">
		    <form class="form-inline" role="form" action="connect2.php" method="get">
			    <div class="form-group" >
			      
			      <input type="text"  class="form-control" name="search1" placeholder="restaurant" size="70">
			    </div>
			    <div class="form-group" style="margin-left:10px;">
			
			      <input type="text" class="form-control" name="search2" placeholder="place" size="30">
			    </div>
			    <button type="submit" name="submit" id="submit" class="btn btn-default">Search</button>
		  	</form>
			</div>
		</div>
		
		<!--New in Town-->
		<div id="new_in_town">
				<h3 class="visible-sm visible-xs">New in town</h3>
				<hr class="visible-sm visible-xs">
				<img class="block_logo hidden-sm hidden-xs" src="images/new_in_town_logo.jpg" style="float:left;">
				<div class="row">
			    <div class="col-lg-3 col-md-3 col-sm-3" style="background-color:lavender; margin:auto; margin-left: 5px; height: 100%;">
			    <h1><a href="#">Face Food</a></h1>
			    <img src="images/facefood.jpg" style="height:100px; width:100%; ">
			    <p>
			    	<ul>
			    		<li>Thai</li>
			    		<li>Chinese</li>
			    		<li>Australian Thai</li>
			    		<li>Singaporean Chinese</li>
			    		<li>Party Center</li>
			    		<li>Catering Service</li>
			    		<li>Kids Zone</li>
			    		<li>Free wifi zone</li>
			    		<li>Fully air conditioned</li>
			    		<li>Home delivery</li>
			    	</ul>
			    	</br>
			    </p>
			    </div>

			    <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs" style="background-color:lavender; margin:auto; margin-left: 5px;">
			    	<h1><a href="route6.php">ROUTE 6 De Lounge</a></h1>
			    	<img src="images/r6de.jpg" style="height:100px; width:100%; ">
				    <p>
				    	Route 6 de lounge will be in operation from 13th April.On bealf of R6L its our pleasure to invite every one to visit us and enjoy our premium quality Thai Food. It will be serving authentic thai food here.<br><br><br><br><br><br><br><br><br>
				    </p>
			    </div>
			    <!--<div class="col-lg-3 col-md-3 col-sm-3 hidden-sm hidden-xs" style="background-color:lavender; margin:auto; margin-left: 5px;">
			    	<h1>restaurant 3</h1>
			    	<img src="images/r.jpg" style="height:100px; width:100%; ">
				    <p>
				    	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	
				    </p>
			    </div>-->
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