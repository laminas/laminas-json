<?php // phpcs:disable SlevomatCodingStandard.Namespaces.UnusedUses.UnusedUse

namespace LaminasTest\Json\TestAsset;

use ArrayIterator;
use IteratorAggregate;
use ReturnTypeWillChange;

/**
 * @see Laminas-12347
 */
class TestIteratorAggregate implements IteratorAggregate
{
    /** @var array */
    protected $array = [
        'foo' => 'bar',
        'baz' => 5,
    ];

    /**
     * @return ArrayIterator
     */
    #[ReturnTypeWillChange]
    public function getIterator()
    {
        return new ArrayIterator($this->array);
    }
}
