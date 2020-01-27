<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camper_vans extends CI_Controller {

	public function __construct(){

        parent::__construct();
        $this->thisModuleName = 'Camper Vans';
        $this->thisModuleBaseUrl = site_url('camper_vans') . '/';

	}

	public function index()
	{
		$this->load->view('camper_vans');
	}

	public function insert(){

		$postArray = $this->input->post();

	    $form_data = array(
	    	'name' => $postArray['name'],
	    	'mobile_number' => $postArray['mobile_number'],
	    	'country' => $postArray['country'],
			'pickup_location' => $postArray['pickup_location'],
			'pickup_date' => $postArray['pickup_date'],
			'dropoff_location' => $postArray['dropoff_location'],
			'dropoff_date' => $postArray['dropoff_date'],
			'country_of_residence' => $postArray['country_of_residence'],
			'driver_age' => $postArray['driver_age'],
			'vehicle_type' => $postArray['vehicle_type']
	    );
	    
	    if($this->db->insert('tbl_camper_vans',$form_data)){
	    	
	    	$this->session->set_flashdata('success','Thank You, Your Request has been submitted');
	    	redirect($this->thisModuleBaseUrl);
	    
	    }else{
	    
	    	$this->session->set_flashdata('error','Sorry ! Something went wrong, please try again later');
	    	redirect($this->thisModuleBaseUrl);
	    
	    }


	}

}
