<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training extends CI_Controller {

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
		exit;
		$data['subview'] 			= 'home/index';
		$data['menu_active'] 	= 'home';
		$data['meta_title'] 	= 'Home';
		$this->load->view('index', $data);
	}

	//ISO 9001
	public function training_1_day_iso_90012015_awareness(){
		$data['subview'] 			= 'training/training_1_day_iso_90012015_awareness';
		$data['menu_active'] 	= 'trainingISO9001';
		$data['meta_title'] 	= '1 Day ISO 9001:2015 Foundation Course';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 9001', 'link' => '#'), array('text' => '1 Day ISO 9001:2015 Foundation Course', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function training_2_day_iso_90012015_internal_auditor(){
		$data['subview'] 			= 'training/training_2_day_iso_90012015_internal_auditor';
		$data['menu_active'] 	= 'trainingISO9001';
		$data['meta_title'] 	= '2 Day ISO 9001:2015 Internal Auditor';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 9001', 'link' => '#'), array('text' => '2 Day ISO 9001:2015 Internal Auditor', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function training_5_day_iso_90012015_irca_auditorlead_auditor(){
		$data['subview'] 			= 'training/training_5_day_iso_90012015_irca_auditorlead_auditor';
		$data['menu_active'] 	= 'trainingISO9001';
		$data['meta_title'] 	= '5 Day ISO 9001:2015 Lead Auditor';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 9001', 'link' => '#'), array('text' => '5 Day ISO 9001:2015 Lead Auditor', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	//ISO 14001
	public function training_1_day_iso_140012015_awareness(){
		$data['subview'] 			= 'training/training_1_day_iso_140012015_awareness';
		$data['menu_active'] 	= 'trainingISO14001';
		$data['meta_title'] 	= '1 Day ISO 14001:2015 Foundation Course';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 14001', 'link' => '#'), array('text' => '1 Day ISO 14001:2015 Foundation Course', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function training_2_day_iso_140012015_internal_auditor(){
		$data['subview'] 			= 'training/training_2_day_iso_140012015_internal_auditor';
		$data['menu_active'] 	= 'trainingISO14001';
		$data['meta_title'] 	= '2 Day ISO 14001:2015 Internal Auditor';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 14001', 'link' => '#'), array('text' => '2 Day ISO 14001:2015 Internal Auditor', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	//ISO 27001
	public function iso_27001_information_security_management_1_day_iso_270012015_awareness_course(){
		$data['subview'] 			= 'training/iso_27001_information_security_management_1_day_iso_270012015_awareness_course';
		$data['menu_active'] 	= 'trainingISO27001';
		$data['meta_title'] 	= '1 Day ISO 27001:2013 Foundation Course';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 27001', 'link' => '#'), array('text' => '1 Day ISO 27001:2013 Foundation Course', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function iso_27001_information_security_management_2_day_iso_270012013_internal_auditor(){
		$data['subview'] 			= 'training/iso_27001_information_security_management_2_day_iso_270012013_internal_auditor';
		$data['menu_active'] 	= 'trainingISO27001';
		$data['meta_title'] 	= '2 Day ISO 27001:2013 Internal Auditor';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 27001', 'link' => '#'), array('text' => '2 Day ISO 27001:2013 Internal Auditor', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	//ISO 45001:2018
	public function iso_45001_health_safety_iso_45001_foundation_course(){
		$data['subview'] 			= 'training/iso_45001_health_safety_iso_45001_foundation_course';
		$data['menu_active'] 	= 'trainingISO45001';
		$data['meta_title'] 	= '1 Day ISO 45001 Foundation Course';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 45001:2018', 'link' => '#'), array('text' => '1 Day ISO 45001 Foundation Course', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function iso_45001_health_safety_iso_45001_auditor_transition_course(){
		$data['subview'] 			= 'training/iso_45001_health_safety_iso_45001_auditor_transition_course';
		$data['menu_active'] 	= 'trainingISO45001';
		$data['meta_title'] 	= '2 Day ISO 45001 Auditor Transition Course';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 45001:2018', 'link' => '#'), array('text' => '2 Day ISO 45001 Auditor Transition Course', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function iso_45001_health_safety_2_day_iso_45001_internal_auditor_course(){
		$data['subview'] 			= 'training/iso_45001_health_safety_2_day_iso_45001_internal_auditor_course';
		$data['menu_active'] 	= 'trainingISO45001';
		$data['meta_title'] 	= '2 Day ISO 45001 Internal Auditor Course';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 45001:2018', 'link' => '#'), array('text' => '2 Day ISO 45001 Internal Auditor Course', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function iso_45001_health_safety_iso_45001_auditor_conversion_course(){
		$data['subview'] 			= 'training/iso_45001_health_safety_iso_45001_auditor_conversion_course';
		$data['menu_active'] 	= 'trainingISO45001';
		$data['meta_title'] 	= '3 Day ISO 45001 Auditor Conversion Course';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 45001:2018', 'link' => '#'), array('text' => '3 Day ISO 45001 Auditor Conversion Course', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function iso_45001_health_safety_iso_45001_lead_auditor_course(){
		$data['subview'] 			= 'training/iso_45001_health_safety_iso_45001_lead_auditor_course';
		$data['menu_active'] 	= 'trainingISO45001';
		$data['meta_title'] 	= '5 Day ISO 45001 lead Auditor Course';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 45001:2018', 'link' => '#'), array('text' => '5 Day ISO 45001 lead Auditor Course', 'link' => '#'));
		$this->load->view('index', $data);
	}
}
