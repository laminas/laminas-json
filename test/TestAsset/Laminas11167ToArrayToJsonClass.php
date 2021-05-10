<?php

namespace LaminasTest\Json\TestAsset;

use Laminas\Json\Json;

/**
 * Serializable class exposing both toArray() and toJson() methods.
 */
class Laminas11167ToArrayToJsonClass extends Laminas11167ToArrayClass
{
    public function toJson()
    {
        return Json::encode('bogus');
    }
}
