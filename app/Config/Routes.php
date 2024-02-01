<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Pages::about');
$routes->get('/career', 'Pages::career');
$routes->get('/shop', 'Pages::shop');
$routes->get('/contact', 'Pages::contact');
$routes->get('/carwash', 'Pages::sCarwash');
