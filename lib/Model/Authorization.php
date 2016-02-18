<?php
/**
 * Authorization
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;
/**
 * Authorization Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     CyberSource
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Authorization implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'status' => 'string',
        'amount' => 'string',
        'currency' => 'string',
        'auth_code' => 'string',
        'reference_id' => 'string',
        'ignore_avs' => 'string',
        'ignore_bad_cvn' => 'string',
        'commerce_indicator' => 'string',
        'vc_order_id' => 'string',
        'payment_solution' => 'string',
        'merchant_defined_data' => '\CyberSource\Model\MerchantDefinedData',
        'merchant_descriptor' => '\CyberSource\Model\MerchantDescriptor',
        'payment' => '\CyberSource\Model\Payment',
        'bill_to' => '\CyberSource\Model\BillTo',
        'ship_to' => '\CyberSource\Model\ShipTo',
        'items' => '\CyberSource\Model\Item[]',
        '_links' => '\CyberSource\Model\AuthorizationLinks'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'status' => 'status',
        'amount' => 'amount',
        'currency' => 'currency',
        'auth_code' => 'authCode',
        'reference_id' => 'referenceId',
        'ignore_avs' => 'ignoreAvs',
        'ignore_bad_cvn' => 'ignoreBadCvn',
        'commerce_indicator' => 'commerceIndicator',
        'vc_order_id' => 'vcOrderId',
        'payment_solution' => 'paymentSolution',
        'merchant_defined_data' => 'merchantDefinedData',
        'merchant_descriptor' => 'merchantDescriptor',
        'payment' => 'payment',
        'bill_to' => 'billTo',
        'ship_to' => 'shipTo',
        'items' => 'items',
        '_links' => '_links'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'auth_code' => 'setAuthCode',
        'reference_id' => 'setReferenceId',
        'ignore_avs' => 'setIgnoreAvs',
        'ignore_bad_cvn' => 'setIgnoreBadCvn',
        'commerce_indicator' => 'setCommerceIndicator',
        'vc_order_id' => 'setVcOrderId',
        'payment_solution' => 'setPaymentSolution',
        'merchant_defined_data' => 'setMerchantDefinedData',
        'merchant_descriptor' => 'setMerchantDescriptor',
        'payment' => 'setPayment',
        'bill_to' => 'setBillTo',
        'ship_to' => 'setShipTo',
        'items' => 'setItems',
        '_links' => 'setLinks'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'auth_code' => 'getAuthCode',
        'reference_id' => 'getReferenceId',
        'ignore_avs' => 'getIgnoreAvs',
        'ignore_bad_cvn' => 'getIgnoreBadCvn',
        'commerce_indicator' => 'getCommerceIndicator',
        'vc_order_id' => 'getVcOrderId',
        'payment_solution' => 'getPaymentSolution',
        'merchant_defined_data' => 'getMerchantDefinedData',
        'merchant_descriptor' => 'getMerchantDescriptor',
        'payment' => 'getPayment',
        'bill_to' => 'getBillTo',
        'ship_to' => 'getShipTo',
        'items' => 'getItems',
        '_links' => 'getLinks'
    );
  
    
    /**
      * $id Unique identifier for the transaction
      * @var string
      */
    protected $id;
    
    /**
      * $status Status of authorization
      * @var string
      */
    protected $status;
    
    /**
      * $amount Amount of the transaction
      * @var string
      */
    protected $amount;
    
    /**
      * $currency Currency used for the transaction
      * @var string
      */
    protected $currency;
    
    /**
      * $auth_code Authorization code for the transaction
      * @var string
      */
    protected $auth_code;
    
    /**
      * $reference_id Merchant reference ID for the transaction
      * @var string
      */
    protected $reference_id;
    
    /**
      * $ignore_avs Setting to ignore Avs
      * @var string
      */
    protected $ignore_avs;
    
    /**
      * $ignore_bad_cvn Setting to ignore bad CVN
      * @var string
      */
    protected $ignore_bad_cvn;
    
    /**
      * $commerce_indicator Type of transaction. Some payment card companies use this information when determining discount rates.
      * @var string
      */
    protected $commerce_indicator;
    
    /**
      * $vc_order_id Identifier for the Visa Checkout order. Obtain this value from the callIDfield from Visa Checkout
      * @var string
      */
    protected $vc_order_id;
    
    /**
      * $payment_solution Type of payment solution that is being used for the transaction
      * @var string
      */
    protected $payment_solution;
    
    /**
      * $merchant_defined_data 
      * @var \CyberSource\Model\MerchantDefinedData
      */
    protected $merchant_defined_data;
    
    /**
      * $merchant_descriptor 
      * @var \CyberSource\Model\MerchantDescriptor
      */
    protected $merchant_descriptor;
    
    /**
      * $payment 
      * @var \CyberSource\Model\Payment
      */
    protected $payment;
    
    /**
      * $bill_to 
      * @var \CyberSource\Model\BillTo
      */
    protected $bill_to;
    
    /**
      * $ship_to 
      * @var \CyberSource\Model\ShipTo
      */
    protected $ship_to;
    
    /**
      * $items 
      * @var \CyberSource\Model\Item[]
      */
    protected $items;
    
    /**
      * $_links 
      * @var \CyberSource\Model\AuthorizationLinks
      */
    protected $_links;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->status = $data["status"];
            $this->amount = $data["amount"];
            $this->currency = $data["currency"];
            $this->auth_code = $data["auth_code"];
            $this->reference_id = $data["reference_id"];
            $this->ignore_avs = $data["ignore_avs"];
            $this->ignore_bad_cvn = $data["ignore_bad_cvn"];
            $this->commerce_indicator = $data["commerce_indicator"];
            $this->vc_order_id = $data["vc_order_id"];
            $this->payment_solution = $data["payment_solution"];
            $this->merchant_defined_data = $data["merchant_defined_data"];
            $this->merchant_descriptor = $data["merchant_descriptor"];
            $this->payment = $data["payment"];
            $this->bill_to = $data["bill_to"];
            $this->ship_to = $data["ship_to"];
            $this->items = $data["items"];
            $this->_links = $data["_links"];
        }
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id Unique identifier for the transaction
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status Status of authorization
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array("PendingCapture");
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'PendingCapture'");
        }
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }
  
    /**
     * Sets amount
     * @param string $amount Amount of the transaction
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
  
    /**
     * Sets currency
     * @param string $currency Currency used for the transaction
     * @return $this
     */
    public function setCurrency($currency)
    {
        
        $this->currency = $currency;
        return $this;
    }
    
    /**
     * Gets auth_code
     * @return string
     */
    public function getAuthCode()
    {
        return $this->auth_code;
    }
  
    /**
     * Sets auth_code
     * @param string $auth_code Authorization code for the transaction
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        
        $this->auth_code = $auth_code;
        return $this;
    }
    
    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId()
    {
        return $this->reference_id;
    }
  
    /**
     * Sets reference_id
     * @param string $reference_id Merchant reference ID for the transaction
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        
        $this->reference_id = $reference_id;
        return $this;
    }
    
    /**
     * Gets ignore_avs
     * @return string
     */
    public function getIgnoreAvs()
    {
        return $this->ignore_avs;
    }
  
    /**
     * Sets ignore_avs
     * @param string $ignore_avs Setting to ignore Avs
     * @return $this
     */
    public function setIgnoreAvs($ignore_avs)
    {
        
        $this->ignore_avs = $ignore_avs;
        return $this;
    }
    
    /**
     * Gets ignore_bad_cvn
     * @return string
     */
    public function getIgnoreBadCvn()
    {
        return $this->ignore_bad_cvn;
    }
  
    /**
     * Sets ignore_bad_cvn
     * @param string $ignore_bad_cvn Setting to ignore bad CVN
     * @return $this
     */
    public function setIgnoreBadCvn($ignore_bad_cvn)
    {
        
        $this->ignore_bad_cvn = $ignore_bad_cvn;
        return $this;
    }
    
    /**
     * Gets commerce_indicator
     * @return string
     */
    public function getCommerceIndicator()
    {
        return $this->commerce_indicator;
    }
  
    /**
     * Sets commerce_indicator
     * @param string $commerce_indicator Type of transaction. Some payment card companies use this information when determining discount rates.
     * @return $this
     */
    public function setCommerceIndicator($commerce_indicator)
    {
        
        $this->commerce_indicator = $commerce_indicator;
        return $this;
    }
    
    /**
     * Gets vc_order_id
     * @return string
     */
    public function getVcOrderId()
    {
        return $this->vc_order_id;
    }
  
    /**
     * Sets vc_order_id
     * @param string $vc_order_id Identifier for the Visa Checkout order. Obtain this value from the callIDfield from Visa Checkout
     * @return $this
     */
    public function setVcOrderId($vc_order_id)
    {
        
        $this->vc_order_id = $vc_order_id;
        return $this;
    }
    
    /**
     * Gets payment_solution
     * @return string
     */
    public function getPaymentSolution()
    {
        return $this->payment_solution;
    }
  
    /**
     * Sets payment_solution
     * @param string $payment_solution Type of payment solution that is being used for the transaction
     * @return $this
     */
    public function setPaymentSolution($payment_solution)
    {
        
        $this->payment_solution = $payment_solution;
        return $this;
    }
    
    /**
     * Gets merchant_defined_data
     * @return \CyberSource\Model\MerchantDefinedData
     */
    public function getMerchantDefinedData()
    {
        return $this->merchant_defined_data;
    }
  
    /**
     * Sets merchant_defined_data
     * @param \CyberSource\Model\MerchantDefinedData $merchant_defined_data 
     * @return $this
     */
    public function setMerchantDefinedData($merchant_defined_data)
    {
        
        $this->merchant_defined_data = $merchant_defined_data;
        return $this;
    }
    
    /**
     * Gets merchant_descriptor
     * @return \CyberSource\Model\MerchantDescriptor
     */
    public function getMerchantDescriptor()
    {
        return $this->merchant_descriptor;
    }
  
    /**
     * Sets merchant_descriptor
     * @param \CyberSource\Model\MerchantDescriptor $merchant_descriptor 
     * @return $this
     */
    public function setMerchantDescriptor($merchant_descriptor)
    {
        
        $this->merchant_descriptor = $merchant_descriptor;
        return $this;
    }
    
    /**
     * Gets payment
     * @return \CyberSource\Model\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }
  
    /**
     * Sets payment
     * @param \CyberSource\Model\Payment $payment 
     * @return $this
     */
    public function setPayment($payment)
    {
        
        $this->payment = $payment;
        return $this;
    }
    
    /**
     * Gets bill_to
     * @return \CyberSource\Model\BillTo
     */
    public function getBillTo()
    {
        return $this->bill_to;
    }
  
    /**
     * Sets bill_to
     * @param \CyberSource\Model\BillTo $bill_to 
     * @return $this
     */
    public function setBillTo($bill_to)
    {
        
        $this->bill_to = $bill_to;
        return $this;
    }
    
    /**
     * Gets ship_to
     * @return \CyberSource\Model\ShipTo
     */
    public function getShipTo()
    {
        return $this->ship_to;
    }
  
    /**
     * Sets ship_to
     * @param \CyberSource\Model\ShipTo $ship_to 
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        
        $this->ship_to = $ship_to;
        return $this;
    }
    
    /**
     * Gets items
     * @return \CyberSource\Model\Item[]
     */
    public function getItems()
    {
        return $this->items;
    }
  
    /**
     * Sets items
     * @param \CyberSource\Model\Item[] $items 
     * @return $this
     */
    public function setItems($items)
    {
        
        $this->items = $items;
        return $this;
    }
    
    /**
     * Gets _links
     * @return \CyberSource\Model\AuthorizationLinks
     */
    public function getLinks()
    {
        return $this->_links;
    }
  
    /**
     * Sets _links
     * @param \CyberSource\Model\AuthorizationLinks $_links 
     * @return $this
     */
    public function setLinks($_links)
    {
        
        $this->_links = $_links;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
