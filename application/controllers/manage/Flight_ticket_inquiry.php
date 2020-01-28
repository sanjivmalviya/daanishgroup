<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight_ticket_inquiry extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('admin_model');	

	}

	public function index(){

		$this->db->where('status !=', '2');
        $data['flight_ticket_inquiries'] = $this->db->get('tbl_flight_inquiry')->result();        

		$this->load->view('manage/flight_ticket_inquiry',$data);
		
	}

	public function paynow($id){

		echo $data['id'] = $id;
		exit;
		$this->load->view('manage/dataFrom',$data);	

	}
	

}
