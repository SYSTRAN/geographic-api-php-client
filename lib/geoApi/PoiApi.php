<?php
/**
 * PoiApi
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

use \Systran\Client\Configuration;
use \Systran\Client\ApiClient;
use \Systran\Client\ApiException;
use \Systran\Client\ObjectSerializer;

/**
 * PoiApi Class Doc Comment
 *
 * @category Class
 * @package  Systran\Client
 *
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 *
 */
class PoiApi
{

    /**
     * API Client
     * @var \Systran\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Systran\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost:8102');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Systran\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Systran\Client\ApiClient $apiClient set the API client
     * @return PoiApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * geographicPoiEventsListGet
     *
     * List Events
     *
     * @param \DateTime $date Date at which events are available (optional)
     * @param \DateTime $begin_date Date corresponding to the begining of the period where events are available (optional)
     * @param \DateTime $end_date Date corresponding to the end of the period where events are available (optional)
     * @param double $latitude Latitude location (optional)
     * @param double $longitude Longitude location (optional)
     * @param double $radius Radius in meters (optional)
     * @param double $maximum_latitude Latitude of the top (northernmost) side of the bounding box (optional)
     * @param double $maximum_longitude Longitude of the right (easternmost) side of the bounding box (optional)
     * @param double $minimum_latitude Latitude of the bottom (southernmost) side of the bounding box (optional)
     * @param double $minimum_longitude Longitude of the left (westernmost) side of the bounding box (optional)
     * @param string[] $filter Filter on all relevent POI data (name, type, address, ...) (optional)
     * @param string[] $name POI name (optional)
     * @param string $main_type POI main type (optional)
     * @param string[] $type POI type (optional)
     * @param string $address POI address (optional)
     * @param string $country POI country (optional)
     * @param string $state POI state (optional)
     * @param string $county POI county (optional)
     * @param string $city POI city (optional)
     * @param string $district POI district (optional)
     * @param string $postal_code POI postal code (optional)
     * @param string $street POI street (optional)
     * @param string $house POI house (optional)
     * @param string $rank_by Ranking criteria (optional)
     * @param bool $open_now Only open for business POI (optional)
     * @param int $minimum_rating Minimum rating (optional)
     * @param int $maximum_rating Maximum rating (optional)
     * @param int $minimum_price Minumum price (optional)
     * @param int $maximum_price Maximum price (optional)
     * @param int $limit Pagination limit (optional)
     * @param int $offset Pagination offset (optional)
     * @param string $accept_language Preferred languages for response localization.\n\nSee [Accept-Language header specification for HTTP\n1.1](http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4) (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return Systran\Client\EventsResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function geographicPoiEventsListGet($date=null, $begin_date=null, $end_date=null, $latitude=null, $longitude=null, $radius=null, $maximum_latitude=null, $maximum_longitude=null, $minimum_latitude=null, $minimum_longitude=null, $filter=null, $name=null, $main_type=null, $type=null, $address=null, $country=null, $state=null, $county=null, $city=null, $district=null, $postal_code=null, $street=null, $house=null, $rank_by=null, $open_now=null, $minimum_rating=null, $maximum_rating=null, $minimum_price=null, $maximum_price=null, $limit=null, $offset=null, $accept_language=null, $callback=null)
    {
        
  
        // parse inputs
        $resourcePath = "/geographic/poi/events";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($date !== null) {
            $queryParams['date'] = $this->apiClient->getSerializer()->toQueryValue($date);
        }// query params
        if ($begin_date !== null) {
            $queryParams['beginDate'] = $this->apiClient->getSerializer()->toQueryValue($begin_date);
        }// query params
        if ($end_date !== null) {
            $queryParams['endDate'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }// query params
        if ($latitude !== null) {
            $queryParams['latitude'] = $this->apiClient->getSerializer()->toQueryValue($latitude);
        }// query params
        if ($longitude !== null) {
            $queryParams['longitude'] = $this->apiClient->getSerializer()->toQueryValue($longitude);
        }// query params
        if ($radius !== null) {
            $queryParams['radius'] = $this->apiClient->getSerializer()->toQueryValue($radius);
        }// query params
        if ($maximum_latitude !== null) {
            $queryParams['maximumLatitude'] = $this->apiClient->getSerializer()->toQueryValue($maximum_latitude);
        }// query params
        if ($maximum_longitude !== null) {
            $queryParams['maximumLongitude'] = $this->apiClient->getSerializer()->toQueryValue($maximum_longitude);
        }// query params
        if ($minimum_latitude !== null) {
            $queryParams['minimumLatitude'] = $this->apiClient->getSerializer()->toQueryValue($minimum_latitude);
        }// query params
        if ($minimum_longitude !== null) {
            $queryParams['minimumLongitude'] = $this->apiClient->getSerializer()->toQueryValue($minimum_longitude);
        }// query params
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }// query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }// query params
        if ($main_type !== null) {
            $queryParams['mainType'] = $this->apiClient->getSerializer()->toQueryValue($main_type);
        }// query params
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }// query params
        if ($address !== null) {
            $queryParams['address'] = $this->apiClient->getSerializer()->toQueryValue($address);
        }// query params
        if ($country !== null) {
            $queryParams['country'] = $this->apiClient->getSerializer()->toQueryValue($country);
        }// query params
        if ($state !== null) {
            $queryParams['state'] = $this->apiClient->getSerializer()->toQueryValue($state);
        }// query params
        if ($county !== null) {
            $queryParams['county'] = $this->apiClient->getSerializer()->toQueryValue($county);
        }// query params
        if ($city !== null) {
            $queryParams['city'] = $this->apiClient->getSerializer()->toQueryValue($city);
        }// query params
        if ($district !== null) {
            $queryParams['district'] = $this->apiClient->getSerializer()->toQueryValue($district);
        }// query params
        if ($postal_code !== null) {
            $queryParams['postalCode'] = $this->apiClient->getSerializer()->toQueryValue($postal_code);
        }// query params
        if ($street !== null) {
            $queryParams['street'] = $this->apiClient->getSerializer()->toQueryValue($street);
        }// query params
        if ($house !== null) {
            $queryParams['house'] = $this->apiClient->getSerializer()->toQueryValue($house);
        }// query params
        if ($rank_by !== null) {
            $queryParams['rankBy'] = $this->apiClient->getSerializer()->toQueryValue($rank_by);
        }// query params
        if ($open_now !== null) {
            $queryParams['openNow'] = $this->apiClient->getSerializer()->toQueryValue($open_now);
        }// query params
        if ($minimum_rating !== null) {
            $queryParams['minimumRating'] = $this->apiClient->getSerializer()->toQueryValue($minimum_rating);
        }// query params
        if ($maximum_rating !== null) {
            $queryParams['maximumRating'] = $this->apiClient->getSerializer()->toQueryValue($maximum_rating);
        }// query params
        if ($minimum_price !== null) {
            $queryParams['minimumPrice'] = $this->apiClient->getSerializer()->toQueryValue($minimum_price);
        }// query params
        if ($maximum_price !== null) {
            $queryParams['maximumPrice'] = $this->apiClient->getSerializer()->toQueryValue($maximum_price);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = $this->apiClient->getSerializer()->toHeaderValue($accept_language);
        }
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, 'Systran\Client\EventsResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, 'Systran\Client\EventsResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'Systran\Client\EventsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * geographicPoiGetGet
     *
     * Get a specific Point of interest
     *
     * @param string $id POI identifier (required)
     * @param string $accept_language Preferred languages for response localization.\n\nSee [Accept-Language header specification for HTTP\n1.1](http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4) (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return Systran\Client\PoiDetailsResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function geographicPoiGetGet($id, $accept_language=null, $callback=null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling geographicPoiGetGet');
        }
  
        // parse inputs
        $resourcePath = "/geographic/poi/details";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = $this->apiClient->getSerializer()->toHeaderValue($accept_language);
        }
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, 'Systran\Client\PoiDetailsResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, 'Systran\Client\PoiDetailsResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'Systran\Client\PoiDetailsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * geographicPoiListGet
     *
     * List Point of interests
     *
     * @param double $latitude Latitude location (optional)
     * @param double $longitude Longitude location (optional)
     * @param double $radius Radius in meters (optional)
     * @param double $maximum_latitude Latitude of the top (northernmost) side of the bounding box (optional)
     * @param double $maximum_longitude Longitude of the right (easternmost) side of the bounding box (optional)
     * @param double $minimum_latitude Latitude of the bottom (southernmost) side of the bounding box (optional)
     * @param double $minimum_longitude Longitude of the left (westernmost) side of the bounding box (optional)
     * @param string[] $filter Filter on all relevent POI data (name, type, address, ...) (optional)
     * @param string[] $name POI name (optional)
     * @param string $main_type POI main type (optional)
     * @param string[] $type POI type (optional)
     * @param string $address POI address (optional)
     * @param string $country POI country (optional)
     * @param string $state POI state (optional)
     * @param string $county POI county (optional)
     * @param string $city POI city (optional)
     * @param string $district POI district (optional)
     * @param string $postal_code POI postal code (optional)
     * @param string $street POI street (optional)
     * @param string $house POI house (optional)
     * @param string $rank_by Ranking criteria (optional)
     * @param bool $open_now Only open for business POI (optional)
     * @param int $minimum_rating Minimum rating (optional)
     * @param int $maximum_rating Maximum rating (optional)
     * @param int $minimum_price Minumum price (optional)
     * @param int $maximum_price Maximum price (optional)
     * @param int $limit Pagination limit (optional)
     * @param int $offset Pagination offset (optional)
     * @param string $accept_language Preferred languages for response localization.\n\nSee [Accept-Language header specification for HTTP\n1.1](http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4) (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return Systran\Client\PoiResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function geographicPoiListGet($latitude=null, $longitude=null, $radius=null, $maximum_latitude=null, $maximum_longitude=null, $minimum_latitude=null, $minimum_longitude=null, $filter=null, $name=null, $main_type=null, $type=null, $address=null, $country=null, $state=null, $county=null, $city=null, $district=null, $postal_code=null, $street=null, $house=null, $rank_by=null, $open_now=null, $minimum_rating=null, $maximum_rating=null, $minimum_price=null, $maximum_price=null, $limit=null, $offset=null, $accept_language=null, $callback=null)
    {
        
  
        // parse inputs
        $resourcePath = "/geographic/poi";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($latitude !== null) {
            $queryParams['latitude'] = $this->apiClient->getSerializer()->toQueryValue($latitude);
        }// query params
        if ($longitude !== null) {
            $queryParams['longitude'] = $this->apiClient->getSerializer()->toQueryValue($longitude);
        }// query params
        if ($radius !== null) {
            $queryParams['radius'] = $this->apiClient->getSerializer()->toQueryValue($radius);
        }// query params
        if ($maximum_latitude !== null) {
            $queryParams['maximumLatitude'] = $this->apiClient->getSerializer()->toQueryValue($maximum_latitude);
        }// query params
        if ($maximum_longitude !== null) {
            $queryParams['maximumLongitude'] = $this->apiClient->getSerializer()->toQueryValue($maximum_longitude);
        }// query params
        if ($minimum_latitude !== null) {
            $queryParams['minimumLatitude'] = $this->apiClient->getSerializer()->toQueryValue($minimum_latitude);
        }// query params
        if ($minimum_longitude !== null) {
            $queryParams['minimumLongitude'] = $this->apiClient->getSerializer()->toQueryValue($minimum_longitude);
        }// query params
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }// query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }// query params
        if ($main_type !== null) {
            $queryParams['mainType'] = $this->apiClient->getSerializer()->toQueryValue($main_type);
        }// query params
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }// query params
        if ($address !== null) {
            $queryParams['address'] = $this->apiClient->getSerializer()->toQueryValue($address);
        }// query params
        if ($country !== null) {
            $queryParams['country'] = $this->apiClient->getSerializer()->toQueryValue($country);
        }// query params
        if ($state !== null) {
            $queryParams['state'] = $this->apiClient->getSerializer()->toQueryValue($state);
        }// query params
        if ($county !== null) {
            $queryParams['county'] = $this->apiClient->getSerializer()->toQueryValue($county);
        }// query params
        if ($city !== null) {
            $queryParams['city'] = $this->apiClient->getSerializer()->toQueryValue($city);
        }// query params
        if ($district !== null) {
            $queryParams['district'] = $this->apiClient->getSerializer()->toQueryValue($district);
        }// query params
        if ($postal_code !== null) {
            $queryParams['postalCode'] = $this->apiClient->getSerializer()->toQueryValue($postal_code);
        }// query params
        if ($street !== null) {
            $queryParams['street'] = $this->apiClient->getSerializer()->toQueryValue($street);
        }// query params
        if ($house !== null) {
            $queryParams['house'] = $this->apiClient->getSerializer()->toQueryValue($house);
        }// query params
        if ($rank_by !== null) {
            $queryParams['rankBy'] = $this->apiClient->getSerializer()->toQueryValue($rank_by);
        }// query params
        if ($open_now !== null) {
            $queryParams['openNow'] = $this->apiClient->getSerializer()->toQueryValue($open_now);
        }// query params
        if ($minimum_rating !== null) {
            $queryParams['minimumRating'] = $this->apiClient->getSerializer()->toQueryValue($minimum_rating);
        }// query params
        if ($maximum_rating !== null) {
            $queryParams['maximumRating'] = $this->apiClient->getSerializer()->toQueryValue($maximum_rating);
        }// query params
        if ($minimum_price !== null) {
            $queryParams['minimumPrice'] = $this->apiClient->getSerializer()->toQueryValue($minimum_price);
        }// query params
        if ($maximum_price !== null) {
            $queryParams['maximumPrice'] = $this->apiClient->getSerializer()->toQueryValue($maximum_price);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }// query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = $this->apiClient->getSerializer()->toHeaderValue($accept_language);
        }
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, 'Systran\Client\PoiResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, 'Systran\Client\PoiResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'Systran\Client\PoiResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * geographicPoiTypesGet
     *
     * Get available Point of interest types
     *
     * @param string $accept_language Preferred languages for response localization.\n\nSee [Accept-Language header specification for HTTP\n1.1](http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4) (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return Systran\Client\PoiTypesResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function geographicPoiTypesGet($accept_language=null, $callback=null)
    {
        
  
        // parse inputs
        $resourcePath = "/geographic/poi/types";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = $this->apiClient->getSerializer()->toHeaderValue($accept_language);
        }
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, 'Systran\Client\PoiTypesResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, 'Systran\Client\PoiTypesResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'Systran\Client\PoiTypesResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * geographicSupportedLanguagesGet
     *
     * Supported Languages
     *
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return Systran\Client\SupportedLanguagesResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function geographicSupportedLanguagesGet($callback=null)
    {
        
  
        // parse inputs
        $resourcePath = "/geographic/poi/supportedLanguages";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($callback !== null) {
            $queryParams['callback'] = $this->apiClient->getSerializer()->toQueryValue($callback);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (isset($apiKey)) {
            $headerParams['Authorization'] = $apiKey;
        }
        
        
        
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (isset($apiKey)) {
            $queryParams['key'] = $apiKey;
        }
        
        
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, 'Systran\Client\SupportedLanguagesResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, 'Systran\Client\SupportedLanguagesResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'Systran\Client\SupportedLanguagesResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
}
