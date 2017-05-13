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
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


$route['default_controller'] = 'Welcome_Controller';

$route['study'] = 'Study_cont';
$route['job/(:num)'] = 'Job';
$route['job/(:num)/edit'] = 'Edit_Job_Controller';
$route['job/(:num)/(:any)'] = 'Job';
$route['job'] = 'GetJob';
$route['user/(:num)'] = 'User_Controller';
$route['user'] = 'User_Controller';
$route['add'] = 'Add_Order_Controller';
$route['check'] = 'Check_One_User_Controller';
$route['check/(:num)'] = 'Check_One_User_Controller';
$route['show/(:any)'] = 'Show';
$route['login'] = 'Auth_Controller';
$route['login/(:any)'] = 'Auth_Controller';
$route['registration/(:any)'] = 'Registration_Controller';
$route['temp'] = 'temp';
$route['encrypt'] = 'Encrypt_Controller';
$route['im'] = 'Message_Controller';
$route['im/(:num)'] = 'Message_Controller';
$route['im/new'] = 'New_Message_Controller';
$route['chief'] = 'Chief_Controller';
$route['t'] = 'Test_Controller';
$route['news'] = 'News_Controller';
$route['news/add'] = 'Add_News_Controller';
$route['news/(:num)'] = 'One_News_Controller';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
