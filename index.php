<?php
// ----INCLUDE APIS----------
include ("api/umbrella.php");

// ----PAGE GENERATION LOGIC--
function createPage() {
	$tcontent = <<<PAGE
	<br>
	<div class="jumbotron">
		<h1 class="display-3">Welcome</h1>
		<p class="lead">This website is for movie reviews. If you are
			interested in joining our community click the button below and join
			today.</p>
		<hr class="my-4">
		<p>This will give you the ability to rate movies and write your own
			reviews.</p>
		<p class="lead">
			<a class="btn btn-primary btn-lg" href="login.php" role="button">Sign
				Up Here</a>
		</p>
	</div>

	<div class="row">
		<div class="col-lg-5">
			<h2>Coming Soon</h2>
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action active">
					Avengers: Infinity War - April 25th</a> <a href="#"
					class="list-group-item list-group-item-action"> Deadpool 2 - May
					16th</a> <a href="#" class="list-group-item list-group-item-action">Solo:
					A Star Wars Story - May 25th</a><a href="#"
					class="list-group-item list-group-item-action">Ocean's 8 - June 8th</a><a
					href="#" class="list-group-item list-group-item-action">Incredibles
					2- June 14th</a><a href="#"
					class="list-group-item list-group-item-action">Tag - June 15th</a><a
					href="#" class="list-group-item list-group-item-action">Sicario 2:
					Day of Soldado- June 29th</a><a href="#"
					class="list-group-item list-group-item-action">The First Purge -
					July 4th</a>
			</div>
		</div>
		<div class="col-lg-5">
			<h2>Recent Reviews</h2>
			<div class="list-group">
				<a href="#"
					class="list-group-item list-group-item-action flex-column align-items-start">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1">Ready Player One Review</h5>
						<small class="text-muted">1 days ago</small>
					</div>
					<p class="mb-1">Ready Player One is about the Oasis. A virutal
						universe and the race to control it.</p> <small class="text-muted">Click
						here to read the full review.</small>
				</a>
			</div>
			<div class="list-group">
				<a href="#"
					class="list-group-item list-group-item-action flex-column align-items-start">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1">Isle of Dogs Review</h5>
						<small class="text-muted">2 days ago</small>
					</div>
					<p class="mb-1">Isle of Dogs is about a conspiracy to get rid of
						every dog from a Japanese town, and a young boys journey to find
						his dog during it.</p> <small class="text-muted">Click here to
						read the full review.</small>
				</a>
			</div>
			<div class="list-group">
				<a href="#"
					class="list-group-item list-group-item-action flex-column align-items-start">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1">Black Panther Review</h5>
						<small class="text-muted">3 days ago</small>
					</div>
					<p class="mb-1">Black Panther follows T'Challa, the prince of
						Wakanda and the trails that he has to go through when he takes the
						throne.</p> <small class="text-muted">Click here to read the full
						review.</small>
				</a>
			</div>
		</div>
PAGE;
	return $tcontent;
}

// ---BUSINESS LOGIC----------
session_start ();

$tpagetitle = "Homepage";
$tpagelead = "";
$tpagecontent = createPage ();
$tpagefooter = "";

// ----BUILD HTML PAGE-----
$tpage = new MasterPage ( $tpagetitle );
if (! empty ( $tpagelead ))
	$tpage->setDynamic1 ( $tpagelead );
$tpage->setDynamic2 ( $tpagecontent );
if (! empty ( $tpagefooter ))
	$tpage->setDynamic3 ( $tpagefooter );

$tpage->renderPage ();
?>