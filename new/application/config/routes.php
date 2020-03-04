<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] 										= 'home/about';
$route['about/why-us'] 							= 'home/about_why_us';
$route['about/ukas-accreditation'] 	= 'home/about_ukas_accreditation';

$route['certification'] 															= 'home/certification';
$route['certification/iso-90012015'] 									= 'home/certification_iso_90012015';
$route['certification/iso-140012015'] 								= 'home/certification_iso_140012015';
$route['certification/iso-45001'] 										= 'home/certification_iso_45001';
$route['certification/iso-27001'] 										= 'home/certification_iso_27001';
$route['certification/benefits-of-certification'] 		= 'home/benefits_of_certification';

$route['support'] 															= 'home/support';
$route['support/certification-process'] 				= 'home/support_certification_process';
$route['support/transfer-your-certification'] 	= 'home/support_transfer_your_certification';

$route['training'] 	= 'home/training';

$route['online-training'] 								= 'home/online_training';
$route['online-training/health-safety'] 	= 'home/online_training_health_safety';
$route['online-training/business-skills'] = 'home/online_training_business_skills';

$route['contact'] = 'home/contact';

$route['free-quotation'] 	= 'home/free_quotation';

$route['consultants'] 															= 'home/find_an_iso_consultant';
$route['consultants/find-an-iso-consultant'] 				= 'home/find_an_iso_consultant';
$route['consultants/register-as-a-consultant'] 			= 'home/register_as_a_consultant';
$route['consultants/auditor-opportunities'] 				= 'home/auditor_opportunities';