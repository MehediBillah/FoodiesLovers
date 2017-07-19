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


	
		<div style="margin-left: 15%; margin-right: 20%;">
		<h1>Review <?php
			$a=$_POST['review'];
				$con=mysql_connect('localhost', 'root', '01718313636');
				$db=mysql_select_db('foodies_lovers', $con);
				$sql="SELECT restaurant From address where rv='$a'";
				$result=mysql_query($sql, $con);
				$row=mysql_fetch_array($result);
				echo $row['restaurant'];
			?></h1>
			<hr>
		</div>



		
			

		<div style="margin-left:20%; margin-right:25%; background: white;">

		<div id="formbox" style="padding:2%">
		  <form role="form" id="Feedback" method="post" action="all_reviews.php">

		  
		  <input type="radio" name="restaurant" value="<?PHP echo $_POST['review']; ?>" class="hidden-xs hidden-sm hidden-md hidden-lg" checked="checked" />



		  <div class="stars" style="margin-left: 2%;">
		    <input class="star star-5" id="star-5" type="radio" name="star" value="5" />
		    <label class="star star-5" for="star-5"></label>
		    <input class="star star-4" id="star-4" type="radio" name="star" value="4" />
		    <label class="star star-4" for="star-4"></label>
		    <input class="star star-3" id="star-3" type="radio" name="star" value="3" />
		    <label class="star star-3" for="star-3"></label>
		    <input class="star star-2" id="star-2" type="radio" name="star" value="2" />
		    <label class="star star-2" for="star-2"></label>
		    <input class="star star-1" id="star-1" type="radio" name="star" value="1" />
		    <label class="star star-1" for="star-1"></label>
		</div>
		</br>

		<label for="item">Select Item:</label>
      	<select class="form-control" id="item" name="item">
		<?php
		

			$con=mysql_connect('localhost', 'root', '01718313636');
			$db=mysql_select_db('foodies_lovers', $con);
			$a=$_POST['review'];

			$sql="SELECT item_name From $a";
			$result=mysql_query($sql, $con);
			while ($row=mysql_fetch_array($result)) {
				echo "<option value=\"".$row["item_name"]."\">".$row["item_name"]."</option>";
				/*echo '<option>'.$row['item_name'].'</option>';*/
			}
		?>
		</select>
		    <div class="form-group">
		      <label for="username" style="margin-top:2%">Name:</label>
		      <input type="text" class="form-control" id="username" name="username" placeholder="Enter Youe Name">
		    </div>
		    <div class="form-group">
		      <label for="email">Email:</label>
		      <input type="email" id="email" class="form-control" placeholder="Enter email" name="email">
		    </div>
		    <div class="form-group">
		      <label for="feedback">Feedback</label>
		      <textarea class="form-control" rows="5" name="feedback" id="feedback">Enter your comment here....</textarea>
		    </div>
		    <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
		  </form>
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