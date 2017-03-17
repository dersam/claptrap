<?php
declare(strict_types = 1);
namespace Claptrap;

use Claptrap\Http\Request;
use Claptrap\Http\Response;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
abstract class Pipeline
{
    protected $pipes = [];

    abstract public function assemble();

    protected function attach(Pipe $pipe)
    {
        $this->pipes[] = $pipe;
    }

    public function activate(Request $request, Response $response)
    {
        /** @var Pipe $pipe */
        foreach ($this->pipes as $pipe) {
            $pipe->transform($request, $response);
        }
    }
}
