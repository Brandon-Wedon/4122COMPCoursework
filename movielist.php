<?php
// ----INCLUDE APIS----------
include ("api/umbrella.php");

// ----PAGE GENERATION LOGIC--
function createPage() {
	$tmovie = createMovieList ();
	$tmovielist = renderMovieList ( $tmovie );
	$tcontent = <<<PAGE
	<br>
	<div class="container">
		<div class="panel panel-primary">
			<h1>Movie Reviews</h1>
			{$tmovielist}
		</div>
	</div>
PAGE;
	return $tcontent;
}

// ---BUSINESS LOGIC----------
session_start ();

$tpagetitle = "Movie List";
$tpage = new MasterPage ( $tpagetitle );

// ----BUILD DYNAMIC CONTENT-----
$tpagelead = "";
$tpagecontent = createPage ();
$tpagefooter = "";

// ----BUILD HTML PAGE-----
if (! empty ( $tpagelead ))
	$tpage->setDynamic1 ( $tpagelead );
$tpage->setDynamic2 ( $tpagecontent );
if (! empty ( $tpagefooter ))
	$tpage->setDynamic3 ( $tpagefooter );
$tpage->renderPage ();
?>
