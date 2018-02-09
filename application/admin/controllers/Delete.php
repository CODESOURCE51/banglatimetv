<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
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
	public function album($ven_id)
	{
	if ( isset($_SESSION['user'])) {
		$vendor['delete_data']=$this->db->query("delete from td_album where aid = '".$ven_id."'");
		redirect(base_url().'admin.php/Dashboard/view_album');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function puja_news($bd_id)
	{
	if ( isset($_SESSION['user'])) {
		$vendor['delete_data']=$this->db->query("delete from td_budget where bg_id = '".$bd_id."'");
		redirect(base_url().'admin.php/Dashboard/view_puja_news');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function tricker_news($v_id)
	{
	if ( isset($_SESSION['user'])) {
		$vendor['delete_data']=$this->db->query("delete from td_trickr_news where trick_id = '".$v_id."'");
		redirect(base_url().'admin.php/dashboard/view_tricker_news');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function video_album($v_id)
	{
	if ( isset($_SESSION['user'])) {
		$vendor['delete_data']=$this->db->query("delete from td_video_album where v_album_id = '".$v_id."'");
		redirect(base_url().'admin.php/Dashboard/view_video_album');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function album_videos($v_id)
	{
	if ( isset($_SESSION['user'])) {
		$vendor['delete_data']=$this->db->query("delete from td_video where vid = '".$v_id."'");
		redirect(base_url().'admin.php/Dashboard/view_video');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function news($cst_id)
	{
	if ( isset($_SESSION['user'])) {
		$customer['delete_data']=$this->db->query("delete from td_news where news_id = '".$cst_id."'");
		redirect(base_url().'admin.php/Dashboard/breaking_news');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function today_news($cst_id)
	{
	if ( isset($_SESSION['user'])) {
		$customer['delete_data']=$this->db->query("delete from td_general_news where gnews_id = '".$cst_id."'");
		redirect(base_url().'admin.php/dashboard/general_news');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function sponsor($cat_id)
	{
	if ( isset($_SESSION['user'])) {
		$customer['delete_data']=$this->db->query("delete from td_sponsor where sp_id = '".$cat_id."'");
		redirect(base_url().'admin.php/Dashboard/view_sponsors');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function places($sub_id)
	{
	if ( isset($_SESSION['user'])) {
		$customer['delete_data']=$this->db->query("delete from td_subcategory where id = '".$sub_id."'");
		redirect(base_url().'admin.php/Dashboard/Showplaces');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function album_image($sid)
	{
	if ( isset($_SESSION['user'])) {
		$customer['delete_data']=$this->db->query("delete from td_album_images where img_id = '".$sid."'");
		redirect(base_url().'admin.php/Dashboard/view_album_snaps');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function multinews($id){
		if ( isset($_SESSION['user'])) {
		$ids = base64_decode(urldecode($id));
		$expid = explode('=',$ids);
		$exp = explode('%2C',$expid[0]);
		$imp = implode(',',$exp);
		
	$category['profile'] = $this->db->query('delete from td_news where news_id IN ('.$imp.')')->result_array();
	redirect(base_url().'admin.php/Dashboard/breaking_news');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
}
