<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Contact - MetHotel</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">

		<link href="css/styles.css" rel="stylesheet">

		<script src="js/jquery.js"></script>

		<script src="js/bootstrap.min.js"></script>

	</head>

	<body>

		<div class="brand">
			MetHotel
		</div>

		
		<div class="container">

			<div class="row">
				<div class="box">
					<div class="col-lg-12">
						<hr>
						<h2 class="intro-text text-center">SignUp</h2>
						<hr>
						
						<form role="form" action="php/reg.php" method="POST">
							<div class="row">
								<div class="form-group col-lg-4">
									<label>Name</label>
									<input type="text" name="name" class="form-control">
								</div>
								<div class="form-group col-lg-4">
									<label>Lastname</label>
									<input type="text" name="lastname" class="form-control">
								</div>
								<div class="form-group col-lg-4">
									<label>Username</label>
									<input type="text" name="username" class="form-control">
								</div>
								<div class="form-group col-lg-4">
									<label>Email</label>
									<input type="text" name="email" class="form-control">
								</div>
								<div class="form-group col-lg-4">
									<label>Password</label>
									<input type="password" name="password" class="form-control">
								</div>
								
								<div class="form-group col-lg-12">
									<button type="submit" name="submit" class="btn btn-default">Submit</button>
								</div>
								
							</div>
						</form>
						<a href="login.php">SignIn</a>
					</div>
				</div>
			</div>

		</div>

		

	</body>

</html>
