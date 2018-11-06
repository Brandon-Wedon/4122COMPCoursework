<?php
class MList {
	// -------CLASS FIELDS-----------
	public $movieno;
	public $mlist;
	public $moviename;
	public $mreleasedate;
	public $mrating;
	// -------CONSTRUCTOR------------
	public function __construct($pmno, $pmn, $pmrd, $pmr) {
		$this->movieno = $pmno;
		$this->moviename = $pmn;
		$this->mreleasedate = $pmrd;
		$this->mrating = $pmr;
	}
}
class MArray {
	// -------CLASS FIELDS-----------
	public $arraylist;
	public $arrayname;
	// -------CONSTRUCTOR------------
	public function __construct() {
		$this->arraylist = array ();
		$this->arrayname = "";
	}
}
