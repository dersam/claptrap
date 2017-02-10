<?php
declare(strict_types = 1);
namespace Claptrap;

use Exception;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
abstract class Renderer
{
    protected $canHandle = [];

    public function validate(array $items) : void
    {
        foreach ($items as $item) {
            $itemClass = get_class($item);

            if (!in_array($itemClass, $this->canHandle)) {
                throw new Exception(sprintf(
                    'Selected renderer expects all items to be of type {%s}, %s found',
                    implode(',', $this->canHandle),
                    get_class($item)
                ));
            }
        }
    }

    /**
     * @param Renderable[] $items
     * @return string
     */
    abstract public function flush(array $items) : string;
}
