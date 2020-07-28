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
}
