<?php


namespace Payone\Responses\Authorization;


use Payone\Responses\Response;

class Error extends Response {

    public $errorcode = null;
    public $errormessage = null;
    public $customermessage = null;

    /**
     * @return null
     */
    public function getErrorcode()
    {
        return $this->errorcode;
    }

    /**
     * @param null $errorcode
     * @return Error
     */
    public function setErrorcode($errorcode)
    {
        $this->errorcode = $errorcode;

        return $this;
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
     * @return Error
     */
    public function setErrormessage($errormessage)
    {
        $this->errormessage = $errormessage;

        return $this;
    }

    /**
     * @return null
     */
    public function getCustomermessage()
    {
        return $this->customermessage;
    }

    /**
     * @param null $customermessage
     * @return Error
     */
    public function setCustomermessage($customermessage)
    {
        $this->customermessage = $customermessage;

        return $this;
    }

}