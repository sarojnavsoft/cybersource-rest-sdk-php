<?php
/**
 * SaleCollection
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
 * SaleCollection Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     CyberSource
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SaleCollection implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        '_links' => '\CyberSource\Model\CollectionLinks',
        '_embedded' => '\CyberSource\Model\TransactionSearch'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        '_links' => '_links',
        '_embedded' => '_embedded'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        '_links' => 'setLinks',
        '_embedded' => 'setEmbedded'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        '_links' => 'getLinks',
        '_embedded' => 'getEmbedded'
    );
  
    
    /**
      * $_links 
      * @var \CyberSource\Model\CollectionLinks
      */
    protected $_links;
    
    /**
      * $_embedded 
      * @var \CyberSource\Model\TransactionSearch
      */
    protected $_embedded;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->_links = $data["_links"];
            $this->_embedded = $data["_embedded"];
        }
    }
    
    /**
     * Gets _links
     * @return \CyberSource\Model\CollectionLinks
     */
    public function getLinks()
    {
        return $this->_links;
    }
  
    /**
     * Sets _links
     * @param \CyberSource\Model\CollectionLinks $_links 
     * @return $this
     */
    public function setLinks($_links)
    {
        
        $this->_links = $_links;
        return $this;
    }
    
    /**
     * Gets _embedded
     * @return \CyberSource\Model\TransactionSearch
     */
    public function getEmbedded()
    {
        return $this->_embedded;
    }
  
    /**
     * Sets _embedded
     * @param \CyberSource\Model\TransactionSearch $_embedded 
     * @return $this
     */
    public function setEmbedded($_embedded)
    {
        
        $this->_embedded = $_embedded;
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
