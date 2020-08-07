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
		// $products 			= $this->input->post('products');
		// $product 			= join(';', $products);
		// echo "<pre>";
		// print_r($products);
		// echo "</pre>";
		// $first_name 			= $this->input->post('first_name');
		// $last_name 			= $this->input->post('last_name');
		// $company_name 			= $this->input->post('company_name');
		// $company_address 			= $this->input->post('company_address');
		// $job_title		= $this->input->post('job_title');
		// $email		= $this->input->post('email');
		// $phone		= $this->input->post('phone');
		// $website		= $this->input->post('website');
		// $employee		= $this->input->post('employee');
		// $form_data = array(
		// 	'first_name' 		=> $first_name,
		// 	'last_name' 	=> $last_name,
		// 	'company_name' 	=> $company_name,
		// 	'company_address' 	=> $company_address,
		// 	'job_title' => $job_title,
		// 	'email' => $email,
		// 	'phone' => $phone,
		// 	'website' => $website,
		// 	'employee' => $employee,
		// 	'product' => $product,
		// );
		// $this->home_mod->free_quotation_new_process_db($form_data);
		$this->session->set_flashdata('success', 'Your Data has been sent!');

		// $ci =& get_instance();
    // $ci->load->library('email');
    // $config['protocol']     = "smtp";
    // $config['smtp_host']    = "ssl://mail.forefrontcertification.co.id";
    // $config['smtp_port']    = "465";
    // $config['smtp_user']    = "_mainaccount@forefrontcertification.co.id";
    // $config['smtp_pass']    = "EZ7t1b1e;Pq3)A";
    // $config['charset']      = "utf-8";
    // $config['mailtype']     = "html";
    // $config['newline']      = "\r\n";
    // $config['wordwrap']     = TRUE;
    // $ci->email->initialize($config);
    // $ci->email->set_crlf( "\r\n" );
    // $ci->email->from('forefron@forefrontcertification.co.id', 'No Reply - ForeFront System');    
    // $ci->email->to('info@forefrontcertification.co.id');
    // // $ci->email->bcc('habibsyuhada.1109@gmail.com');
    // $ci->email->subject("Someone want get Quotation from $email");
    // $ci->email->message("<html>
    //                        <body>
    //                             <p>Dear Mr/Ms. forefront, </p>
    //                             <p>Someone want get Quotation by <a href='https://forefrontcertification.co.id/' target='_blank'>our website</a></p>
    //                             <p>Name : $first_name last_name</p>
    //                             <p>Phone : $phone</p>
    //                             <p>E-mail : $email</p>
    //                             <p>Job Title : $job_title</p>
    //                             <p>Website : $website</p>
    //                             <p>Num Employee : $employee</p>
    //                             <p>Company Name and Address : <br>$company</p>
    //                             <p>Products selected : <br>".join(', ', $products)."</p>

    //                             <p>Regards,<br/>ForeFront<br>(Auto Mail System)</p>
    //                             <p><b>This email auto generated by system. <br/> Please do not reply to this email address.</b></p>
    //                        </body>
    //                      </html>
    //                     ");
    // $ci->email->send();

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

		$ci =& get_instance();
    $ci->load->library('email');
    $config['protocol']     = "smtp";
    $config['smtp_host']    = "ssl://mail.forefrontcertification.co.id";
    $config['smtp_port']    = "465";
    $config['smtp_user']    = "_mainaccount@forefrontcertification.co.id";
    $config['smtp_pass']    = "EZ7t1b1e;Pq3)A";
    $config['charset']      = "utf-8";
    $config['mailtype']     = "html";
    $config['newline']      = "\r\n";
    $config['wordwrap']     = TRUE;
    $ci->email->initialize($config);
    $ci->email->set_crlf( "\r\n" );
    $ci->email->from('forefron@forefrontcertification.co.id', 'No Reply - ForeFront System');    
    $ci->email->to('info@forefrontcertification.co.id');
    // $ci->email->bcc('habibsyuhada.1109@gmail.com');
    $ci->email->subject("Someone Contact Us from $email");
    $ci->email->message("<html>
                           <body>
                                <p>Dear Mr/Ms. forefront, </p>
                                <p>Someone contact us by <a href='https://forefrontcertification.co.id/' target='_blank'>our website</a></p>
                                <p>Name : $name</p>
                                <p>Phone : $phone</p>
                                <p>E-mail : $email</p>
                                <p>Message : <br>$message</p>
                                
                                <p>Regards,<br/>ForeFront<br>(Auto Mail System)</p>
                                <p><b>This email auto generated by system. <br/> Please do not reply to this email address.</b></p>
                           </body>
                         </html>
                        ");
    // $ci->email->send();

		$this->session->set_flashdata('success', 'Your Message has been sent!');

		redirect('contact');
	}

	public function consultant(){
		$data['subview'] 			= 'support/consultants';
		$data['menu_active'] 	= 'support';
		$data['meta_title'] 	= 'Consultants';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Support', 'link' => '#'), array('text' => 'Consultants', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function find_an_iso_consultant(){
		$data['subview'] 			= 'support/find-an-iso-consultant';
		$data['menu_active'] 	= 'support';
		$data['meta_title'] 	= 'Find an ISO consultant';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Support', 'link' => '#'), array('text' => 'Find an ISO consultant', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function register_as_a_consultant(){
		$data['subview'] 			= 'support/register-as-a-consultant';
		$data['menu_active'] 	= 'support';
		$data['meta_title'] 	= 'Register as a consultant';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Support', 'link' => '#'), array('text' => 'Register as a consultant', 'link' => '#'));
		$this->load->view('index', $data);
	}

	public function register_as_a_consultant_process(){
		$this->session->set_flashdata('success', 'Your Message has been sent!');

		redirect('consultants/register-as-a-consultant');
	}

	public function auditor_opportunities(){
		$data['subview'] 			= 'support/auditor-opportunities';
		$data['menu_active'] 	= 'support';
		$data['meta_title'] 	= 'Auditor Opportunities';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Support', 'link' => '#'), array('text' => 'Auditor Opportunities', 'link' => '#'));
		$this->load->view('index', $data);
	}

	//Footer Page
	public function terms_and_conditions(){
		$data['subview'] 			= 'home/terms_and_conditions';
		$data['menu_active'] 	= '';
		$data['meta_title'] 	= 'Terms and Conditions';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Terms and Conditions', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function rules_and_regulations(){
		$data['subview'] 			= 'home/rules_and_regulations';
		$data['menu_active'] 	= '';
		$data['meta_title'] 	= 'Rules and Regulations';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Rules and Regulations', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function impartiality_confidentiality(){
		$data['subview'] 			= 'home/impartiality_confidentiality';
		$data['menu_active'] 	= '';
		$data['meta_title'] 	= 'Impartiality & Confidentiality';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Impartiality & Confidentiality', 'link' => '#'));
		$this->load->view('index', $data);
	}
	
	public function privacy_policies(){
		$data['subview'] 			= 'home/privacy_policies';
		$data['menu_active'] 	= '';
		$data['meta_title'] 	= 'Privacy Policies';
		$data['navigation'] 	= array(array('text' => 'Home', 'link' => '#'), array('text' => 'Privacy Policies', 'link' => '#'));
		$this->load->view('index', $data);
	}
}
