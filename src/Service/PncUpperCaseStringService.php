<?php

namespace Drupal\pnc_upper_case_string\Service;

use Drupal\pnc_upper_case_string\Utility\CharacterInterface;

/**
 * Class PncUpperCaseStringService
 *
 * @package Drupal\pnc_upper_case_string\Service
 */
class PncUpperCaseStringService implements PncUpperCaseStringServiceInterface {


  /**
   * {@inheritdoc}
   */
  public function isValidCharacterString($string) {
    return preg_match(CharacterInterface::PNC_UPPER_CASE_STRING_REGEX, $string);
  }


  /**
   * {@inheritdoc}
   */
  public function getPncUpperCaseString($string) {
    return $string;
  }

}
