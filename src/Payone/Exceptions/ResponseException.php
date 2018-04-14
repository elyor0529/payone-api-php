<?php


namespace Payone\Exceptions;


use Payone\PayoneException;

class ResponseException extends PayoneException {

    public function __construct($error)
    {
        parent::__construct($error->errormessage, $error->errorcode);
    }

}