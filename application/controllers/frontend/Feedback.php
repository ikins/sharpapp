<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

	private $ctrl 	= "feedback";
	private $title 	= "Feedback";
	private $menu 	= "feedback";

	public function __construct()
	{
		parent::__construct();

		//library
		$this->load->library('user_agent');

		//model
		$this->load->model('feedback_model');
		
	}

	public function feedback_form()
	{
		$data['title'] = 'Feedback Form';						
		$data['main_content'] = 'frontend/feedback/form';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_save()
	{
		$fb_name = $this->input->post('name');
		$fb_email = $this->input->post('email');
		$fb_phone = $this->input->post('phone');
		//
		$fb_question_1 = $this->input->post('question_1');
		$fb_question_2 = $this->input->post('question_2');
		$fb_question_3 = $this->input->post('question_3');
		$fb_question_4 = $this->input->post('question_4');
		$fb_question_5 = $this->input->post('question_5');
		$fb_question_6 = $this->input->post('question_6');
		$fb_question_7 = $this->input->post('question_7');
		$fb_question_8 = $this->input->post('question_8');
		$fb_question_9 = $this->input->post('question_9');
		//
		//insert new ip
		$data = array(

			'fb_name' 			=> $fb_name,
			'fb_email' 			=> $fb_email,
			'fb_phone' 			=> $fb_phone,
			'fb_question_1' 	=> $fb_question_1,
			'fb_question_2' 	=> $fb_question_2,
			'fb_question_3' 	=> $fb_question_3,
			'fb_question_4' 	=> $fb_question_4,
			'fb_question_5' 	=> $fb_question_5,
			'fb_question_6' 	=> $fb_question_6,
			'fb_question_7' 	=> $fb_question_7,
			'fb_question_8' 	=> $fb_question_8,
			'fb_question_9' 	=> $fb_question_9,

		);
		$result = $this->feedback_model->fb_add_feedback($data);

		if($result){
			redirect('feedback/results');
		}
	}

	public function feedback_results()
	{
		$data['title'] = 'Feedback Form';						
		$data['main_content'] = 'frontend/feedback/results';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_share()
	{
		$_email = $this->input->post('email');
		//send email
		redirect('feedback/share/results');
	}

	public function feedback_share_results()
	{
		$data['title'] = 'Feedback Form';						
		$data['main_content'] = 'frontend/feedback/share-results';
		$this->load->view('template/frontend/view', $data);
	}
}