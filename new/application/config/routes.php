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

$route['online-training'] 								= 'home/online_training';
$route['online-training/health-safety'] 	= 'home/online_training_health_safety';
$route['online-training/business-skills'] = 'home/online_training_business_skills';

$route['contact'] = 'home/contact';

$route['free-quotation'] 	= 'home/free_quotation';

$route['consultants'] 															= 'home/find_an_iso_consultant';
$route['consultants/find-an-iso-consultant'] 				= 'home/find_an_iso_consultant';
$route['consultants/register-as-a-consultant'] 			= 'home/register_as_a_consultant';
$route['consultants/auditor-opportunities'] 				= 'home/auditor_opportunities';

$route['training'] 	= 'home/training';
//ISO 9001
$route['training/training-courses-for-iso-9001-quality-management'] 	= 'training/training_courses_for_iso_9001_quality_management';
$route['training/1-day-iso-90012015-awareness'] 	= 'training/training_1_day_iso_90012015_awareness';
$route['training/2-day-iso-90012015-internal-auditor'] 	= 'training/training_2_day_iso_90012015_internal_auditor';
$route['training/5-day-iso-90012015-irca-auditorlead-auditor'] 	= 'training/training_5_day_iso_90012015_irca_auditorlead_auditor';
//Business Improvement
$route['training/business-improvement'] 	= 'training/business_improvement';
$route['training/business-improvement/8d-problem-solving'] 	= 'training/business_improvement_8d_problem_solving';
$route['training/business-improvement/advanced-product-quality-planning-apqp'] 	= 'training/business_improvement_advanced_product_quality_planning_apqp';
$route['training/business-improvement/production-part-approval-process-ppap'] 	= 'training/business_improvement_production_part_approval_process_ppap';
$route['training/business-improvement/5s'] 	= 'training/business_improvement_5s';
$route['training/business-improvement/process-fmea'] 	= 'training/business_improvement_process_fmea';
$route['training/business-improvement/measurement-systems-analysis-msa'] 	= 'training/business_improvement_measurement_systems_analysis_msa';
$route['training/business-improvement/use-of-minitab-software'] 	= 'training/business_improvement_use_of_minitab_software';
//AS9100
$route['training/as-9100-aerospace-quality-management'] 	= 'training/as_9100_aerospace_quality_management';
$route['training/as-9100-aerospace-quality-management/1-day-as-91002016-awareness'] 	= 'training/as_9100_aerospace_quality_management_1_day_as_91002016_awareness';
$route['training/as-9100-aerospace-quality-management/2-day-as-91002016-internal-auditor-course'] 	= 'training/as_9100_aerospace_quality_management_2_day_as_91002016_internal_auditor_course';
// ISO 14001
$route['training/iso-14001-environmental-management'] 	= 'training/iso_14001_environmental_management';
$route['training/1-day-iso-140012015-awareness'] 	= 'training/training_1_day_iso_140012015_awareness';
$route['training/2-day-iso-140012015-internal-auditor'] 	= 'training/training_2_day_iso_140012015_internal_auditor';
// ISO 27001:2013
$route['training/iso-27001-information-security-management'] 	= 'training/iso_27001_information_security_management';
$route['training/iso-27001-information-security-management/1-day-iso-270012015-awareness-course'] 	= 'training/iso_27001_information_security_management_1_day_iso_270012015_awareness_course';
$route['training/iso-27001-information-security-management/2-day-iso-270012013-internal-auditor'] 	= 'training/iso_27001_information_security_management_2_day_iso_270012013_internal_auditor';
// ISO 45001:2018
$route['training/iso-45001-health-safety'] 	= 'training/iso_45001_health_safety';
$route['training/iso-45001-health-safety/iso-45001-foundation-course'] 	= 'training/iso_45001_health_safety_iso_45001_foundation_course';
$route['training/iso-45001-health-safety/iso-45001-auditor-transition-course'] 	= 'training/iso_45001_health_safety_iso_45001_auditor_transition_course';
$route['training/iso-45001-health-safety/2-day-iso-45001-internal-auditor-course'] 	= 'training/iso_45001_health_safety_2_day_iso_45001_internal_auditor_course';
$route['training/iso-45001-health-safety/iso-45001-auditor-conversion-course'] 	= 'training/iso_45001_health_safety_iso_45001_auditor_conversion_course';
$route['training/iso-45001-health-safety/iso-45001-lead-auditor-course'] 	= 'training/iso_45001_health_safety_iso_45001_lead_auditor_course';
// IATF 16949:2016
$route['training/iatf-16949-automotive'] 	= 'training/iatf_16949_automotive';
$route['training/iatf-16949-automotive/1-day-iatf-ts-16949-awareness'] 	= 'training/iatf_16949_automotive_1_day_iatf_ts_16949_awareness';
$route['training/iatf-16949-automotive/iatf-16949-internal-auditor-course'] 	= 'training/iatf_16949_automotive_iatf_16949_internal_auditor_course';
$route['training/iatf-16949-automotive/2-day-iatf-16949-transition-course'] 	= 'training/iatf_16949_automotive_2_day_iatf_16949_transition_course';