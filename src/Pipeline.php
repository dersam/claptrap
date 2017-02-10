<?php
declare(strict_types = 1);
namespace Claptrap;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
abstract class Pipeline
{
    protected $pipes = [];

    public function attach(Pipe $pipe) : void
    {
        $this->pipes[] = $pipe;
    }
}
