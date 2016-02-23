<?php
/**
 * LiteLocation
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
 * LiteLocation Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client\Model
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/Systran-api/Systran-codegen
 */
class LiteLocation implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'position' => 'Systran\Client\Model\Position',
        'vicinity' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'position' => 'position',
        'vicinity' => 'vicinity'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'position' => 'setPosition',
        'vicinity' => 'setVicinity'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'position' => 'getPosition',
        'vicinity' => 'getVicinity'
    );
  
    
    /**
      * $position Position defined by latitude and longitude
      * @var Systran\Client\Model\Position
      */
    protected $position;
    
    /**
      * $vicinity Vicinity description
      * @var string
      */
    protected $vicinity;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->position = $data["position"];
            $this->vicinity = $data["vicinity"];
        }
    }
    
    /**
     * Gets position
     * @return Systran\Client\Model\Position
     */
    public function getPosition()
    {
        return $this->position;
    }
  
    /**
     * Sets position
     * @param Systran\Client\Model\Position $position Position defined by latitude and longitude
     * @return $this
     */
    public function setPosition($position)
    {
        
        $this->position = $position;
        return $this;
    }
    
    /**
     * Gets vicinity
     * @return string
     */
    public function getVicinity()
    {
        return $this->vicinity;
    }
  
    /**
     * Sets vicinity
     * @param string $vicinity Vicinity description
     * @return $this
     */
    public function setVicinity($vicinity)
    {
        
        $this->vicinity = $vicinity;
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
