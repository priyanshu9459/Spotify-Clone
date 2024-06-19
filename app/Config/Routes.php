<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/email', 'Home::sendEmail');
$routes->get('/contact', 'Contact::index');
$routes->get('contact/(:any)', 'Contact::getParm/$1');
// $routes->get('product/(:num)', 'Catalog::productLookupByID/$1');