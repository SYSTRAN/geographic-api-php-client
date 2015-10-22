<?php
/**
 * FullDestination
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
 * FullDestination Class Doc Comment
 *
 * @category    Class
 * @description Destination with detailled information
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/Systran-api/Systran-codegen
 */
class FullDestination implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'id' => 'string',
        'location' => 'Systran\Client\FullLocation',
        'title' => 'string',
        'headline' => 'string',
        'introduction' => 'string',
        'advice' => 'string',
        'chapters' => 'Systran\Client\Chapter[]',
        'photos' => 'Systran\Client\Photo[]',
        'videos' => 'Systran\Client\Video[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'location' => 'location',
        'title' => 'title',
        'headline' => 'headline',
        'introduction' => 'introduction',
        'advice' => 'advice',
        'chapters' => 'chapters',
        'photos' => 'photos',
        'videos' => 'videos'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'location' => 'setLocation',
        'title' => 'setTitle',
        'headline' => 'setHeadline',
        'introduction' => 'setIntroduction',
        'advice' => 'setAdvice',
        'chapters' => 'setChapters',
        'photos' => 'setPhotos',
        'videos' => 'setVideos'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'location' => 'getLocation',
        'title' => 'getTitle',
        'headline' => 'getHeadline',
        'introduction' => 'getIntroduction',
        'advice' => 'getAdvice',
        'chapters' => 'getChapters',
        'photos' => 'getPhotos',
        'videos' => 'getVideos'
    );
  
    
    /**
      * $id Destination Identifier
      * @var string
      */
    protected $id;
    
    /**
      * $location Location
      * @var Systran\Client\FullLocation
      */
    protected $location;
    
    /**
      * $title Title
      * @var string
      */
    protected $title;
    
    /**
      * $headline Headline
      * @var string
      */
    protected $headline;
    
    /**
      * $introduction Introduction
      * @var string
      */
    protected $introduction;
    
    /**
      * $advice Advice
      * @var string
      */
    protected $advice;
    
    /**
      * $chapters Chapters
      * @var Systran\Client\Chapter[]
      */
    protected $chapters;
    
    /**
      * $photos Array of Photos
      * @var Systran\Client\Photo[]
      */
    protected $photos;
    
    /**
      * $videos Array of Videos
      * @var Systran\Client\Video[]
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
            $this->location = $data["location"];
            $this->title = $data["title"];
            $this->headline = $data["headline"];
            $this->introduction = $data["introduction"];
            $this->advice = $data["advice"];
            $this->chapters = $data["chapters"];
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
     * Gets location
     * @return Systran\Client\FullLocation
     */
    public function getLocation()
    {
        return $this->location;
    }
  
    /**
     * Sets location
     * @param Systran\Client\FullLocation $location Location
     * @return $this
     */
    public function setLocation($location)
    {
        
        $this->location = $location;
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
     * Gets headline
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }
  
    /**
     * Sets headline
     * @param string $headline Headline
     * @return $this
     */
    public function setHeadline($headline)
    {
        
        $this->headline = $headline;
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
     * @param string $introduction Introduction
     * @return $this
     */
    public function setIntroduction($introduction)
    {
        
        $this->introduction = $introduction;
        return $this;
    }
    
    /**
     * Gets advice
     * @return string
     */
    public function getAdvice()
    {
        return $this->advice;
    }
  
    /**
     * Sets advice
     * @param string $advice Advice
     * @return $this
     */
    public function setAdvice($advice)
    {
        
        $this->advice = $advice;
        return $this;
    }
    
    /**
     * Gets chapters
     * @return Systran\Client\Chapter[]
     */
    public function getChapters()
    {
        return $this->chapters;
    }
  
    /**
     * Sets chapters
     * @param Systran\Client\Chapter[] $chapters Chapters
     * @return $this
     */
    public function setChapters($chapters)
    {
        
        $this->chapters = $chapters;
        return $this;
    }
    
    /**
     * Gets photos
     * @return Systran\Client\Photo[]
     */
    public function getPhotos()
    {
        return $this->photos;
    }
  
    /**
     * Sets photos
     * @param Systran\Client\Photo[] $photos Array of Photos
     * @return $this
     */
    public function setPhotos($photos)
    {
        
        $this->photos = $photos;
        return $this;
    }
    
    /**
     * Gets videos
     * @return Systran\Client\Video[]
     */
    public function getVideos()
    {
        return $this->videos;
    }
  
    /**
     * Sets videos
     * @param Systran\Client\Video[] $videos Array of Videos
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
