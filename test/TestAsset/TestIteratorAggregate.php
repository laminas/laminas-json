<?php

/**
 * @see       https://github.com/laminas/laminas-json for the canonical source repository
 * @copyright https://github.com/laminas/laminas-json/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-json/blob/master/LICENSE.md New BSD License
 */

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
