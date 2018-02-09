<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class news extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}
	
	public function index($slug,$p=0)
	{
		$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN(9,10,11)')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY post_priority ASC')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['footer_about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "About"')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
		$cat = $this->db->query("SELECT * FROM td_category WHERE category_slug = '".$slug."'");
		$cat_id = $cat[0]['id'];
		$limit = 6; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
			$category['news_data']=$this->db->query("select * from td_news where category = '".$cat_id."' LIMIT $start, $limit ")->result_array();
			$total_pages = $this->db->query("select * from td_news where category = '".$cat_id."'")->num_rows();
			require_once APPPATH."libraries/pagination.php";
			$category['res']=create_pagination('td_news',base_url().'index.php/news/'.$slug,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;
	$this->load->view('post-list',$category);
	}
	public function watch($slug,$p=0)
	{
$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN(9,10,11)')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY post_priority ASC')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['footer_about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "About"')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
		$show = $this->base_model->show_data('td_category','*','category_slug="'.$slug.'"')->result_array();

		$limit = 6; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
			$category['news_data']=$this->db->query("select * from td_news where category = '".$show[0]['id']."' ORDER BY post_priority ASC LIMIT $start, $limit ")->result_array();
			$total_pages = $this->db->query("select * from td_news where category = '".$show[0]['id']."'")->num_rows();
			require_once APPPATH."libraries/pagination.php";
			$category['res']=create_pagination('td_news',base_url().'index.php/news/watch/'.$slug,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;
	$this->load->view('post-list',$category);
	}
	public function post($news_id,$p=0)
	{
		$category = $this->db->query("SELECT * FROM td_news WHERE news_id = '".$news_id."'")->result_array();
		$category['p_c_name'] = $this->db->query("SELECT * FROM td_category WHERE id = '".$category[0]['category']."'")->result_array();
		$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN(9,10,11)')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY post_priority ASC')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['footer_about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "About"')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
		$category['previous'] = $this->db->query('select * from td_news where news_id = (select max(news_id) from td_news where news_id < "'.$news_id.'")')->result_array();
		$category['next'] = $this->db->query('select * from td_news where news_id = (select min(news_id) from td_news where news_id > "'.$news_id.'")')->result_array();
		$limit = 6; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
			$category['post_data']=$this->db->query("select * from td_news where news_id = '".$news_id."' LIMIT $start, $limit ")->result_array();
			$total_pages = $this->db->query("select * from td_news where news_id = '".$news_id."'")->num_rows();
			require_once APPPATH."libraries/pagination.php";
			$category['res']=create_pagination('td_news',base_url().'index.php/gallery/galleryImages/'.$news_id,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;	
	$this->load->view('post',$category);
	}
	public function search()
	{
	$p=isset($_GET['page'])?$_GET['page']:0;
	$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN(9,10,11)')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['footer_about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "About"')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY post_priority ASC')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
	$search_C = $this->db->query('SELECT * FROM td_customer_search WHERE search_tags like "%'.$_GET['txt_search'].'%"')->result_array();
	$total_tags = $this->db->query('SELECT * FROM td_customer_search WHERE search_tags like "%'.$_GET['txt_search'].'%"')->num_rows();
	if($total_tags > 0 ) {
		$tcount = $search_C[0]['count'] + 1;
		$total_tags = $this->db->query('UPDATE td_customer_search SET count = '.$tcount.' WHERE search_tags like "%'.$_GET['txt_search'].'%"');
	} else {
		$total_tags = $this->db->query('INSERT INTO td_customer_search (search_tags,count) value("'.$_GET['txt_search'].'",1)');
	}
	//$service_id = $_GET['looking'];
	$query_string = isset($_GET['txt_search'])?'txt_search='.$_GET['txt_search']:'';
	
	$looking = (isset($_GET['txt_search']) && !empty($_GET['txt_search']))? "and tags like '%".$_GET['txt_search']."%'":"";
	
	$limit = 6; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
				$query = "select * from td_news where 1=1 $looking LIMIT $start, $limit ";
				$countQuery = "select * from td_news where 1=1 $looking ";
			$category['news_data']=$this->db->query($query)->result_array();
			$category['news_num']=$this->db->query($query)->num_rows();
			$category['search_name']=$_GET['txt_search'];
			$total_pages = $this->db->query($countQuery)->num_rows();
			require_once APPPATH."libraries/pagination_search.php";
			$category['res']=create_pagination('td_news',base_url().'index.php/News/search?'.$query_string,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;
	//$service['service_data'] = $this->base_model->show_data('td_subcategory','*','service_cat_id='.$service_id)->result_array();

		$this->load->view('search',$category);
	}

	public function search_tag($tags)
	{
	$p=isset($_GET['page'])?$_GET['page']:0;
	$category['menus'] = $this->db->query('SELECT * FROM td_category WHERE id NOT IN(9,10,11)')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top" AND activate = 1')->result_array();
		$category['trick_news'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY post_priority ASC')->result_array();
		$category['search_tags'] = $this->db->query('SELECT * FROM td_customer_search ORDER BY count DESC LIMIT 10')->result_array();
		$category['footer_about'] = $this->db->query('SELECT * FROM td_cms_pages WHERE category = "About"')->result_array();
		$category['today'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news WHERE recent_news = 1 ORDER BY post_priority ASC LIMIT 10')->result_array();
	//$service_id = $_GET['looking'];
	$query_string = isset($tags)?'txt_search='.$tags:'';
	
	$looking = (isset($tags) && !empty($tags))? "and tags like '%".$tags."%'":"";
	
	$limit = 6; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
				$query = "select * from td_news where 1=1 $looking LIMIT $start, $limit ";
				$countQuery = "select * from td_news where 1=1 $looking ";
			$category['news_data']=$this->db->query($query)->result_array();
			$category['news_num']=$this->db->query($query)->num_rows();
			$category['search_name']=$tags;
			$total_pages = $this->db->query($countQuery)->num_rows();
			require_once APPPATH."libraries/pagination_search.php";
			$category['res']=create_pagination('td_news',base_url().'index.php/News/search?'.$query_string,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;
	//$service['service_data'] = $this->base_model->show_data('td_subcategory','*','service_cat_id='.$service_id)->result_array();

		$this->load->view('search',$category);
	}
}
