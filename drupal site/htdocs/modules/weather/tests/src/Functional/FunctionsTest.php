<?php

namespace Drupal\Tests\weather\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests functions of weather.module.
 *
 * @group Weather
 */
class FunctionsTest extends BrowserTestBase {

  use WeatherCommonTestTrait;

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = ['weather'];

  /**
   * The tests don't need markup, so use 'stark' as theme.
   *
   * @var string
   */
  protected $defaultTheme = 'stark';

  /**
   * Test _weather_get_link_for_geoid().
   *
   * @throws \ReflectionException
   */
  public function testFunctionWeatherGetLinkForGeoId() {
    // Fill database tables with test data.
    $this->weatherFillWeatherSchema();
    // Test different numbers for system-wide displays.
    $link = $this->weatherGetInformationAboutGeoid('geonames_2911298')['link'];
    $this->assertEqual($link, 'Hamburg/Hamburg');
    // Test different numbers for yr.no links.
    $link = $this->weatherGetLinkForGeoId('geonames_2911298', 'yr.no');
    $this->assertEqual($link, 'http://www.yr.no/place/Germany/Hamburg/Hamburg/');
    $link = $this->weatherGetLinkForGeoId('geonames_2911298', 'system-wide');
    $this->assertEqual($link, 'weather/Germany/Hamburg/Hamburg/1');
    $link = $this->weatherGetLinkForGeoId('geonames_2911298', 'default');
    $this->assertEqual($link, 'weather/Germany/Hamburg/Hamburg');
    $link = $this->weatherGetLinkForGeoId('geonames_2911298', 'user');
    $this->assertEqual($link, 'weather/Germany/Hamburg/Hamburg/u');
    $link = $this->weatherGetLinkForGeoId('geonames_2911298', 'yr');
    $this->assertEqual($link, 'http://www.yr.no/place/Germany/Hamburg/Hamburg/forecast.xml');
  }

}
