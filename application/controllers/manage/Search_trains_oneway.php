<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_trains_oneway extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('admin_model');	

	}

	public function index(){

		$this->db->where('status !=', '2');
        $data['train_oneway_inquiries'] = $this->db->get('tbl_trains_oneway_inquiry')->result();        

		$this->load->view('manage/search_trains_oneway',$data);
		
	}
	

}
