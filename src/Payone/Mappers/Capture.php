<?php


namespace Payone\Mappers;


use Payone\Exceptions\UnknownStatus;
use Payone\Mappers\Mapper;
use Payone\Responses\Capture\Approved;
use Payone\Responses\Capture\Error;

class Capture extends Mapper {

    /**
     * @param array $params
     * @return Approved|Error
     * @throws UnknownStatus
     */
    function map(array $params)
    {
        $this->setParams($params);

        if ($this->isApproved()) return new Approved($params);
        else if ($this->isError()) return new Error($params);
        else throw new UnknownStatus();
    }

}