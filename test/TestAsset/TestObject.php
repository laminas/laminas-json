<?php

namespace LaminasTest\Json\TestAsset;

/**
 * Test class for encoding classes.
 */
class TestObject
{
    const FOO = 'bar';

    public $foo = 'bar';
    public $bar = 'baz';

    // @codingStandardsIgnoreStart
    protected $_foo = 'fooled you';
    // @codingStandardsIgnoreEnd

    public function foo($bar, $baz)
    {
    }

    public function bar($baz)
    {
    }

    protected function baz()
    {
    }
}
