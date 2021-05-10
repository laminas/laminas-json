<?php // @codingStandardsIgnoreFile
namespace LaminasTest\Json\TestAsset;

use Laminas\Json\Expr;
use Laminas\Json\Json;

/**
 * ISSUE  Laminas-4946
 */
class ToJSONWithExpr
{
    private $_string = 'text';
    private $_int = 9;
    private $_expr = 'window.alert("Laminas JSON Expr")';

    public function toJSON()
    {
        $data = [
            'expr'   => new Expr($this->_expr),
            'int'    => $this->_int,
            'string' => $this->_string
        ];

        return Json::encode($data, false, ['enableJsonExprFinder' => true]);
    }
}
