<?php

declare(strict_types=1);

namespace LaminasTest\Json\TestAsset;

use Laminas\Json\Json;

/**
 * Serializable class exposing both toArray() and toJson() methods.
 */
class Laminas11167ToArrayToJsonClass extends Laminas11167ToArrayClass
{
    /** @return string */
    public function toJson()
    {
        return Json::encode('bogus');
    }
}
