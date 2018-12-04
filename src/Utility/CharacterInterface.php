<?php

namespace Drupal\pnc_upper_case_string\Utility;

use Drupal\Core\TypedData\Type\StringInterface;

/**
 * Interface CharacterInterface
 *
 * @package Drupal\pnc_upper_case_string\Utility
 */
interface CharacterInterface extends StringInterface {

  /**
   * Regex used to validate if there is any other than
   * A-Z a-z in the string that is being tested.
   *
   * @var string
   */
  const PNC_UPPER_CASE_STRING_REGEX = '/[a-zA-Z ]/';

}
