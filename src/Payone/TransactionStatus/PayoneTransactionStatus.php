<?php


namespace Payone\TransactionStatus;


use Payone\TransactionStatus\Validation\Key;

class PayoneTransactionStatus {

    public $key = null;
    /**
     * @var string
     */
    public $txaction = null;
    /**
     * @var string
     */
    public $mode = null;
    /**
     * @var int Payment portal ID
     */
    public $portalid = null;
    /**
     * @var int Account ID (subaccount ID)
     */
    public $aid = null;
    /**     *
     * @var string
     */
    public $clearingtype = null;
    /**
     * unix timestamp
     *
     * @var int
     */
    public $txtime = null;
    /**
     * @var string ISO-4217
     */
    public $currency = null;
    /**
     * @var int
     */
    public $userid = null;
    /**
     * @var int
     */
    public $customerid = null;
    /**
     * @var string
     */
    public $param = null;

    // Parameter bei einer Statusmeldung eines Zahlungsvorgangs

    /**
     * @var int
     */
    public $txid = null;
    /**
     * @var string
     */
    public $reference = null;
    /**
     * @var string
     */
    public $sequencenumber = null;
    /**
     * @var string
     */
    public $receivable = null;
    /**
     * @var string
     */
    public $balance = null;
    /**
     * @var string
     */
    public $failedcause = null;

    // Zusätzliche Parameter Contract bei Statusmeldung eines Zahlungsvorgangs

    /**
     * @var int
     */
    public $productid = null;
    /**
     * @var int
     */
    public $accessid = null;

    // Zusätzliche Parameter Collect (txaction=reminder) bei Statusmeldung eines Zahlungsvorgangs

    /**
     * @var string
     */
    public $reminderlevel = null;

    // Parameter Invoicing (txaction=invoice)

    /**
     * @var string
     */
    public $invoiceid = null;
    /**
     * @var string
     */
    public $invoice_grossamount = null;
    /**
     * @var string
     */
    public $invoice_date = null;
    /**
     * @var string
     */
    public $invoice_deliverydate = null;
    /**
     * @var string
     */
    public $invoice_deliveryenddate = null;


    /**
     * @var string
     */
    public $clearing_bankaccountholder = null;
    /**
     * @var string
     */
    public $clearing_bankcountry = null;
    /**
     * @var string
     */
    public $clearing_bankaccount = null;
    /**
     * @var string
     */
    public $clearing_bankcode = null;
    /**
     * @var string
     */
    public $clearing_bankiban = null;
    /**
     * @var string
     */
    public $clearing_bankbic = null;
    /**
     * @var string
     */
    public $clearing_bankcity = null;
    /**
     * @var string
     */
    public $clearing_bankname = null;


    /** @var string */
    public $clearing_legalnote = null;

    /**
     * (YYYYMMDD)
     * @var string
     */
    public $clearing_duedate = null;

    /** @var string */
    public $clearing_reference = null;

    /** @var string */
    public $clearing_instructionnote = null;

    /**
     * @throws Exceptions\InvalidKey
     */
    public function validate($known_key)
    {
        Key::validate($known_key, $this->getKey());

        return $this;
    }


