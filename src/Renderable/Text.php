<?php
declare(strict_types = 1);
namespace Claptrap\Renderable;

use Claptrap\Renderable;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
class Text extends Renderable
{
    public function addLine(string $line)
    {
        $this->push($line . PHP_EOL);
    }

    protected function render(): string
    {
        $text = '';

        foreach ($this->data as $line) {
            $text .= $line;
        }

        return $text;
    }
}
