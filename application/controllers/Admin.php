<?php

class Admin extends MY_Controller
{
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname', 'User Name', 'required|alpha');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[12]');

		if ($this->form_validation->run('dummy')) {

			$uname = $this->input->post('uname');
			$pass  = $this->input->post('password');

			$this->load->model('AdminModel');
			$result = $this->AdminModel->isvalidate($uname, $pass);
			if ($result == 0) {
				$this->session->set_flashdata('error_message', 'Incorrect Username and Password !');
				$this->load->view('Admin/Login');
			} else if ($result['status'] == 1) {
				// Best option to load Session in Autoload file
				//$this->load->library('session');

				$data = [
					'id'     => $result['id'],
					'firstn' => $result['firstname'],
					'lastn'  => $result['lastname'],
					'email'  => $result['email'],
					'phone'  => 9619445461,
					'lastlogintime' => $result['lastlogin']
				];
				$this->session->set_userdata($data);

				$this->session->set_flashdata('success_message', 'You Have Successfully Logged in.');
				return redirect('admin/welcome');
			}
		} else {
			if ($this->session->userdata('id')) {
				return redirect('admin/welcome');
			} else {
				$this->load->view('Admin/Login');
				//echo validation_errors();
			}
		}
	}

	public function welcome()
	{
		if (!$this->session->userdata('id')) {
			return redirect('admin');
		}
		$this->load->model('AdminModel');

		$this->load->library('pagination'); // libraray for pagination

		$config = [
			'base_url'   => base_url('admin/welcome'),
			'per_page'   => 4,
			'total_rows' => $this->AdminModel->article_num_rows(),
		];

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';

		$this->pagination->initialize($config);

		$data['articles'] = $this->AdminModel->articlelist($config['per_page'], $this->uri->segment(3));
		$this->load->view('Admin/dashboard', $data);
	}

	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname', 'User Name', 'required|alpha');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[12]');
		$this->form_validation->set_rules('fname', 'Firstname', 'required|alpha');
		$this->form_validation->set_rules('lname', 'Lastname', 'required|alpha');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');

		if ($this->form_validation->run('dummy')) {

			// $this->load->library('email');
			// $this->email->from(set_value('email'), set_value('fname'));
			// $this->email->to("sanjay97vis@gmail.com");
			// $this->email->subject('Registration Greeting..	');
			// $this->email->message('Thank You for Registration');
			// $this->email->set_newline("\r\n");
			// $this->email->send();
			// if(!$this->email->send()){
			// 	show_error($this->email->print_debugger());
			// }else{
			// 	echo 'Your e-mail has been sent!';
			// }

			$data = [
				'username'  => $this->input->post('uname'),
				'password'  => $this->input->post('password'),
				'firstname' => $this->input->post('fname'),
				'lastname'  => $this->input->post('lname'),
				'email'     => $this->input->post('email'),
			];

			$this->load->model('AdminModel');
			if ($this->AdminModel->register($data)) {
				$this->session->set_flashdata('success_message', 'You Have Successfully Registered.');
				return redirect('admin/register');
			} else {
				$this->session->set_flashdata('error_message', 'Something Went Wrong.');
				return redirect('admin/register');
			}
		} else {
			$this->load->view('Admin/Register');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->set_flashdata('error_message', 'You Have Successfully Log out !');
		return redirect('admin');
	}

	public function addarticle()
	{

		$config = [
			'upload_path'  => './upload/',
			'allowed_types' => 'gif|jpg|png|jpeg',
			'max_width'     => 0,
			'max_height'     => 0,
			'max_size'     => 0,
			'encrypt_name'     => TRUE,
		];

		$this->load->library('upload', $config);
		$this->load->library('form_validation');
		if ($this->form_validation->run('add_artice_rules') && $this->upload->do_upload()) {

			$title = $this->input->post('title');
			$body  = $this->input->post('body');

			$userfile  = $this->input->post();
			$imginfo = $this->upload->data();
			// echo '<pre>';
			// print_r($imginfo);
			// echo '</pre>';exit;

			$image_path = base_url("upload/" . $imginfo['raw_name'] . $imginfo['file_ext']);

			$data = [
				'article_title' => $title,
				'article_body'  => $body,
				'user_id'       => $this->session->userdata('id'),
				'image_path'    => $image_path,
			];

			$this->load->model('AdminModel');
			if ($this->AdminModel->addarticle($data)) {
				$this->session->set_flashdata('success_message', 'New Article Successfully Added.');
				return redirect('admin/welcome');
			} else {
				$this->session->set_flashdata('error_message', 'Something Went Wrong.');
				return redirect('admin/addarticle');
			}
		} else {
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/add_article', compact('upload_error'));
		}
	}

	public function delarticle()
	{
		$id = $this->input->post('id');
		$this->load->model('AdminModel');
		if ($this->AdminModel->delarticle($id)) {
			$this->session->set_flashdata('success_message', 'Article Deleted Successfully.');
			return redirect('admin/welcome');
		} else {
			$this->session->set_flashdata('error_message', 'Something Went Wrong.');
			return redirect('admin/welcome');
		}
	}

	public function editarticle($id)
	{
		$this->load->model('AdminModel');

		if ($this->input->method() == 'post') {

			$config = [
				'upload_path'  => './upload/',
				'allowed_types' => 'gif|jpg|png|jpeg',
				'max_width'     => 0,
				'max_height'     => 0,
				'max_size'     => 0,
				'encrypt_name'     => TRUE,
			];

			$this->load->library('upload', $config);
			$this->load->library('form_validation');
			if ($this->form_validation->run('add_artice_rules')) {

				$data = [
					'article_title' => $this->input->post('title'),
					'article_body'  => $this->input->post('body'),
				];

				$this->upload->do_upload();
				$imginfo = $this->upload->data();

				if ($imginfo['file_name'] != '') {
					$image_path = base_url("upload/" . $imginfo['raw_name'] . $imginfo['file_ext']);
					$data['image_path'] =  $image_path;
				}

				if ($this->AdminModel->updatearticle($data, $id)) {
					$this->session->set_flashdata('success_message', 'Article Successfully Updated.');
					return redirect('admin/welcome');
				} else {
					$this->session->set_flashdata('error_message', 'Something Went Wrong.');
					return redirect('admin/addarticle');
				}
			} else {
				$this->load->view('admin/editarticle/' . $id);
			}
		} else {
			$data['article'] = $this->AdminModel->editarticle($id);
			$this->load->view('Admin/edit_article', $data);
		}
	}

	public function test()
	{
		if (!$this->session->userdata('id')) {
			return redirect('admin');
		}

		$this->load->model('AdminModel');
		$data['country'] = $this->AdminModel->fetch_country();
		$this->load->view('Admin/test', $data);
	}

	public function fetch_state()
	{
		if (!$this->session->userdata('id')) {
			return redirect('admin');
		}
		if ($this->input->post('c_id')) {
			$this->load->model('AdminModel');
			$result = $this->AdminModel->fetch_state($this->input->post('c_id'));

			$output =  '<option value="">Select State</option>';
			foreach ($result as $row) {
				$output .= '<option value="' . $row['state_id'] . '">' . $row['state_name'] . '</option>';
			}
			echo $output;
		}
	}

	public function fetch_city()
	{
		if (!$this->session->userdata('id')) {
			return redirect('admin');
		}
		if ($this->input->post('s_id')) {
			$this->load->model('AdminModel');
			$result = $this->AdminModel->fetch_city($this->input->post('s_id'));

			$output =  '<option value="">Select City</option>';
			foreach ($result as $row) {
				$output .= '<option value="' . $row['city_id'] . '">' . $row['city_name'] . '</option>';
			}
			echo $output;
		}
	}

	public function stripe()
	{
		if (!$this->session->userdata('id')) {
			return redirect('admin');
		}
		$this->load->view('Admin/stripe');
	}

	public function handlePayment()
	{
		require_once('application/libraries/stripe-php/init.php');
    
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
     
        \Stripe\Charge::create ([
                "amount" => 100 * 120,
                "currency" => "inr",
                "source" => $this->input->post('stripeToken'),
                "description" => "Dummy stripe payment." 
        ]);

		$this->session->set_flashdata('success_stripe', 'Payment has been successful.');
		return redirect('admin/stripe', 'refresh');
	}

	public function product()
	{
		if (!$this->session->userdata('id')) {
			return redirect('admin');
		}

		if ($this->input->is_ajax_request()) {
			$orderData = [
				'product_id'  => $this->input->post('product_id'),
				'buyer_name'  => $this->session->userdata('firstn'),
				'buyer_email' => $this->session->userdata('email'),
				'qty' 		  => $this->input->post('qty'),
				'paid_amount' => $this->input->post('totalAmount'),
				'txn_id' 	  => $this->input->post('razorpay_payment_id'),
				'payment_status' => 'success',
			 ];
			 $this->load->model('AdminModel');
			 $result = $this->AdminModel->orderData($orderData);
			 if ($result) {
				echo 1;exit;
			 }else{
				echo 0;exit;
			 }
		}
		$this->load->model('AdminModel');
		$data['product'] = $this->AdminModel->product();
		$this->load->view('Admin/product',$data);
	}

	public function myorder()
	{
		if (!$this->session->userdata('id')) {
			return redirect('admin');
		}
		$this->load->model('AdminModel');
		$data['order'] = $this->AdminModel->myorder();
		$this->load->view('Admin/myorder',$data);
	}

	public function success()
	{
		if (!$this->session->userdata('id')) {
			return redirect('admin');
		}
		$this->load->view('Admin/success');
	}

	public function failed()
	{
		if (!$this->session->userdata('id')) {
			return redirect('admin');
		}
		$this->load->view('Admin/failed');
	}
}
