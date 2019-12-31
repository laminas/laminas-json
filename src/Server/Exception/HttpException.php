<?php

/**
 * @see       https://github.com/laminas/laminas-json for the canonical source repository
 * @copyright https://github.com/laminas/laminas-json/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-json/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Json\Server\Exception;

/**
 * Thrown by Laminas_Json_Server_Client when an HTTP error occurs during an
 * JSON-RPC method call.
 *
 * @category   Laminas
 * @package    Laminas_Json
 * @subpackage Server
 */
class HttpException extends RuntimeException
{}
