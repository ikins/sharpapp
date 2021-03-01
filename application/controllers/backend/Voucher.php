<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher extends CI_Controller {

	private $ctrl 	= "voucher";
	private $title 	= "Voucher";
	private $menu 	= "voucher";

	public function __construct()
	{
		parent::__construct();

		//Session
		$this->load->library('session');

		//User Login
		$this->is_user_sharp();

		//model
		$this->load->model('voucher_model');
	}

	//login
	function is_user_sharp()
	{
		$is_user_sharp = $this->session->userdata('is_user_sharp');
		
		if(!isset($is_user_sharp) || $is_user_sharp != true)
		{
			redirect('/');
		}	
	}

	public function main()
	{
		//dashboard
		$data['title'] = $this->title;
		$data['main_content'] = 'backend/'.$this->ctrl.'/main';
		$data['list'] = $this->voucher_model->v_list();
		$this->load->view('template/backend/view', $data);
	}

	public function add()
	{
		//dashboard
		$data['title'] = $this->title;
		$data['main_content'] = 'backend/'.$this->ctrl.'/add';
		$data['list'] = $this->voucher_model->v_list();
		$this->load->view('template/backend/view', $data);
	}

	public function save()
	{
		$v_id = $this->input->post('v_id');

		if(!empty($v_id)){
			$v_name = $this->input->post('name');
			$v_code = $this->input->post('code');
			$v_category = $this->input->post('category');
			$v_status = $this->input->post('status');
			//
			$data = array(

				'v_name' 	=> $v_name,
				'v_code'	=> $v_code,
				'v_date'	=> date('Y-m-d h:i:s'),
				'v_category'	=> $v_category,
				'v_status'	=> $v_status,

			);
			$result = $this->voucher_model->v_edit($v_id, $data);
			redirect('dashboard/voucher');
		}else{
			$v_name = $this->input->post('name');
			$v_code = $this->input->post('code');
			$v_category = $this->input->post('category');
			//
			$data = array(

				'v_name' 	=> $v_name,
				'v_code'	=> $v_code,
				'v_status'	=> 1,
				'v_category'	=> $v_category,
				

			);
			$result = $this->voucher_model->v_add($data);
			if($result){
				redirect('dashboard/voucher');
			}
		}
		
	}

	public function edit()
	{
		$v_id = $this->uri->segment(4);
		//dashboard
		$data['title'] = $this->title;
		$data['main_content'] = 'backend/'.$this->ctrl.'/edit';
		$data['detail'] = $this->voucher_model->v_detail($v_id);
		$this->load->view('template/backend/view', $data);
	}
}