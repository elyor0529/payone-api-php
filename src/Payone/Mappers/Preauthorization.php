<?php


namespace Payone\Mappers;


use Payone\Exceptions\UnknownStatus;
use Payone\Mappers\Mapper;
use Payone\Responses\Preauthorization\Approved;
use Payone\Responses\Preauthorization\Error;
use Payone\Responses\Preauthorization\Pending;
use Payone\Responses\Preauthorization\Redirect;

class Preauthorization extends Mapper {

    /**
     * @param array $params
     * @return Approved|Error|Pending|Redirect
     * @throws UnknownStatus
     */
    function map(array $params)
    {
        $this->setParams($params);

        if ($this->isApproved()) return new Approved($params);
        else if ($this->isRedirect()) return new Redirect($params);
        else if ($this->isPending()) return new Pending($params);
        else if ($this->isError()) return new Error($params);
        else throw new UnknownStatus();
    }
}