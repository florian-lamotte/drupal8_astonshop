<?php

namespace Drupal\as_produit\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\as_produit\Controller
 */
class DefaultController extends ControllerBase {

  /**
   * Listingpage.
   *
   * @return string
   *   Return Hello string.
   */
  public function ListingPage() {
    return [
      '#theme' => 'produit_list',
      'produits' => ['produit1', 'produit2', 'produit3'],
    ];
  }

/*
  public function ListingPage() {
    return [
      '#type' => 'container',
      '#attributes' => [
        'class' => ['col-md-6', 'well'],
        'id' => 'myFirstDiv',
        'data-role' => 'produit',
      ],
      'text' => [
        '#type' => 'markup',
        '#markup' => 'coucou',
      ],
    ];
  }
*/
}
