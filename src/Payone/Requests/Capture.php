<?php


namespace Payone\Requests;

class Capture extends Request {

    protected $request_type = 'authorization';

    protected function getMapperObject()
    {
        return new \Payone\Mappers\Capture();
    }
}