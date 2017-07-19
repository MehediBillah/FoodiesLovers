<!DOCTYPE html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Foodies Lovers</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> <!--Including the minified version of css For Bootstrap-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
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
	<body style="height:100%;">

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
							          <li class="active"><a href="all_reviews.php">Review</a></li>
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

		<div style="margin-left: 15%; margin-right: 20%;">
			<h1>Reviews of Restaurants in Rajshahi</h1>
			<hr>
		</div>


		<div style="margin-left:15%; margin-right:20%; background: white;">
		
		
		
			<?php
		
				$con=mysql_connect('localhost', 'root');
				$db=mysql_select_db('foodies_lovers', $con);

				
				$sql="SELECT * FROM reviews ORDER BY sl DESC";
				$result=mysql_query($sql, $con);
				
				echo "<div class=container-fluid>";
				while (1) {

				$trv=$row['restaurant'];
				$sql2="SELECT * FROM address where rv= '$trv'";
				$result2=mysql_query($sql2, $con);
				$row2=mysql_fetch_array($result2);
				echo "<h1>";
				echo $row2['restaurant'];
				echo "</h1>";
				$rate=$row['rating']*10;
				echo "<span class=\"rating-static rating-$rate\"></span>";
				
				echo "<h4>";
				echo $row['item_name'];
				echo "</h4>";

				echo "<h5>";
				echo "Reviewed By:".$row['name'];
				echo "</h5>";

				echo "<p>";
				echo $row['comment'];
				echo "</p>";
				
				}



				echo "</div>";
			?>

			
		</div>



		<!--Footer-->
		<div id="footer" style="margin-top: 8%">
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
	<?php

			$con=mysql_connect('localhost', 'root', '01718313636');
			if (!$con) {
			  die('Error: '.mysql_error());
			}

			mysql_select_db('foodies_lovers', $con);

			if (isset($_POST['submit'])) {
			  
			    $username = $_POST['username'];
			    $rating=  $_POST['star'];
			    $feedback = $_POST['feedback'];
			    $item=$_POST['item'];
			    $restaurant=$_POST['restaurant'];
			    $email=$_POST['email'];

			   

			   if(mysql_query("INSERT INTO reviews(restaurant, item_name, rating, name, email, comment)VALUES('$restaurant','$item','$rating','$username','$email','$feedback')"))
			     {
			?>
			            <script>alert('Submitted Successfully! ');</script>
			<?php
			     }
			  } 

			mysql_close($con);
			        
			      
		?>