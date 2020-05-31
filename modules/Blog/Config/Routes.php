<?php
//$routes->get('/blog', '\Modules\Blog\Controllers\Blog::index');

$routes->group('blog', ['namespace' => 'Modules\Blog\Controllers'], function($routes)
{
    $routes->get('/', 'Blog::index');
});
