<?php


namespace Payone\Responses\Authorization;


use Payone\Responses\Response;

class Approved extends Response {

    /**
     * @var
     */
    protected $txid;
    /**
     * @var
     */
    protected $userid;
    /**
     * @var
     */
    protected $clearing_bankaccountholder;
    /**
     * @var
     */
    protected $clearing_bankcountry;
    /**
     * @var
     */
    protected $clearing_bankaccount;
    /**
     * @var
     */
    protected $clearing_bankcode;
    /**
     * @var
     */
    protected $clearing_bankiban;
    /**
     * @var
     */
    protected $clearing_bankbic;
    /**
     * @var
     */
    protected $clearing_bankcity;
    /**
     * @var
     */
    protected $clearing_bankname;
    /**
     * @var
     */
    protected $clearing_instructionnote;
    /**
     * @var
     */
    protected $mandate_identification;
    /**
     * @var
     */
    protected $mandate_dateofsignature;
    /**
     * @var
     */
    protected $creditor_identifier;
    /**
     * @var
     */
    protected $creditor_name;
    /**
     * @var
     */
    protected $creditor_street;
    /**
     * @var
     */
    protected $creditor_zip;
    /**
     * @var
     */
    protected $creditor_city;
    /**
     * @var
     */
    protected $creditor_country;
    /**
     * @var
     */
    protected $creditor_email;
    /**
     * @var
     */
    protected $clearing_date;
    /**
     * @var
     */
    protected $clearing_amount;

    /**
     * @return mixed
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     * @param mixed $txid
     * @return Authorization
     */
    public function setTxid($txid)
    {
        $this->txid = $txid;

        return $this;
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
     * @return Authorization
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
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
     * @return Authorization
     */
    public function setClearingBankaccountholder($clearing_bankaccountholder)
    {
        $this->clearing_bankaccountholder = $clearing_bankaccountholder;

        return $this;
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
     * @return Authorization
     */
    public function setClearingBankcountry($clearing_bankcountry)
    {
        $this->clearing_bankcountry = $clearing_bankcountry;

        return $this;
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
     * @return Authorization
     */
    public function setClearingBankaccount($clearing_bankaccount)
    {
        $this->clearing_bankaccount = $clearing_bankaccount;

        return $this;
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
     * @return Authorization
     */
    public function setClearingBankcode($clearing_bankcode)
    {
        $this->clearing_bankcode = $clearing_bankcode;

        return $this;
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
     * @return Authorization
     */
    public function setClearingBankiban($clearing_bankiban)
    {
        $this->clearing_bankiban = $clearing_bankiban;

        return $this;
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
     * @return Authorization
     */
    public function setClearingBankbic($clearing_bankbic)
    {
        $this->clearing_bankbic = $clearing_bankbic;

        return $this;
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
     * @return Authorization
     */
    public function setClearingBankcity($clearing_bankcity)
    {
        $this->clearing_bankcity = $clearing_bankcity;

        return $this;
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
     * @return Authorization
     */
    public function setClearingBankname($clearing_bankname)
    {
        $this->clearing_bankname = $clearing_bankname;

        return $this;
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
     * @return Authorization
     */
    public function setClearingInstructionnote($clearing_instructionnote)
    {
        $this->clearing_instructionnote = $clearing_instructionnote;

        return $this;
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
     * @return Authorization
     */
    public function setMandateIdentification($mandate_identification)
    {
        $this->mandate_identification = $mandate_identification;

        return $this;
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
     * @return Authorization
     */
    public function setMandateDateofsignature($mandate_dateofsignature)
    {
        $this->mandate_dateofsignature = $mandate_dateofsignature;

        return $this;
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
     * @return Authorization
     */
    public function setCreditorIdentifier($creditor_identifier)
    {
        $this->creditor_identifier = $creditor_identifier;

        return $this;
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
     * @return Authorization
     */
    public function setCreditorName($creditor_name)
    {
        $this->creditor_name = $creditor_name;

        return $this;
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
     * @return Authorization
     */
    public function setCreditorStreet($creditor_street)
    {
        $this->creditor_street = $creditor_street;

        return $this;
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
     * @return Authorization
     */
    public function setCreditorZip($creditor_zip)
    {
        $this->creditor_zip = $creditor_zip;

        return $this;
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
     * @return Authorization
     */
    public function setCreditorCity($creditor_city)
    {
        $this->creditor_city = $creditor_city;

        return $this;
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
     * @return Authorization
     */
    public function setCreditorCountry($creditor_country)
    {
        $this->creditor_country = $creditor_country;

        return $this;
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
     * @return Authorization
     */
    public function setCreditorEmail($creditor_email)
    {
        $this->creditor_email = $creditor_email;

        return $this;
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
     * @return Authorization
     */
    public function setClearingDate($clearing_date)
    {
        $this->clearing_date = $clearing_date;

        return $this;
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
     * @return Authorization
     */
    public function setClearingAmount($clearing_amount)
    {
        $this->clearing_amount = $clearing_amount;

        return $this;
    }
}