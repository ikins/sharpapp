<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//model
		$this->load->model('auth_model');	

		//variable session
		$this->nama_member = $this->session->userdata('is_user_sharp');	

	}

	public function login()
	{
		$is_user_sharp = $this->session->userdata('is_user_sharp'); //variable id login
		if(!isset($is_user_sharp) || $is_user_sharp != true) //cek sedang sudah login apa belum
		{
			$data['title'] = 'Sharp Login';						
			$data['main_content'] = 'frontend/auth/login';
			$this->load->view('template/backend/single-view', $data);
		}
		else
		{
			redirect('dashboard');
		}
	}

	function valid_login()
	{		
	
		
		$this->form_validation->set_message('required', '<i class="fa fa-times"></i> Required %s '); 
		//------------------Valid
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');	


		
		if($this->form_validation->run() == false)
		{	
			$data['title'] = 'Sharp Login';						
			$data['main_content'] = 'frontend/auth/login';
			$this->load->view('template/backend/single-view', $data);
		}
		else
		{
			
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$date = date('Y-m-d');

						
			$result = $this->auth_model->valid_login($email, $password);			
			//
			if ($result) 
			{
				
				foreach ($result as $rows):
				
					$user_id = $rows->user_id;
					$email_user = $rows->email;
					$password_user = $rows->password;
					$name = $rows->name;
		
				if($email_user != $email)
				{
			
					$data['title'] = 'Sharp Login';						
					$data['error'] = 'email "'.$email.'" failed';
					$data['main_content'] = 'frontend/auth/login';
					$this->load->view('template/backend/single-view', $data);
				}		
				elseif ($password_user != $password) 						
				{

					$data['title'] = 'Sharp Login';						
					$data['error'] = 'Password failed';
					$data['main_content'] = 'frontend/auth/login';
					$this->load->view('template/backend/single-view', $data);
				}					
				elseif ( ($email_user == $email) and ($password_user == $password))
				{
					
					$data = array(
						'email_login' => $email_user,
						'nama' => $name,
						'user_id' => $user_id,		
						'is_user_sharp' => true
					);
					
					$this->session->set_userdata('is_user_sharp', $data);			
					redirect('dashboard');
				}

				endforeach;
				
			}else {

					$data['title'] = 'Sharp Login';						
					$data['error'] = 'Login failed';
					$data['main_content'] = 'frontend/auth/login';
					$this->load->view('template/backend/single-view', $data);
			}
		}
	}
}