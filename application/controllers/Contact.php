<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct(){

        parent::__construct();
        $this->thisModuleName = 'Contact Us';
        $this->thisModuleBaseUrl = site_url('contact') . '/';

	}

	public function index()
	{
		$this->load->view('contact');
	}

}
