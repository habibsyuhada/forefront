<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
			
		parent::__construct();

		$this->load->model('home_mod');
	}

	public function index(){
		$data['subview'] 			= 'home/index';
		$data['menu_active'] 	= 'home';
		$data['meta_title'] 	= 'Home';
		$this->load->view('index', $data);
	}

	public function free_quotation(){
		$data['subview'] 			= 'home/free-quotation';
		$data['menu_active'] 	= 'free-quotation';
		$data['meta_title'] 	= 'Free Quotation';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Free Quotation', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function free_quotation_new_process(){
		$products 			= $this->input->post('products');
		$product 			= join(';', $products);
		// echo "<pre>";
		// print_r($products);
		// echo "</pre>";
		$first_name 			= $this->input->post('first_name');
		$last_name 			= $this->input->post('last_name');
		$company 			= $this->input->post('company');
		$job_title		= $this->input->post('job_title');
		$email		= $this->input->post('email');
		$phone		= $this->input->post('phone');
		$website		= $this->input->post('website');
		$employee		= $this->input->post('employee');
		$form_data = array(
			'first_name' 		=> $first_name,
			'last_name' 	=> $last_name,
			'company' 	=> $company,
			'job_title' => $job_title,
			'email' => $email,
			'phone' => $phone,
			'website' => $website,
			'employee' => $employee,
			'product' => $product,
		);
		$this->home_mod->free_quotation_new_process_db($form_data);
		$this->session->set_flashdata('success', 'Your Data has been sent!');

		redirect('free-quotation');
	}

	public function about(){
		$data['subview'] 			= 'about/index';
		$data['menu_active'] 	= 'about';
		$data['meta_title'] 	= 'About';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'About', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function about_why_us(){
		$data['subview'] 			= 'about/why_us';
		$data['menu_active'] 	= 'about';
		$data['meta_title'] 	= 'Why choose ForeFront Certification?';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'About', 'link' => '#'), array('text' => 'Why choose ForeFront Certification?', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function about_ukas_accreditation(){
		$data['subview'] 			= 'about/ukas_accreditation';
		$data['menu_active'] 	= 'about';
		$data['meta_title'] 	= 'UKAS Accreditation';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'About', 'link' => '#'), array('text' => 'UKAS Accreditation', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function certification(){
		$data['subview'] 			= 'certification/index';
		$data['menu_active'] 	= 'certification';
		$data['meta_title'] 	= 'Certification';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Certification', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function certification_iso_90012015(){
		$data['subview'] 			= 'certification/iso-90012015';
		$data['menu_active'] 	= 'certification';
		$data['meta_title'] 	= 'Certification';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Certification', 'link' => '#'), array('text' => 'ISO-9001:2015', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function certification_iso_140012015(){
		$data['subview'] 			= 'certification/iso-140012015';
		$data['menu_active'] 	= 'certification';
		$data['meta_title'] 	= 'Certification';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Certification', 'link' => '#'), array('text' => 'ISO-14001:2015', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function certification_iso_45001(){
		$data['subview'] 			= 'certification/iso-45001';
		$data['menu_active'] 	= 'certification';
		$data['meta_title'] 	= 'Certification';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Certification', 'link' => '#'), array('text' => 'ISO-45001', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function certification_iso_27001(){
		$data['subview'] 			= 'certification/iso-27001';
		$data['menu_active'] 	= 'certification';
		$data['meta_title'] 	= 'Certification';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Certification', 'link' => '#'), array('text' => 'ISO-27001', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function benefits_of_certification(){
		$data['subview'] 			= 'certification/benefits-of-certification';
		$data['menu_active'] 	= 'certification';
		$data['meta_title'] 	= 'Certification';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Certification', 'link' => '#'), array('text' => 'Benefits of Certification', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function support(){
		$data['subview'] 			= 'support/index';
		$data['menu_active'] 	= 'support';
		$data['meta_title'] 	= 'Support';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Support', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function support_certification_process(){
		$data['subview'] 			= 'support/certification-process';
		$data['menu_active'] 	= 'support';
		$data['meta_title'] 	= 'Certification Process';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Support', 'link' => '#'), array('text' => 'Certification Process', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function support_transfer_your_certification(){
		$data['subview'] 			= 'support/transfer-your-certification';
		$data['menu_active'] 	= 'support';
		$data['meta_title'] 	= 'Transfer your certification';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Support', 'link' => '#'), array('text' => 'Transfer your certification', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function training(){
		$data['subview'] 			= 'training/index';
		$data['menu_active'] 	= 'training';
		$data['meta_title'] 	= 'Training';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function online_training(){
		$data['subview'] 			= 'online-training/index';
		$data['menu_active'] 	= 'online-training';
		$data['meta_title'] 	= 'Online Training';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Online Training', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function online_training_health_safety(){
		$data['subview'] 			= 'online-training/health-safety';
		$data['menu_active'] 	= 'online-training';
		$data['meta_title'] 	= 'Health & Safety';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Online Training', 'link' => '#'), array('text' => 'Health & Safety', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function contact(){
		$data['subview'] 			= 'contact/index';
		$data['menu_active'] 	= 'contact';
		$data['meta_title'] 	= 'Contact';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Contact', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function contact_new_process(){
		$name 			= $this->input->post('name');
		$phone 			= $this->input->post('phone');
		$email 			= $this->input->post('email');
		$message		= $this->input->post('message');
		$form_data = array(
			'name' 		=> $name,
			'phone' 	=> $phone,
			'email' 	=> $email,
			'message' => $message,
		);
		$this->home_mod->contact_new_process_db($form_data);
		$this->session->set_flashdata('success', 'Your Message has been sent!');

		redirect('contact');
	}
}
