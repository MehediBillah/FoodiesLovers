<!DOCTYPE html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Foodies Lovers</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> <!--Including the minified version of css For Bootstrap-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style>
			hr {
		    display: block;
		    height: 1px;
		    border: 0;
		    border-top: 1px solid #ccc;
		    margin: 1em 0;
		    padding: 0; 
			}
		</style>
	</head>
	<body>
		<div id="header">    

				  <nav class="navbar navbar-inverse custom-navbar navbar-fixed-top" style="background:red">
				  <a><img class="hidden-sm hidden-xs" src="images/route6.jpg" style="height:50px; width:200px; float:right"></a>
				        <ul class="nav navbar-nav">
				          <li><a href="route6.php">Route 6 Home</a></li>
				          <li class="active"><a href="route6_menu.php">Menu List</a></li>
				        </ul>
				    </div>
				  </nav>
		</div>
		</br>
		</br>
		<div style="margin-left: 15%; margin-right: 15%;">
		<h1 style="margin-left: 40%;">Menu</h1>
		<hr>
		</div>
		</br>
		<div style="margin-left:25%; margin-right:25%; background: white;">
		<?php
		$i=0;
		$con=mysql_connect('localhost', 'root', '01718313636');
		$db=mysql_select_db('foodies_lovers', $con);

		
		$sql="SELECT item_name, price, link, restaurant FROM route_6";
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