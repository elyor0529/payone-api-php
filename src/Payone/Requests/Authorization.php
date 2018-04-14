<?php


namespace Payone\Requests;


class Authorization extends Request {

    protected $request_type = 'authorization';

    protected function getMapperObject()
    {
        return new \Payone\Mappers\Authorization();
    }
}