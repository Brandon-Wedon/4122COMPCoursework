<?php
// ----INCLUDE APIS----------
include ("api/umbrella.php");
// ----PAGE GENERATION LOGIC--
function createPage() {
	$tcontent = <<<PAGE
	<br>
<div class="container">
		<div class="row">
			<div class="col">
				<h1>Sign Up</h1>
				<form class="form-horizontal" role="form" method="POST"
					enctype="multipart/form-data">
					<div class="form-group">
						<label for="forename" class="col-sm-2 control-label">Forename</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="forename"
								name="forename" placeholder="Forename" value="">
					<p class='text-danger'>$errForename</p>
			</div>
					</div>
					<div class="form-group">
						<label for="surname" class="col-sm-2 control-label">Surname</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="surname"
								name="surname" placeholder="Surname" value="">
								<p class='text-danger'>$errSurname</p>
			</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="email" name="email"
								placeholder="email@example.com" value="">
								<p class='text-danger'>$errEmail</p>
			</div>
					</div>
					<div class="form-group">
						<label for="username" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="username"
								name="username" placeholder="Username" value="">
								<p class='text-danger'>$errUsername</p>
			</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="password"
								name="password" placeholder="Password" value="">
								<p class='text-danger'>$errPassword</p>
			</div>
					</div>

					<div class="form-group">
						<input id="submit" name="submit" type="submit" value="Send"
							class="btn btn-primary">
							<p class='text-danger'>$submit</p>
				</div>
				</form>
			</div>
			<div class="col">
				<h1>Log In</h1>
				<form class="form-horizontal" role="form" method="POST"
					enctype="multipart/form-data">

					<div class="form-group">
						<label for="username" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="username"
								name="username" placeholder="Username" value="">
							<p class='text-danger'>$errUsername</p>
			</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="password"
								name="password" placeholder="Password" value="">
							<p class='text-danger'>$errPassword</p>
			</div>
					</div>
					<div class="form-group">
						<input id="submit" name="submit" type="submit" value="Send"
							class="btn btn-primary">
						<p class='text-danger'>$submit</p>
				</div>
				</form>
			</div>
		</div>
	</div>
PAGE;
	return $tcontent;
}

// ---BUSINESS LOGIC----------
session_start ();

$tpagetitle = "Title";
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
	