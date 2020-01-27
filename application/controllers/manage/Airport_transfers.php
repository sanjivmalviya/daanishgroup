<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Airport_transfers extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('admin_model');	

	}

	public function index(){

		$this->db->where('status !=', '2');
        $data['airport_transfers'] = $this->db->get('tbl_airport_transfers')->result();        
        
		$this->load->view('manage/airport_transfers',$data);
		
	}
	

}
