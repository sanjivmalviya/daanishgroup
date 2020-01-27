<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('admin_model');

		$this->thisModuleName = "login";
		$this->thisModuleBaseUrl = site_url('/manage/login');
	}

	public function index()
	{			
		$data['action'] = $this->thisModuleBaseUrl."/check";		
		$this->load->view('manage/login',$data);
	}

	public function check(){
		
		$postArray = $this->input->post();

		$username = $postArray['username'];
		$password = $postArray['password'];		

		$where = array('user_name'=>$username,'user_password'=>$password);

		if($this->admin_model->if_exists('admin',$where)){
			
			$login_data = $this->admin_model->if_exists('admin',$where);			
			$this->session->sess_destroy();
			$this->session->set_userdata('user_id',$login_data->user_id);
			$this->session->set_userdata('user_name',$username);

			redirect('manage/dashboard');
			
		}else{

			$this->session->set_flashdata('login_error','Invalid Username or Password');
			redirect($this->thisModuleBaseUrl);
			
		}

	}

	public function logout(){
		
		$this->session->sess_destroy();
    	redirect('login');
	}

}
