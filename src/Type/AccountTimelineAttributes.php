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

class AccountTimelineAttributes extends \Killbill\Client\Resource
{
    /** @var AccountAttributes|null */
    protected $account = null;
    /** @var array|null */
    protected $bundles = null;
    /** @var array|null */
    protected $invoices = null;
    /** @var array|null */
    protected $payments = null;

    /**
     * @param AccountAttributes|null $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * @return AccountAttributes|null
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return AccountAttributes::class;
    }

    /**
     * @param array|null $bundles
     */
    public function setBundles($bundles)
    {
        $this->bundles = $bundles;
    }

    /**
     * @return array|null
     */
    public function getBundles()
    {
        return $this->bundles;
    }

    /**
     * @param array|null $invoices
     */
    public function setInvoices($invoices)
    {
        $this->invoices = $invoices;
    }

    /**
     * @return array|null
     */
    public function getInvoices()
    {
        return $this->invoices;
    }

    /**
     * @param array|null $payments
     */
    public function setPayments($payments)
    {
        $this->payments = $payments;
    }

    /**
     * @return array|null
     */
    public function getPayments()
    {
        return $this->payments;
    }

}
