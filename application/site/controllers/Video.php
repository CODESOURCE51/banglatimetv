<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class video extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}
	
	public function index($service_id=1,$p=0)
	{
		$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN(9,10,11)')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY post_priority ASC')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['previous'] = $this->db->query('select * from td_video_album where v_album_id = (select max(v_album_id) from td_video_album where v_album_id < "'.$service_id.'")')->result_array();
		$category['next'] = $this->db->query('select * from td_video_album where v_album_id = (select min(v_album_id) from td_video_album where v_album_id > "'.$service_id.'")')->result_array();
		$category['footer_about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "About"')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
		$limit = 6; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
			$category['service_data']=$this->db->query("select * from td_video_album where 1=1 LIMIT $start, $limit ")->result_array();
			$total_pages = $this->db->query("select * from td_video_album where 1=1")->num_rows();
			require_once APPPATH."libraries/pagination.php";
			$category['res']=create_pagination('td_video',base_url().'index.php/video/'.$service_id,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;
	$this->load->view('video-list',$category);
	}
	public function videoDetails($service_id,$p=0)
	{
	$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN(9,10,11)')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY post_priority ASC')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['gallery'] = $this->db->query("SELECT * FROM td_video_album where v_album_id = '".$service_id."'")->result_array();
		$category['footer_about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "About"')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
		$category['previous'] = $this->db->query('select * from td_video where video_cat = (select max(video_cat) from td_video where video_cat < "'.$service_id.'")')->result_array();
		$category['next'] = $this->db->query('select * from td_video where video_cat = (select min(video_cat) from td_video where video_cat > "'.$service_id.'")')->result_array();
		$slug = $service_id;
		$limit = 6; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
			$category['service_data']=$this->db->query("select * from td_video where video_cat = '".$service_id."' LIMIT $start, $limit ")->result_array();
			$total_pages = $this->db->query("select * from td_video where video_cat = '".$service_id."'")->num_rows();
			require_once APPPATH."libraries/pagination2.php";
			$category['res']=create_pagination('td_video',base_url().'index.php/video/videoDetails/'.$slug,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;	
	$this->load->view('videos',$category);
	}
}
