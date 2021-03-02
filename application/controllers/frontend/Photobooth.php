<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photobooth extends CI_Controller {

	private $ctrl 	= "photobooth";
	private $title 	= "Photobooth";
	private $menu 	= "photobooth";

	public function __construct()
	{
		parent::__construct();

		//Session
		$this->load->library('session');
		
		//library
		$this->load->library('user_agent');

		
	}

	public function photobooth_screen()
	{
		// $data['title'] = 'Photobooth Screen';						
		// $data['main_content'] = 'frontend/photobooth/main';
		$this->load->view('frontend/photobooth/main');
	}

}