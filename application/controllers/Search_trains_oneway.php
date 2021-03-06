<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Search_trains_oneway extends CI_Controller {



	public function __construct(){



        parent::__construct();

        $this->thisModuleName = 'Search Trains One Way';

        $this->thisModuleBaseUrl = site_url('search_trains_oneway') . '/';



	}



	public function index()

	{

		$this->load->view('search_trains_oneway');

	}



	public function insert(){



		$postArray = $this->input->post();

	    $form_data = array(
	    	'name' => $postArray['name'],
			'mobile_number' => $postArray['mobile_number'],
			'location_from' => $postArray['location_from'],
			'location_to' => $postArray['location_to'],
			'departure_date' => $postArray['departure_date'],
			'departure_time' => $postArray['departure_time'],
			'booking_class' => $postArray['booking_class'],
			'adults' => $postArray['adults'],
			'childrens' => $postArray['childrens'],
			'infants' => $postArray['infants'],
			'concessions' => $postArray['concessions']
	    );
	    

	    if($this->db->insert('tbl_trains_oneway_inquiry',$form_data)){

	    	

	    	$this->session->set_flashdata('success','Thank You, Your Request has been submitted');

	    	redirect($this->thisModuleBaseUrl);

	    

	    }else{

	    

	    	$this->session->set_flashdata('error','Sorry ! Something went wrong, please try again later');

	    	redirect($this->thisModuleBaseUrl);

	    

	    }





	}



}

