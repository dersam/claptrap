<?php

namespace Claptrap\Pipes;

use Claptrap\Http\Request;
use Claptrap\Http\Response;
use Claptrap\Pipe;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
class Html implements Pipe
{

    public function transform(Request $request, Response $response)
    {
        $response->setRenderer(new \Claptrap\Renderer\Html());
    }
}
