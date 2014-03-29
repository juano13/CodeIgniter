<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('');
		$this->load->helper('form');
	}

	public function index()
	{
		$data['OK']="OK";
		if($this->input->post())
		{
			$data = array
			(
				'user_name' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			if($this->user_model->verifyUser($data))redirect('user/showUser','refresh');
			else $data['danger']=TRUE;
		}
		$this->load->view('login',$data);
	}
	public function showUser()
	{
		$data['users'] = $this->user_model->getUsers();
		$this->load->view('header');
		$this->load->view('showUser',$data);
		$this->load->view('footer');
	}

	public function newUser()
	{
		if($this->input->post())
		{
			$data = array
			(
				'user_name' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'role' => $this->input->post('role'),
			);
			if(!$this->user_model->verifyUser($data))
			{
				$this->user_model->newUser($data);
				redirect('user/showUser','refresh');
			}
			
		}
		$this->load->view('header');
		$this->load->view('registerUser');
		$this->load->view('footer');
	}
}