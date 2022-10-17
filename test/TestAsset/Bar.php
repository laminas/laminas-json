<?php

declare(strict_types=1);

namespace LaminasTest\Json\TestAsset;

use Exception;

class Bar
{
    public function __construct(protected mixed $val)
    {
    }

    /**
     * Bar
     *
     * @param  bool $one
     * @param  string $two
     * @return array
     */
    public function foo($one, $two = 'two', mixed $three = null)
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
