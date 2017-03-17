<?php

namespace Claptrap\Pipelines;

use Claptrap\Pipeline;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
class Html extends Pipeline
{

    public function assemble()
    {
        $this->attach(new \Claptrap\Pipes\Html());
    }
}
