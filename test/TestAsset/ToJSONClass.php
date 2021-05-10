<?php // @codingStandardsIgnoreFile
namespace LaminasTest\Json\TestAsset;

use Laminas\Json\Json;

class ToJSONClass
{
    private $_firstName = 'John';

    private $_lastName = 'Doe';

    private $_email = 'john@doe.com';

    public function toJson()
    {
        $data = [
            'firstName' => $this->_firstName,
            'lastName'  => $this->_lastName,
            'email'     => $this->_email
        ];

        return Json::encode($data);
    }
}
