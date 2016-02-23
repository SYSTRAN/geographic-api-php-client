<?php
require_once(__DIR__ . '/../autoload.php');
foreach (glob("/../lib/geoApi/*.php") as $filename)
{
    include $filename;
}
foreach (glob("/../lib/Model/*.php") as $filename)
{
    include $filename;
}
require_once(__DIR__ . '/../lib/geoApi/PoiApi.php');
require_once(__DIR__ . '/../lib/geoApi/InspirationsApi.php');
require_once(__DIR__ . '/../lib/geoApi/DestinationsApi.php');
require_once(__DIR__ . '/../lib/geoApi/APIVersionApi.php');
require_once(__DIR__ . '/../lib/geoApi/SupportedLanguagesApi.php');

require_once(__DIR__ . '/../vendor/autoload.php');

class GeographicApisTest extends \PHPUnit_Framework_TestCase
{
    var $config;
    var $api_client;

    public function setUp()
    {
        $this->config = new Systran\Client\Configuration();      if (!file_exists(__DIR__ . '/../apiKey.txt'))
        throw new Exception('﻿"To properly run the tests, please add an apiKey.txt file containing your api key at the library root folder or edit the test file with your key"');
        $api_key = new SplFileObject(__DIR__ . '/../apiKey.txt');
        $this->config->setApiKey("key", $api_key->fgets());
        $this->config->setHost("https://platform.systran.net:8904");
        if(!$this->config->getApiKey("key"))
            throw new Exception("No api key found, please check your apiKey.txt file");
        $this->api_client = new Systran\Client\ApiClient($this->config);

    }

    public function testGeographicApiTest()
    {
        $version_api = new Systran\Client\APIVersionApi($this->api_client);
        $this->assertNotNull($version_api->geographicApiVersionGet()->getVersion());
    }


    public function testGeographicSupportedLanguagesGet()
    {
        $language_api = new Systran\Client\SupportedLanguagesApi($this->api_client);
        $this->assertNotNull($language_api->geographicSupportedLanguagesGet(null)->getLanguages());
    }

    public function testGeographicDestinationListGet()
    {
        $destinations_api = new Systran\Client\DestinationsApi($this->api_client);
        $this->assertNotNull($destinations_api->geographicDestinationsListGet()->getTotal());
    }

    public function testGeographicDestinationGetGet()
    {
        $destinations_api = new Systran\Client\DestinationsApi($this->api_client);
        $id = $destinations_api->geographicDestinationsListGet()->getDestinations()[0]->getId();
        $this->assertNotNull($destinations_api->geographicDestinationsGetGet($id)->getResult());
    }

    public function testGeographicInspirationsListGet()
    {
        $inspirations_api = new Systran\Client\InspirationsApi($this->api_client);
        $this->assertNotNull($inspirations_api->geographicInspirationsListGet()->getTotal());
    }

    public function testGeographicInspirationsGetGet()
    {
        $inspirations_api = new Systran\Client\InspirationsApi($this->api_client);
        $id = $inspirations_api->geographicInspirationsListGet()->getInspirations()[0]->getId();
        $this->assertNotNull($inspirations_api->geographicInspirationsGetGet($id)->getResult());
    }

    public function testGeographicInspirationsEventsListGet()
    {
        $inspirations_api = new Systran\Client\InspirationsApi($this->api_client);
        $this->assertNotNull($inspirations_api->geographicInspirationsEventsListGet()->getTotal());
    }

    public function testGeographicInspirationsDossiersListGet()
    {
        $inspirations_api = new Systran\Client\InspirationsApi($this->api_client);
        $this->assertNotNull($inspirations_api->geographicInspirationsDossiersListGet()->getTotal());
    }

    public function testGeographicInspirationsNewsInBriefListGet()
    {
        $inspirations_api = new Systran\Client\InspirationsApi($this->api_client);
        $this->assertNotNull($inspirations_api->geographicInspirationsNewsInBriefListGet()->getTotal());
    }

    public function testGeographicInspirationsSlideShowsListGet()
    {
        $inspirations_api = new Systran\Client\InspirationsApi($this->api_client);
        $this->assertNotNull($inspirations_api->geographicInspirationsSlideShowsListGet()->getTotal());
    }

    public function testGeographicInspirationsTestsListGet()
    {
        $inspirations_api = new Systran\Client\InspirationsApi($this->api_client);
        $this->assertNotNull($inspirations_api->geographicInspirationsTestsListGet()->getTotal());
    }

    public function testGeographicPoiListGet()
    {
        $poi_api = new Systran\Client\PoiApi($this->api_client);
        $this->assertNotNull($poi_api->geographicPoiListGet()->getTotal());
    }

    public function testGeographicPoiGetGet()
    {
        $poi_api = new Systran\Client\PoiApi($this->api_client);
        $id = $poi_api->geographicPoiListGet()->getPointsOfInterest()[0]->getId();
        $this->assertNotNull($poi_api->geographicPoiGetGet($id)->getResult());
    }

    public function testGeographicPoiTypesGet()
    {
        $poi_api = new Systran\Client\PoiApi($this->api_client);
        $this->assertNotNull($poi_api->geographicPoiTypesGet()->getPoiTypes());
    }
}
