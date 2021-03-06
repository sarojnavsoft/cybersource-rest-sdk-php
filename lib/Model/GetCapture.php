<?php
/**
 * GetCapture
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
 * GetCapture Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     CyberSource
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCapture implements ArrayAccess
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
        'reference_id' => 'string',
        'bill_to' => '\CyberSource\Model\BillTo',
        'ship_to' => '\CyberSource\Model\ShipTo',
        '_links' => '\CyberSource\Model\GetCaptureLinks'
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
        'reference_id' => 'referenceId',
        'bill_to' => 'billTo',
        'ship_to' => 'shipTo',
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
        'reference_id' => 'setReferenceId',
        'bill_to' => 'setBillTo',
        'ship_to' => 'setShipTo',
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
        'reference_id' => 'getReferenceId',
        'bill_to' => 'getBillTo',
        'ship_to' => 'getShipTo',
        '_links' => 'getLinks'
    );
  
    
    /**
      * $id Unique identifier for the transaction
      * @var string
      */
    protected $id;
    
    /**
      * $status Status of the capture
      * @var string
      */
    protected $status;
    
    /**
      * $amount Amount to capture from the authorization
      * @var string
      */
    protected $amount;
    
    /**
      * $currency Currency used for the transaction
      * @var string
      */
    protected $currency;
    
    /**
      * $reference_id Merchant reference ID for the transaction
      * @var string
      */
    protected $reference_id;
    
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
      * $_links 
      * @var \CyberSource\Model\GetCaptureLinks
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
            $this->reference_id = $data["reference_id"];
            $this->bill_to = $data["bill_to"];
            $this->ship_to = $data["ship_to"];
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
     * @param string $status Status of the capture
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array("PendingSettlement", "SettledSuccessfully", "Voided");
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'PendingSettlement', 'SettledSuccessfully', 'Voided'");
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
     * @param string $amount Amount to capture from the authorization
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
     * Gets _links
     * @return \CyberSource\Model\GetCaptureLinks
     */
    public function getLinks()
    {
        return $this->_links;
    }
  
    /**
     * Sets _links
     * @param \CyberSource\Model\GetCaptureLinks $_links 
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
