<?php

namespace Claptrap\Pipes;

use Claptrap\Http\Request;
use Claptrap\Http\Response;
use Claptrap\Pipe;
use Claptrap\Renderer\Html;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
class HtmlPipe implements Pipe
{

    public function transform(Request $request, Response $response)
    {
        $response->setRenderer(new Html());
    }
}
