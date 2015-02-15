<?php

/**
 * @file
 * Contains \Drupal\vertical_tabs_example\Controller\VerticalTabsExampleController.
 */

namespace Drupal\vertical_tabs_example\Controller;

use Drupal\Core\Url;

/**
 * Class VerticalTabsExampleController
 * @package Drupal\vertical_tabs_example\Controller
 */

class VerticalTabsExampleController {
  /**
   * A simple controller method to explain what the Vertical tabs example is about.
   */
  public function description() {
    $url = Url::fromRoute('node.add_page');
    $content_add = \Drupal::l(t('content_add'), $url);
    $build = array(
        '#markup' => t('The Vertical Tabs Example shows how a
        custom module can add a vertical tab to a node edit form,
        and support its summary field with JavaScript. To see the
        effects of this module, !content_add and look at the set
        of tabs at the bottom. We\'ve added one called \'Example vertical tab.\'',
            array('!content_add' => $content_add,)
        ),
    );
    return $build;
  }
}
