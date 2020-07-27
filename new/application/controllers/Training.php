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
		$data['subview'] 			= 'home/index';
		$data['menu_active'] 	= 'home';
		$data['meta_title'] 	= 'Home';
		$this->load->view('index', $data);
	}

	public function training_courses_for_iso_9001_quality_management(){
		$data['subview'] 			= 'support/training-courses-for-iso-9001-quality-management';
		$data['menu_active'] 	= 'support';
		$data['meta_title'] 	= 'Auditor Opportunities';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Support', 'link' => '#'), array('text' => 'Auditor Opportunities', 'link' => '#'));
		$this->load->view('index', $data);
	}
}
