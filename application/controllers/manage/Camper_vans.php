<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camper_vans extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('admin_model');	

	}

	public function index(){

		$this->db->where('status !=', '2');
        $data['camper_vans'] = $this->db->get('tbl_camper_vans')->result();        
        
		$this->load->view('manage/camper_vans',$data);
		
	}
	

}
