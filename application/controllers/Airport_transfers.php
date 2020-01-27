<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Airport_transfers extends CI_Controller {

	public function __construct(){

        parent::__construct();
        $this->thisModuleName = 'Airport Transfers';
        $this->thisModuleBaseUrl = site_url('airport_transfers') . '/';

	}

	public function index()
	{
		$this->load->view('airport_transfers');
	}

	public function insert(){

		$postArray = $this->input->post();

	    $form_data = array(
	    	'name' => $postArray['name'],
	    	'mobile_number' => $postArray['mobile_number'],
	    	'pickup_point' => $postArray['pickup_point'],
			'dropoff_point' => $postArray['dropoff_point'],
			'arrival_time' => $postArray['arrival_time'],
			'departure_time' => $postArray['departure_time'],
			'passengers' => $postArray['passengers']
	    );
	    
	    if($this->db->insert('tbl_airport_transfers',$form_data)){
	    	
	    	$this->session->set_flashdata('success','Thank You, Your Request has been submitted');
	    	redirect($this->thisModuleBaseUrl);
	    
	    }else{
	    
	    	$this->session->set_flashdata('error','Sorry ! Something went wrong, please try again later');
	    	redirect($this->thisModuleBaseUrl);
	    
	    }


	}

}
