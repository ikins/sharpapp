<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

	private $ctrl 	= "feedback";
	private $title 	= "Feedback";
	private $menu 	= "feedback";

	public function __construct()
	{
		parent::__construct();
	}
}