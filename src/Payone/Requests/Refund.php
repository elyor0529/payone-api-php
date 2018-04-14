<?php


namespace Payone\Requests;

class Refund extends Request {

    protected $request_type = 'authorization';

    protected function getMapperObject()
    {
        return new \Payone\Mappers\Refund();
    }
}