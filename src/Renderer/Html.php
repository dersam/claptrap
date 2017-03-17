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
        $body = '';
        $head = '';

        foreach ($items as $item) {
            if (get_class($item) == Renderable\Html\Head::class
                || is_subclass_of($item, Renderable\Html\Head::class)
            ) {
                $head .= $item;
            } else {
                $body .= $item;
            }
        }

        return "<html><head>$head</head>$body</html>";
    }
}
