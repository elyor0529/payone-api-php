<?php


namespace Payone\Responses;


abstract class Response {

    public function __construct(array $params = [])
    {
        if (count($params) > 0) $this->setParams($params);
    }

    public function setParams(array $params)
    {
        foreach ($params as $key => $value)
        {
            $key = ucwords(str_replace('_', ' ', $key));
            $method = 'set' . str_replace(' ', '', $key);

            if (method_exists($this, $method))
            {
                $this->{$method}($value);
            }
        }
    }

}