<?php
/**
 * PoiResponse
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
 * PoiResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client\Model
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/Systran-api/Systran-codegen
 */
class PoiResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'error' => 'Systran\Client\Model\ErrorResponse',
        'total' => 'int',
        'offset' => 'int',
        'points_of_interest' => 'Systran\Client\Model\LitePOI[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'error' => 'error',
        'total' => 'total',
        'offset' => 'offset',
        'points_of_interest' => 'pointsOfInterest'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'error' => 'setError',
        'total' => 'setTotal',
        'offset' => 'setOffset',
        'points_of_interest' => 'setPointsOfInterest'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'error' => 'getError',
        'total' => 'getTotal',
        'offset' => 'getOffset',
        'points_of_interest' => 'getPointsOfInterest'
    );
  
    
    /**
      * $error Error at request level
      * @var Systran\Client\Model\ErrorResponse
      */
    protected $error;
    
    /**
      * $total Total number of elements matching the criteria (for pagination)
      * @var int
      */
    protected $total;
    
    /**
      * $offset Pagination offset
      * @var int
      */
    protected $offset;
    
    /**
      * $points_of_interest Array of lite POI
      * @var Systran\Client\Model\LitePOI[]
      */
    protected $points_of_interest;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->error = $data["error"];
            $this->total = $data["total"];
            $this->offset = $data["offset"];
            $this->points_of_interest = $data["points_of_interest"];
        }
    }
    
    /**
     * Gets error
     * @return Systran\Client\Model\ErrorResponse
     */
    public function getError()
    {
        return $this->error;
    }
  
    /**
     * Sets error
     * @param Systran\Client\Model\ErrorResponse $error Error at request level
     * @return $this
     */
    public function setError($error)
    {
        
        $this->error = $error;
        return $this;
    }
    
    /**
     * Gets total
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }
  
    /**
     * Sets total
     * @param int $total Total number of elements matching the criteria (for pagination)
     * @return $this
     */
    public function setTotal($total)
    {
        
        $this->total = $total;
        return $this;
    }
    
    /**
     * Gets offset
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }
  
    /**
     * Sets offset
     * @param int $offset Pagination offset
     * @return $this
     */
    public function setOffset($offset)
    {
        
        $this->offset = $offset;
        return $this;
    }
    
    /**
     * Gets points_of_interest
     * @return Systran\Client\Model\LitePOI[]
     */
    public function getPointsOfInterest()
    {
        return $this->points_of_interest;
    }
  
    /**
     * Sets points_of_interest
     * @param Systran\Client\Model\LitePOI[] $points_of_interest Array of lite POI
     * @return $this
     */
    public function setPointsOfInterest($points_of_interest)
    {
        
        $this->points_of_interest = $points_of_interest;
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
