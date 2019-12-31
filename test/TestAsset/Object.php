<?php

/**
 * @see       https://github.com/laminas/laminas-json for the canonical source repository
 * @copyright https://github.com/laminas/laminas-json/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-json/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Json\TestAsset;

/**
 * Test class for encoding classes.
 */
class Object
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
