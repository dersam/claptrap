<?php
declare(strict_types = 1);
namespace Claptrap;

/**
 *
 *
 * @author Sam Schmidt <samuel@dersam.net>
 */
abstract class Renderable
{
    protected $data = [];

    public function set(string $key, $value) : void
    {
        $this->data[$key] = $value;
    }

    public function push($value) : void
    {
        $this->data[] = $value;
    }

    abstract protected function render() : string;

    public function __toString()
    {
        return $this->render();
    }
}
