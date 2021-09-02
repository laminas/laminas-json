<?php

/**
 * @see       https://github.com/laminas/laminas-json for the canonical source repository
 * @copyright https://github.com/laminas/laminas-json/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-json/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Json\TestAsset;

use Laminas\Stdlib\JsonSerializable;
use ReturnTypeWillChange;

class JsonSerializableLaminasImpl implements JsonSerializable
{
    #[ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return [__FUNCTION__];
    }
}
