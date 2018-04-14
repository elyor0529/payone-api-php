<?php


namespace Payone\Responses\Preauthorization;


use Payone\Responses\Response;

class Approved extends Response {
    /**
     * @var
     */
    protected $txid = null;
    /**
     * @var
     */
    protected $userid = null;
    /**
     * @var
     */
    protected $clearing_bankaccountholder = null;
    /**
     * @var
     */
    protected $clearing_bankcountry = null;
    /**
     * @var
     */
    protected $clearing_bankaccount = null;
    /**
     * @var
     */
    protected $clearing_bankcode = null;
    /**
     * @var
     */
    protected $clearing_bankiban = null;
    /**
     * @var
     */
    protected $clearing_bankbic = null;
    /**
     * @var
     */
    protected $clearing_bankcity = null;
    /**
     * @var
     */
    protected $clearing_bankname = null;
    /**
     * @var
     */
    protected $clearing_instructionnote = null;
    /**
     * @var
     */
    protected $mandate_identification = null;
    /**
     * @var
     */
    protected $mandate_dateofsignature = null;
    /**
     * @var
     */
    protected $creditor_identifier = null;
    /**
     * @var
     */
    protected $creditor_name = null;
    /**
     * @var
     */
    protected $creditor_street = null;
    /**
     * @var
     */
    protected $creditor_zip = null;
    /**
     * @var
     */
    protected $creditor_city = null;
    /**
     * @var
     */
    protected $creditor_country = null;
    /**
     * @var
     */
    protected $creditor_email = null;
    /**
     * @var
     */
    protected $clearing_date = null;
    /**
     * @var
     */
    protected $clearing_amount = null;

    /**
     * @var null
     */
    protected $protect_result_avs = null;

    /**
     * @return mixed
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     * @param mixed $txid
     */
    public function setTxid($txid)
    {
        $this->txid = $txid;
    }

    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @return mixed
     */
    public function getClearingBankaccountholder()
    {
        return $this->clearing_bankaccountholder;
    }

    /**
     * @param mixed $clearing_bankaccountholder
     */
    public function setClearingBankaccountholder($clearing_bankaccountholder)
    {
        $this->clearing_bankaccountholder = $clearing_bankaccountholder;
    }

    /**
     * @return mixed
     */
    public function getClearingBankcountry()
    {
        return $this->clearing_bankcountry;
    }

    /**
     * @param mixed $clearing_bankcountry
     */
    public function setClearingBankcountry($clearing_bankcountry)
    {
        $this->clearing_bankcountry = $clearing_bankcountry;
    }

    /**
     * @return mixed
     */
    public function getClearingBankaccount()
    {
        return $this->clearing_bankaccount;
    }

    /**
     * @param mixed $clearing_bankaccount
     */
    public function setClearingBankaccount($clearing_bankaccount)
    {
        $this->clearing_bankaccount = $clearing_bankaccount;
    }

    /**
     * @return mixed
     */
    public function getClearingBankcode()
    {
        return $this->clearing_bankcode;
    }

    /**
     * @param mixed $clearing_bankcode
     */
    public function setClearingBankcode($clearing_bankcode)
    {
        $this->clearing_bankcode = $clearing_bankcode;
    }

    /**
     * @return mixed
     */
    public function getClearingBankiban()
    {
        return $this->clearing_bankiban;
    }

    /**
     * @param mixed $clearing_bankiban
     */
    public function setClearingBankiban($clearing_bankiban)
    {
        $this->clearing_bankiban = $clearing_bankiban;
    }

    /**
     * @return mixed
     */
    public function getClearingBankbic()
    {
        return $this->clearing_bankbic;
    }

    /**
     * @param mixed $clearing_bankbic
     */
    public function setClearingBankbic($clearing_bankbic)
    {
        $this->clearing_bankbic = $clearing_bankbic;
    }

    /**
     * @return mixed
     */
    public function getClearingBankcity()
    {
        return $this->clearing_bankcity;
    }

    /**
     * @param mixed $clearing_bankcity
     */
    public function setClearingBankcity($clearing_bankcity)
    {
        $this->clearing_bankcity = $clearing_bankcity;
    }

