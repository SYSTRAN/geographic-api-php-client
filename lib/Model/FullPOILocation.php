<?php
/**
 * FullPOILocation
 *
 * PHP version 5
 *
 * @category Class
 * @package  Systran\Client\Model
 *
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 *
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
 *
 * https://github.com/Systran-api/Systran-codegen
 * Do not edit the class manually.
 */

namespace Systran\Client\Model;

use \ArrayAccess;
/**
 * FullPOILocation Class Doc Comment
 *
 * @category    Class
 * @description Location
 * @package     Systran\Client\Model
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/Systran-api/Systran-codegen
 */
class FullPOILocation implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'position' => 'Systran\Client\Model\FullPosition',
        'address' => 'Systran\Client\Model\POIAddress'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'position' => 'position',
        'address' => 'address'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'position' => 'setPosition',
        'address' => 'setAddress'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'position' => 'getPosition',
        'address' => 'getAddress'
    );
  
    
    /**
      * $position Position defined by coordinates and type
      * @var Systran\Client\Model\FullPosition
      */
    protected $position;
    
    /**
      * $address Address
      * @var Systran\Client\Model\POIAddress
      */
    protected $address;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->position = $data["position"];
            $this->address = $data["address"];
        }
    }
    
    /**
     * Gets position
     * @return Systran\Client\Model\FullPosition
     */
    public function getPosition()
    {
        return $this->position;
    }
  
    /**
     * Sets position
     * @param Systran\Client\Model\FullPosition $position Position defined by coordinates and type
     * @return $this
     */
    public function setPosition($position)
    {
        
        $this->position = $position;
        return $this;
    }
    
    /**
     * Gets address
     * @return Systran\Client\Model\POIAddress
     */
    public function getAddress()
    {
        return $this->address;
    }
  
    /**
     * Sets address
     * @param Systran\Client\Model\POIAddress $address Address
     * @return $this
     */
    public function setAddress($address)
    {
        
        $this->address = $address;
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
