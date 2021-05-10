<?php

namespace LaminasTest\Json\TestAsset;

use JsonSerializable;

/**
 * Implementation of the built-in JsonSerializable interface.
 */
class JsonSerializableBuiltinImpl implements JsonSerializable
{
    public function jsonSerialize()
    {
        return [__FUNCTION__];
    }
}
