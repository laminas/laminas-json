<?php // phpcs:disable SlevomatCodingStandard.Namespaces.UnusedUses.UnusedUse

namespace LaminasTest\Json\TestAsset;

use JsonSerializable;
use ReturnTypeWillChange;

/**
 * Implementation of the built-in JsonSerializable interface.
 */
class JsonSerializableBuiltinImpl implements JsonSerializable
{
    /** @return array */
    #[ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return [__FUNCTION__];
    }
}
