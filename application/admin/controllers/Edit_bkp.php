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
	public function location($cid)
	{
	if ( isset($_SESSION['user'])) {
	

	$show['catname'] = $this->db->query("select * from td_category where id = (select category from td_news where news_id='".$cid."')")->result_array();
	$show['category']=$this->db->query("select * from td_news where news_id = '".$cid."'")->result_array();

	//$show['category'] = $this->base_model->show_data('td_category','*','category_id='.$cid)->result_array();
		$this->load->view('news_edit',$show);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function category_submit()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$location = $this->input->post('txt_location');
		$email = $this->input->post('txt_email');
		$phn = $this->input->post('txt_phn');
		$contact_prsn = $this->input->post('txt_person');
		$lType = $this->input->post('txt_lcat_typ');
		$fields = array(
			'location' => $location,
			'email' => $email,
			'phn_no' => $phn,
			'contact_person' => $contact_prsn,
			'type' => $lType
		);
		$data = $this->base_model->category_update('td_category',$fields,$category);
		redirect(base_url().'admin.php/dashboard/location');
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
	public function service($sid)
	{
	if ( isset($_SESSION['user'])) {
	$show['service']=$this->db->query("select * from td_service where id = '".$sid."'")->result_array();
	//$show['category'] = $this->base_model->show_data('td_category','*','category_id='.$cid)->result_array();
		$this->load->view('service_edit',$show);
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	
	public function service_submit()
	{
	if ( isset($_SESSION['user'])) {

	$category = $this->input->post('category');
	$service = $this->input->post('txt_location');
	$simage = $this->input->post('oimage');
	$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$fields = array(
		'service' => $service,
			'image' => $image
		);
		$servdata = $this->db->query("select * from td_service where id = '".$category."'")->result_array();
		//$catdata = $this->base_model->show_data('td_category','*','')->result_array();
		$old_image = $servdata[0]['image'];
	
		if($data = $this->base_model->service_update('td_service',$fields,$category)){
		
		unlink('service/'.$old_image);
		$this->base_model->file_upload($image,$temp);
		
		redirect(base_url().'admin.php/dashboard/service');
		
		}
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	
}
