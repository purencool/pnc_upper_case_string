<?php

namespace Drupal\pnc_upper_case_string\Service;

/**
 * Interface PncUpperCaseStringServiceInterface
 *
 * @package Drupal\pnc_upper_case_string\Service
 */
interface PncUpperCaseStringServiceInterface {


  /**
   *
   * @param string $string
   */
  public function getPncUpperCaseString($string);

}
