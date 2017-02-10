<?php
declare(strict_types = 1);
namespace Claptrap;

use Claptrap\Http\Request;
use Claptrap\Http\Response;
use Claptrap\Renderer\Text;

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

        $item = new Renderable\Text();
        $item->addLine('hello this is dog!');
        $response->addRenderableItem($item);
        $response->setRenderer(new Text());

        echo $response->render();
    }
}
