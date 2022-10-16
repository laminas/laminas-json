<?php

declare(strict_types=1);

namespace LaminasTest\Json\TestAsset;

/**
 * Serializable class exposing a toArray() method.
 */
class Laminas11167ToArrayClass
{
    // phpcs:disable WebimpressCodingStandard.NamingConventions.ValidVariableName.NotCamelCapsProperty,PSR2.Classes.PropertyDeclaration.Underscore
    private string $_firstName = 'John';

    private string $_lastName = 'Doe';

    private string $_email = 'john@doe.com';

    // phpcs:enable

    /** @return array */
    public function toArray()
    {
        return [
            'firstName' => $this->_firstName,
            'lastName'  => $this->_lastName,
            'email'     => $this->_email,
        ];
    }
}
