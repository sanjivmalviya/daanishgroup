<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotels extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('admin_model');	

	}

	public function index(){

		$this->db->where('status !=', '2');
        $data['hotel_inquiries'] = $this->db->get('tbl_hotel_inquiry')->result();

		$this->load->view('manage/hotels',$data);
		
	}

	public function detail($id){

		$this->db->where('hotel_inquiry_id',$id);
		$data['hotel_inquiry_detail'] = $this->db->get('tbl_hotel_inquiry_details')->result();

		$this->load->view('manage/hotel_detail',$data);

	}
	

}
