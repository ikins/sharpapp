<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

	private $ctrl 	= "schedule";
	private $title 	= "Schedule";
	private $menu 	= "schedule";

	public function __construct()
	{
		parent::__construct();

		//Session
		$this->load->library('session');

		//User Login
		$this->is_user_sharp();

		//model
		$this->load->model('schedule_model');
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
		$data['main_content'] = 'backend/'.$this->ctrl.'/main';
		$data['list'] = $this->schedule_model->s_list();
		$this->load->view('template/backend/view', $data);
	}

	public function add()
	{
		//dashboard
		$data['title'] = $this->title;
		$data['main_content'] = 'backend/'.$this->ctrl.'/add';
		$data['list'] = $this->schedule_model->s_list();
		$this->load->view('template/backend/view', $data);
	}

	public function save()
	{
		$s_id = $this->input->post('s_id');

		if(!empty($s_id)){
			$s_date = $this->input->post('s_date');
			$s_start = $this->input->post('s_start');
			$s_end = $this->input->post('s_end');
			$s_duration = $this->input->post('s_duration');
			$s_program = $this->input->post('s_program');
			$s_talent = $this->input->post('s_talent');
			$s_format = $this->input->post('s_format');
			$s_location = $this->input->post('s_location');
			//
			$data = array(

				's_date' 		=> date('Y-m-d', strtotime($s_date)),
				's_start'		=> $s_start,
				's_end'			=> $s_end,
				's_duration'	=> $s_duration,
				's_program'		=> $s_program,
				's_talent'		=> $s_talent,
				's_format'		=> $s_format,
				's_location'	=> $s_location,

			);
			$result = $this->schedule_model->s_edit($s_id, $data);
			redirect('dashboard/schedule');
		}else{
			$s_date = $this->input->post('s_date');
			$s_start = $this->input->post('s_start');
			$s_end = $this->input->post('s_end');
			$s_duration = $this->input->post('s_duration');
			$s_program = $this->input->post('s_program');
			$s_talent = $this->input->post('s_talent');
			$s_format = $this->input->post('s_format');
			$s_location = $this->input->post('s_location');
			//
			$data = array(

				's_date' 		=> date('Y-m-d', strtotime($s_date)),
				's_start'		=> $s_start,
				's_end'			=> $s_end,
				's_duration'	=> $s_duration,
				's_program'		=> $s_program,
				's_talent'		=> $s_talent,
				's_format'		=> $s_format,
				's_location'	=> $s_location,
				's_status'		=> 1,
				

			);
			$result = $this->schedule_model->s_add($data);
			if($result){
				redirect('dashboard/schedule');
			}
		}
		
	}

	public function edit()
	{
		$s_id = $this->uri->segment(4);
		//dashboard
		$data['title'] = $this->title;
		$data['main_content'] = 'backend/'.$this->ctrl.'/edit';
		$data['detail'] = $this->schedule_model->s_detail($s_id);
		$this->load->view('template/backend/view', $data);
	}

	public function status()
	{
		$s_id = $this->uri->segment(4);
		$s_status = $this->uri->segment(5);
		$data = array(
			's_status'		=> $s_status,
		);
		$result = $this->schedule_model->s_edit($s_id, $data);
		redirect('dashboard/schedule');
	}
}