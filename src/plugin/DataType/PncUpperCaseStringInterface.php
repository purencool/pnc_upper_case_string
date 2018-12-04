<?php

namespace Drupal\colorapi\Plugin\DataType;

use Drupal\Core\TypedData\ComplexDataInterface;

/**
 * Interface for the Typed formatted data type.
 */
interface PncUpperCaseStringInterface extends ComplexDataInterface {

  /**
   *
   * @param string $string
   *   The hexadecimal string value representing the color.
   */
  public function setUpperCaseString($string);

  /**
   * Retrieve formatted string.
   *
   * @return string
   *   The string that has been formatted.
   */
  public function getUpperCaseString();

}
