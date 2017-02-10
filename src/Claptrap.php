<?php
declare(strict_types = 1);
namespace Claptrap;

use Claptrap\Http\Request;
use Claptrap\Http\Response;
use Claptrap\Renderer\Text;
use Dersam\Dog;

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

        $pipeline = new Dog();
        $pipeline->assemble();
        $pipeline->activate($request, $response);

        echo $response->render();
    }
}
