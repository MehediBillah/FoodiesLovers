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
							          <li class="active"><a href="gallery.php">Restaurants</a></li>
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
		<div style="margin-left: 15%; margin-right: 20%;">
			<h1>Restaurants in Rajshahi</h1>
			<hr>
		</div>
		<div style="margin-left:30%; margin-right:25%; background: white;">
			<table>
				<tr>
				<td><a href="chilis.php"><img src="images/chilis.jpg" style="width:150px; height:100px; "></a></td>
				<td><h2><u><a href="chilis.php">Chili's Fast Food</a></u></h2>
				<p>
					It is a Fast food, Pastry and Ice Cream Parlour.
				</p>
				</td>
				</tr>
				<tr>
				<td><a href="route6.php"><img src="images/route6.jpg" style="width:150px; height:100px;"></a></td>
				<td><h2><u><a href="route6.php">Route 6</a></u></h2>
				<p>
					It is a Smoothie and Ice Cream Parlour.
				</p>
				</td>
				</tr>
				<tr>
				<td><a href="tfc.php"><img src="images/tfc.jpg" style="width:150px; height:100px;"></a></td>
				<td><h2><u><a href="tfc.php">TFC -First Food & Chinese Restaurant</a></u></h2>
				<p>
					It is a Fast food and Indian Food Restaurant.
				</p>
				</td>
				</tr>
				<tr>
				<td><a href="rfc.php"><img src="images/rfc.jpg" style="width:150px; height:100px;"></a></td>
				<td><h2><u><a href="rfc.php">RFC</a></u></h2>
				<p>
					It is a Fast food, Chinese and Indian Food Restaurant.
				</p>
				</td>
				</tr>
				<tr>
				<td><a href="orders_up.php"><img src="images/orders_up.jpg" style="width:150px; height:100px;"></a></td>
				<td><h2><u><a href="orders_up.php">Orders Up</a></u></h2>
				<p>
					It is a Fast food & Chinese Food Restaurant.
				</p>
				</td>
				</tr>
				<tr>
				<td><a href="flavours.php"><img src="images/flavours.jpg" style="width:150px; height:100px;"></a></td>
				<td><h2><u><a href="flavours.php">Flavours</a></u></h2>
				<p>
					It is a Fast food, Smoothies & Continental Food Restaurant.
				</p>
				</td>
				</tr>
				<tr>
				<td><a href="dream_cafe.php"><img src="images/dream.jpg" style="width:150px; height:100px;"></a></td>
				<td><h2><u><a href="dream_cafe.php">Dream Cafe</a></u></h2>
				<p>
					It is a Fast food & Chinese Food Restaurant.
				</p>
				</td>
				</tr>
				<tr>
				<td><a href="master_chef.php"><img src="images/master.jpg" style="width:150px; height:100px;"></a></td>
				<td><h2><u><a href="master_chef.php">Master Chef Bangla</a></u></h2>
				<p>
					It is a Fast food & Bangla Food Restaurant.
				</p>

				</td>
				</tr>

				<tr>
				<td><a href="out_back.php"><img src="images/out_back.jpg" style="width:150px; height:100px;"></a></td>
				<td><h2><u><a href="out_back.php">OUT BACK fast food & cafe</a></u></h2>
				<p>
					It is a Fast food & Chinese Food Restaurant.
				</p>

				</td>
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