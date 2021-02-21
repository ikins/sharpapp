<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//library
		$this->load->library('user_agent');

		//model
		$this->load->model('daily_model');
	}

	public function index()
	{
		$data['title'] = ('Welcome');
		$this->load->view('frontpage/home', $data);

		//check device access
		$mobile = $this->agent->is_mobile();

		if($mobile){
			$device = "1";
		}else{
			$device = "2";
		}

		//
		$browser = $this->agent->browser();
  		$os = $this->agent->platform();

		//daily & history daily visitor
		$ip = $this->input->ip_address(); //ip
		$date  = date("Y-m-d"); // today date

		//get last daily visitor history
		$last_visitor = $this->daily_model->get_last_daily($date);
		if(empty($last_visitor)){
			
			//insert new ip
			$data = array(

				'vd_ip' 	=> $ip,
				'vd_date' 	=> $date,
				'vd_hit' 	=> 1,

			);
			$result = $this->daily_model->add_visitor_daily($data);
			//end

			//insert new ip history
			$data_history = array(

				'vh_ip' 		=> $ip,
				'vh_browser' 	=> $browser,
				'vh_os' 		=> $os,
				'vh_device' 	=> $device,
				'vh_date' 		=> $date,

			);
			$result = $this->daily_model->add_visitor_daily_history($data_history);
			//end
			//echo "empty";
		}else{

			//check daily history
			$history_visitor = $this->daily_model->get_last_daily_history($ip, $date);
			if(empty($history_visitor)){
				//insert new ip history
				$data_history = array(

					'vh_ip' 		=> $ip,
					'vh_browser' 	=> $browser,
					'vh_os' 		=> $os,
					'vh_device' 	=> $device,
					'vh_date' 		=> $date,

				);
				$result = $this->daily_model->add_visitor_daily_history($data_history);
				//end
				
				//update new ip
				foreach ($last_visitor as $row) {
					
					$vd_id = $row->vd_id;
					$vd_hit = $row->vd_hit + 1;

					$data = array(

						'vd_ip' 	=> $ip,
						'vd_date' 	=> $date,
						'vd_hit' 	=> $vd_hit

					);
					$result = $this->daily_model->update_visitor_daily_post($vd_id, $data);
					//print_r($vd_hit);


				}
				//echo "update history";
			}else{

				//echo "no update";
			}

			//echo "not empty";
		}

		//print_r($history_visitor);
	}
}
