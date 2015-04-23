<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('HDS_Controller.php');
class Main extends HDS_Controller {
	function index() {
		$this->display('main.php', '');
	}	
};
?>