<?php
/**
 * @file
 * Contains \Drupal\vertical_tabs_example\Tests\VerticalTabsExampleTest.
 *
 * This file contains test cases to check that vertical_tabs_example is
 * performing as expected.
 */

namespace Drupal\vertical_tabs_example\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Functional tests for the Vertical Tabs Example module.
 *
 * @ingroup vertical_tabs_examples
 * @group vertical_tabs_examples
 * @group examples
 */

class VerticalTabsExampleTest extends WebTestBase {
  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('node' , 'vertical_tabs_example');

  /**
   * Tests the menu paths defined in vertical_tabs_example module.
   */
  public function testVerticalTabsExampleMenus() {
    $paths = array(
      'examples/vertical_tabs',
    );
    foreach ($paths as $path) {
      $this->drupalGet($path);
      $this->assertResponse(200, '200 response for path: ' . $path);
    }
  }
}