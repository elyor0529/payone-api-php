<?php


namespace Payone\Mappers;


abstract class Mapper {

    const APPROVED = 'APPROVED';
    const PENDING = 'PENDING';
    const REDIRECT = 'REDIRECT';
    const ERROR = 'ERROR';

    protected $params = null;

    abstract function map(array $params);

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param mixed $params
     * @return Mapper
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    public function getParam($key)
    {
        if (is_array($this->params) and array_key_exists($key, $this->params))
        {
            return $this->params[$key];
        } else
        {
            return null;
        }
    }

    public function isApproved()
    {
        return $this->getParam('status') === self::APPROVED;
    }

    public function isRedirect()
    {
        return $this->getParam('status') === self::REDIRECT;
    }

    public function isPending()
    {
        return $this->getParam('status') === self::PENDING;
    }

    public function isError()
    {
        return $this->getParam('status') === self::ERROR;
    }

}