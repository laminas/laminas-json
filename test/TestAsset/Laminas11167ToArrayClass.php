<?php // @codingStandardsIgnoreFile
namespace LaminasTest\Json\TestAsset;

/**
 * Serializable class exposing a toArray() method.
 */
class Laminas11167ToArrayClass
{
    private $_firstName = 'John';

    private $_lastName = 'Doe';

    private $_email = 'john@doe.com';

    public function toArray()
    {
        $data = [
            'firstName' => $this->_firstName,
            'lastName'  => $this->_lastName,
            'email'     => $this->_email
        ];
        return $data;
    }
}
