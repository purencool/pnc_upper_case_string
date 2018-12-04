<?php

namespace Drupal\pnc_upper_case_string\Utility;

use Drupal\Core\TypedData\Type\StringInterface;

/**
 * Interface for the Typed Data String upper case Simple Data type.
 */
interface CharacterInterface extends StringInterface {

  /**
   * Regex used to validate if there is any numbers strings.
   *
   * @var string
   */
  const PNC_UPPER_CASE_STRING_REGEX = '/^([A-Za-z])$/';

}