    /**
     * @return mixed
     */
    public function getClearingBankname()
    {
        return $this->clearing_bankname;
    }

    /**
     * @param mixed $clearing_bankname
     */
    public function setClearingBankname($clearing_bankname)
    {
        $this->clearing_bankname = $clearing_bankname;
    }

    /**
     * @return mixed
     */
    public function getClearingInstructionnote()
    {
        return $this->clearing_instructionnote;
    }

    /**
     * @param mixed $clearing_instructionnote
     */
    public function setClearingInstructionnote($clearing_instructionnote)
    {
        $this->clearing_instructionnote = $clearing_instructionnote;
    }

    /**
     * @return mixed
     */
    public function getMandateIdentification()
    {
        return $this->mandate_identification;
    }

    /**
     * @param mixed $mandate_identification
     */
    public function setMandateIdentification($mandate_identification)
    {
        $this->mandate_identification = $mandate_identification;
    }

    /**
     * @return mixed
     */
    public function getMandateDateofsignature()
    {
        return $this->mandate_dateofsignature;
    }

    /**
     * @param mixed $mandate_dateofsignature
     */
    public function setMandateDateofsignature($mandate_dateofsignature)
    {
        $this->mandate_dateofsignature = $mandate_dateofsignature;
    }

    /**
     * @return mixed
     */
    public function getCreditorIdentifier()
    {
        return $this->creditor_identifier;
    }

    /**
     * @param mixed $creditor_identifier
     */
    public function setCreditorIdentifier($creditor_identifier)
    {
        $this->creditor_identifier = $creditor_identifier;
    }

    /**
     * @return mixed
     */
    public function getCreditorName()
    {
        return $this->creditor_name;
    }

    /**
     * @param mixed $creditor_name
     */
    public function setCreditorName($creditor_name)
    {
        $this->creditor_name = $creditor_name;
    }

    /**
     * @return mixed
     */
    public function getCreditorStreet()
    {
        return $this->creditor_street;
    }

    /**
     * @param mixed $creditor_street
     */
    public function setCreditorStreet($creditor_street)
    {
        $this->creditor_street = $creditor_street;
    }

    /**
     * @return mixed
     */
    public function getCreditorZip()
    {
        return $this->creditor_zip;
    }

    /**
     * @param mixed $creditor_zip
     */
    public function setCreditorZip($creditor_zip)
    {
        $this->creditor_zip = $creditor_zip;
    }

    /**
     * @return mixed
     */
    public function getCreditorCity()
    {
        return $this->creditor_city;
    }

    /**
     * @param mixed $creditor_city
     */
    public function setCreditorCity($creditor_city)
    {
        $this->creditor_city = $creditor_city;
    }

    /**
     * @return mixed
     */
    public function getCreditorCountry()
    {
        return $this->creditor_country;
    }

    /**
     * @param mixed $creditor_country
     */
    public function setCreditorCountry($creditor_country)
    {
        $this->creditor_country = $creditor_country;
    }

    /**
     * @return mixed
     */
    public function getCreditorEmail()
    {
        return $this->creditor_email;
    }

    /**
     * @param mixed $creditor_email
     */
    public function setCreditorEmail($creditor_email)
    {
        $this->creditor_email = $creditor_email;
    }

    /**
     * @return mixed
     */
    public function getClearingDate()
    {
        return $this->clearing_date;
    }

    /**
     * @param mixed $clearing_date
     */
    public function setClearingDate($clearing_date)
    {
        $this->clearing_date = $clearing_date;
    }

    /**
     * @return mixed
     */
    public function getClearingAmount()
    {
        return $this->clearing_amount;
    }

    /**
     * @param mixed $clearing_amount
     */
    public function setClearingAmount($clearing_amount)
    {
        $this->clearing_amount = $clearing_amount;
    }

    /**
     * @return null
     */
    public function getProtectResultAvs()
    {
        return $this->protect_result_avs;
    }

    /**
     * @param null $protect_result_avs
     */
    public function setProtectResultAvs($protect_result_avs)
    {
        $this->protect_result_avs = $protect_result_avs;
    }


}