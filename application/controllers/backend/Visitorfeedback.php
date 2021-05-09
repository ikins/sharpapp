<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitorfeedback extends CI_Controller {

	private $ctrl 	= "visitor";
	private $title 	= "Visitor Feedback";
	private $menu 	= "visitorfeedback";
	
	public function __construct()
	{
		parent::__construct();
		
		//Session
		$this->load->library('session');
		
		//User Login
		$this->is_user_sharp();

		//model
		$this->load->model('feedback_model');
	}

	//login
	function is_user_sharp()
	{
		$is_user_sharp = $this->session->userdata('is_user_sharp');
		
		if(!isset($is_user_sharp) || $is_user_sharp != true)
		{
			redirect('/login');
		}	
	}

	public function main()
	{
		//dashboard
		$data['title'] = $this->title;
		$data['main_content'] = 'backend/'.$this->ctrl.'/feedback/main';
		$data['list'] = $this->feedback_model->feedback_visitor_list();
		$this->load->view('template/backend/view', $data);
	}

}