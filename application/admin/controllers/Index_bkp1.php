<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {
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
		$category['menus'] = $this->db->query('SELECT * FROM td_category LIMIT 7')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top"')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news LIMIT 20')->result_array();
		$category['kolkata'] = $this->db->query('SELECT * FROM td_news WHERE category = 2 ORDER BY post_priority ASC LIMIT 4')->result_array();
		$category['state'] = $this->db->query('SELECT * FROM td_news WHERE category = 3 ORDER BY post_priority ASC LIMIT 4')->result_array();
		$category['national'] = $this->db->query('SELECT * FROM td_news WHERE category = 4 ORDER BY post_priority ASC LIMIT 4')->result_array();
		$category['international'] = $this->db->query('SELECT * FROM td_news WHERE category = 5 ORDER BY post_priority ASC LIMIT 4')->result_array();
		$category['sports'] = $this->db->query('SELECT * FROM td_news WHERE category = 6 ORDER BY post_priority ASC LIMIT 3')->result_array();
		$category['entertainment'] = $this->db->query('SELECT * FROM td_news WHERE category = 7 ORDER BY post_priority ASC LIMIT 3')->result_array();
		$category['lifeStyle'] = $this->db->query('SELECT * FROM td_news WHERE category = 8 ORDER BY post_priority ASC LIMIT 3')->result_array();
		$category['editor'] = $this->db->query('SELECT * FROM td_news WHERE category = 11 ORDER BY post_priority ASC LIMIT 5')->result_array();
		$category['video'] = $this->db->query('SELECT * FROM td_video ORDER BY vid DESC')->result_array();
		$category['editorial'] = $this->db->query('SELECT * FROM td_news ORDER BY news_id LIMIT 4')->result_array();
		$category['album'] = $this->db->query('SELECT * FROM td_album ORDER BY aid DESC')->result_array();
		$this->load->view('index',$category);
	}
	public function gallery()
	{
		
		$this->load->view('gallery');
	}
	public function privacy()
	{
		$this->load->view('privacy');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function career()
	{
		$this->load->view('career');
	}
	public function vendorlogin()
	{
		$this->load->view('vendor_login');
	}
	public function vendorRegistration()
	{
		$this->load->view('vendor_login');
	}
	
}
