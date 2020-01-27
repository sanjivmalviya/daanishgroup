<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus_trucks extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('admin_model');	

	}

	public function index(){

		$this->db->where('status !=', '2');
        $data['bus_trucks'] = $this->db->get('tbl_bus_trucks')->result();        
        
		$this->load->view('manage/bus_trucks',$data);
		
	}
	

}
