<?php
declare(strict_types = 1);
namespace Claptrap\Http;

use Claptrap\Renderable;
use Claptrap\Renderer;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
final class Response
{
    protected $renderableItems = [];

    /**
     * @var Renderer
     */
    protected $renderer;

    public function addRenderableItem(Renderable $item)
    {
        $this->renderableItems[] = $item;
    }

    public function render()
    {
        return $this->renderer->render($this->renderableItems);
    }

    /**
     * @param Renderer $renderer
     */
    public function setRenderer(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }
}
