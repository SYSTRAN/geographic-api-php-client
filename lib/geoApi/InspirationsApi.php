<?php
/**
 * InspirationsApi
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
 * InspirationsApi Class Doc Comment
 *
 * @category Class
 * @package  Systran\Client
 *
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 *
 */
class InspirationsApi
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
     * @return InspirationsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * geographicInspirationsDossiersListGet
     *
     * List dossiers
     *
     * @param double $latitude Latitude location (optional)
     * @param double $longitude Longitude location (optional)
     * @param double $radius Radius in meters (optional)
     * @param string $address Address (optional)
     * @param string $country Country (optional)
     * @param string $state State (optional)
     * @param string $county County (optional)
     * @param string $city City (optional)
     * @param string $district District (optional)
     * @param string $postal_code Postal Code (optional)
     * @param int $limit Pagination limit (optional)
     * @param int $offset Pagination offset (optional)
     * @param string $accept_language Preferred languages for response localization.\n\nSee [Accept-Language header specification for HTTP\n1.1](http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4) (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return Systran\Client\InspirationResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function geographicInspirationsDossiersListGet($latitude=null, $longitude=null, $radius=null, $address=null, $country=null, $state=null, $county=null, $city=null, $district=null, $postal_code=null, $limit=null, $offset=null, $accept_language=null, $callback=null)
    {
        
  
        // parse inputs
        $resourcePath = "/geographic/inspirations/dossiers/list";
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
                $headerParams, 'Systran\Client\InspirationResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, 'Systran\Client\InspirationResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'Systran\Client\InspirationResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * geographicInspirationsEventsListGet
     *
     * List events
     *
     * @param double $latitude Latitude location (optional)
     * @param double $longitude Longitude location (optional)
     * @param double $radius Radius in meters (optional)
     * @param string $address Address (optional)
     * @param string $country Country (optional)
     * @param string $state State (optional)
     * @param string $county County (optional)
     * @param string $city City (optional)
     * @param string $district District (optional)
     * @param string $postal_code Postal Code (optional)
     * @param int $limit Pagination limit (optional)
     * @param int $offset Pagination offset (optional)
     * @param string $accept_language Preferred languages for response localization.\n\nSee [Accept-Language header specification for HTTP\n1.1](http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4) (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return Systran\Client\InspirationResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function geographicInspirationsEventsListGet($latitude=null, $longitude=null, $radius=null, $address=null, $country=null, $state=null, $county=null, $city=null, $district=null, $postal_code=null, $limit=null, $offset=null, $accept_language=null, $callback=null)
    {
        
  
        // parse inputs
        $resourcePath = "/geographic/inspirations/events/list";
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
                $headerParams, 'Systran\Client\InspirationResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, 'Systran\Client\InspirationResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'Systran\Client\InspirationResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * geographicInspirationsGetGet
     *
     * Get a specific Inspiration
     *
     * @param string $id Inspiration identifier (required)
     * @param string $accept_language Preferred languages for response localization.\n\nSee [Accept-Language header specification for HTTP\n1.1](http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4) (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return Systran\Client\InspirationDetailsResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function geographicInspirationsGetGet($id, $accept_language=null, $callback=null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling geographicInspirationsGetGet');
        }
  
        // parse inputs
        $resourcePath = "/geographic/inspirations";
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
                $headerParams, 'Systran\Client\InspirationDetailsResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, 'Systran\Client\InspirationDetailsResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'Systran\Client\InspirationDetailsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * geographicInspirationsListGet
     *
     * List Inspirations
     *
     * @param double $latitude Latitude location (optional)
     * @param double $longitude Longitude location (optional)
     * @param double $radius Radius in meters (optional)
     * @param string $address Address (optional)
     * @param string $country Country (optional)
     * @param string $state State (optional)
     * @param string $county County (optional)
     * @param string $city City (optional)
     * @param string $district District (optional)
     * @param string $postal_code Postal Code (optional)
     * @param int $limit Pagination limit (optional)
     * @param int $offset Pagination offset (optional)
     * @param string $accept_language Preferred languages for response localization.\n\nSee [Accept-Language header specification for HTTP\n1.1](http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4) (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return Systran\Client\InspirationResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function geographicInspirationsListGet($latitude=null, $longitude=null, $radius=null, $address=null, $country=null, $state=null, $county=null, $city=null, $district=null, $postal_code=null, $limit=null, $offset=null, $accept_language=null, $callback=null)
    {
        
  
        // parse inputs
        $resourcePath = "/geographic/inspirations/list";
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
                $headerParams, 'Systran\Client\InspirationResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, 'Systran\Client\InspirationResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'Systran\Client\InspirationResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * geographicInspirationsNewsInBriefListGet
     *
     * List news in brief
     *
     * @param double $latitude Latitude location (optional)
     * @param double $longitude Longitude location (optional)
     * @param double $radius Radius in meters (optional)
     * @param string $address Address (optional)
     * @param string $country Country (optional)
     * @param string $state State (optional)
     * @param string $county County (optional)
     * @param string $city City (optional)
     * @param string $district District (optional)
     * @param string $postal_code Postal Code (optional)
     * @param int $limit Pagination limit (optional)
     * @param int $offset Pagination offset (optional)
     * @param string $accept_language Preferred languages for response localization.\n\nSee [Accept-Language header specification for HTTP\n1.1](http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4) (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return Systran\Client\InspirationResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function geographicInspirationsNewsInBriefListGet($latitude=null, $longitude=null, $radius=null, $address=null, $country=null, $state=null, $county=null, $city=null, $district=null, $postal_code=null, $limit=null, $offset=null, $accept_language=null, $callback=null)
    {
        
  
        // parse inputs
        $resourcePath = "/geographic/inspirations/newsInBrief/list";
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
                $headerParams, 'Systran\Client\InspirationResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, 'Systran\Client\InspirationResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'Systran\Client\InspirationResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * geographicInspirationsSlideShowsListGet
     *
     * List slide shows
     *
     * @param double $latitude Latitude location (optional)
     * @param double $longitude Longitude location (optional)
     * @param double $radius Radius in meters (optional)
     * @param string $address Address (optional)
     * @param string $country Country (optional)
     * @param string $state State (optional)
     * @param string $county County (optional)
     * @param string $city City (optional)
     * @param string $district District (optional)
     * @param string $postal_code Postal Code (optional)
     * @param int $limit Pagination limit (optional)
     * @param int $offset Pagination offset (optional)
     * @param string $accept_language Preferred languages for response localization.\n\nSee [Accept-Language header specification for HTTP\n1.1](http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4) (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return Systran\Client\InspirationResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function geographicInspirationsSlideShowsListGet($latitude=null, $longitude=null, $radius=null, $address=null, $country=null, $state=null, $county=null, $city=null, $district=null, $postal_code=null, $limit=null, $offset=null, $accept_language=null, $callback=null)
    {
        
  
        // parse inputs
        $resourcePath = "/geographic/inspirations/slideShows/list";
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
                $headerParams, 'Systran\Client\InspirationResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, 'Systran\Client\InspirationResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'Systran\Client\InspirationResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * geographicInspirationsTestsListGet
     *
     * List tests
     *
     * @param double $latitude Latitude location (optional)
     * @param double $longitude Longitude location (optional)
     * @param double $radius Radius in meters (optional)
     * @param string $address Address (optional)
     * @param string $country Country (optional)
     * @param string $state State (optional)
     * @param string $county County (optional)
     * @param string $city City (optional)
     * @param string $district District (optional)
     * @param string $postal_code Postal Code (optional)
     * @param int $limit Pagination limit (optional)
     * @param int $offset Pagination offset (optional)
     * @param string $accept_language Preferred languages for response localization.\n\nSee [Accept-Language header specification for HTTP\n1.1](http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.4) (optional)
     * @param string $callback Javascript callback function name for JSONP Support (optional)
     * @return Systran\Client\InspirationResponse
     * @throws \Systran\Client\ApiException on non-2xx response
     */
    public function geographicInspirationsTestsListGet($latitude=null, $longitude=null, $radius=null, $address=null, $country=null, $state=null, $county=null, $city=null, $district=null, $postal_code=null, $limit=null, $offset=null, $accept_language=null, $callback=null)
    {
        
  
        // parse inputs
        $resourcePath = "/geographic/inspirations/tests/list";
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
                $headerParams, 'Systran\Client\InspirationResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, 'Systran\Client\InspirationResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'Systran\Client\InspirationResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
}
