<?php
require_once ("oo_htmlpage.php");
class MasterPage {
	// ------FIELD MEMBERS-------------
	private $_htmlpage;
	private $_dynamic_1;
	private $_dynamic_2;
	private $_dynamic_3;
	
	// ------CONSTUCTORS---------------
	function __construct($ptitle) {
		$this->_htmlpage = new HTMLPage ( $ptitle );
		$this->setPageDefaults ();
		$this->setDynamicDefaults ();
	}
	
	// --------GETTERS AND SETTERS------
	public function getPage(): HTMLPage {
		return $this->_htmlpage;
	}
	public function getDynamic1() {
		return $this->_dynamic_1;
	}
	public function getDynamic2() {
		return $this->_dynamic_2;
	}
	public function getDynamic3() {
		return $this->_dynamic_3;
	}
	public function setDynamic1($phtml) {
		$this->_dynamic_1 = $phtml;
	}
	public function setDynamic2($phtml) {
		$this->_dynamic_2 = $phtml;
	}
	public function setDynamic3($phtml) {
		$this->_dynamic_3 = $phtml;
	}
	
	// ---------PUBLIC FUNCTIONS--------
	public function createPage() {
		$this->setMasterContent ();
		return $this->_htmlpage->createPage ();
	}
	public function renderPage() {
		$this->setMasterContent ();
		$this->_htmlpage->renderPage ();
	}
	public function addCSSFile($pcssfile) {
		$this->_htmlpage->addCSSFile ( $pcssfile );
	}
	public function addScriptFile($pjsfile) {
		$this->_htmlpage->addScriptFile ( $pjsfile );
	}
	// ---------PRIVATE FUNCTIONS-------
	private function setPageDefaults() {
		$this->_htmlpage->setMediaDirectory ( "css", "js", "fonts", "img", "data" );
		$this->addCSSFile ( "bootstrap.css" );
		$this->addCSSFile ( "site.css" );
		$this->addScriptFile ( "jquery-2.2.4.js" );
		$this->addScriptFile ( "bootstrap.js" );
		$this->addScriptFile ( "holder.js" );
	}
	private function setDynamicDefaults() {
		$tcurryear = date ( "Y" );
		$this->_dynamic_1 = "";
		$this->_dynamic_2 = "";
		$this->_dynamic_3 = <<<FOOTER
	<br><p>Brandon Dawe - 4122COMP: Introduction to Internet and Web Development {$tcurryear}</p>
FOOTER;
	}
	private function setMasterContent() {
		$texithtml = <<<EXIT
		<a class="btn btn-info navbar-right" href="">Exit</a>
EXIT;
		$tmasterpage = <<<MASTER
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarColor01" aria-controls="navbarColor01"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="index.php">Home
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
		</div>
	</nav>
	</div>
		{$this->_dynamic_1}
		{$this->_dynamic_2}
	</div>
	<footer class="footer">
		{$this->_dynamic_3}	
	</footer>
MASTER;
		$this->_htmlpage->setBodyContent ( $tmasterpage );
	}
}
?>