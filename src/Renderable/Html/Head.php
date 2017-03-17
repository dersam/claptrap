<?php

namespace Claptrap\Renderable\Html;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
class Head extends Block
{

    protected function render(): string
    {
        return <<<HTML
<head>

</head>
HTML;
    }
}
