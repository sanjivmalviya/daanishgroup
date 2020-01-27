<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buy_car_ticket extends CI_Controller {

	public function __construct(){

        parent::__construct();
        $this->thisModuleName = 'Buy car Ticket';
        $this->thisModuleBaseUrl = site_url('buy_car_ticket') . '/';

	}

	public function index()
	{
		$this->load->view('buy_car_ticket');
	}

	public function insert(){

		$postArray = $this->input->post();

		if(isset($postArray['is_return_to_same_location'])){
			$is_return_to_same_location = '1';
		}else{
			$is_return_to_same_location = '0';
		}

		if(isset($postArray['is_driver_aged_between_25_to_75'])){
			$is_driver_aged_between_25_to_75 = '1';
		}else{
			$is_driver_aged_between_25_to_75 = '0';
		}

	    $form_data = array(
	    	'name' => $postArray['name'],
	    	'mobile_number' => $postArray['mobile_number'],
	    	'pickup_country' => $postArray['pickup_country'],
			'pickup_location' => $postArray['pickup_location'],
			'is_return_to_same_location' => $is_return_to_same_location,
			'pickup_date' => $postArray['pickup_date'],
			'pickup_time' => $postArray['pickup_time'],
			'dropoff_date' => $postArray['dropoff_date'],
			'dropoff_time' => $postArray['dropoff_time'],
			'vehicle_type' => $postArray['vehicle_type'],
			'country_of_residence' => $postArray['country_of_residence'],
			'is_driver_aged_between_25_to_75' => $is_driver_aged_between_25_to_75
	    );
	    
	    if($this->db->insert('tbl_car_hire',$form_data)){
	    	
	    	$this->session->set_flashdata('success','Thank You, Your Request has been submitted');
	    	redirect($this->thisModuleBaseUrl);
	    
	    }else{
	    
	    	$this->session->set_flashdata('error','Sorry ! Something went wrong, please try again later');
	    	redirect($this->thisModuleBaseUrl);
	    
	    }


	}

}
