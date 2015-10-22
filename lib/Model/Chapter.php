<?php
/**
 * Chapter
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
 * Chapter Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/Systran-api/Systran-codegen
 */
class Chapter implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'order' => 'string',
        'title' => 'string',
        'introduction' => 'string',
        'content' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'order' => 'order',
        'title' => 'title',
        'introduction' => 'introduction',
        'content' => 'content'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'order' => 'setOrder',
        'title' => 'setTitle',
        'introduction' => 'setIntroduction',
        'content' => 'setContent'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'order' => 'getOrder',
        'title' => 'getTitle',
        'introduction' => 'getIntroduction',
        'content' => 'getContent'
    );
  
    
    /**
      * $order Chapter order
      * @var string
      */
    protected $order;
    
    /**
      * $title Chapter title
      * @var string
      */
    protected $title;
    
    /**
      * $introduction Chapter introduction
      * @var string
      */
    protected $introduction;
    
    /**
      * $content Chapter content
      * @var string
      */
    protected $content;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->order = $data["order"];
            $this->title = $data["title"];
            $this->introduction = $data["introduction"];
            $this->content = $data["content"];
        }
    }
    
    /**
     * Gets order
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }
  
    /**
     * Sets order
     * @param string $order Chapter order
     * @return $this
     */
    public function setOrder($order)
    {
        
        $this->order = $order;
        return $this;
    }
    
    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
  
    /**
     * Sets title
     * @param string $title Chapter title
     * @return $this
     */
    public function setTitle($title)
    {
        
        $this->title = $title;
        return $this;
    }
    
    /**
     * Gets introduction
     * @return string
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }
  
    /**
     * Sets introduction
     * @param string $introduction Chapter introduction
     * @return $this
     */
    public function setIntroduction($introduction)
    {
        
        $this->introduction = $introduction;
        return $this;
    }
    
    /**
     * Gets content
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
  
    /**
     * Sets content
     * @param string $content Chapter content
     * @return $this
     */
    public function setContent($content)
    {
        
        $this->content = $content;
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
