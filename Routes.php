<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
 $routes->get('/', 'Home::index');

$routes->get('users','Users::index');
// https://localhost/code_projects/user this is how to access on the web browser

$routes->get('users/test','Users::test');
https://localhost/code_projects/users/test this is how to access on the web browser


$routes->get('users/test/(:any)','Users::test/$1');

$routes->get('users/test/(:any)/(:any)','Users::test/$1/$2');
//https://localhost/code_projects/users/test/Adidas/123

$routes->get('/','Users::index');
$routes->get('users/login', 'Users::login');
$routes->post('users/login', 'Users::login');
$routes->get('users/logout', 'Users::logout');
$routes->get('users','Users::index');
$routes->get('users/index','Users::index');
$routes->get('users/add', 'Users::add');
$routes->post('users/add', 'Users::add');
$routes->get('users/view/(:num)', 'Users::view/$1');
$routes->get('users/edit/(:num)', 'Users::edit/$1');
$routes->post('users/edit/(:num)', 'Users::edit/$1');
$routes->get('users/delete/(:num)', 'Users::delete/$1');

$routes->get('products', 'Products::index'); // Show the list of products
$routes->get('products/index', 'Products::index'); // Show the list of products

$routes->get('products/add', 'Products::add'); // Show the form to add a new product
$routes->post('products/add', 'Products::add'); // Handle the form submission for adding a product
$routes->get('products/view/(:num)', 'Products::view/$1'); // View a specific product
$routes->get('products/edit/(:num)', 'Products::edit/$1'); // Show the form to edit a specific product
$routes->post('products/edit/(:num)', 'Products::edit/$1'); // Handle the form submission for editing a product
$routes->get('products/delete/(:num)', 'Products::delete/$1'); // Handle the deletion of a specific product
$routes->get('products/showcase', 'Products::showcase');

$routes->get('pnk/index','PNK::index');
$routes->get('pnk','PNK::index');
$routes->get('pnk/add','PNK::add' );
$routes->post('pnk/add','PNK::add' );
$routes->get('pnk/edit/(:num)','PNK::edit/$1');
$routes->post('pnk/edit/(:num)','PNK::edit/$1');
$routes->get('pnk/delete/(:num)', 'PNK::delete/$1');    