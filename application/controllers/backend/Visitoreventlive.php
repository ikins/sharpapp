<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitoreventlive extends CI_Controller {

	private $ctrl 	= "visitor";
	private $title 	= "Visitor Event & Live";
	private $menu 	= "visitoreventlive";

	public function __construct()
	{
		parent::__construct();
		
		//User Login
		$this->is_user_sharp();
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
		$this->load->view('template/backend/view', $data);
	}
}