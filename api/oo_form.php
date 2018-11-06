<?php
require_once ("oo_movie.php");
$errForename = '';
$errSurname = '';
$errEmail = '';
$errPassword = '';
$errUsername = '';
$submit = '';

if (isset ( $_POST ["submit"] )) {
	$forename = $_POST ['forename'];
	$surname = $_POST ['surname'];
	$email = $_POST ['email'];
	$password = $_POST ['password'];
	$username = $_POST ['username'];
	
	if (! $_POST ['forename']) {
		$errForename = 'Please enter your first name';
	}
	
	if (! $_POST ['surname']) {
		$errSurname = 'Please enter your last name';
	}
	
	if (! $_POST ['email'] || ! filter_var ( $_POST ['email'], FILTER_VALIDATE_EMAIL )) {
		$errEmail = 'Please enter a valid Email address';
	}
	
	if (! $_POST ['username']) {
		$errUsername = 'Please enter your Username';
	}
	
	if (! $_POST ['password']) {
		$errPassword = 'Please enter your Password';
	}
}
if (isset ( $_POST ["submitpage"] )) {
	$datatosend = $_POST ['datatosend'];
}
function createMovieList($ptest = true): MArray {
	$movies = [ ];
	$movies ["1"] = new MList ( 1, "Get Out", "17/03/2017", "9/10" );
	$movies ["1"] = new MList ( 2, "Dunkirk", "21/07/2017", "9/10" );
	$movies ["1"] = new MList ( 3, "Blade Runner 2049", "05/10/2017", "9/10" );
	$movies ["1"] = new MList ( 4, "Thor Ragnarok", "10/10/2017", "10/10" );
	$movies ["1"] = new MList ( 5, "The Murder on the Orient Express", "03/11/2017", "9/10" );
	$movies ["1"] = new MList ( 6, "The Greatest Showman", "08/12/2017", "9/10" );
	$movies ["4"] = new MList ( 7, "Star Wars: The Last Jedi", "14/12/2017", "8/10" );
	$movies ["1"] = new MList ( 8, "Downsizing", "18/01/2018", "6/10" );
	$movies ["1"] = new MList ( 9, "The Maze Runner: The Death Cure", "26/01/2018", "5/10" );
	$movies ["1"] = new MList ( 10, "Black Panther", "12/02/2018", "9/10" );
	$movies ["2"] = new MList ( 11, "Ready Player One", "29/03/2018", "6/10" );
	$movies ["3"] = new MList ( 12, "Isle of Dogs", "30/03/2018", "10/10" );
	
	$moviearray = new MArray ();
	$moviearray->arrayname = "Movie List";
	return $moviearray;
}
function renderMovieList(MArray $pmovie) {
	$trowdata = "";
	foreach ( $pmovie->arraylist as $tp ) {
		$trowdata .= <<<ROW
			<tr>
				<td>{$tp->mname}</td>
				<td>{$tp->mreleasedate}</td>
				<td>{$tp->mrating}</td>
				<td><a class="btn btn-info" href="movies.php?id={$tp->movieno}"</a></td>
				<td></td>
			</tr>
ROW;
	}
	$ttable = <<<TABLE
	<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th></th>
						<th>Name</th>
						<th>Release Date</th>
						<th>Rating</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				{$trowdata}
				</tbody>
</table>
TABLE;
	return $ttable;
}
?>
