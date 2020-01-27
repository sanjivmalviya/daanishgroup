<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cruise extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('admin_model');	

	}

	public function index(){

		$this->db->where('status !=', '2');
        $data['cruise_inquiries'] = $this->db->get('tbl_cruise_inquiry')->result();        

		$this->load->view('manage/cruise',$data);
		
	}
	

}
