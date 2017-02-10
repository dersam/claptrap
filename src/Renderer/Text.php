<?php
declare(strict_types = 1);
namespace Claptrap\Renderer;

use Claptrap\Renderable;
use Claptrap\Renderer;
use Exception;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
class Text extends Renderer
{
    /**
     * @param Renderable[] $items
     * @return string
     * @throws Exception
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
