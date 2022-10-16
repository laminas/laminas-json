<?php

declare(strict_types=1);

namespace LaminasTest\Json\TestAsset;

/**
 * Test class for encoding classes.
 */
class TestObject
{
    public const FOO = 'bar';

    /** @var string */
    public $foo = 'bar';

    /** @var string */
    public $bar = 'baz';

    // phpcs:disable WebimpressCodingStandard.NamingConventions.ValidVariableName.NotCamelCapsProperty,PSR2.Classes.PropertyDeclaration.Underscore

    /** @var string */
    protected $_foo = 'fooled you';

    // phpcs:enable
    /**
     * @return void
     */
    public function foo(mixed $bar, mixed $baz)
    {
    }

    /**
     * @return void
     */
    public function bar(mixed $baz)
    {
    }

    /** @return void */
    protected function baz()
    {
    }
}
