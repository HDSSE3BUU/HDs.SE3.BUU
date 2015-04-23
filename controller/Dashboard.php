<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('HDS_Controller.php');
class Dashboard extends HDS_Controller {
	function index() {
		$this->display('dashboard.php', '');
	}	
	function problem() {
		$this->display('problem.php', '');
	}
	function suggestion() {
		$this->display('suggestion.php', '');
	}
};
?>