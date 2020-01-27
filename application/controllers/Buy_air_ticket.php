<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Buy_air_ticket extends CI_Controller {



	public function __construct(){



        parent::__construct();

        $this->thisModuleName = 'Buy Air Ticket';

        $this->thisModuleBaseUrl = site_url('buy_air_ticket') . '/';



	}



	public function index()

	{

		$this->load->view('buy_air_ticket');

	}



	public function insert(){



		$postArray = $this->input->post();



		if(isset($postArray['is_cheapest'])){

			$is_cheapest = '1';

		}else{

			$is_cheapest = '0';

		}



	    $form_data = array(

		    'ticket_type' => '1',

		    'location_from' => $postArray['location_from'],

		    'name' => $postArray['name'],
		    
		    'mobile_number' => $postArray['mobile_number'],

		    'location_to' => $postArray['location_to'],

		    'trip_type' => $postArray['trip_type'],

		    'date_from' => $postArray['date_from'],

		    'date_to' => $postArray['date_to'],

		    'cavity' => $postArray['cavity'],

		    'adults' => $postArray['adults'],

		    'childrens' => $postArray['childrens'],

		    'infants' => $postArray['infants'],

		    'is_cheapest' => $is_cheapest,

	    );

	    

	    if($this->db->insert('tbl_flight_inquiry',$form_data)){

	    	

	    	$this->session->set_flashdata('success','Thank You, Your Request has been submitted');

	    	redirect($this->thisModuleBaseUrl);

	    

	    }else{

	    

	    	$this->session->set_flashdata('error','Sorry ! Something went wrong, please try again later');

	    	redirect($this->thisModuleBaseUrl);

	    

	    }





	}



}

