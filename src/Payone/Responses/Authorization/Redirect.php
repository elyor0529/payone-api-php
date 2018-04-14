<?php


namespace Payone\Responses\Authorization;

use Payone\Responses\Response;

class Redirect extends Response {

    public $txid = null;
    public $userid = null;
    public $redirecturl = null;

    /**
     * @return null
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     * @param null $txid
     * @return Redirect
     */
    public function setTxid($txid)
    {
        $this->txid = $txid;

        return $this;
    }

    /**
     * @return null
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param null $userid
     * @return Redirect
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * @return null
     */
    public function getRedirecturl()
    {
        return $this->redirecturl;
    }

    /**
     * @param null $redirecturl
     * @return Redirect
     */
    public function setRedirecturl($redirecturl)
    {
        $this->redirecturl = $redirecturl;

        return $this;
    }


}