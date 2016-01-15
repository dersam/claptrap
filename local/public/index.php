<?php
/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 * @since 2016-01-14
 */

if (!ini_get('date.timezone')) {
    ini_set('date.timezone', 'UTC');
}

require '../../vendor/autoload.php';

$state = [
    'method' => $_SERVER['REQUEST_METHOD'],
    'path' => $_SERVER['REQUEST_URI'],
    'routes' => $routes
];

\Dersam\Claptrap\app($state);
