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
		$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN("9","10","11")')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$category['middle1'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "mid11" AND activate = 1')->result_array();
		$category['middle2'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "mid2" AND activate = 1')->result_array();
		$category['middle3'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "mid3" AND activate = 1')->result_array();
		$category['side1'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side1" AND activate = 1')->result_array();
		$category['side2'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side2" AND activate = 1')->result_array();
		$category['side3'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side3" AND activate = 1')->result_array();
		$category['side4'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side4" AND activate = 1')->result_array();
		$category['side5'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side5" AND activate = 1')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY slider_priority ASC')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['kolkata1'] = $this->db->query('SELECT * FROM td_news WHERE category = 2 AND post_priority = 1')->result_array();
		$category['kolkata'] = $this->db->query('SELECT * FROM td_news WHERE category = 2 AND post_priority > 1 ORDER BY post_priority ASC LIMIT 3')->result_array();
		$category['state1'] = $this->db->query('SELECT * FROM td_news WHERE category = 3 AND post_priority = 1')->result_array();
		$category['state'] = $this->db->query('SELECT * FROM td_news WHERE category = 3  AND post_priority > 1 ORDER BY post_priority ASC LIMIT 3')->result_array();
		$category['national1'] = $this->db->query('SELECT * FROM td_news WHERE category = 4 AND post_priority = 1')->result_array();
		$category['national'] = $this->db->query('SELECT * FROM td_news WHERE category = 4 AND post_priority > 1 ORDER BY post_priority ASC LIMIT 3')->result_array();
		$category['international1'] = $this->db->query('SELECT * FROM td_news WHERE category = 5 AND post_priority = 1')->result_array();
		$category['international'] = $this->db->query('SELECT * FROM td_news WHERE category = 5 AND post_priority > 1 ORDER BY post_priority ASC LIMIT 3')->result_array();
		$category['sports'] = $this->db->query('SELECT * FROM td_news WHERE category = 6 ORDER BY post_priority ASC LIMIT 3')->result_array();
		$category['entertainment'] = $this->db->query('SELECT * FROM td_news WHERE category = 7 ORDER BY post_priority ASC LIMIT 3')->result_array();
		$category['lifeStyle'] = $this->db->query('SELECT * FROM td_news WHERE category = 8 ORDER BY post_priority ASC LIMIT 3')->result_array();
		$category['business'] = $this->db->query('SELECT * FROM td_news WHERE category = 12 ORDER BY post_priority ASC LIMIT 3')->result_array();
		$category['editor'] = $this->db->query('SELECT * FROM td_news WHERE category = 11 ORDER BY post_priority ASC LIMIT 5')->result_array();
		$category['video'] = $this->db->query('SELECT * FROM td_video WHERE hmpage=1 ORDER BY post_priority ASC')->result_array();
		$category['videoss'] = $this->db->query('SELECT * FROM td_video WHERE hmpage=1 ORDER BY post_priority ASC')->result_array();
		$category['editorial'] = $this->db->query('SELECT * FROM td_news ORDER BY post_priority DESC LIMIT 4')->result_array();
		$category['album'] = $this->db->query('SELECT * FROM td_album ORDER BY aid DESC')->result_array();
		$category['footer_about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "About"')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
		$this->load->view('index',$category);
	}
	public function PujaSpecial()
	{	
		$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN("9","10","11")')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();

		$category['side1'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side1" AND activate = 1')->result_array();
		$category['side2'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side2" AND activate = 1')->result_array();
		$category['side3'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side3" AND activate = 1')->result_array();
		$category['side4'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side4" AND activate = 1')->result_array();
		$category['side5'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side5" AND activate = 1')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY slider_priority ASC')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
		$category['editorial'] = $this->db->query('SELECT * FROM td_news ORDER BY post_priority DESC LIMIT 4')->result_array();
		$category['footer_about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "About"')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
		$category['budget'] = $this->db->query('SELECT * FROM td_budget ORDER BY bg_id DESC')->result_array();
		$this->load->view('rail_budget',$category);
	}
	public function Highlights($hid)
	{	
		$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN("9","10","11")')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();

		$category['side1'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side1" AND activate = 1')->result_array();
		$category['side2'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side2" AND activate = 1')->result_array();
		$category['side3'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side3" AND activate = 1')->result_array();
		$category['side4'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side4" AND activate = 1')->result_array();
		$category['side5'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "side5" AND activate = 1')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY slider_priority ASC')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
		$category['editorial'] = $this->db->query('SELECT * FROM td_news ORDER BY post_priority DESC LIMIT 4')->result_array();
		$category['footer_about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "About"')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
		$category['budget'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1 AND sp_id='.$hid)->result_array();
		$this->load->view('custom_page',$category);
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
	public function Download()
	{
		header('Content-disposition: attachment; filename=registerationform.pdf');
 header('Content-type: application/pdf');
 readfile('registerationform.pdf');
	}
	
}
