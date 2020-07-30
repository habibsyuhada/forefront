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
	public function training_courses_for_iso_9001_quality_management(){
		$data['subview'] 			= 'training/training_courses_for_iso_9001_quality_management';
		$data['menu_active'] 	= 'trainingISO9001';
		$data['meta_title'] 	= 'ISO 9001 Quality Management';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 9001', 'link' => '#'), array('text' => 'ISO 9001 Quality Management', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
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
	public function iso_14001_environmental_management(){
		$data['subview'] 			= 'training/iso_14001_environmental_management';
		$data['menu_active'] 	= 'trainingISO14001';
		$data['meta_title'] 	= 'ISO 14001 Environmental Management';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 14001', 'link' => '#'), array('text' => 'ISO 14001 Environmental Management', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
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
	public function iso_27001_information_security_management(){
		$data['subview'] 			= 'training/iso_27001_information_security_management';
		$data['menu_active'] 	= 'trainingISO27001';
		$data['meta_title'] 	= 'ISO 27001 Information Security Management';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 27001', 'link' => '#'), array('text' => 'ISO 27001 Information Security Management', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
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
	public function iso_45001_health_safety(){
		$data['subview'] 			= 'training/iso_45001_health_safety';
		$data['menu_active'] 	= 'trainingISO45001';
		$data['meta_title'] 	= 'ISO 45001 Health & Safety';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'ISO 45001:2018', 'link' => '#'), array('text' => 'ISO 45001 Health & Safety', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
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
	
	//IATF 16949
	public function iatf_16949_automotive(){
		$data['subview'] 			= 'training/iatf_16949_automotive';
		$data['menu_active'] 	= 'trainingIATF16949';
		$data['meta_title'] 	= 'IATF 16949:2016 Automotive';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'IATF 16949:2016', 'link' => '#'), array('text' => 'IATF 16949:2016 Automotive', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function iatf_16949_automotive_1_day_iatf_ts_16949_awareness(){
		$data['subview'] 			= 'training/iatf_16949_automotive_1_day_iatf_ts_16949_awareness';
		$data['menu_active'] 	= 'trainingIATF16949';
		$data['meta_title'] 	= '1 Day IATF 16949:2016 Foundation Course';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'IATF 16949:2016', 'link' => '#'), array('text' => '1 Day IATF 16949:2016 Foundation Course', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function iatf_16949_automotive_iatf_16949_internal_auditor_course(){
		$data['subview'] 			= 'training/iatf_16949_automotive_iatf_16949_internal_auditor_course';
		$data['menu_active'] 	= 'trainingIATF16949';
		$data['meta_title'] 	= '3 Day IATF 16949:2016 Internal auditor course';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'IATF 16949:2016', 'link' => '#'), array('text' => '3 Day IATF 16949:2016 Internal auditor course', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function iatf_16949_automotive_2_day_iatf_16949_transition_course(){
		$data['subview'] 			= 'training/iatf_16949_automotive_2_day_iatf_16949_transition_course';
		$data['menu_active'] 	= 'trainingIATF16949';
		$data['meta_title'] 	= '2 Day IATF 16949:2016 Transition course';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'IATF 16949:2016', 'link' => '#'), array('text' => '2 Day IATF 16949:2016 Transition course', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	//Business
	public function business_improvement(){
		$data['subview'] 			= 'training/business_improvement';
		$data['menu_active'] 	= 'trainingBusiness';
		$data['meta_title'] 	= 'Business Improvement';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'Business Improvement', 'link' => '#'), array('text' => 'Business Improvement', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function business_improvement_8d_problem_solving(){
		$data['subview'] 			= 'training/business_improvement_8d_problem_solving';
		$data['menu_active'] 	= 'trainingBusiness';
		$data['meta_title'] 	= '8D Problem Solving';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'Business Improvement', 'link' => '#'), array('text' => '8D Problem Solving', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function business_improvement_advanced_product_quality_planning_apqp(){
		$data['subview'] 			= 'training/business_improvement_advanced_product_quality_planning_apqp';
		$data['menu_active'] 	= 'trainingBusiness';
		$data['meta_title'] 	= 'Advanced Product Quality Planning (APQP)';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'Business Improvement', 'link' => '#'), array('text' => 'Advanced Product Quality Planning (APQP)', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function business_improvement_production_part_approval_process_ppap(){
		$data['subview'] 			= 'training/business_improvement_production_part_approval_process_ppap';
		$data['menu_active'] 	= 'trainingBusiness';
		$data['meta_title'] 	= 'Production Part Approval Process (PPAP)';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'Business Improvement', 'link' => '#'), array('text' => 'Production Part Approval Process (PPAP)', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function business_improvement_5s(){
		$data['subview'] 			= 'training/business_improvement_5s';
		$data['menu_active'] 	= 'trainingBusiness';
		$data['meta_title'] 	= '5S';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'Business Improvement', 'link' => '#'), array('text' => '5S', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function business_improvement_measurement_systems_analysis_msa(){
		$data['subview'] 			= 'training/business_improvement_measurement_systems_analysis_msa';
		$data['menu_active'] 	= 'trainingBusiness';
		$data['meta_title'] 	= 'Measurement Systems Analysis (MSA)';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'Business Improvement', 'link' => '#'), array('text' => 'Measurement Systems Analysis (MSA)', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function business_improvement_process_fmea(){
		$data['subview'] 			= 'training/business_improvement_process_fmea';
		$data['menu_active'] 	= 'trainingBusiness';
		$data['meta_title'] 	= 'Process FMEA';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'Business Improvement', 'link' => '#'), array('text' => 'Process FMEA', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function business_improvement_use_of_minitab_software(){
		$data['subview'] 			= 'training/business_improvement_use_of_minitab_software';
		$data['menu_active'] 	= 'trainingBusiness';
		$data['meta_title'] 	= 'Use of Minitab Software';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'Business Improvement', 'link' => '#'), array('text' => 'Use of Minitab Software', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	//AS9100
	public function as_9100_aerospace_quality_management(){
		$data['subview'] 			= 'training/as_9100_aerospace_quality_management';
		$data['menu_active'] 	= 'trainingAS9100';
		$data['meta_title'] 	= 'AS 9100 Aerospace Quality Management';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'AS 9100 Aerospace Quality Management', 'link' => '#'), array('text' => 'AS 9100 Aerospace Quality Management', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function as_9100_aerospace_quality_management_1_day_as_91002016_awareness(){
		$data['subview'] 			= 'training/as_9100_aerospace_quality_management_1_day_as_91002016_awareness';
		$data['menu_active'] 	= 'trainingAS9100';
		$data['meta_title'] 	= '1 Day AS 9100:2016 Foundation Course';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'AS 9100 Aerospace Quality Management', 'link' => '#'), array('text' => '1 Day AS 9100:2016 Foundation Course', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function as_9100_aerospace_quality_management_2_day_as_91002016_internal_auditor_course(){
		$data['subview'] 			= 'training/as_9100_aerospace_quality_management_2_day_as_91002016_internal_auditor_course';
		$data['menu_active'] 	= 'trainingAS9100';
		$data['meta_title'] 	= '2 Day AS 9100:2016 Internal Auditor course';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Training', 'link' => '#'), array('text' => 'AS 9100 Aerospace Quality Management', 'link' => '#'), array('text' => '2 Day AS 9100:2016 Internal Auditor course', 'link' => '#'));
		$this->load->view('index', $data);
	}
}
