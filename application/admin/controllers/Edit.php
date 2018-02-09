<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
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
	public function album($cid)
	{
	if ( isset($_SESSION['user'])) {
	$show['category']=$this->db->query("select * from td_album where aid = '".$cid."'")->result_array();
	//$show['category'] = $this->base_model->show_data('td_category','*','category_id='.$cid)->result_array();
		$this->load->view('album_edit',$show);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function puja_news($bid)
	{
	if ( isset($_SESSION['user'])) {
	$show['category']=$this->db->query("select * from td_budget where bg_id = '".$bid."'")->result_array();
	//$show['category'] = $this->base_model->show_data('td_category','*','category_id='.$cid)->result_array();
		$this->load->view('budget_edit',$show);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function update_vote_news()
	{
	if ( isset($_SESSION['user'])) {
		$category = $this->input->post('category');
		$news_name = $this->input->post('txt_news_title');
		$content = $this->input->post('bdesc');
		
		$fields = array(
			'budget_title' => $news_name,
			'content' => $content
		);
		$add_news = $this->base_model->budget_update('td_budget',$fields,$category);
		
		if($add_news)
		{
		redirect(base_url().'admin.php/dashboard/view_puja_news');
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function album_submit()
	{
	if ( isset($_SESSION['user'])) {
		$category = $this->input->post('category');
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
		$add_album = $this->base_model->category_update('td_album',$fields,$category);
		
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
	public function album_images($cid)
	{
	if ( isset($_SESSION['user'])) {
	$show['category']=$this->db->query("select * from td_album_images where img_id = '".$cid."'")->result_array();
	//$show['category'] = $this->base_model->show_data('td_category','*','category_id='.$cid)->result_array();
		$this->load->view('album_images_edit',$show);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function album_images_submit()
	{
	if ( isset($_SESSION['user'])) {
		$category = $this->input->post('category');
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$date = date('F').' '.date('d').','.date('Y');
		$fields = array(
			'album_image' => $image,
			'date' => $date
		);
		$add_album_img = $this->base_model->category_update1('td_album_images',$fields,$category);
		
		if($add_album_img)
		{
		$this->base_model->album_image_upload($image,$temp);
		redirect(base_url().'admin.php/dashboard/view_album_snaps');
		}
	
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function video_album($cid)
	{
	if ( isset($_SESSION['user'])) {
	$show['category']=$this->db->query("select * from td_video_album where v_album_id = '".$cid."'")->result_array();
	//$show['category'] = $this->base_model->show_data('td_category','*','category_id='.$cid)->result_array();
		$this->load->view('video_album_edit',$show);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function video_album_submit()
	{
	if ( isset($_SESSION['user'])) {
		$category = $this->input->post('category');
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
		$add_album = $this->base_model->category_video_update('td_video_album',$fields,$category);
		
		if($add_album)
		{
		$this->base_model->video_album_file_upload($image,$temp);
		redirect(base_url().'admin.php/dashboard/view_video_album');
		}
	
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function category_imagesubmit()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$fields = array(
			'cat_image' => $image
		);
		$catdata = $this->db->query("select * from td_category where category_id = '".$category."'")->result_array();
		//$catdata = $this->base_model->show_data('td_category','*','')->result_array();
		$old_image = $catdata[0]['cat_image'];
	
		if($data = $this->base_model->category_update('td_category',$fields,$category)){
		unlink('category/'.$old_image);
		$this->base_model->category_file_upload($image,$temp);
		redirect(base_url().'admin.php/dashboard/Showlocation');
		
		}
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
		public function places($pid)
	{
	if ( isset($_SESSION['user'])) {
	$places['data']=$this->db->query("select * from td_subcategory where id = '".$pid."'")->result_array();
	//$show['category'] = $this->base_model->show_data('td_category','*','category_id='.$cid)->result_array();
		$this->load->view('edit_places',$places);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function places_submit()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$location = $this->input->post('txt_cat_typ');
	$sub_name = $this->input->post('txt_sub_cat');
	$address = $this->input->post('txt_address');
	$descrp = $this->input->post('txt_description');
	$site = $this->input->post('txt_website');
	$servT = $this->input->post('txt_srvc_typ');
		$email = $this->input->post('txt_email');
		$phn = $this->input->post('txt_phn');
		$contact_prsn = $this->input->post('txt_person');
		
		$fields = array(
		'cat_id' => $location,
		'service_cat_id' => $servT,
		'sub_cat_name' => $sub_name,
		'contact_prsn' => $contact_prsn,
		'phone' => $phn,
		'website' => $site,
		'address' => $address,
		'description' => $descrp,
		'email' => $email
		);
		$data = $this->base_model->subcategory_update('td_subcategory',$fields,$category);
		redirect(base_url().'admin.php/dashboard/Showplaces');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function places_imagesubmit()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$fields = array(
			'main_pic' => $image
		);
		$catdata = $this->db->query("select * from td_subcategory where id = '".$category."'")->result_array();
		//$catdata = $this->base_model->show_data('td_category','*','')->result_array();
		$old_image = $catdata[0]['main_pic'];
	
		if($data = $this->base_model->subcategory_update('td_subcategory',$fields,$category)){
			if($old_image != 'N/A'){
		unlink('subcategory/'.$old_image);
	}
		$this->base_model->subcategory_file_upload($image,$temp);
		redirect(base_url().'admin.php/dashboard/Showplaces');
		
		}
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function sponsor($sid)
	{
	if ( isset($_SESSION['user'])) {
	$show['category']=$this->db->query("select * from td_sponsor where sp_id = '".$sid."'")->result_array();
	//$show['category'] = $this->base_model->show_data('td_category','*','category_id='.$cid)->result_array();
		$this->load->view('sponsor_edit',$show);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	
	public function sponsor_update()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$add_pos = $this->input->post('sp_pos');
		$add_activate = $this->input->post('txt_activate');
		$add_url = $this->input->post('txt_url');
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$date = date('F').' '.date('d').','.date('Y');
		$fields = array(
			'sp_image' => $image,
			'sp_pos' => $add_pos,
			'url' => $add_url,
			'activate' => $add_activate, 
			'date' => $date
		);
		$add_gnews = $this->base_model->sponsor_update('td_sponsor',$fields,$category);
		
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

	public function news($nid)
	{
	if ( isset($_SESSION['user'])) {
	$show['category']=$this->db->query("select * from td_news where news_id = '".$nid."'")->result_array();
	$show['categoryName']=$this->db->query("select * from td_category order by id asc")->result_array();
	//$show['category'] = $this->base_model->show_data('td_category','*','category_id='.$cid)->result_array();
		$this->load->view('news_edit',$show);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	
	public function news_update()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$news_category = $this->input->post('txt_nCategory');
		$news_name = $this->input->post('txt_news');
		$news_desc = $this->input->post('bdesc');
		$news_sdesc = $this->input->post('txt_short');
		$recent = $this->input->post('txt_editorial');
		//$date = date('F').' '.date('d').','.date('Y');
		$date = $this->input->post('txt_ndate');
		
		$news_tags = $this->input->post('txt_tag');
		$news_reporter = $this->input->post('txt_reporter');
		
		$fields = array(
			'category' => $news_category,
			'name' => $news_name,
			'desc' => $news_desc,
			'sdesc' => $news_sdesc,
			'recent_news' => $recent,
			
			'tags' => $news_tags,
			'date' => $date,
			'reporter_name' => $news_reporter,
		);
		$add_news = $this->base_model->news_update('td_news',$fields,$category);
		
		if($add_news)
		{
		redirect(base_url().'admin.php/Edit/news/'.$category);
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}

	public function news_slider_image_update()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$news_category = $this->input->post('txt_nCategory');
		$slider = $this->input->post('txt_credit');
		if($slider == 1){
		$imge1 = $_FILES["image_file2"]["name"];
		$exp1 = explode('.',$imge1);
		$image1 = $exp1[0].time().'.'.$exp1[1];
		$temp1 = $_FILES["image_file2"]["tmp_name"];
		$this->base_model->slider_file_upload($image1,$temp1);	
		$slider1 = 1;
		}
		elseif($slider == 0){
		$image1 = 'N/A';
		$slider1 = 0;	
		}
		$fields = array(
			'slider' => $slider1,
			'slider_image' => $image1,
		);
		$add_news = $this->base_model->news_update('td_news',$fields,$category);
		if($add_news)
		{
		redirect(base_url().'admin.php/Edit/news/'.$category);
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}

	public function news_image1_update()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$news_category = $this->input->post('txt_nCategory');
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$fields = array(
			'category' => $news_category,
			'news_image' => $image,
		);
		$add_news = $this->base_model->news_update('td_news',$fields,$category);
		if($add_news)
		{
		$this->base_model->news_file_upload($image,$temp);	
		redirect(base_url().'admin.php/Edit/news/'.$category);
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function news_image2_update()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$news_category = $this->input->post('txt_nCategory');
	$news_desc2 = $this->input->post('bdesc2');
		$imge = $_FILES["image_file3"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file3"]["tmp_name"];
		$fields = array(
			'category' => $news_category,
			'desc2' => $news_desc2,
			'news_image2' => $image,
		);
		$add_news = $this->base_model->news_update('td_news',$fields,$category);
		if($add_news)
		{
		$this->base_model->news_file_upload($image,$temp);	
		redirect(base_url().'admin.php/Edit/news/'.$category);
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function news_image3_update()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$news_category = $this->input->post('txt_nCategory');
	$news_desc3 = $this->input->post('bdesc3');
		$imge = $_FILES["image_file4"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file4"]["tmp_name"];
		$fields = array(
			'category' => $news_category,
			'desc3' => $news_desc3,
			'news_image3' => $image,
		);
		$add_news = $this->base_model->news_update('td_news',$fields,$category);
		if($add_news)
		{
		$this->base_model->news_file_upload($image,$temp);	
		redirect(base_url().'admin.php/Edit/news/'.$category);
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function news_image4_update()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$news_category = $this->input->post('txt_nCategory');
	$news_desc4 = $this->input->post('bdesc4');
		$imge = $_FILES["image_file5"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file5"]["tmp_name"];
		$fields = array(
			'category' => $news_category,
			'desc4' => $news_desc4,
			'news_image4' => $image,
		);
		$add_news = $this->base_model->news_update('td_news',$fields,$category);
		if($add_news)
		{
		$this->base_model->news_file_upload($image,$temp);	
		redirect(base_url().'admin.php/Edit/news/'.$category);
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}

	public function news_image5_update()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$news_category = $this->input->post('txt_nCategory');
	$news_desc5 = $this->input->post('bdesc5');
		$imge = $_FILES["image_file6"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file6"]["tmp_name"];
		$fields = array(
			'category' => $news_category,
			'desc5' => $news_desc5,
			'news_image5' => $image,
		);
		$add_news = $this->base_model->news_update('td_news',$fields,$category);
		if($add_news)
		{
		$this->base_model->news_file_upload($image,$temp);	
		redirect(base_url().'admin.php/Edit/news/'.$category);
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}

	public function news_image6_update()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$news_category = $this->input->post('txt_nCategory');
	$news_desc6 = $this->input->post('bdesc6');
		$imge = $_FILES["image_file7"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file7"]["tmp_name"];
		$fields = array(
			'category' => $news_category,
			'desc6' => $news_desc6,
			'news_image6' => $image,
		);
		$add_news = $this->base_model->news_update('td_news',$fields,$category);
		if($add_news)
		{
		$this->base_model->news_file_upload($image,$temp);	
		redirect(base_url().'admin.php/Edit/news/'.$category);
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}

	public function news_image7_update()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$news_category = $this->input->post('txt_nCategory');
	$news_desc7 = $this->input->post('bdesc7');
		$imge = $_FILES["image_file8"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file8"]["tmp_name"];
		$fields = array(
			'category' => $news_category,
			'desc7' => $news_desc7,
			'news_image7' => $image,
		);
		$add_news = $this->base_model->news_update('td_news',$fields,$category);
		if($add_news)
		{
		$this->base_model->news_file_upload($image,$temp);	
		redirect(base_url().'admin.php/Edit/news/'.$category);
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function today_news($nid)
	{
	if ( isset($_SESSION['user'])) {
	$show['category']=$this->db->query("select * from td_general_news where gnews_id = '".$nid."'")->result_array();
	//$show['category'] = $this->base_model->show_data('td_category','*','category_id='.$cid)->result_array();
		$this->load->view('gnews_edit',$show);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function update_general_news()
	{
	if ( isset($_SESSION['user'])) {
		$category = $this->input->post('category');
		$news_name = $this->input->post('txt_news_title');
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$news_desc = $this->input->post('g_desc');
		$news_tags = $this->input->post('txt_tag');
		
		$fields = array(
			'name' => $news_name,
			'news_image' => $image,
			'description' => $news_desc,
			'tags' => $news_tags,
		);
		$add_news = $this->base_model->gnews_update('td_general_news',$fields,$category);
		
		if($add_news)
		{
		$this->base_model->gnews_file_upload($image,$temp);
		redirect(base_url().'admin.php/dashboard/general_news');
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function tricker_news($tid)
	{
	if ( isset($_SESSION['user'])) {
	$show['category']=$this->db->query("select * from td_trickr_news where trick_id = '".$tid."'")->result_array();
	//$show['category'] = $this->base_model->show_data('td_category','*','category_id='.$cid)->result_array();
		$this->load->view('tnews_edit',$show);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function update_tricker_news()
	{
	if ( isset($_SESSION['user'])) {
		$category = $this->input->post('category');
		$news_name = $this->input->post('txt_news_title');
		
		$fields = array(
			'trick_news' => $news_name,
		);
		$add_news = $this->base_model->tnews_update('td_trickr_news',$fields,$category);
		
		if($add_news)
		{
		redirect(base_url().'admin.php/dashboard/view_tricker_news');
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function album_videos($cid)
	{
	if ( isset($_SESSION['user'])) {
	$show['category']=$this->db->query("select * from td_video where vid = '".$cid."'")->result_array();
	$show['categoryName']=$this->db->query("select * from td_video_album order by v_album_id asc")->result_array();
	//$show['category'] = $this->base_model->show_data('td_category','*','category_id='.$cid)->result_array();
		$this->load->view('album_video_edit',$show);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function add_album_videos()
	{
	if ( isset($_SESSION['user'])) {
		$category = $this->input->post('category');
		$video_cat = $this->input->post('txt_vCategory');
		$video = $this->input->post('txt_url');
		$date = date('F').' '.date('d').','.date('Y');
		$fields = array(
			'video_cat' => $video_cat,
			'video' => $video,
			'date' => $date
		);
		$add_videos = $this->base_model->videos_update('td_video',$fields,$category);
		redirect(base_url().'admin.php/dashboard/view_video');
	
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	
}
