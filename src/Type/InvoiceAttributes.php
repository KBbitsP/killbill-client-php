<?php

/*
 * Copyright 2011-2017 Ning, Inc.
 * Copyright 2014 Groupon, Inc.
 * Copyright 2014 The Billing Project, LLC
 *
 * The Billing Project licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace Killbill\Client\Type;

/*
 * DO NOT EDIT!!!
 * File automatically generated by killbill-java-parser (git@github.com:killbill/killbill-java-parser.git)
 */

class InvoiceAttributes extends \Killbill\Client\Resource
{
    /** @var float|null */
    protected $amount = null;
    /** @var string|null */
    protected $currency = null;
    /** @var string|null */
    protected $status = null;
    /** @var float|null */
    protected $creditAdj = null;
    /** @var float|null */
    protected $refundAdj = null;
    /** @var string|null */
    protected $invoiceId = null;
    /** @var string|null */
    protected $invoiceDate = null;
    /** @var string|null */
    protected $targetDate = null;
    /** @var string|null */
    protected $invoiceNumber = null;
    /** @var float|null */
    protected $balance = null;
    /** @var string|null */
    protected $accountId = null;
    /** @var string|null */
    protected $bundleKeys = null;
    /** @var array|null */
    protected $credits = null;
    /** @var array|null */
    protected $items = null;
    /** @var bool|null */
    protected $isParentInvoice = null;
    /** @var array|null */
    protected $auditLogs = null;

    /**
     * @param float|null $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string|null $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string|null $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param float|null $creditAdj
     */
    public function setCreditAdj($creditAdj)
    {
        $this->creditAdj = $creditAdj;
    }

    /**
     * @return float|null
     */
    public function getCreditAdj()
    {
        return $this->creditAdj;
    }

    /**
     * @param float|null $refundAdj
     */
    public function setRefundAdj($refundAdj)
    {
        $this->refundAdj = $refundAdj;
    }

    /**
     * @return float|null
     */
    public function getRefundAdj()
    {
        return $this->refundAdj;
    }

    /**
     * @param string|null $invoiceId
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param string|null $invoiceDate
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
    }

    /**
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * @param string|null $targetDate
     */
    public function setTargetDate($targetDate)
    {
        $this->targetDate = $targetDate;
    }

    /**
     * @return string|null
     */
    public function getTargetDate()
    {
        return $this->targetDate;
    }

    /**
     * @param string|null $invoiceNumber
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param float|null $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return float|null
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param string|null $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string|null $bundleKeys
     */
    public function setBundleKeys($bundleKeys)
    {
        $this->bundleKeys = $bundleKeys;
    }

    /**
     * @return string|null
     */
    public function getBundleKeys()
    {
        return $this->bundleKeys;
    }

    /**
     * @param array|null $credits
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;
    }

    /**
     * @return array|null
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * @param array|null $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return array|null
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param bool|null $isParentInvoice
     */
    public function setIsParentInvoice($isParentInvoice)
    {
        $this->isParentInvoice = $isParentInvoice;
    }

    /**
     * @return bool|null
     */
    public function getIsParentInvoice()
    {
        return $this->isParentInvoice;
    }

    /**
     * @param array|null $auditLogs
     */
    public function setAuditLogs($auditLogs)
    {
        $this->auditLogs = $auditLogs;
    }

    /**
     * @return array|null
     */
    public function getAuditLogs()
    {
        return $this->auditLogs;
    }

}
