<?php

namespace LaminasTest\Json\TestAsset;

use Laminas\Stdlib\JsonSerializable;

class JsonSerializableLaminasImpl implements JsonSerializable
{
    public function jsonSerialize()
    {
        return [__FUNCTION__];
    }
}
