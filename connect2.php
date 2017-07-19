<!DOCTYPE html>
<html>
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
			div.stars {

			  width: 270px;
			  display: inline-block;
			}

			input.star { display: none; }

			label.star {
			  float: right;
			  padding: 10px;
			  font-size: 36px;
			  color: #444;
			  transition: all .2s;
			}

			input.star:checked ~ label.star:before {
			  content: '\f005';
			  color: #FD4;
			  transition: all .25s;
			}

			input.star-5:checked ~ label.star:before {
			  color: #FE7;
			  text-shadow: 0 0 20px #952;
			}

			input.star-1:checked ~ label.star:before { color: #F62; }

			label.star:hover { transform: rotate(-15deg) scale(1.3); }

			label.star:before {
			  content: '\f006';
			  font-family: FontAwesome;
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
	</br>
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
		</br>
	<div style="margin-left: 15%; margin-right: 15%;">
	<h1 style="margin-left: 35%;">Search Result</h1>
	<hr>
	</div>
	</br>
	<div style="margin-left:25%; margin-right:25%; background: white;">
	<?php
		$i=0;
		$con=mysql_connect('localhost', 'root', '01718313636');
		$db=mysql_select_db('foodies_lovers', $con);


		$a=$_GET['search1'];

		if($a=='Chili\'s Fast Food'||$a=='Chilis Fast Food'||$a=='Chilis'||$a=='chilis' ||$a=='chilis fast food'){
			$a='chilis';
		}
		elseif($a=='Route 6'||$a=='route 6'||$a=='route_6'||$a=='route_6'||$a=='route six'||$a=='route6'||$a=='Route6'){
			$a='route_6';
		}
		elseif($a=='TFC -First Food & Chinese Restaurant'||$a=='TFC'||$a=='tfc'){
			$a='tfc';
		}
		elseif($a=='RFC'||$a=='RFC Restaurant'||$a=='rfc'||$a=='rfc restaurant'){
			$a='rfc';
		}
		elseif($a=='Orders Up'||$a=='OrdersUp'||$a=='Ordersup'||$a=='ordersup'||$a=='orders_up'){
			$a='orders_up';
		}
		elseif($a=='Flavours'||$a=='flavours'){
			$a='flavours';
		}
		elseif($a=='Dream Cafe'||$a=='Dream cafe'||$a=='dream cafe'||$a=='dreamcafe'||$a=='dream_cafe'){
			$a='dream_cafe';
		}
		elseif($a=='Master Chef Bangla'||$a=='Master Chef'||$a=='master chef bangla'||$a=='master chef'||$a=='Master chef bangla'||$a=='master_chef_bangla'||$a=='master_chef'){
			$a='master_chef_bangla';
		}
		elseif($a=='OUT BACK fast food & cafe'||$a=='Outback'||$a=='Out Back'||$a=='out back'||$a=='outback'||$a=='out_back'){
			$a='out_back';
		}
		
		

		$b=$_GET['search2'];

		if($b=='bazar'||$b=='Shaheb Bazar'||$b=='Shaheb bazar'||$b=='Alupatti'||$b=='shaheb bazar'||$b=='alupatti'||$b=='Bazar'){
			$b='bazar';
		}

		elseif($b=='alokar_more'||$b=='Alokar More'||$b=='Alokar more'||$b=='alokar more'||$b=='alokarmore'){
			$b='alokar_more';
		}
		elseif($b=='kazla'||$b=='Kazla'||$b=='Kajla'||$b=='kajla'||$b=='Talaimari'||$b=='talaimari'){
			$b='kazla';
		}
		
		

	
		

		
		$sql="SELECT * FROM address where rv='$a' or pv='$b'";
		$result=mysql_query($sql, $con);
		echo "<table class=table table-striped>";
		echo "<thead><tr><th>Serial no</th><th>Restaurant</th><th>Place</th><th>Location</th><th>Details</th></tr></thead>";
		echo "<tbody>";
		while ($row=mysql_fetch_array($result)) {
			$i++;
			echo "<tr>";
			echo "<td>".$i."."."</td>"."<td>".$row['restaurant']."</td>"."<td>".$row['place']."</td>"."<td>".$row['location']."</td>"."<td>".'<a href="'.$row['link'].'">'.'Click Here'.'</a>'."</td>";
			echo "<tr>";
		}
		echo "</tbody>";
		echo "</table>";
		

		
	?>
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

