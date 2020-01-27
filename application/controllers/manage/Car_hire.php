<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_hire extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('admin_model');	

	}

	public function index(){

		$this->db->where('status !=', '2');
        $data['car_hire'] = $this->db->get('tbl_car_hire')->result();        
        
		$this->load->view('manage/car_hire',$data);
		
	}
	

}
