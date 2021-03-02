<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoppe extends CI_Controller {

	private $ctrl 	= "shoppe";
	private $title 	= "Shoppe";
	private $menu 	= "shoppe";

	public function __construct()
	{
		parent::__construct();

		//Session
		$this->load->library('session');
		
		//library
		$this->load->library('user_agent');

		//model
		
	}

	public function index()
	{
		$data['title'] = 'Sharp Frame Live Shoppe';						
		$data['main_content'] = 'frontend/shoppe/index';
		$this->load->view('template/frontend/view', $data);

	}

	
	

}