<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
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
	if ( isset($_SESSION['user'])) {
		$this->load->view('index');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function pages()
	{
	if ( isset($_SESSION['user'])) {
	$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();

		$this->load->view('pages',$show);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function page_submit()
	{
	if ( isset($_SESSION['user'])) {
		$category = $this->input->post('category');
		$about = $this->input->post('txt_about');
		$mission = $this->input->post('txt_mission');
		$vission = $this->input->post('txt_vission');
		$policy = $this->input->post('txt_policy');
		$info = $this->input->post('txt_info');
		$dos = $this->input->post('txt_dos');
		$security = $this->input->post('txt_security');
		$cookie = $this->input->post('txt_cookies');
		$links = $this->input->post('txt_links');
		$career = $this->input->post('txt_career');
		if ($category == 'About') {
		$fields = array(
			'category' => $category,
			'about-us' => $about,
			'our-mission' => $mission,
			'our-vission' => $vission,
		);
		} elseif ($category == 'Privacy') {
		$fields = array(
			'category' => $category,
			'our-policy' => $policy,
			'our-info' => $info,
			'our-dos' => $dos,
			'our-security' => $security,
			'our-cookie' => $cookie,
			'our-links' => $links,
		);
		} elseif ($category == 'Career') {
		$fields = array(
			'category' => $category,
			'our-career' => $career,
		);
		}
		
		$data = $this->base_model->form_update('td_cms_pages',$fields,$category);
		$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();

		$this->load->view('pages',$show);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function breaking_news()
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
	$news['data'] = $this->base_model->show_data('td_news','*','')->result_array();
		$this->load->view('breaking_news',$news);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function news()
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
	$category['data'] = $this->base_model->show_data('td_news','*','')->result_array();
	$category['value'] = $this->base_model->show_data('td_category','*','')->result_array();
		$this->load->view('news',$category);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	
	public function add_news()
	{
	if ( isset($_SESSION['user'])) {
		$news_category = $this->input->post('txt_nCategory');
		$news_name = $this->input->post('txt_news');
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$news_desc = $this->input->post('bdesc');
		$slider = $this->input->post('txt_credit');
		$date = date('F').' '.date('d').','.date('Y');
		if($slider == 1){
		$imge1 = $_FILES["image_file2"]["name"];
		$exp1 = explode('.',$imge1);
		$image1 = $exp1[0].time().'.'.$exp1[1];
		$temp1 = $_FILES["image_file2"]["tmp_name"];	
		$slider1 = 1;
		}
		elseif($slider == 0){
		$image1 = 'N/A';
		$slider1 = 0;	
		}
		$news_tags = $this->input->post('txt_tag');
		$news_reporter = $this->input->post('txt_reporter');
		
		$fields = array(
			'category' => $news_category,
			'name' => $news_name,
			'news_image' => $image,
			'desc' => $news_desc,
			'slider' => $slider1,
			'slider_image' => $image1,
			'tags' => $news_tags,
			'date' => $date,
			'reporter_name' => $news_reporter,
		);
		$add_news = $this->base_model->form_post('td_news',$fields);
		$news_id = $this->db->insert_id();
		if($add_news)
		{
		$this->base_model->news_file_upload($image,$temp);
		$this->base_model->slider_file_upload($image1,$temp1);
			$fields1 = array(
			'cat_id' => $news_category,
			'news_id' => $news_id,
			'news_tags' => $news_tags
		);
		$add_news_tags = $this->base_model->form_post('td_search_tags',$fields1);
		redirect(base_url().'admin.php/dashboard/breaking_news');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	}
	
	public function category()
	{
	if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_category','*','')->result_array();

		$this->load->view('category',$service);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function add_category()
	{
	if ( isset($_SESSION['user'])) {
		$type = $this->input->post('txt_category');
		$slug = $type.'_'.'খবর';
		$fields = array(
			'service' => $type,
			'category_slug' => $slug,
		);
		
		$service = $this->base_model->form_post('td_category',$fields);
		if($service)
		{
		
		$category['data'] = $this->base_model->show_data('td_category','*','')->result_array();

		$this->load->view('category',$category);
		redirect(base_url().'admin.php/dashboard/category');
		
		}
		else {
			$msg = 'Sorry ! Category was not successfully Inserted';
			$this->load->view('category',$msg);
		}
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	
	
	public function general_news()
	{
	if ( isset($_SESSION['user'])) {
		$category['value'] = $this->base_model->show_data('td_category','*','')->result_array();
		$this->load->view('general_news',$category);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}

	public function add_general_news()
	{
	if ( isset($_SESSION['user'])) {
		$news_category = $this->input->post('txt_nCategory');
		$news_name = $this->input->post('txt_news_title');
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$news_desc = $this->input->post('g_desc');
		$news_tags = $this->input->post('txt_tag');
		$date = date('F').' '.date('d').','.date('Y');
		$fields = array(
			'category' => $news_category,
			'name' => $news_name,
			'news_image' => $image,
			'description' => $news_desc,
			'tags' => $news_tags,
			'date' => $date
		);
		$add_gnews = $this->base_model->form_post('td_general_news',$fields);
		$news_id = $this->db->insert_id();
		if($add_gnews)
		{
		$this->base_model->gnews_file_upload($image,$temp);
		$fields1 = array(
			'cat_id' => $news_category,
			'news_id' => $news_id,
			'news_tags' => $news_tags
		);
		$add_news_tags = $this->base_model->form_post('td_search_tags',$fields1);
		redirect(base_url().'admin.php/dashboard/general_news');
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	
	}
	public function view_general_news()
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
	//$gnews['data'] = $this->base_model->show_data('td_general_news','*','')->result_array();
	$gnews['data'] = $this->db->query('SELECT td_category.service,td_general_news.name,td_general_news.news_image,td_general_news.description,td_general_news.tags,td_general_news.date 
FROM td_category
INNER JOIN td_general_news
ON td_category.id=td_general_news.category;')->result_array();
		$this->load->view('view_general_news',$gnews);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function advertorial()
	{
	if ( isset($_SESSION['user'])) {
	
		$this->load->view('sponsor');
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function add_sponsors()
	{
	if ( isset($_SESSION['user'])) {
		$add_pos = $this->input->post('inlineRadioOptions');
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$date = date('F').' '.date('d').','.date('Y');
		$fields = array(
			'sp_pos' => $add_pos,
			'sp_image' => $image,
			'date' => $date
		);
		$add_gnews = $this->base_model->form_post('td_sponsor',$fields);
		
		if($add_gnews)
		{
		$this->base_model->sponsor_file_upload($image,$temp);
		redirect(base_url().'admin.php/dashboard/view_sponsors');
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}
	
	public function view_sponsors()
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
	$advertorial['sponsor'] = $this->base_model->show_data('td_sponsor','*','')->result_array();
	
		$this->load->view('view_sponsors',$advertorial);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}

	public function video_upload()
	{
	if ( isset($_SESSION['user'])) {
	
		$this->load->view('upload_video');
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function add_videos()
	{
	if ( isset($_SESSION['user'])) {
		$video = $this->input->post('txt_url');
		$date = date('F').' '.date('d').','.date('Y');
		$fields = array(
			'video' => $video,
			'date' => $date
		);
		$add_videos = $this->base_model->form_post('td_video',$fields);
		redirect(base_url().'admin.php/dashboard/view_video');
		
	}
		else {
		redirect(base_url().'admin.php');
		}
	
	}
	public function view_video()
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
	$vdata['video'] = $this->base_model->show_data('td_video','*','')->result_array();
	
		$this->load->view('view_videos',$vdata);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}

	public function create_album()
	{
	if ( isset($_SESSION['user'])) {
	
		$this->load->view('album');
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function add_album()
	{
	if ( isset($_SESSION['user'])) {
		$cover_title = $this->input->post('txt_alb_title');
		$cover_desc = $this->input->post('txt_alb_desc');
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$date = date('F').' '.date('d').','.date('Y');
		$fields = array(
			'cover_title' => $cover_title,
			'cover_desc' => $cover_desc,
			'cover_image' => $image,
			'date' => $date
		);
		$add_album = $this->base_model->form_post('td_album',$fields);
		
		if($add_album)
		{
		$this->base_model->album_file_upload($image,$temp);
		redirect(base_url().'admin.php/dashboard/view_album');
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}
	
	public function view_album()
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
	$album_data['album'] = $this->base_model->show_data('td_album','*','')->result_array();
	
		$this->load->view('view_album',$album_data);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}

	public function add_album_images()
	{
	if ( isset($_SESSION['user'])) {
	$albumVal['albumData'] = $this->base_model->show_data('td_album','*','')->result_array();
		$this->load->view('album_images',$albumVal);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function add_album_snaps()
	{
	if ( isset($_SESSION['user'])) {
		$alb_id = $this->input->post('txt_aCategory');
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$date = date('F').' '.date('d').','.date('Y');
		$fields = array(
			'album_id' => $alb_id,
			'album_image' => $image,
			'date' => $date
		);
		$add_album_img = $this->base_model->form_post('td_album_images',$fields);
		
		if($add_album_img)
		{
		$this->base_model->album_image_upload($image,$temp);
		redirect(base_url().'admin.php/dashboard/view_album_snaps
			');
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}
	
	public function view_album_snaps()
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
	$album_images['albumImg'] = $this->db->query('SELECT td_album.cover_title,td_album_images.album_image,td_album_images.date FROM td_album INNER JOIN td_album_images ON td_album.aid = td_album_images.album_id')->result_array();
	
		$this->load->view('view_album_images',$album_images);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
}
