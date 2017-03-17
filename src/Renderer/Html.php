<?php

namespace Claptrap\Renderer;

use Claptrap\Renderable;
use Claptrap\Renderer;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
class Html extends Renderer
{

    /**
     * @param Renderable[] $items
     *
     * @return string
     */
    public function flush(array $items): string
    {
        $text = '';

        foreach ($items as $item) {
            $text .= $item;
        }

        return $text;
    }
}