    /**
     * @return null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param null $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getTxaction()
    {
        return $this->txaction;
    }

    /**
     * @param string $txaction
     */
    public function setTxaction($txaction)
    {
        $this->txaction = $txaction;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * @return int
     */
    public function getPortalid()
    {
        return $this->portalid;
    }

    /**
     * @param int $portalid
     */
    public function setPortalid($portalid)
    {
        $this->portalid = $portalid;
    }

    /**
     * @return int
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @param int $aid
     */
    public function setAid($aid)
    {
        $this->aid = $aid;
    }

    /**
     * @return string
     */
    public function getClearingtype()
    {
        return $this->clearingtype;
    }

    /**
     * @param string $clearingtype
     */
    public function setClearingtype($clearingtype)
    {
        $this->clearingtype = $clearingtype;
    }

    /**
     * @return int
     */
    public function getTxtime()
    {
        return $this->txtime;
    }

    /**
     * @param int $txtime
     */
    public function setTxtime($txtime)
    {
        $this->txtime = $txtime;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param int $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @return int
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }

    /**
     * @param int $customerid
     */
    public function setCustomerid($customerid)
    {
        $this->customerid = $customerid;
    }

    /**
     * @return string
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * @param string $param
     */
    public function setParam($param)
    {
        $this->param = $param;
    }

    /**
     * @return int
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     * @param int $txid
     */
    public function setTxid($txid)
    {
        $this->txid = $txid;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getSequencenumber()
    {
        return $this->sequencenumber;
    }

    /**
     * @param string $sequencenumber
     */
    public function setSequencenumber($sequencenumber)
    {
        $this->sequencenumber = $sequencenumber;
    }

    /**
     * @return string
     */
    public function getReceivable()
    {
        return $this->receivable;
    }

    /**
     * @param string $receivable
     */
    public function setReceivable($receivable)
    {
        $this->receivable = $receivable;
    }

    /**
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param string $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return string
     */
    public function getFailedcause()
    {
        return $this->failedcause;
    }

    /**
     * @param string $failedcause
     */
    public function setFailedcause($failedcause)
    {
        $this->failedcause = $failedcause;
    }

    /**
     * @return int
     */
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * @param int $productid
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;
    }

    /**
     * @return int
     */
    public function getAccessid()
    {
        return $this->accessid;
    }

    /**
     * @param int $accessid
     */
    public function setAccessid($accessid)
    {
        $this->accessid = $accessid;
    }

    /**
     * @return string
     */
    public function getReminderlevel()
    {
        return $this->reminderlevel;
    }

    /**
     * @param string $reminderlevel
     */
    public function setReminderlevel($reminderlevel)
    {
        $this->reminderlevel = $reminderlevel;
    }

    /**
     * @return string
     */
    public function getInvoiceid()
    {
        return $this->invoiceid;
    }

    /**
     * @param string $invoiceid
     */
    public function setInvoiceid($invoiceid)
    {
        $this->invoiceid = $invoiceid;
    }

    /**
     * @return string
     */
    public function getInvoiceGrossamount()
    {
        return $this->invoice_grossamount;
    }

    /**
     * @param string $invoice_grossamount
     */
    public function setInvoiceGrossamount($invoice_grossamount)
    {
        $this->invoice_grossamount = $invoice_grossamount;
    }

    /**
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->invoice_date;
    }

    /**
     * @param string $invoice_date
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->invoice_date = $invoice_date;
    }

    /**
     * @return string
     */
    public function getInvoiceDeliverydate()
    {
        return $this->invoice_deliverydate;
    }

    /**
     * @param string $invoice_deliverydate
     */
    public function setInvoiceDeliverydate($invoice_deliverydate)
    {
        $this->invoice_deliverydate = $invoice_deliverydate;
    }

    /**
     * @return string
     */
    public function getInvoiceDeliveryenddate()
    {
        return $this->invoice_deliveryenddate;
    }

    /**
     * @param string $invoice_deliveryenddate
     */
    public function setInvoiceDeliveryenddate($invoice_deliveryenddate)
    {
        $this->invoice_deliveryenddate = $invoice_deliveryenddate;
    }

    /**
     * @return string
     */
    public function getClearingBankaccountholder()
    {
        return $this->clearing_bankaccountholder;
    }

    /**
     * @param string $clearing_bankaccountholder
     */
    public function setClearingBankaccountholder($clearing_bankaccountholder)
    {
        $this->clearing_bankaccountholder = $clearing_bankaccountholder;
    }

    /**
     * @return string
     */
    public function getClearingBankcountry()
    {
        return $this->clearing_bankcountry;
    }

    /**
     * @param string $clearing_bankcountry
     */
    public function setClearingBankcountry($clearing_bankcountry)
    {
        $this->clearing_bankcountry = $clearing_bankcountry;
    }

    /**
     * @return string
     */
    public function getClearingBankaccount()
    {
        return $this->clearing_bankaccount;
    }

    /**
     * @param string $clearing_bankaccount
     */
    public function setClearingBankaccount($clearing_bankaccount)
    {
        $this->clearing_bankaccount = $clearing_bankaccount;
    }

    /**
     * @return string
     */
    public function getClearingBankcode()
    {
        return $this->clearing_bankcode;
    }

    /**
     * @param string $clearing_bankcode
     */
    public function setClearingBankcode($clearing_bankcode)
    {
        $this->clearing_bankcode = $clearing_bankcode;
    }

    /**
     * @return string
     */
    public function getClearingBankiban()
    {
        return $this->clearing_bankiban;
    }

    /**
     * @param string $clearing_bankiban
     */
    public function setClearingBankiban($clearing_bankiban)
    {
        $this->clearing_bankiban = $clearing_bankiban;
    }

    /**
     * @return string
     */
    public function getClearingBankbic()
    {
        return $this->clearing_bankbic;
    }

    /**
     * @param string $clearing_bankbic
     */
    public function setClearingBankbic($clearing_bankbic)
    {
        $this->clearing_bankbic = $clearing_bankbic;
    }

    /**
     * @return string
     */
    public function getClearingBankcity()
    {
        return $this->clearing_bankcity;
    }

    /**
     * @param string $clearing_bankcity
     */
    public function setClearingBankcity($clearing_bankcity)
    {
        $this->clearing_bankcity = $clearing_bankcity;
    }

    /**
     * @return string
     */
    public function getClearingBankname()
    {
        return $this->clearing_bankname;
    }

    /**
     * @param string $clearing_bankname
     */
    public function setClearingBankname($clearing_bankname)
    {
        $this->clearing_bankname = $clearing_bankname;
    }

    /**
     * @return string
     */
    public function getClearingLegalnote()
    {
        return $this->clearing_legalnote;
    }

    /**
     * @param string $clearing_legalnote
     */
    public function setClearingLegalnote($clearing_legalnote)
    {
        $this->clearing_legalnote = $clearing_legalnote;
    }

    /**
     * @return string
     */
    public function getClearingDuedate()
    {
        return $this->clearing_duedate;
    }

    /**
     * @param string $clearing_duedate
     */
    public function setClearingDuedate($clearing_duedate)
    {
        $this->clearing_duedate = $clearing_duedate;
    }

    /**
     * @return string
     */
    public function getClearingReference()
    {
        return $this->clearing_reference;
    }

    /**
     * @param string $clearing_reference
     */
    public function setClearingReference($clearing_reference)
    {
        $this->clearing_reference = $clearing_reference;
    }

    /**
     * @return string
     */
    public function getClearingInstructionnote()
    {
        return $this->clearing_instructionnote;
    }

    /**
     * @param string $clearing_instructionnote
     */
    public function setClearingInstructionnote($clearing_instructionnote)
    {
        $this->clearing_instructionnote = $clearing_instructionnote;
    }

    public function map(array $params)
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

        return $this;
    }

}