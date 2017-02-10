<?php
declare(strict_types = 1);
namespace Claptrap;

use Claptrap\Http\Request;
use Claptrap\Http\Response;
use FastRoute\Dispatcher;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
final class Claptrap
{
    public function run()
    {
        $request = new Request();
        $response = new Response();

        /**
         * @var Dispatcher
         */
        $dispatcher = require 'pipes.php';

        $routeInfo = $dispatcher->dispatch('GET', '/dog');
        switch ($routeInfo[0]) {
            case Dispatcher::NOT_FOUND:
                // ... 404 Not Found
                break;
            case Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = $routeInfo[1];
                // ... 405 Method Not Allowed
                break;
            case Dispatcher::FOUND:
                $handler = $routeInfo[1];
                $vars = $routeInfo[2];
                /** @var Pipeline $pipeline */
                $pipeline = new $handler();
                $pipeline->assemble();
                $pipeline->activate($request, $response);
                break;
        }

        echo $response->render();
    }
}
