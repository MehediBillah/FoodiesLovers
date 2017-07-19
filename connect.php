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
<body style="height:100%">
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
	<div style="margin-left: 15%; margin-right: 15%;">
	<h1 style="margin-left: 35%;">Search Result</h1>
	<hr>
	</div>
	</br>
	<div style="margin-left:25%; margin-right:25%; background: white;">
		<?php
		$i=0;
		$con=mysql_connect('localhost', 'root');
		$db=mysql_select_db('foodies_lovers', $con);


		$a=$_GET['search'];

		if($a=='Ice Cream'||$a=='ice cream'||$a=='Ice cream'||$a=='icecream'||$a=='ice'){
			$a='ice_cream';
		}
		elseif($a=='Hot Coffee'||$a=='Hot coffee'||$a=='hot coffee'||$a=='hotcoffee'||$a=='Coffee'||$a=='coffee'||$a=='Cold Coffee'||$a=='Cold coffee'||$a=='cold coffee'||$a=='coldcoffee'){
			$a='coffee';
		}
		elseif($a=='Juice'||$a=='Smoothie'||$a=='Fresh Juice'||$a=='Froot Juice'||$a=='Fresh juice'||$a=='fresh juice'||$a=='freshjuice'||$a=='Froot Juice'||$a=='Froot juice'||$a=='froot juice'||$a=='frootjuice'||$a=='juice'||$a=='smoothie'){
			$a='juice';

		}
		elseif($a=='Milk Shake'||$a=='milk shake'||$a=='milkshake'){
			$a='milk_shake';
		}
		elseif ($a=='Appetizer'|| $a=='appetizer') {
			$a='appetizer';
		}
		elseif ($a=='Starter'|| $a=='starter') {
			$a='starter';
		}
		elseif ($a=='Snacks'|| $a=='snacks') {
			$a='snacks';
		}
		elseif ($a=='Burger'|| $a=='burger') {
			$a='burger';
		}
		elseif ($a=='Rice'|| $a=='rice'|| $a=='fried rice' || $a=='Fried rice') {
			$a='rice';
		}
		elseif ($a=='Set Menu'|| $a=='Set menu'|| $a=='set meny' || $a=='Package' || $a=='package' || $a=='Lunch'|| $a=='lunch' || $a=='Dinner' || $a=='dinner') {
			$a='set_menu';
		}
		elseif ($a=='Crispy Chicken'|| $a=='crispy chicken'|| $a=='Crispy chicken' || $a=='Chicken Fry' || $a=='chicken fry' || $a=='Chicken fry'|| $a=='chicken' || $a=='Chicken') {
			$a='chicken';
		}
		elseif ($a=='Beef'|| $a=='beef'|| $a=='Beef curry' || $a=='beef curry') {
			$a='beef';
		}
		elseif ($a=='Mutton'|| $a=='mutton'|| $a=='Mutton curry' || $a=='mutton curry') {
			$a='mutton';
		}
		elseif ($a=='Chinese'|| $a=='chinese'|| $a=='Chinese item' || $a=='chinese item') {
			$a='chinese';
		}
		elseif ($a=='Salad'|| $a=='salad') {
			$a='salad';
		}
		elseif ($a=='Soup'|| $a=='soup') {
			$a='soup';
		}
		elseif ($a=='Pizza'|| $a=='pizza') {
			$a='pizza';
		}
		elseif ($a=='Sandwich'|| $a=='sandwich') {
			$a='sandwich';
		}
		elseif ($a=='Noodles'|| $a=='noodlesh') {
			$a='noodles';
		}
		elseif ($a=='Dessert'|| $a=='dessert') {
			$a='dessert';
		}
		elseif ($a=='Sharma'|| $a=='sharma'|| $a=='Shawrma'|| $a=='Shawrma') {
			$a='sharma';
		}
		elseif ($a=='roll'|| $a=='Roll') {
			$a='roll';
		}
		elseif ($a=='sub'|| $a=='Sub') {
			$a='sub';
		}
		elseif ($a=='Faluda'|| $a=='faluda') {
			$a='faluda';
		}
		elseif ($a=='Cake'|| $a=='cake') {
			$a='cake';
		}
		elseif ($a=='Breakfast'|| $a=='breakfast') {
			$a='breakfast';
		}
		elseif ($a=='Kabab'|| $a=='kabab') {
			$a='kabab';
		}
		elseif ($a=='Vegetable'|| $a=='vegetable'|| $a=='veg') {
			$a='vegetable';
		}
		elseif ($a=='Vorta'|| $a=='vorta'|| $a=='smash'|| $a=='Smash') {
			$a='vorta';
		}
		elseif ($a=='Fish'|| $a=='fish'|| $a=='fish curry'|| $a=='Fish Curry') {
			$a='fish';
		}
		elseif ($a=='Steak'|| $a=='steak'|| $a=='Steak Grill'|| $a=='steak grill'|| $a=='grill') {
			$a='steak_grill';
		}
		elseif ($a=='Pasta'|| $a=='pasta') {
			$a='pasta';
		}
		elseif ($a=='Lassi'|| $a=='lassi') {
			$a='lassi';
		}
		elseif ($a=='indian food'|| $a=='Indian Food'|| $a=='indian food' || $a=='Indian food' || $a=='Indian' || $a=='indian') {
			$a='indian_food';
		}
		elseif ($a=='French Fry'|| $a=='french fry'|| $a=='French fry') {
			$a='french_fry';
		}
		elseif ($a=='Naan'|| $a=='naan'|| $a=='naan rooti') {
			$a='nan';
		}





		else
			echo "Not found!";
		

		
		$sql="SELECT item_name, price, link, restaurant FROM chilis where category='$a' UNION SELECT item_name, price, link, restaurant FROM route_6 where category='$a' UNION SELECT item_name, price, link, restaurant FROM dream_cafe where category='$a' UNION SELECT item_name, price, link, restaurant FROM flavours where category='$a' UNION SELECT item_name, price, link, restaurant FROM master_chef_bangla where category='$a' UNION SELECT item_name, price, link, restaurant FROM orders_up where category='$a' UNION SELECT item_name, price, link, restaurant FROM out_back where category='$a' UNION SELECT item_name, price, link, restaurant FROM rfc where category='$a' UNION SELECT item_name, price, link, restaurant FROM tfc where category='$a' ORDER BY price ASC ";
		$result=mysql_query($sql, $con);
		echo "<table class=table table-striped>";
		echo "<thead><tr><th>Serial no</th><th>Item Name</th><th>Price</th><th>Place</th></tr></thead>";
		echo "<tbody>";
		while ($row=mysql_fetch_array($result)) {
			$i++;
			echo "<tr>";
			echo "<td>".$i."."."</td>"."<td>".$row['item_name']."</td>"."<td>".$row['price']." TK "."</td>"."<td>".'<a href="'.$row['link'].'">'.$row['restaurant'].'</a>'."</td>";
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

