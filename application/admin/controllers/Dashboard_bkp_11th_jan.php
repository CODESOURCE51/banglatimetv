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
	public function logout()
	{
	session_destroy();
	redirect(base_url().'admin.php');
	}
	public function sort_news()
	{
	if ( isset($_SESSION['user'])) {
		$this->load->view('sort_category_news');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function sort_category_news()
	{
	if ( isset($_SESSION['user'])) {
		$cat_n = $this->input->post('inlineRadioOptions');
		
		$category_news['post_list'] = $this->db->query('SELECT * FROM td_news WHERE category="'.$cat_n.'" ORDER BY news_id DESC')->result_array();
		$this->load->view('sort_post',$category_news);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function sort_images()
	{
	if ( isset($_SESSION['user'])) {
		
		$category_news['post_list'] = $this->db->query('SELECT * FROM td_album ORDER BY aid DESC')->result_array();
		$this->load->view('sort_image_post',$category_news);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function sort_images_post()
	{
	if ( isset($_SESSION['user'])) {
		$cat_n = $this->input->post('txt_aCategory');
		
		$category_news['post_list'] = $this->db->query('SELECT * FROM td_album_images WHERE album_id="'.$cat_n.'" ORDER BY post_priority ASC')->result_array();
		$this->load->view('sort_album_images',$category_news);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function sort_videos()
	{
	if ( isset($_SESSION['user'])) {
		
		$category_news['post_list'] = $this->db->query('SELECT * FROM td_video_album ORDER BY v_album_id DESC')->result_array();
		$this->load->view('sort_video_post',$category_news);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function sort_headlines()
	{
	if ( isset($_SESSION['user'])) {
		
		$category_news['post_list'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY slider_priority DESC')->result_array();
		$this->load->view('sort_headlines',$category_news);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function sort_breaking_news()
	{
	if ( isset($_SESSION['user'])) {
		
		$category_news['trick_list'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_priority ASC')->result_array();
		$this->load->view('sort_breaking_news',$category_news);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function sort_videos_post()
	{
	if ( isset($_SESSION['user'])) {
		$cat_n = $this->input->post('txt_aCategory');
		
		$category_news['post_list'] = $this->db->query('SELECT * FROM td_video WHERE video_cat="'.$cat_n.'" ORDER BY post_priority ASC')->result_array();
		$this->load->view('sort_video_gallery',$category_news);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function order_post()
      {
          $action= $_POST['action']; 
          $updateRecordsArray = $_POST['recordsArray'];

             if ($action == "updateRecordsListings")
                 {
		   $listingCounter = 1;
	           foreach ($updateRecordsArray as $recordIDValue) 
                       {
		         $query = $this->db->query("UPDATE td_news SET post_priority = " . $listingCounter . " WHERE news_id = " . $recordIDValue);
		        // mysql_query($query) or die('Error, insert query failed');
		         $listingCounter = $listingCounter + 1;	
	               }
	
                   echo '<pre>';
                   print_r($updateRecordsArray);
                   echo '</pre>';
                   echo 'If you refresh the page, you will see that records will stay just as you modified.';
                 }
      }
      public function order_breaking_news()
      {
          $action= $_POST['action']; 
          $updateRecordsArray = $_POST['recordsArray'];

             if ($action == "updateRecordsListings")
                 {
		   $listingCounter = 1;
	           foreach ($updateRecordsArray as $recordIDValue) 
                       {
		         $query = $this->db->query("UPDATE td_trickr_news SET trick_priority = " . $listingCounter . " WHERE trick_id = " . $recordIDValue);
		        // mysql_query($query) or die('Error, insert query failed');
		         $listingCounter = $listingCounter + 1;	
	               }
	
                   echo '<pre>';
                   print_r($updateRecordsArray);
                   echo '</pre>';
                   echo 'If you refresh the page, you will see that records will stay just as you modified.';
                 }
      }
      public function order_album_images()
      {
          $action= $_POST['action']; 
          $updateRecordsArray = $_POST['recordsArray'];

             if ($action == "updateRecordsListings")
                 {
		   $listingCounter = 1;
	           foreach ($updateRecordsArray as $recordIDValue) 
                       {
		         $query = $this->db->query("UPDATE td_album_images SET post_priority = " . $listingCounter . " WHERE img_id = " . $recordIDValue);
		        // mysql_query($query) or die('Error, insert query failed');
		         $listingCounter = $listingCounter + 1;	
	               }
	
                   echo '<pre>';
                   print_r($updateRecordsArray);
                   echo '</pre>';
                   echo 'If you refresh the page, you will see that records will stay just as you modified.';
                 }
      }
       public function order_video_gallery()
      {
          $action= $_POST['action']; 
          $updateRecordsArray = $_POST['recordsArray'];

             if ($action == "updateRecordsListings")
                 {
		   $listingCounter = 1;
	           foreach ($updateRecordsArray as $recordIDValue) 
                       {
		         $query = $this->db->query("UPDATE td_video SET post_priority = " . $listingCounter . " WHERE vid = " . $recordIDValue);
		        // mysql_query($query) or die('Error, insert query failed');
		         $listingCounter = $listingCounter + 1;	
	               }
	
                   echo '<pre>';
                   print_r($updateRecordsArray);
                   echo '</pre>';
                   echo 'If you refresh the page, you will see that records will stay just as you modified.';
                 }
      }
      public function order_headlines()
      {
          $action= $_POST['action']; 
          $updateRecordsArray = $_POST['recordsArray'];

             if ($action == "updateRecordsListings")
                 {
		   $listingCounter = 1;
	           foreach ($updateRecordsArray as $recordIDValue) 
                       {
		         $query = $this->db->query("UPDATE td_news SET slider_priority = " . $listingCounter . " WHERE news_id = " . $recordIDValue);
		        // mysql_query($query) or die('Error, insert query failed');
		         $listingCounter = $listingCounter + 1;	
	               }
	
                   echo '<pre>';
                   print_r($updateRecordsArray);
                   echo '</pre>';
                   echo 'If you refresh the page, you will see that records will stay just as you modified.';
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
		$advers = $this->input->post('txt_advers');
		$disclaimer = $this->input->post('txt_disclaim');
		$policy = $this->input->post('txt_policy');
		$terms = $this->input->post('txt_terms');
		$career = $this->input->post('txt_career');
		if ($category == 'About') {
		$fields = array(
			'category' => $category,
			'about-us' => $about,
		);
		} elseif ($category == 'Privacy') {
		$fields = array(
			'category' => $category,
			'our-policy' => $policy,
		);
		} elseif ($category == 'Career') {
		$fields = array(
			'category' => $category,
			'our-career' => $career,
		);
		} elseif ($category == 'Advers') {
		$fields = array(
			'category' => $category,
			'our-advers' => $advers,
		);
		}
	 elseif ($category == 'Disclaim') {
		$fields = array(
			'category' => $category,
			'our-disclaim' => $disclaimer,
		);
		
		} elseif ($category == 'Terms') {
		$fields = array(
			'category' => $category,
			'our-info' => $terms,
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
	$news['data'] = $this->db->query('SELECT * FROM td_news ORDER BY news_id DESC')->result_array();
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
		$news_sdesc = $this->input->post('txt_short');
		$rct = $this->input->post('txt_editorial');
		if($rct == ''){
		$recent =0;
	}
		else {
		$recent =1;	
		}
		$slider = $this->input->post('txt_credit');
		//$date = date('F').' '.date('d').','.date('Y');
		$date = $this->input->post('txt_ndate');
		if($slider == 1){
		$imge1 = $_FILES["image_file2"]["name"];
		$exp1 = explode('.',$imge1);
		$image1 = $exp1[0].time().'.'.$exp1[1];
		$temp1 = $_FILES["image_file2"]["tmp_name"];	
		$slider1 = 1;
		$this->base_model->slider_file_upload($image1,$temp1);
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
			'sdesc' => $news_sdesc,
			'recent_news' => $recent,
			'slider' => $slider1,
			'slider_image' => $image1,
			'tags' => $news_tags,
			'date' => $date,
			'reporter_name' => $news_reporter,
		);
		$add_news = $this->base_model->form_post('td_news',$fields);
		$news_id = $this->db->insert_id();
		$state_num = $this->db->query('SELECT * FROM td_news WHERE category ='.$news_category)->num_rows();
		if($state_num < 2) {
			$p_priority = 1;
		} else {
			$p_priority = $news_id;
		}
		$fields1 = array(
			'post_priority' => $p_priority,
		);
		$advertorial['update'] = $this->base_model->news_update('td_news',$fields1,$news_id);
		if($add_news)
		{
		$this->base_model->news_file_upload($image,$temp);
		
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
		$news_name = $this->input->post('txt_news_title');
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$news_desc = $this->input->post('g_desc');
		$news_tags = $this->input->post('txt_tag');
		$date = date('F').' '.date('d').','.date('Y');
		$fields = array(
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
	$gnews['data'] = $this->db->query('SELECT * FROM td_general_news ORDER BY gnews_id DESC LIMIT 1')->result_array();
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
		$add_activate = $this->input->post('txt_activate');
		$add_url = $this->input->post('txt_url');
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$date = date('F').' '.date('d').','.date('Y');
		$fields = array(
			'sp_pos' => $add_pos,
			'sp_image' => $image,
			'url' => $add_url,
			'activate' => $add_activate, 
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
	public function activate_sponsors($id)
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
		$fields = array(
			'activate' => 1,
		);
		$advertorial['activate'] = $this->base_model->sponsor_update('td_sponsor',$fields,$id);
	$advertorial['sponsor'] = $this->base_model->show_data('td_sponsor','*','')->result_array();
	//$advertorial['sponsor']=$this->db->query("UPDATE td_sponsor SET activate=1 WHERE sp_id = '".$id."'")->result_array();
		$this->load->view('view_sponsors',$advertorial);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function deactivate_sponsors($id)
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
		$fields = array(
			'activate' => 0,
		);
		$advertorial['activate'] = $this->base_model->sponsor_update('td_sponsor',$fields,$id);
	$advertorial['sponsor'] = $this->base_model->show_data('td_sponsor','*','')->result_array();
	//$advertorial['sponsor']=$this->db->query("UPDATE td_sponsor SET activate=1 WHERE sp_id = '".$id."'")->result_array();
		$this->load->view('view_sponsors',$advertorial);
		
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
		redirect(base_url().'admin.php/dashboard/view_album_snaps');
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
	$album_images['albumImg'] = $this->db->query('SELECT td_album.cover_title,td_album_images.album_image,td_album_images.date,td_album_images.img_id FROM td_album INNER JOIN td_album_images ON td_album.aid = td_album_images.album_id')->result_array();
	
		$this->load->view('view_album_images',$album_images);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}

	public function video_gallery()
	{
	if ( isset($_SESSION['user'])) {
	
		$this->load->view('video_album');
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function add_video_album()
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
		$add_album = $this->base_model->form_post('td_video_album',$fields);
		
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
	
	public function view_video_album()
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
	$album_data['album'] = $this->base_model->show_data('td_video_album','*','')->result_array();
	
		$this->load->view('view_video_album',$album_data);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}

	public function video_upload()
	{
	if ( isset($_SESSION['user'])) {
	$albumVal['albumvData'] = $this->base_model->show_data('td_video_album','*','')->result_array();
		$this->load->view('upload_video',$albumVal);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function add_videos()
	{
	if ( isset($_SESSION['user'])) {
		$video_cat = $this->input->post('txt_vCategory');
		$video = $this->input->post('txt_url');
		$date = date('F').' '.date('d').','.date('Y');
		$fields = array(
			'video_cat' => $video_cat,
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
	$vdata['video'] = $this->db->query('SELECT td_video_album.cover_title,td_video.video,td_video.date,td_video.vid FROM td_video_album INNER JOIN td_video ON td_video_album.v_album_id = td_video.video_cat')->result_array();
	//$vdata['video'] = $this->base_model->show_data('td_video','*','')->result_array();
	
		$this->load->view('view_videos',$vdata);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}

public function tricker_news()
	{
	if ( isset($_SESSION['user'])) {
	$show['data'] = $this->base_model->show_data('td_trickr_news','*','')->result_array();

		$this->load->view('tricker_news',$show);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function add_tricker_news()
	{
	if ( isset($_SESSION['user'])) {
		$add_pos = $this->input->post('txt_news_title');
		$date = date('F').' '.date('d').','.date('Y');
		$fields = array(
			'trick_news' => $add_pos,
			'tdate' => $date
		);
		$add_tnews = $this->base_model->form_post('td_trickr_news',$fields);
		
		if($add_tnews)
		{
		redirect(base_url().'admin.php/dashboard/view_tricker_news');
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function view_tricker_news()
	{
	if ( isset($_SESSION['user'])) {
	$tdata['tnews'] = $this->db->query('SELECT * FROM td_trickr_news ORDER BY trick_id')->result_array();
	
		$this->load->view('view_tricker_news',$tdata);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
}
