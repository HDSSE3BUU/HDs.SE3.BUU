<?PHP
if(!defined('BASEPATH')) exit('No direct script access allowed');
require(dirname(__FILE__)."/../UMS_Controller.php");
class HDS_Controller extends UMS_Controller {
	function __construct() {
		parent::__construct();	
	}
	function display($file = '', $data = '') {
		$this->output($this->config->item('folder').$file, $data);
	}
};
?>