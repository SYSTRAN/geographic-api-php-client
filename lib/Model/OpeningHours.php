<?php
/**
 * OpeningHours
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

namespace Systran\Client\Model;

use \ArrayAccess;
/**
 * OpeningHours Class Doc Comment
 *
 * @category    Class
 * @description Opening hours
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/Systran-api/Systran-codegen
 */
class OpeningHours implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'begin' => 'int',
        'end' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'begin' => 'begin',
        'end' => 'end'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'begin' => 'setBegin',
        'end' => 'setEnd'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'begin' => 'getBegin',
        'end' => 'getEnd'
    );
  
    
    /**
      * $begin Opening hour (day(1 digit),hour(2 digits), minutes(2digits)), ex: 50928 for Friday 9h28
      * @var int
      */
    protected $begin;
    
    /**
      * $end Closing hour (day(1 digit),hour(2 digits), minutes(2digits)), ex: 51722 for Friday 17h22
      * @var int
      */
    protected $end;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->begin = $data["begin"];
            $this->end = $data["end"];
        }
    }
    
    /**
     * Gets begin
     * @return int
     */
    public function getBegin()
    {
        return $this->begin;
    }
  
    /**
     * Sets begin
     * @param int $begin Opening hour (day(1 digit),hour(2 digits), minutes(2digits)), ex: 50928 for Friday 9h28
     * @return $this
     */
    public function setBegin($begin)
    {
        
        $this->begin = $begin;
        return $this;
    }
    
    /**
     * Gets end
     * @return int
     */
    public function getEnd()
    {
        return $this->end;
    }
  
    /**
     * Sets end
     * @param int $end Closing hour (day(1 digit),hour(2 digits), minutes(2digits)), ex: 51722 for Friday 17h22
     * @return $this
     */
    public function setEnd($end)
    {
        
        $this->end = $end;
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
