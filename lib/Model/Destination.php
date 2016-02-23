<?php
/**
 * Destination
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
 * Destination Class Doc Comment
 *
 * @category    Class
 * @description Destination
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/Systran-api/Systran-codegen
 */
class Destination implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'id' => 'string',
        'title' => 'string',
        'content' => 'string',
        'photos' => 'Systran\Client\Model\Photo[]',
        'videos' => 'Systran\Client\Model\Video[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'title' => 'title',
        'content' => 'content',
        'photos' => 'photos',
        'videos' => 'videos'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'title' => 'setTitle',
        'content' => 'setContent',
        'photos' => 'setPhotos',
        'videos' => 'setVideos'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'title' => 'getTitle',
        'content' => 'getContent',
        'photos' => 'getPhotos',
        'videos' => 'getVideos'
    );
  
    
    /**
      * $id Destination Identifier
      * @var string
      */
    protected $id;
    
    /**
      * $title Title
      * @var string
      */
    protected $title;
    
    /**
      * $content Content
      * @var string
      */
    protected $content;
    
    /**
      * $photos Array of Photos
      * @var Systran\Client\Model\Photo[]
      */
    protected $photos;
    
    /**
      * $videos Array of Videos
      * @var Systran\Client\Model\Video[]
      */
    protected $videos;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->title = $data["title"];
            $this->content = $data["content"];
            $this->photos = $data["photos"];
            $this->videos = $data["videos"];
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
     * @param string $id Destination Identifier
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
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
     * @param string $title Title
     * @return $this
     */
    public function setTitle($title)
    {
        
        $this->title = $title;
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
     * @param string $content Content
     * @return $this
     */
    public function setContent($content)
    {
        
        $this->content = $content;
        return $this;
    }
    
    /**
     * Gets photos
     * @return Systran\Client\Model\Photo[]
     */
    public function getPhotos()
    {
        return $this->photos;
    }
  
    /**
     * Sets photos
     * @param Systran\Client\Model\Photo[] $photos Array of Photos
     * @return $this
     */
    public function setPhotos($photos)
    {
        
        $this->photos = $photos;
        return $this;
    }
    
    /**
     * Gets videos
     * @return Systran\Client\Model\Video[]
     */
    public function getVideos()
    {
        return $this->videos;
    }
  
    /**
     * Sets videos
     * @param Systran\Client\Model\Video[] $videos Array of Videos
     * @return $this
     */
    public function setVideos($videos)
    {
        
        $this->videos = $videos;
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
