<?php
/**
 * POIAddressComponents
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
 * POIAddressComponents Class Doc Comment
 *
 * @category    Class
 * @description Address components
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/Systran-api/Systran-codegen
 */
class POIAddressComponents implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'country' => 'string',
        'state' => 'string',
        'county' => 'string',
        'city' => 'string',
        'district' => 'string',
        'postal_code' => 'string',
        'street' => 'string',
        'house' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'country' => 'country',
        'state' => 'state',
        'county' => 'county',
        'city' => 'city',
        'district' => 'district',
        'postal_code' => 'postalCode',
        'street' => 'street',
        'house' => 'house'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'country' => 'setCountry',
        'state' => 'setState',
        'county' => 'setCounty',
        'city' => 'setCity',
        'district' => 'setDistrict',
        'postal_code' => 'setPostalCode',
        'street' => 'setStreet',
        'house' => 'setHouse'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'country' => 'getCountry',
        'state' => 'getState',
        'county' => 'getCounty',
        'city' => 'getCity',
        'district' => 'getDistrict',
        'postal_code' => 'getPostalCode',
        'street' => 'getStreet',
        'house' => 'getHouse'
    );
  
    
    /**
      * $country Country
      * @var string
      */
    protected $country;
    
    /**
      * $state State
      * @var string
      */
    protected $state;
    
    /**
      * $county County
      * @var string
      */
    protected $county;
    
    /**
      * $city City
      * @var string
      */
    protected $city;
    
    /**
      * $district District
      * @var string
      */
    protected $district;
    
    /**
      * $postal_code Postal code
      * @var string
      */
    protected $postal_code;
    
    /**
      * $street Street
      * @var string
      */
    protected $street;
    
    /**
      * $house House
      * @var string
      */
    protected $house;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->country = $data["country"];
            $this->state = $data["state"];
            $this->county = $data["county"];
            $this->city = $data["city"];
            $this->district = $data["district"];
            $this->postal_code = $data["postal_code"];
            $this->street = $data["street"];
            $this->house = $data["house"];
        }
    }
    
    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
  
    /**
     * Sets country
     * @param string $country Country
     * @return $this
     */
    public function setCountry($country)
    {
        
        $this->country = $country;
        return $this;
    }
    
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
  
    /**
     * Sets state
     * @param string $state State
     * @return $this
     */
    public function setState($state)
    {
        
        $this->state = $state;
        return $this;
    }
    
    /**
     * Gets county
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }
  
    /**
     * Sets county
     * @param string $county County
     * @return $this
     */
    public function setCounty($county)
    {
        
        $this->county = $county;
        return $this;
    }
    
    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
  
    /**
     * Sets city
     * @param string $city City
     * @return $this
     */
    public function setCity($city)
    {
        
        $this->city = $city;
        return $this;
    }
    
    /**
     * Gets district
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }
  
    /**
     * Sets district
     * @param string $district District
     * @return $this
     */
    public function setDistrict($district)
    {
        
        $this->district = $district;
        return $this;
    }
    
    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }
  
    /**
     * Sets postal_code
     * @param string $postal_code Postal code
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        
        $this->postal_code = $postal_code;
        return $this;
    }
    
    /**
     * Gets street
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }
  
    /**
     * Sets street
     * @param string $street Street
     * @return $this
     */
    public function setStreet($street)
    {
        
        $this->street = $street;
        return $this;
    }
    
    /**
     * Gets house
     * @return string
     */
    public function getHouse()
    {
        return $this->house;
    }
  
    /**
     * Sets house
     * @param string $house House
     * @return $this
     */
    public function setHouse($house)
    {
        
        $this->house = $house;
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
