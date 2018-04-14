<?php


namespace Payone\Responses\Authorization;


use Payone\Responses\Response;

class Pending extends Response {

    public $txid = null;
    public $userid = null;

    /**
     * @return null
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     * @param null $txid
     * @return Pending
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
     * @return Pending
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }


}