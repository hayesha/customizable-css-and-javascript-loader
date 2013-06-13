<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
      $this->scriptloader->set_module_code('home', 'no-sidebars'); 
	}
	public function index()
	{
		$this->load->view('home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/home.php */
