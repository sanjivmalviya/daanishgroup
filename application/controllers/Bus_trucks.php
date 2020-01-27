<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus_trucks extends CI_Controller {

	public function __construct(){

        parent::__construct();
        $this->thisModuleName = 'Bus trucks';
        $this->thisModuleBaseUrl = site_url('bus_trucks') . '/';

	}

	public function index()
	{
		$this->load->view('bus_trucks');
	}

	public function insert(){

		$postArray = $this->input->post();

		if(isset($postArray['is_dropoff_at_same_location'])){
			$is_dropoff_at_same_location = '1';
		}else{
			$is_dropoff_at_same_location = '0';
		}

	    $form_data = array(
	    	'name' => $postArray['name'],
	    	'mobile_numbers' => $postArray['mobile_number'],
	    	'pickup_country' => $postArray['pickup_country'],
			'pickup_location' => $postArray['pickup_location'],
			'is_dropoff_at_same_location' => $is_dropoff_at_same_location,
			'pickup_date' => $postArray['pickup_date'],
			'pickup_time' => $postArray['pickup_time'],
			'dropoff_date' => $postArray['dropoff_date'],
			'dropoff_time' => $postArray['dropoff_time'],
			'dropoff_time' => $postArray['dropoff_time']
	    );

	    if($this->db->insert('tbl_bus_trucks',$form_data)){
	    	
	    	$this->session->set_flashdata('success','Thank You, Your Request has been submitted');
	    	redirect($this->thisModuleBaseUrl);
	    
	    }else{
	    
	    	$this->session->set_flashdata('error','Sorry ! Something went wrong, please try again later');
	    	redirect($this->thisModuleBaseUrl);
	    
	    }


	}

}
