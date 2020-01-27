<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cruise_river extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('admin_model');	

	}

	public function index(){

		$this->db->where('status !=', '2');
        $data['cruise_river_inquiries'] = $this->db->get('tbl_cruise_river_inquiry')->result();        
        
		$this->load->view('manage/cruise_river',$data);
		
	}
	

}
