<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css/style.css" />
</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="booking-cta">
							<h1>Booking For Sanitization</h1>
							<p>Fill the form and make an appointment for Sanitize your home and workplace.</p>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<div class="booking-form">
							<form method="POST">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" name="name" type="text">
											<span class="form-label">Name</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" name="email" type="email">
											<span class="form-label">Email</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" name="phone" type="tel">
											<span class="form-label">Phone</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" name="address" type="text">
											<span class="form-label">Address</span>
										</div>
									</div>
								<div class="form-btn">
									<button class="submit-btn" type="submit">Book Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- PHP part -->
	<?php
		require "connection.php";
		
		$name = $_POST["name"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$address = $_POST["address"];

		$sql = "INSERT INTO `customerdata` (`Name`, `Email`, `Phone`, `Address`) VALUES ('$name', '$email', '$phone', '$address')";

		if (mysqli_query($connection,$sql)) {
			echo "<h2>Sucess</h2><br>";
		}
		else {
			echo "<h2>Form not submit</h2><br>";
		}
		mysqli_close($connection);
	?>
	
</body>

</html>