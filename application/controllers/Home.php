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
	public function index(){
		$data['subview'] 			= 'home/index';
		$data['menu_active'] 	= 'home';
		$data['meta_title'] 	= 'Home';
		$this->load->view('index', $data);
	}

	public function about(){
		$data['subview'] 			= 'about/index';
		$data['menu_active'] 	= 'about';
		$data['meta_title'] 	= 'About';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'About', 'link' => '#'));;
		$this->load->view('index', $data);
	}

	public function about_why_us(){
		$data['subview'] 			= 'about/why_us';
		$data['menu_active'] 	= 'about';
		$data['meta_title'] 	= 'Why choose ForeFront Certification?';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'About', 'link' => '#'), array('text' => 'Why choose ForeFront Certification?', 'link' => '#'));;
		$this->load->view('index', $data);
	}

	public function about_ukas_accreditation(){
		$data['subview'] 			= 'about/ukas_accreditation';
		$data['menu_active'] 	= 'about';
		$data['meta_title'] 	= 'UKAS Accreditation';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'About', 'link' => '#'), array('text' => 'UKAS Accreditation', 'link' => '#'));;
		$this->load->view('index', $data);
	}

	public function certification(){
		$data['subview'] 			= 'certification/index';
		$data['menu_active'] 	= 'certification';
		$data['meta_title'] 	= 'Certification';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Certification', 'link' => '#'));;
		$this->load->view('index', $data);
	}

	public function certification_iso_90012015(){
		$data['subview'] 			= 'certification/iso-90012015';
		$data['menu_active'] 	= 'certification';
		$data['meta_title'] 	= 'Certification';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Certification', 'link' => '#'), array('text' => 'ISO-90012015', 'link' => '#'));;
		$this->load->view('index', $data);
	}

	public function support(){
		$data['subview'] 			= 'support/index';
		$data['menu_active'] 	= 'support';
		$data['meta_title'] 	= 'Support';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Support', 'link' => '#'));;
		$this->load->view('index', $data);
	}

	public function support_certification_process(){
		$data['subview'] 			= 'support/certification-process';
		$data['menu_active'] 	= 'support';
		$data['meta_title'] 	= 'Certification Process';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Support', 'link' => '#'), array('text' => 'Certification Process', 'link' => '#'));;
		$this->load->view('index', $data);
	}
}
