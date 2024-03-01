<?php
/**
 * @file
 *  Hello World Salutation service
 */

namespace Drupal\hello_world;

use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Prepares the salutation to the world.
 */
class HelloWorldSalutation {
  use StringTranslationTrait;

  /**
   * Returns the salutation
   */
  public function getSalutation() {

    $method = 'testMethod';
    $str = 'Be Joyful; though you have considered all the facts';
    return $this->{$method}($str);
    $time = new \DateTime();
    if ((int) $time->format('G') >= 00 && (int) $time->format('g') < 12) {
      return $this->t('Good morning world');
    }

    if ((int) $time->format('G') >= 12 && (int) $time->format('g') < 18) {
      return $this->t('Good afternoon world');
    }

    if ((int) $time->format('G') >= 18) {
      return $this->t('Good evening world');
    }
  }
  public function testMethod(string $test_string) {
    return $test_string;
  }
}
