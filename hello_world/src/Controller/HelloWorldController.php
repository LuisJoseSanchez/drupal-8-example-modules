<?php
namespace Drupal\hello_world\Controller;

class HelloWorldController {

  public function sayHello() {
    $content = [
      '#markup' => '<p><b>Hello World!</b>. This is my first Drupal 8 module.</p>',
    ];
    return $content;
  }
}
