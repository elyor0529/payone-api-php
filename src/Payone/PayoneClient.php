<?php

namespace Payone;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use Payone\Exceptions\ConnectionException;
use Payone\Exceptions\ResponseException;
use Payone\Requests\Authorization;
use Payone\Requests\Capture;
use Payone\Requests\Preauthorization;
use Payone\Requests\Refund;

class PayoneClient
{

    /**
     *
     */
    const API_ENDPOINT = 'https://api.pay1.de/post-gateway/';
    /**
     *
     */
    const API_VERSION = '3.10';
    /**
     *
     */
    const ENCODING = 'UTF-8';

    /**
     * @var string
     */
    protected $api_endpoint = self::API_ENDPOINT;
    /**
     * @var string
     */
    protected $api_version = self::API_VERSION;
    /**
     * @var string
     */
    protected $encoding = self::ENCODING;

    /**
     * @var
     */
    protected $mid;
    /**
     * @var
     */
    protected $portal_id;
    /**
     * @var
     */
    protected $aid;
    /**
     * @var
     */
    protected $key;
    /**
     * @var string
     */
    protected $mode = 'test';

    /**
     * @var Preauthorization
     */
    public $preauthorization;
    /**
     * @var Authorization
     */
    public $authorization;
    /**
     * @var Refund
     */
    public $refund;
    /**
     * @var Capture
     */
    public $capture;

    /**
     * PayoneClient constructor.
     */
    public function __construct()
    {
        $this->preauthorization = new Preauthorization($this);
        $this->authorization = new Authorization($this);
        $this->refund = new Refund($this);
        $this->capture = new Capture($this);
    }

    /**
     * @return string
     */
    public function getApiEndpoint()
    {
        return $this->api_endpoint;
    }

    /**
     * @param $apiEndpoint
     * @return $this
     */
    public function setApiEndpoint($apiEndpoint)
    {
        $this->api_endpoint = trim($apiEndpoint);

        return $this;
    }

    /**
     * @return string
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }

    /**
     * @param $apiVersion
     * @return $this
     */
    public function setApiVersion($apiVersion)
    {
        $this->api_version = trim($apiVersion);

        return $this;
    }

    /**
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * @param $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->encoding = trim($encoding);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * @param $mid
     * @return $this
     */
    public function setMid($mid)
    {
        $this->mid = trim($mid);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @param $aid
     * @return $this
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPortalId()
    {
        return $this->portal_id;
    }

    /**
     * @param $portalId
     * @return $this
     */
    public function setPortalId($portalId)
    {
        $this->portal_id = trim($portalId);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = md5(trim($key));

        return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = trim($mode);

        return $this;
    }

    /**
     * @return array
     */
    public function getDefaultArray()
    {
        return [
            'mid'         => $this->getMid(),
            'portalid'    => $this->getPortalId(),
            'aid'         => $this->getAid(),
            'key'         => $this->getKey(),
            'api_version' => $this->getApiVersion(),
            'mode'        => $this->getMode(),
            'encoding'    => $this->getEncoding(),
        ];
    }

    /**
     * @throws PayoneException
     */
    private function validateStandardParameters()
    {
        if (empty($this->getMid())
            || empty($this->getPortalId())
            || empty($this->getAid())
            || empty($this->getKey())
            || empty($this->getApiVersion())
            || empty($this->getMode())
            || empty($this->getEncoding())
            || empty($this->getApiEndpoint())
        ) throw new PayoneException('Please provide all standard parameters.');
    }

    /**
     * @param array $request
     * @return mixed|object|\Psr\Http\Message\ResponseInterface
     * @throws ConnectionException
     * @throws ResponseException
     * @throws PayoneException
     */
    public function performPostRequest(array $request)
    {
        $this->validateStandardParameters();

        $client = new Client();

        try {
            $response = $client->request('POST', $this->api_endpoint, ['form_params' => $request]);
        } catch (\Exception $e) {
            throw new ConnectionException('Connection Error', 0, $e);
        }

        $response = $this->parseResponse($response);

        return $response;
    }

    /**
     * @param Response $response
     * @return array
     */
    private function parseResponse(Response $response)
    {
        $result = [];

        $keyValuePairs = explode("\n", $response->getBody());

        foreach ($keyValuePairs as $item) {
            $keyValuePair = explode('=', trim($item), 2);

            if (count($keyValuePair) == 2) $result[trim($keyValuePair[0])] = trim($keyValuePair[1]);
        }

        return $result;
    }

}
