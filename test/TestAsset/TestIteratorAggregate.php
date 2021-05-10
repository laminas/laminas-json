<?php

namespace LaminasTest\Json\TestAsset;

use ArrayIterator;
use IteratorAggregate;

/**
 * @see Laminas-12347
 */
class TestIteratorAggregate implements IteratorAggregate
{
    protected $array = [
        'foo' => 'bar',
        'baz' => 5,
    ];

    public function getIterator()
    {
        return new ArrayIterator($this->array);
    }
}
