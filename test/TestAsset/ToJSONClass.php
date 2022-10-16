<?php

declare(strict_types=1);

namespace LaminasTest\Json\TestAsset;

use Laminas\Json\Json;

class ToJSONClass
{
    // phpcs:disable PSR2.Classes.PropertyDeclaration.Underscore,WebimpressCodingStandard.NamingConventions.ValidVariableName.NotCamelCapsProperty

    /** @var string */
    private $_firstName = 'John';

    /** @var string */
    private $_lastName = 'Doe';

    /** @var string */
    private $_email = 'john@doe.com';

    // phpcs:enable

    /** @return string */
    public function toJson()
    {
        $data = [
            'firstName' => $this->_firstName,
            'lastName'  => $this->_lastName,
            'email'     => $this->_email,
        ];

        return Json::encode($data);
    }
}
