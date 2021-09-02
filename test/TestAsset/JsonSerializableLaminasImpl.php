<?php // phpcs:disable SlevomatCodingStandard.Namespaces.UnusedUses.UnusedUse

namespace LaminasTest\Json\TestAsset;

use Laminas\Stdlib\JsonSerializable;
use ReturnTypeWillChange;

class JsonSerializableLaminasImpl implements JsonSerializable
{
    /** @return array */
    #[ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return [__FUNCTION__];
    }
}
