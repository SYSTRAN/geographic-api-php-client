<?php
/**
 * LiteEvent
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
 * LiteEvent Class Doc Comment
 *
 * @category    Class
 * @description Event with only basic information
 * @package     Systran\Client\Model
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/Systran-api/Systran-codegen
 */
class LiteEvent implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'id' => 'string',
        'location' => 'Systran\Client\Model\LiteLocation',
        'name' => 'string',
        'opening_dates' => 'Systran\Client\Model\OpeningDates',
        'main_type' => 'string',
        'types' => 'string[]',
        'rating' => 'int',
        'price_level' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'location' => 'location',
        'name' => 'name',
        'opening_dates' => 'openingDates',
        'main_type' => 'mainType',
        'types' => 'types',
        'rating' => 'rating',
        'price_level' => 'priceLevel'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'location' => 'setLocation',
        'name' => 'setName',
        'opening_dates' => 'setOpeningDates',
        'main_type' => 'setMainType',
        'types' => 'setTypes',
        'rating' => 'setRating',
        'price_level' => 'setPriceLevel'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'location' => 'getLocation',
        'name' => 'getName',
        'opening_dates' => 'getOpeningDates',
        'main_type' => 'getMainType',
        'types' => 'getTypes',
        'rating' => 'getRating',
        'price_level' => 'getPriceLevel'
    );
  
    
    /**
      * $id Event Identifier
      * @var string
      */
    protected $id;
    
    /**
      * $location Location
      * @var Systran\Client\Model\LiteLocation
      */
    protected $location;
    
    /**
      * $name Name
      * @var string
      */
    protected $name;
    
    /**
      * $opening_dates Opening dates
      * @var Systran\Client\Model\OpeningDates
      */
    protected $opening_dates;
    
    /**
      * $main_type Main type
      * @var string
      */
    protected $main_type;
    
    /**
      * $types Types, ordered from general to specific
      * @var string[]
      */
    protected $types;
    
    /**
      * $rating Rating
      * @var int
      */
    protected $rating;
    
    /**
      * $price_level Price Level
      * @var int
      */
    protected $price_level;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->location = $data["location"];
            $this->name = $data["name"];
            $this->opening_dates = $data["opening_dates"];
            $this->main_type = $data["main_type"];
            $this->types = $data["types"];
            $this->rating = $data["rating"];
            $this->price_level = $data["price_level"];
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
     * @param string $id Event Identifier
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets location
     * @return Systran\Client\Model\LiteLocation
     */
    public function getLocation()
    {
        return $this->location;
    }
  
    /**
     * Sets location
     * @param Systran\Client\Model\LiteLocation $location Location
     * @return $this
     */
    public function setLocation($location)
    {
        
        $this->location = $location;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name Name
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets opening_dates
     * @return Systran\Client\Model\OpeningDates
     */
    public function getOpeningDates()
    {
        return $this->opening_dates;
    }
  
    /**
     * Sets opening_dates
     * @param Systran\Client\Model\OpeningDates $opening_dates Opening dates
     * @return $this
     */
    public function setOpeningDates($opening_dates)
    {
        
        $this->opening_dates = $opening_dates;
        return $this;
    }
    
    /**
     * Gets main_type
     * @return string
     */
    public function getMainType()
    {
        return $this->main_type;
    }
  
    /**
     * Sets main_type
     * @param string $main_type Main type
     * @return $this
     */
    public function setMainType($main_type)
    {
        
        $this->main_type = $main_type;
        return $this;
    }
    
    /**
     * Gets types
     * @return string[]
     */
    public function getTypes()
    {
        return $this->types;
    }
  
    /**
     * Sets types
     * @param string[] $types Types, ordered from general to specific
     * @return $this
     */
    public function setTypes($types)
    {
        
        $this->types = $types;
        return $this;
    }
    
    /**
     * Gets rating
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }
  
    /**
     * Sets rating
     * @param int $rating Rating
     * @return $this
     */
    public function setRating($rating)
    {
        
        $this->rating = $rating;
        return $this;
    }
    
    /**
     * Gets price_level
     * @return int
     */
    public function getPriceLevel()
    {
        return $this->price_level;
    }
  
    /**
     * Sets price_level
     * @param int $price_level Price Level
     * @return $this
     */
    public function setPriceLevel($price_level)
    {
        
        $this->price_level = $price_level;
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
