<!-- This file is for testing code before connecting it to the main site -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Test Site</title>
<!-- Include Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarColor01" aria-controls="navbarColor01"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active"><a class="nav-link" href="index.php">Home
						<span class="sr-only">(current)</span>
				</a></li>
				<li class="nav-item"><a class="nav-link" href="movielist.php">Movie
						List</a></li>
				<li class="nav-item"><a class="nav-link" href="login.php">Log
						In/Sign Up</a></li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Search">
				<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<img alt="Cover Poster" src="img/coverposter/blackpanthercp.jpg"
				height="350"> <br>
			<iframe width="560" height="350"
				src="https://www.youtube.com/embed/dxWvtMOGAhw" frameborder="0"
				allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Rating: 9/10</h4>
						<h6 class="card-subtitle mb-2 text-muted">Pros</h6>
						<p class="card-text">Some quick example text to build on the card
							title and make up the bulk of the card's content.</p>
						<h6 class="card-subtitle mb-2 text-muted">Cons</h6>
						<p class="card-text">Some quick example text to build on the card
							title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="jumbotron">
			<div class="row">
				<div class="col-lg-5">
					<h1>Black Panther Review</h1>
					<p>Insert Editorial Review</p>
				</div>
				<div class="col-lg-5">
				<h1>Black Panther Review</h1>
					<p>Insert User Reviews</p>	
				</div>
			</div>
		</div>
	</div>
</body>
</html>