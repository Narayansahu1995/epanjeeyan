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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'Epanjiyan';
$route['/'] = 'Epanjiyan/index';
//   $route['pre_registration'] = 'Epanjiyan/pre_registraion';
// $route['karyalay_m_panjeeyan_prakriya'] = 'Epanjiyan/karyalay_m_panjeeyan_prakriya';
$route['input-form'] = 'Epanjiyan/input_form';
$route['vilekh_namuna'] = 'Epanjiyan/vilekh_namuna';
// $route['IGRMis'] = 'Epanjiyan/IGRMis';
$route['corona_guideline'] = 'Epanjiyan/corona_guideline';
// $route['pratikriya'] = 'Epanjiyan/pratikriya';
// $route['shikayat'] = 'Epanjiyan/shikayat';
$route['test'] = 'Epanjiyan/data';


$route['home'] = 'HomeController/index2';
$route['form-elements'] = 'HomeController/form_elements';
$route['form-editors'] = 'HomeController/form_editors';
$route['form-layouts'] = 'HomeController/form_layouts';
$route['form-validations'] = 'HomeController/form_validations';
$route['tables-general'] = 'HomeController/table_general';
$route['tables-data'] = 'HomeController/table_data ';
$route['form-upload'] = 'HomeController/form_uploads';
$route['execute_query'] = 'HomeController/execute_query';
$route['forms-search'] = 'HomeController/form_search';
$route['viewajax'] = 'HomeController/viewajax';
$route['select_body'] = 'HomeController/select_body';
$route['recordList'] = 'HomeController/recordList_data';
$route['preview'] = 'HomeController/previewList';
$route['logout'] = 'HomeController/logout';
$route['edit'] = 'HomeController/edit_form';
$route['create'] = 'HomeController/create_new';
$route['deleterecords'] = 'HomeController/deleterecords';
$route['form-db'] = 'HomeController/form_search_db';
$route['edit_db'] = 'HomeController/edit_db';
$route['deleterecords'] = 'HomeController/deleterecords';
$route['add'] = 'HomeController/new_add_db';
$route['login'] = 'HomeController/login';
$route['logout'] = 'HomeController/logout_user';
$route['search-dumy'] = 'HomeController/bodyname';
$route['back'] = 'HomeController/back_button';
$route['forgot'] = 'HomeController/forgot_page';
$route['verify'] = 'HomeController/verify_fun';
$route['verify-submit'] = 'HomeController/verify_submit';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
