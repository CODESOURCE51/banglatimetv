<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	
	public function login()
	{
	$uname = $this->input->post('txt_username');
	$pass = $this->input->post('txt_password');
	$show = $this->base_model->show_data('td_admin','*','')->result_array();
	
	//$exp = (',',$show['result']);
	$db_uname = $show[0]['admin'];
	$db_pass = $show[0]['pass'];
	if ( $db_uname == $uname && $db_pass == $pass) {
	$_SESSION['user'] = $uname;
	$_SESSION['passw'] = $pass;
	redirect(base_url().'admin.php/dashboard');
	}
	else {
	$this->load->view('login');
	}
		
	}
}
