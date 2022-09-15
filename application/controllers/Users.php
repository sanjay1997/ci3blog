<?php

class Users extends MY_Controller
{
	public function index()
	{

		log_message('error','error message in this line');
		log_message('debug','debug message in this line');
		log_message('info','info message in this line');


		$this->load->library('user_agent');
		$data['browser'] 		 = $this->agent->browser();
		$data['browser_version'] = $this->agent->version();
		$data['os'] 			 = $this->agent->platform();
		$data['ip_address'] 	 = $this->input->ip_address();
		$data['en'] 			 = $this->agent->accept_lang('en');

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';exit;

		$this->load->model('AdminModel');
		$data['articles'] = $this->AdminModel->articlelist_user_dash();
		$this->load->view('Users/articlelist',$data);
	}

}


?>
