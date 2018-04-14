<?php


namespace Payone\Responses\Refund;


use Payone\Responses\Response;

class Approved extends Response {

    /**
     * @var null
     */
    protected $txid = null;

    /**
     * @return null
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     * @param null $txid
     */
    public function setTxid($txid)
    {
        $this->txid = $txid;
    }

}