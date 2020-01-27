<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Hotels extends CI_Controller {

	public function __construct(){

        parent::__construct();

        $this->thisModuleName = 'Hotels';

        $this->thisModuleBaseUrl = site_url('hotels') . '/';

	}


	public function index(){

		$this->load->view('hotels');

	}



	public function insert(){

		$postArray = $this->input->post();
				
	    $form_data = array(
	    	'name' => $postArray['name'],
			'mobile_number' => $postArray['mobile_number'],
			'city' => $postArray['city'],
			'check_in_date' => $postArray['check_in_date'],
			'check_out_date' => $postArray['check_out_date'],
			'rooms' => $postArray['rooms']
	    );
	    

	    if( $id = $this->db->insert('tbl_hotel_inquiry',$form_data)){
	    	
	    	$hotel_inquiry_id = $this->db->insert_id();

	    	$i=0;
	    	foreach($postArray['childrens'] as $rs){
	    		
	    		
	    		if($rs > 0){
	    			
	    			
	    			$form_data = array(
	    				'hotel_inquiry_id' => $hotel_inquiry_id,
	    				'adults' => $postArray['adults'][$i],
	    				'childrens' => $postArray['childrens'][$i],
	    				'first_children_age' => $postArray['first_children_age'][$i],
	    				'second_children_age' => $postArray['second_children_age'][$i]
	    			);

	    			$this->db->insert('tbl_hotel_inquiry_details',$form_data);

	    		}

    			$i++;

	    	}
	    	
	    	$this->session->set_flashdata('success','Thank You, Your Request has been submitted');
	    	redirect($this->thisModuleBaseUrl);

	    

	    }else{

	    

	    	$this->session->set_flashdata('error','Sorry ! Something went wrong, please try again later');

	    	redirect($this->thisModuleBaseUrl);

	    

	    }





	}



}

