<?php


namespace Payone\Exceptions;


use Payone\PayoneException;

class ConnectionException extends PayoneException {

    public function __construct($message = "", $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}