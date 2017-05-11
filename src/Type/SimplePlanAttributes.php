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

class SimplePlanAttributes extends \Killbill\Client\Resource
{
    /** @var string|null */
    protected $planId = null;
    /** @var string|null */
    protected $productName = null;
    /** @var mixed|null */
    protected $productCategory = null;
    /** @var mixed|null */
    protected $currency = null;
    /** @var float|null */
    protected $amount = null;
    /** @var mixed|null */
    protected $billingPeriod = null;
    /** @var int|null */
    protected $trialLength = null;
    /** @var mixed|null */
    protected $trialTimeUnit = null;
    /** @var array|null */
    protected $availableBaseProducts = null;

    /**
     * @param string|null $planId
     */
    public function setPlanId($planId)
    {
        $this->planId = $planId;
    }

    /**
     * @return string|null
     */
    public function getPlanId()
    {
        return $this->planId;
    }

    /**
     * @param string|null $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return string|null
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed|null $productCategory
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;
    }

    /**
     * @return mixed|null
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * @param mixed|null $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return mixed|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

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
     * @param mixed|null $billingPeriod
     */
    public function setBillingPeriod($billingPeriod)
    {
        $this->billingPeriod = $billingPeriod;
    }

    /**
     * @return mixed|null
     */
    public function getBillingPeriod()
    {
        return $this->billingPeriod;
    }

    /**
     * @param int|null $trialLength
     */
    public function setTrialLength($trialLength)
    {
        $this->trialLength = $trialLength;
    }

    /**
     * @return int|null
     */
    public function getTrialLength()
    {
        return $this->trialLength;
    }

    /**
     * @param mixed|null $trialTimeUnit
     */
    public function setTrialTimeUnit($trialTimeUnit)
    {
        $this->trialTimeUnit = $trialTimeUnit;
    }

    /**
     * @return mixed|null
     */
    public function getTrialTimeUnit()
    {
        return $this->trialTimeUnit;
    }

    /**
     * @param array|null $availableBaseProducts
     */
    public function setAvailableBaseProducts($availableBaseProducts)
    {
        $this->availableBaseProducts = $availableBaseProducts;
    }

    /**
     * @return array|null
     */
    public function getAvailableBaseProducts()
    {
        return $this->availableBaseProducts;
    }

}
