<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}
	
	public function index($slug)
	{
		$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN(9,10,11)')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY post_priority ASC')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
		$category['about'] = $this->db->query("SELECT * FROM td_cms_pages WHERE category = '".$slug."'");
		$category['footer_about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "About"')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
	    $this->load->view('pages',$category);
	}
	public function view($slug)
	{
		$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN(9,10,11)')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY post_priority ASC')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
		$category['about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "'.$slug.'"')->result_array();
		$category['footer_about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "About"')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
		$this->load->view('pages',$category);
	}
	public function Contact()
	{
		$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN(9,10,11)')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority DESC')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY post_priority DESC')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['footer_about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "About"')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
		$this->load->view('contact',$category);
	}
	public function Feedback()
	{
		$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN(9,10,11)')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority DESC')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY post_priority ASC')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['footer_about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "About"')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
		$category['about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "'.$slug.'"')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
		$this->load->view('pages',$category);
	}
	public function contactSubmit()
	{
	
	 $this->load->library('email');
	$name = $this->input->post('name');
  $visitor_email = $this->input->post('txt_email');
  $message = $this->input->post('message');
  $phn = $this->input->post('phone');
  $sub = $this->input->post('subject');
	 $this->email->from('no-reply@banglatimetv.com');
    $this->email->to('info@banglatimetv.com');
    $this->email->cc('sourav.projukti@gmail.com'); 
    $this->email->subject('Enquiry on Bangla Time TV . See details below : ');
    $this->email->message(
	'Name = '. $name. 
	' , Email = '. $visitor_email. 
	' , Phone = '.$phn.
	' , Subject = '.$sub.
	' , Comments = '.$message
	);
    if($this->email->send())
	$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN(9,10,11)')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY post_priority ASC')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
		$category['about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "'.$slug.'"')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
		$category['msg'] = 'Mail Sent';
		$this->load->view('contact',$category);
		
	}
	
}
