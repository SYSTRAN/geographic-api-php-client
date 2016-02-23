<?php
/**
 * FullPOI
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
 * FullPOI Class Doc Comment
 *
 * @category    Class
 * @description POI with detailled information
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/Systran-api/Systran-codegen
 */
class FullPOI implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'id' => 'string',
        'location' => 'Systran\Client\Model\FullPOILocation',
        'name' => 'string',
        'types' => 'string[]',
        'rating' => 'int',
        'price_level' => 'int',
        'contact' => 'Systran\Client\Model\Contact',
        'open_now' => 'bool',
        'opening_hours' => 'Systran\Client\Model\OpeningHours[]',
        'photos' => 'Systran\Client\Model\Photo[]',
        'url' => 'string',
        'descriptions' => 'Systran\Client\Model\Description[]',
        'reviews' => 'Systran\Client\Model\Review[]',
        'booking' => 'Systran\Client\Model\Booking'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'location' => 'location',
        'name' => 'name',
        'types' => 'types',
        'rating' => 'rating',
        'price_level' => 'priceLevel',
        'contact' => 'contact',
        'open_now' => 'openNow',
        'opening_hours' => 'openingHours',
        'photos' => 'photos',
        'url' => 'url',
        'descriptions' => 'descriptions',
        'reviews' => 'reviews',
        'booking' => 'booking'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'location' => 'setLocation',
        'name' => 'setName',
        'types' => 'setTypes',
        'rating' => 'setRating',
        'price_level' => 'setPriceLevel',
        'contact' => 'setContact',
        'open_now' => 'setOpenNow',
        'opening_hours' => 'setOpeningHours',
        'photos' => 'setPhotos',
        'url' => 'setUrl',
        'descriptions' => 'setDescriptions',
        'reviews' => 'setReviews',
        'booking' => 'setBooking'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'location' => 'getLocation',
        'name' => 'getName',
        'types' => 'getTypes',
        'rating' => 'getRating',
        'price_level' => 'getPriceLevel',
        'contact' => 'getContact',
        'open_now' => 'getOpenNow',
        'opening_hours' => 'getOpeningHours',
        'photos' => 'getPhotos',
        'url' => 'getUrl',
        'descriptions' => 'getDescriptions',
        'reviews' => 'getReviews',
        'booking' => 'getBooking'
    );
  
    
    /**
      * $id POI Identifier
      * @var string
      */
    protected $id;
    
    /**
      * $location Location
      * @var Systran\Client\Model\FullPOILocation
      */
    protected $location;
    
    /**
      * $name Name
      * @var string
      */
    protected $name;
    
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
      * $contact Contact
      * @var Systran\Client\Model\Contact
      */
    protected $contact;
    
    /**
      * $open_now Open Now
      * @var bool
      */
    protected $open_now;
    
    /**
      * $opening_hours Opening Hours
      * @var Systran\Client\Model\OpeningHours[]
      */
    protected $opening_hours;
    
    /**
      * $photos Array of Photos
      * @var Systran\Client\Model\Photo[]
      */
    protected $photos;
    
    /**
      * $url URL
      * @var string
      */
    protected $url;
    
    /**
      * $descriptions Description content splitted in several parts
      * @var Systran\Client\Model\Description[]
      */
    protected $descriptions;
    
    /**
      * $reviews Reviews
      * @var Systran\Client\Model\Review[]
      */
    protected $reviews;
    
    /**
      * $booking Booking
      * @var Systran\Client\Model\Booking
      */
    protected $booking;
    

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
            $this->types = $data["types"];
            $this->rating = $data["rating"];
            $this->price_level = $data["price_level"];
            $this->contact = $data["contact"];
            $this->open_now = $data["open_now"];
            $this->opening_hours = $data["opening_hours"];
            $this->photos = $data["photos"];
            $this->url = $data["url"];
            $this->descriptions = $data["descriptions"];
            $this->reviews = $data["reviews"];
            $this->booking = $data["booking"];
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
     * @param string $id POI Identifier
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets location
     * @return Systran\Client\FullPOILocation
     */
    public function getLocation()
    {
        return $this->location;
    }
  
    /**
     * Sets location
     * @param Systran\Client\FullPOILocation $location Location
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
     * Gets contact
     * @return Systran\Client\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }
  
    /**
     * Sets contact
     * @param Systran\Client\Contact $contact Contact
     * @return $this
     */
    public function setContact($contact)
    {
        
        $this->contact = $contact;
        return $this;
    }
    
    /**
     * Gets open_now
     * @return bool
     */
    public function getOpenNow()
    {
        return $this->open_now;
    }
  
    /**
     * Sets open_now
     * @param bool $open_now Open Now
     * @return $this
     */
    public function setOpenNow($open_now)
    {
        
        $this->open_now = $open_now;
        return $this;
    }
    
    /**
     * Gets opening_hours
     * @return Systran\Client\OpeningHours[]
     */
    public function getOpeningHours()
    {
        return $this->opening_hours;
    }
  
    /**
     * Sets opening_hours
     * @param Systran\Client\OpeningHours[] $opening_hours Opening Hours
     * @return $this
     */
    public function setOpeningHours($opening_hours)
    {
        
        $this->opening_hours = $opening_hours;
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
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
  
    /**
     * Sets url
     * @param string $url URL
     * @return $this
     */
    public function setUrl($url)
    {
        
        $this->url = $url;
        return $this;
    }
    
    /**
     * Gets descriptions
     * @return Systran\Client\Description[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }
  
    /**
     * Sets descriptions
     * @param Systran\Client\Description[] $descriptions Description content splitted in several parts
     * @return $this
     */
    public function setDescriptions($descriptions)
    {
        
        $this->descriptions = $descriptions;
        return $this;
    }
    
    /**
     * Gets reviews
     * @return Systran\Client\Review[]
     */
    public function getReviews()
    {
        return $this->reviews;
    }
  
    /**
     * Sets reviews
     * @param Systran\Client\Review[] $reviews Reviews
     * @return $this
     */
    public function setReviews($reviews)
    {
        
        $this->reviews = $reviews;
        return $this;
    }
    
    /**
     * Gets booking
     * @return Systran\Client\Booking
     */
    public function getBooking()
    {
        return $this->booking;
    }
  
    /**
     * Sets booking
     * @param Systran\Client\Booking $booking Booking
     * @return $this
     */
    public function setBooking($booking)
    {
        
        $this->booking = $booking;
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
