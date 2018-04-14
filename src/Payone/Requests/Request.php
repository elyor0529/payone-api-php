<?php


namespace Payone\Requests;


use Payone\Mappers\Mapper;
use Payone\PayoneClient;

abstract class Request {

    protected $request_type;
    protected $client;
    protected $mapper;

    public function __construct(PayoneClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return Mapper
     */
    abstract protected function getMapperObject();

    private function getRequestTypeArray()
    {
        return ['request' => $this->request_type];
    }


    /**
     * @param array $paymentData
     * @return mixed
     * @throws \Payone\Exceptions\ConnectionException
     * @throws \Payone\Exceptions\ResponseException
     * @throws \Payone\PayoneException
     */
    public function create(array $paymentData)
    {
        $requestData = array_merge(
            $paymentData,
            $this->client->getDefaultArray(),
            $this->getRequestTypeArray()
        );

        $response = $this->client->performPostRequest($requestData);

        return $this->getMapperObject()->map($response);

    }

}