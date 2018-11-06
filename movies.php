<?php
// ----INCLUDE APIS------------------------------------
include ("api/umbrella.php");

// ----PAGE GENERATION LOGIC---------------------------
function createPage($pfilm) {
	$tfilmreview = "";
	
	foreach ( $pfilm as $tf ) {
		$tfilmreview .= renderMovieList ( $tf );
	}
	
	$tcontent = <<<PAGE
     {$tfilmreview}
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
PAGE;
	return $tcontent;
}

// ----BUSINESS LOGIC---------------------------------
// Start up a PHP Session for this user.
session_start ();

// Use our Data Access Layer to create our Squad
$tmovies = createMovieList ();

$tfilm = [ ];
$tid = $_REQUEST ["id"] ?? - 1;
$tmname = $_REQUEST ["name"] ?? "";

// Handle our Requests and Search for Players
if (is_numeric ( $tid ) && $tid > 0) {
	foreach ( $tmovies->arraylist as $tf ) {
		$tmovies = $tf->movieno;
		if ($tid == $tmovieno) {
			// Add the player to the Array
			$tfilm [] = $tf;
			break;
		}
	}
} else if (! empty ( $tmname )) {
	// Filter the name
	$tname = processRequest ( $tmname );
	foreach ( $tmovies->arraylist as $tf ) {
		if (strotolower ( $tf->moviename ) === strtolower ( $tmname )) {
			$tfilm [] = $tf;
		}
	}
}
// Page Decision Logic - Have we found a player?
if (count ( $tfilm ) === 0) {
	// header("Location: app_error.php");
} else {
	// We've found our player
	$tpagecontent = createPage ( $tfilm );
}

$tpagetitle = "Review";
$tpagelead = "";
$tpagefooter = "";

// ----BUILD OUR HTML PAGE----------------------------
// Create an instance of our Page class
$tpage = new MasterPage ( $tpagetitle );
// Set the Three Dynamic Areas (1 and 3 have defaults)
if (! empty ( $tpagelead ))
	$tpage->setDynamic1 ( $tpagelead );
$tpage->setDynamic2 ( $tpagecontent );
if (! empty ( $tpagefooter ))
	$tpage->setDynamic3 ( $tpagefooter );
	// Return the Dynamic Page to the user.
$tpage->renderPage ();

?>