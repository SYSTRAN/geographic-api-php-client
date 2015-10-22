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

require_once(__DIR__ . '/../vendor/autoload.php');

class GeographicApisTest extends \PHPUnit_Framework_TestCase
{
    var $config;
    var $api_client;

    public function setUp()
    {
        $this->config = new Systran\Client\Configuration();
        $api_key = new SplFileObject(__DIR__ . '/../apiKey.txt');
        $this->config->setApiKey("key",$api_key->fgets());
        $this->config->setHost("https://platform.systran.net:8904");
        $this->api_client = new Systran\Client\ApiClient($this->config);

    }

    public function testGeographicSupportedLanguagesGet()
    {
        $poi_api = new Systran\Client\PoiApi($this->api_client);
        $this->assertNotNull($poi_api->geographicSupportedLanguagesGet()->getLanguages());
    }

    public function testGeographicPoiEventsListGet()
    {
        $poi_api = new Systran\Client\PoiApi($this->api_client);
        $this->assertNotNull($poi_api->geographicPoiEventsListGet()->getTotal());
    }

    public function testGeographicPoiGetGet()
    {
        $poi_api = new Systran\Client\PoiApi($this->api_client);
        $this->assertNotNull($poi_api->geographicPoiGetGet($poi_api->geographicPoiListGet()->getPointsOfInterest()[0]->getId()));
    }

    public function testGeographicPoiListGet()
    {
        $poi_api = new Systran\Client\PoiApi($this->api_client);
        $this->assertNotNull($poi_api->geographicPoiListGet()->getTotal());
    }

    public function testGeographicPoiTypesGet()
    {
        $poi_api = new Systran\Client\PoiApi($this->api_client);
        $this->assertNotNull($poi_api->geographicPoiTypesGet()->getPoiTypes());
    }

    public function testGeographicInspirationsGetGet()
    {
        $inspirations_api = new Systran\Client\InspirationsApi($this->api_client);
        $this->assertNotNull($inspirations_api->geographicInspirationsGetGet(""));

    }
}
