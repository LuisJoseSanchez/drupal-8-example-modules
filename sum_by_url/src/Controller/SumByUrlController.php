<?php

/**
 * @file
 * Contains \Drupal\sum_by_url\Controller\SumByUrlController.
 */

namespace Drupal\sum_by_url\Controller;

class SumByUrlController {

  public function simple() {
    
    $content = [
      '#markup' => '<h2>Sum two numbers</h2>
                    For example sum/25/47',
    ];
    return $content;
  }

  public function arguments($x, $y) {

    $content = [
      '#markup' => '<h1>'. $x . ' + ' . $y . ' = ' . ($x + $y) . '</h1>',
    ];
    return $content;
  }
}
