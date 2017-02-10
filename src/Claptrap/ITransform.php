<?php
namespace Claptrap;

use Claptrap\Http\Request;
use Claptrap\Http\Response;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
interface ITransform
{
    public function transform(Request $request, Response $response);
}
