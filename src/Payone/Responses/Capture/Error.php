<?php


namespace Payone\Responses\Capture;


use Payone\Responses\Response;

class Error extends Response {

    /**
     * @var null
     */
    protected $errorcode = null;
    /**
     * @var null
     */
    protected $errormessage = null;

    /**
     * @return null
     */
    public function getErrorcode()
    {
        return $this->errorcode;
    }

    /**
     * @param null $errorcode
     */
    public function setErrorcode($errorcode)
    {
        $this->errorcode = $errorcode;
    }

    /**
     * @return null
     */
    public function getErrormessage()
    {
        return $this->errormessage;
    }

    /**
     * @param null $errormessage
     */
    public function setErrormessage($errormessage)
    {
        $this->errormessage = $errormessage;
    }

}