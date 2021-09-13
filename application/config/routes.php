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
$route['default_controller'] = 'home/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Front End 
$route['rooms'] = "home/rooms";
$route['tents'] = "home/tents";
$route['cottage'] = "home/cottage";
$route['camping'] = "home/camping";
$route['single-details/(:any)/(:any)/(:any)'] = "home/singleDetails/$1/$1/$1";
$route['booking'] = "home/booking";


//$route['rooms/(:num)'] = "rooms";

//$route['authors/(:num)'] = 'authors';


	
$route['payment-method'] = "home/paymentMethod";
$route['stripePost']['post'] = "stripe/stripePost";
$route['payment/(:any)'] = "payment/paymentmodule/$1";

$route['thanks'] = "home/thanks";






$route['administrator'] = 'administrator/login';
$route['administrator/dashboard'] = 'administrator/dashboard';
$route['logout'] = 'login/logout';





$route['administrator/hotels'] = 'administrator/hotels';
$route['administrator/create-hotel'] = 'administrator/createHotel';
$route['administrator/edit-hotel/(:any)'] = 'administrator/editHotel/$1';


$route['administrator/services'] = 'administrator/services';
$route['administrator/create-service'] = 'administrator/createService';
$route['administrator/edit-service/(:any)'] = 'administrator/editService/$1';

$route['administrator/category'] = 'administrator/category';
$route['administrator/create-category'] = 'administrator/createCategory';
$route['administrator/edit-category/(:any)'] = 'administrator/editCategory/$1';



$route['administrator/banner'] = 'administrator/banner';


//Room
$route['administrator/create-room'] = 'administrator/createProperty';
$route['administrator/rooms'] = 'administrator/Properties';
$route['administrator/edit-room/(:any)/(:any)'] = 'administrator/editProperty/$1/$1';
$route['administrator/room-gallery/(:any)/(:any)'] = 'administrator/propertyGallery/$1/$1';
$route['administrator/room-amenity/(:any)/(:any)'] = 'administrator/propertyAmenity/$1/$1';

//Tent
$route['administrator/create-tent'] = 'administrator/createProperty';
$route['administrator/tents'] = 'administrator/Properties';
$route['administrator/edit-tent/(:any)/(:any)'] = 'administrator/editProperty/$1/$1';
$route['administrator/tent-gallery/(:any)/(:any)'] = 'administrator/propertyGallery/$1/$1';
$route['administrator/tent-amenity/(:any)/(:any)'] = 'administrator/propertyAmenity/$1/$1';
//Cottage
$route['administrator/create-cottage'] = 'administrator/createProperty';
$route['administrator/cottages'] = 'administrator/Properties';
$route['administrator/edit-cottage/(:any)/(:any)'] = 'administrator/editProperty/$1/$1';
$route['administrator/cottage-gallery/(:any)/(:any)'] = 'administrator/propertyGallery/$1/$1';
$route['administrator/cottage-amenity/(:any)/(:any)'] = 'administrator/propertyAmenity/$1/$1';
//Camping
$route['administrator/create-camping'] = 'administrator/createProperty';
$route['administrator/campings'] = 'administrator/Properties';
$route['administrator/edit-camping/(:any)/(:any)'] = 'administrator/editProperty/$1/$1';
$route['administrator/camping-gallery/(:any)/(:any)'] = 'administrator/propertyGallery/$1/$1';
$route['administrator/camping-amenity/(:any)/(:any)'] = 'administrator/propertyAmenity/$1/$1';


