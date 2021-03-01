<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	private $ctrl 	= "product";
	private $title 	= "Product";
	private $menu 	= "product";

	public function __construct()
	{
		parent::__construct();

		//Session
		$this->load->library('session');
		
		//library
		$this->load->library('user_agent');

		//model
		
	}

	public function audio_visual()
	{
		$data['title'] = 'Sharp Audio Visual';						
		$data['main_content'] = 'frontend/product/audio';
		$this->load->view('template/frontend/view', $data);

	}

	public function refrigenerator()
	{
		$data['title'] = 'Sharp Refrigenerator';						
		$data['main_content'] = 'frontend/product/refrigenerator';
		$this->load->view('template/frontend/view', $data);

	}

	public function washing_machine()
	{
		$data['title'] = 'Sharp Washing Machine';						
		$data['main_content'] = 'frontend/product/washing';
		$this->load->view('template/frontend/view', $data);

	}

	public function ac()
	{
		$data['title'] = 'Sharp Air Conditioner & Air Purifier';						
		$data['main_content'] = 'frontend/product/ac';
		$this->load->view('template/frontend/view', $data);

	}

	public function home_app()
	{
		$data['title'] = 'Sharp Small Home Appliance';						
		$data['main_content'] = 'frontend/product/home_app';
		$this->load->view('template/frontend/view', $data);

	}

	public function smartphone()
	{
		$data['title'] = 'Sharp Smartphone & Laptop';						
		$data['main_content'] = 'frontend/product/smartphone';
		$this->load->view('template/frontend/view', $data);

	}

	

}