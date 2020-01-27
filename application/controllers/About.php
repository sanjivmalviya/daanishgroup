<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct(){

        parent::__construct();
        $this->thisModuleName = 'About Us';
        $this->thisModuleBaseUrl = site_url('about') . '/';

	}

	public function index()
	{
		$this->load->view('about');
	}

}
