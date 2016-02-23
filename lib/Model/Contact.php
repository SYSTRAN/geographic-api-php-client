<?php
/**
 * Contact
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
 * Contact Class Doc Comment
 *
 * @category    Class
 * @description Contact
 * @package     Systran\Client\Model
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/Systran-api/Systran-codegen
 */
class Contact implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'phone_numbers' => 'Systran\Client\Model\PhoneNumber[]',
        'mails' => 'Systran\Client\Model\Mail[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'phone_numbers' => 'phoneNumbers',
        'mails' => 'mails'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'phone_numbers' => 'setPhoneNumbers',
        'mails' => 'setMails'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'phone_numbers' => 'getPhoneNumbers',
        'mails' => 'getMails'
    );
  
    
    /**
      * $phone_numbers Array of phone numbers
      * @var Systran\Client\Model\PhoneNumber[]
      */
    protected $phone_numbers;
    
    /**
      * $mails Array of mails
      * @var Systran\Client\Model\Mail[]
      */
    protected $mails;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->phone_numbers = $data["phone_numbers"];
            $this->mails = $data["mails"];
        }
    }
    
    /**
     * Gets phone_numbers
     * @return Systran\Client\Model\PhoneNumber[]
     */
    public function getPhoneNumbers()
    {
        return $this->phone_numbers;
    }
  
    /**
     * Sets phone_numbers
     * @param Systran\Client\Model\PhoneNumber[] $phone_numbers Array of phone numbers
     * @return $this
     */
    public function setPhoneNumbers($phone_numbers)
    {
        
        $this->phone_numbers = $phone_numbers;
        return $this;
    }
    
    /**
     * Gets mails
     * @return Systran\Client\Model\Mail[]
     */
    public function getMails()
    {
        return $this->mails;
    }
  
    /**
     * Sets mails
     * @param Systran\Client\Model\Mail[] $mails Array of mails
     * @return $this
     */
    public function setMails($mails)
    {
        
        $this->mails = $mails;
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
