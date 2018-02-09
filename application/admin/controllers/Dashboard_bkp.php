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
		
		$category_news['post_list'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1 ORDER BY slider_priority ASC')->result_array();
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
      public function puja_news()
	{
	if ( isset($_SESSION['user'])) {
		$this->load->view('rail_budget');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
      public function add_vote_news()
	{
	if ( isset($_SESSION['user'])) {
		$add_pos = $this->input->post('txt_news_title');
		$content = $this->input->post('bdesc');
		$fields = array(
			'budget_title' => $add_pos,
			'content' => $content
		);
		$add_tnews = $this->base_model->form_post('td_budget',$fields);
		
		if($add_tnews)
		{
		redirect(base_url().'admin.php/dashboard/view_puja_news');
		}
	}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function view_puja_news()
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
	//$gnews['data'] = $this->base_model->show_data('td_general_news','*','')->result_array();
	$gnews['data'] = $this->db->query('SELECT * FROM td_budget ORDER BY bg_id DESC')->result_array();
		$this->load->view('view_rail_budget',$gnews);
		
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
		$imges = $_FILES["filename"]["name"];
		$exp = explode('.',$imges);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["filename"]["tmp_name"];
		$news_desc = $this->input->post('bdesc');
		if(isset($_FILES["filename2"]["name"]) && $_FILES["filename2"]["name"] != "") {
		$imges2 = $_FILES["filename2"]["name"];
		$exp2 = explode('.',$imges2);
		$image2 = $_FILES["filename2"]["name"];
		$temp2 = $_FILES["filename2"]["tmp_name"];
		$news_desc2 = $this->input->post('bdesc2');

		$this->base_model->news_file_upload($image2,$temp2);
		
		} elseif(isset($_FILES["filename2"]["name"]) && $_FILES["filename2"]["name"] == "") {
			$image2 = 'na';
			$news_desc2 = 'na';
		}
		if(isset($_FILES["filename3"]["name"]) && $_FILES["filename3"]["name"] != "") {
		$imges3 = $_FILES["filename3"]["name"];
		$exp3 = explode('.',$imges3);
		$image3 = $_FILES["filename3"]["name"];
		$temp3 = $_FILES["filename3"]["tmp_name"];
		$news_desc3 = $this->input->post('bdesc3');
		$this->base_model->news_file_upload($image3,$temp3);
		
		} elseif(isset($_FILES["filename3"]["name"]) && $_FILES["filename3"]["name"] == "") {
			$image3 = 'na';
			$news_desc3 = 'na';
		}
		if(isset($_FILES["filename4"]["name"]) && $_FILES["filename4"]["name"] != "") {
		$imges4 = $_FILES["filename4"]["name"];
		$exp4 = explode('.',$imges4);
		$image4 = $_FILES["filename4"]["name"];
		$temp4 = $_FILES["filename4"]["tmp_name"];
		$news_desc4 = $this->input->post('bdesc4');
		$this->base_model->news_file_upload($image4,$temp4);
		
		} elseif(isset($_FILES["filename4"]["name"]) && $_FILES["filename4"]["name"] == "") {
			$image4 = 'na';
			$news_desc4 = 'na';
		}
		if(isset($_FILES["filename5"]["name"]) && $_FILES["filename5"]["name"] != "") {
		$imges5 = $_FILES["filename5"]["name"];
		$exp5 = explode('.',$imges5);
		$image5 = $_FILES["filename5"]["name"];
		$temp5 = $_FILES["filename5"]["tmp_name"];
		$news_desc5 = $this->input->post('bdesc5');
		$this->base_model->news_file_upload($image5,$temp5);
		
		} elseif(isset($_FILES["filename5"]["name"]) && $_FILES["filename5"]["name"] == "") {
			$image5 = 'na';
			$news_desc5 = 'na';
		}
		if(isset($_FILES["filename6"]["name"]) && $_FILES["filename6"]["name"] != "") {
		$imges6 = $_FILES["filename6"]["name"];
		$exp6 = explode('.',$imges6);
		$image6 = $_FILES["filename6"]["name"];
		$temp6 = $_FILES["filename6"]["tmp_name"];
		$news_desc6 = $this->input->post('bdesc6');
		$this->base_model->news_file_upload($image6,$temp6);
		
		} elseif(isset($_FILES["filename6"]["name"]) && $_FILES["filename6"]["name"] == "") {
			$image6 = 'na';
			$news_desc6 = 'na';
		}
		if(isset($_FILES["filename7"]["name"]) && $_FILES["filename7"]["name"] != "") {
		$imges7 = $_FILES["filename7"]["name"];
		$exp7 = explode('.',$imges7);
		$image7 = $_FILES["filename7"]["name"];
		$temp7 = $_FILES["filename7"]["tmp_name"];
		$news_desc7 = $this->input->post('bdesc7');
		$this->base_model->news_file_upload($image7,$temp7);
		} elseif(isset($_FILES["filename7"]["name"]) && $_FILES["filename7"]["name"] == "") {
			$image7 = 'na';
			$news_desc7 = 'na';
		}
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
			'news_image2' => $image2,
			'desc2' => $news_desc2,
			'news_image3' => $image3,
			'desc3' => $news_desc3,
			'news_image4' => $image4,
			'desc4' => $news_desc4,
			'news_image5' => $image5,
			'desc5' => $news_desc5,
			'news_image6' => $image6,
			'desc6' => $news_desc6,
			'news_image7' => $image7,
			'desc7' => $news_desc7,
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
