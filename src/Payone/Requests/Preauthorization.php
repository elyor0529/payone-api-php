<?php


namespace Payone\Requests;

class Preauthorization extends Request {

    protected $request_type = 'preauthorization';

    protected function getMapperObject()
    {
        return new \Payone\Mappers\Preauthorization();
    }
}