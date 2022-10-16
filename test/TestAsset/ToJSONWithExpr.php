<?php

declare(strict_types=1);

namespace LaminasTest\Json\TestAsset;

use Laminas\Json\Expr;
use Laminas\Json\Json;

/**
 * ISSUE  Laminas-4946
 */
class ToJSONWithExpr
{
    // phpcs:disable WebimpressCodingStandard.NamingConventions.ValidVariableName.NotCamelCapsProperty,PSR2.Classes.PropertyDeclaration.Underscore
    private string $_string = 'text';

    private int $_int = 9;

    private string $_expr = 'window.alert("Laminas JSON Expr")';

    // phpcs:enable

    /** @return string */
    public function toJSON()
    {
        $data = [
            'expr'   => new Expr($this->_expr),
            'int'    => $this->_int,
            'string' => $this->_string,
        ];

        return Json::encode($data, false, ['enableJsonExprFinder' => true]);
    }
}
