<?php

declare(strict_types=1);

namespace LaminasTest\Json\TestAsset;

use Exception;

class Bar
{
    /** @var mixed */
    protected $val;

    /** @param mixed $someval */
    public function __construct($someval)
    {
        $this->val = $someval;
    }

    /**
     * Bar
     *
     * @param  bool $one
     * @param  string $two
     * @param  mixed $three
     * @return array
     */
    public function foo($one, $two = 'two', $three = null)
    {
        return [$one, $two, $three, $this->val];
    }

    /**
     * Baz
     *
     * @return void
     * @throws Exception
     */
    public function baz()
    {
        throw new Exception('application error');
    }
}
