<?php
/**
 * FullLocation
 *
 * PHP version 5
 *
 * @category Class
 * @package  Systran\Client
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

namespace Systran\Client;

use \ArrayAccess;
/**
 * FullLocation Class Doc Comment
 *
 * @category    Class
 * @description Location
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/Systran-api/Systran-codegen
 */
class FullLocation implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'boundaries' => 'Systran\Client\Boundaries',
        'position' => 'Systran\Client\FullPosition',
        'address' => 'Systran\Client\Address'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'boundaries' => 'boundaries',
        'position' => 'position',
        'address' => 'address'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'boundaries' => 'setBoundaries',
        'position' => 'setPosition',
        'address' => 'setAddress'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'boundaries' => 'getBoundaries',
        'position' => 'getPosition',
        'address' => 'getAddress'
    );
  
    
    /**
      * $boundaries Boundaries defined by a polygon composed of a list of coordinates
      * @var Systran\Client\Boundaries
      */
    protected $boundaries;
    
    /**
      * $position Position defined by coordinates and type
      * @var Systran\Client\FullPosition
      */
    protected $position;
    
    /**
      * $address Address
      * @var Systran\Client\Address
      */
    protected $address;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->boundaries = $data["boundaries"];
            $this->position = $data["position"];
            $this->address = $data["address"];
        }
    }
    
    /**
     * Gets boundaries
     * @return Systran\Client\Boundaries
     */
    public function getBoundaries()
    {
        return $this->boundaries;
    }
  
    /**
     * Sets boundaries
     * @param Systran\Client\Boundaries $boundaries Boundaries defined by a polygon composed of a list of coordinates
     * @return $this
     */
    public function setBoundaries($boundaries)
    {
        
        $this->boundaries = $boundaries;
        return $this;
    }
    
    /**
     * Gets position
     * @return Systran\Client\FullPosition
     */
    public function getPosition()
    {
        return $this->position;
    }
  
    /**
     * Sets position
     * @param Systran\Client\FullPosition $position Position defined by coordinates and type
     * @return $this
     */
    public function setPosition($position)
    {
        
        $this->position = $position;
        return $this;
    }
    
    /**
     * Gets address
     * @return Systran\Client\Address
     */
    public function getAddress()
    {
        return $this->address;
    }
  
    /**
     * Sets address
     * @param Systran\Client\Address $address Address
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