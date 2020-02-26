<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="css/styles.css">
		<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Noto+Sans+SC" rel="stylesheet">
		<title>D&amp;D Industrial - Contact</title>
	</head>
	<body>
	<?php require("email.php")?>
		<header>
			<img id='banner' src='images/banner.jpg' alt='guy welding banner'>
		</header>
		
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark">
				<a class="navbar-brand" href="index.html">D&amp;D Industrial Inc.</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="contact.html">Contact</a>
					</li>
				</ul>
				</div>
			</nav>
			<div class="row">
				<div class="col"></div>
				<div class="col-lg-8">
					<h2>Contact Us</h2>
					<h4>You can reach us by:</h4>
					<ul>
						<li class="contact">E-mail: <a href="mailto:drew@ddindustrial.ca">drew@ddindustrial.ca</a></li>
						<li class="contact">Phone: <a href="tel:15198194213">519-819-4213</a></li>
						<li class="contact">Or you can fill out the following: </li>
					</ul>
					<form action="" method="post">
						<div class="form-group">
							<label for="name">Name: </label>
							<input type="text" class="form-control" id="fName" placeholder="Full Name" name="fName" required>
						</div>
						<div class="form-group">
							<label for="phoneNumber">Phone Number: </label>
							<input type="tel" class="form-control" id="phoneNumber" placeholder="###-###-####" name="phone" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$" required>
						</div>


						<div class="form-group">
							<label for="email">Email Address: </label>
							<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
						</div>

						<div class="form-group">
						<label for="message">Message: </label>
						<textarea class="form-control" id="message" rows="3" name="message" required></textarea>

						</div>

						<input id="submit" type="submit" value="Submit" name="submit">
					</form>
				</div>
				<div class="col"></div>
			</div>
			<footer>
				<nav class="navbar bottom navbar-dark footer">
				</nav>
			</footer>			
		</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>