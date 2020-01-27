<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Cruise_river extends CI_Controller {



	public function __construct(){



        parent::__construct();

        $this->thisModuleName = 'Search River Cruise';

        $this->thisModuleBaseUrl = site_url('cruise_river') . '/';



	}



	public function index()

	{

		$this->load->view('cruise_river');

	}



	public function insert(){

		$postArray = $this->input->post();

	    $form_data = array(
    	    'name' => $postArray['name'],
    	    'mobile_number' => $postArray['mobile_number'],
    	    'cruise_line' => $postArray['cruise_line'],
			'cruise_ship' => $postArray['cruise_ship'],
			'cruise_departure_port' => $postArray['cruise_departure_port'],
			'cruise_region' => $postArray['cruise_region'],
			'cruise_date' => $postArray['cruise_date'],
			'cruise_line_adults' => $postArray['cruise_line_adults'],
			'cruise_line_childrens' => $postArray['cruise_line_childrens'],
			'cruise_line_infants' => $postArray['cruise_line_infants']
	    );

	    if($this->db->insert('tbl_cruise_river_inquiry',$form_data)){

	    	$this->session->set_flashdata('success','Thank You, Your Request has been submitted');

	    	redirect($this->thisModuleBaseUrl);

	    

	    }else{

	    

	    	$this->session->set_flashdata('error','Sorry ! Something went wrong, please try again later');

	    	redirect($this->thisModuleBaseUrl);

	    

	    }





	}



}

