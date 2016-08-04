<?php

namespace Drupal\as_produit\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the as_produit module.
 */
class DefaultControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "as_produit DefaultController's controller functionality",
      'description' => 'Test Unit for module as_produit and controller DefaultController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests as_produit functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module as_produit.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
