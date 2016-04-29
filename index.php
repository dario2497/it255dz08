<?php

session_start();
include("php/functions.php");

if(isset($_POST['submit'])){
	
	$username = $conn->real_escape_string($_POST['username']);
	$password = $_POST['password'];
	
		if(!empty($username) && !empty($password)){
				if(checkPerson($username,$password)){
							$_SESSION['username'] = $username;
				}else{
						echo "Pogresan username ili password";
					}
		}else{
				echo "Niste uneli sve podatke";
			}
		}
		
		if(isset($_SESSION['username'])){
				?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>MetHotel</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">

		<link href="css/styles.css" rel="stylesheet">

		<script src="js/jquery.js"></script>

		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>

		<div class="brand">
			MetHotel
		</div>

		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">MetHotel</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="#index.php">Home</a>
						</li>
						<li>
							<a href="#rooms.php">Rooms</a>
						</li>
						<li>
							<a href="#gallery.php">Gallery</a>
						</li>
						<li>
							<a href="#reservations.php">Reservations</a>
						</li>
					</ul>
				</div>

			</div>

		</nav>

		<div class="container">

			<div class="row">
				<div class="box">
					<div class="col-lg-12 text-center">
						<div id="carousel-example-generic" class="carousel slide">

							<div class="carousel-inner">
								<div class="item active">
									<img class="img-responsive img-full" src="img/slide.jpg" alt="">
								</div>

							</div>

							<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="icon-prev"></span> </a>
							<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="icon-next"></span> </a>
						</div>

					</div>
				</div>
			</div>

			<div class="row">
				<div class="box">
					<div class="col-lg-12">
						<hr>
						<h2 class="intro-text text-center">Welcome to
						<br>
						<strong> METHOTEL</strong></h2>
						<hr>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Nunc placerat diam quis nisl vestibulum dignissim.
							In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus.
							Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</p>

					</div>
				</div>
			</div>

		</div>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p>
							Copyright &copy; Dario
						</p>
					</div>
				</div>
			</div>
		</footer>

	</body>

</html>

<?php

}
else{
	header("location: login.php");
}

?>
		
			
