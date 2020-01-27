<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct(){

        parent::__construct();
        $this->thisModuleName = 'Our Services';
        $this->thisModuleBaseUrl = site_url('services') . '/';

	}

	public function index()
	{
		$this->load->view('services');
	}

}
