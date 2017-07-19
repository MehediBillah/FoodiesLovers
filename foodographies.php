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
		  hr {
		    display: block;
		    height: 1px;
		    border: 0;
		    border-top: 1px solid #ccc;
		    margin: 1em 0;
		    padding: 0; 
			}
			table, td {
			    border: 50px solid white;
			    border-collapse: collapse;
				}

			td {
			    text-align: left;    
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
							          <li><a href="index.php">Home</a></li>
							          <li><a href="gallery.php">Restaurants</a></li>
							          <li><a href="deals.php">Deals</a></li>
							          <li class="active"><a href="foodographies.php">Foodographies</a></li>
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

		<!--For restaurant & location search-->
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
		<div style="margin-left: 15%; margin-right: 20%;">
			<h1>Foods of Restaurants In Rajshahi</h1>
			<hr>
		</div>

		<div style="margin-left:30%; margin-right:25%; background: white;">
			<table>
				<tr>
				<td><h4>Chicken Cashew Nut Salad</h4><h4>Price:180/-</h4><h5><a href="flavours.php">Flavours</h5><img src="images/pic1.png" style="width:350px; height:120px; "></a></td>
				</tr>
				<tr>
				
				</td>
				<td><h4>Package-07</h4><h4>price:99/-</h4><h5><a href="dream_cafe.php">Dream Cafe</h5><img src="images/pic2.png" style="width:350px; height:120px;"></a></td>
				</tr>
				<tr>
				
				</td>
				<td><h4>Mango Smoothie</h4><h4>price:80/-</h4><h5><a href="route6.php">Route 6</h5><img src="images/pic3.png" style="width:350px; height:150px;"></a></td>
				</tr>
				<tr>
				
				</td>
				<td><h4>Beef Burger With French Fry</h4><h4>Price:210/-</h4><h5><a href="flavours.php">Flavours</h5><img src="images/pic4.png" style="width:250px; height:270px;"></a></td>
				</tr>
			</table>
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