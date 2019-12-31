<?php

/**
 * @see       https://github.com/laminas/laminas-json for the canonical source repository
 * @copyright https://github.com/laminas/laminas-json/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-json/blob/master/LICENSE.md New BSD License
 */

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
