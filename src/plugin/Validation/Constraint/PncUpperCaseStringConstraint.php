<?php

namespace Drupal\pnc_upper_case_string\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Ensures that values are all characters if so this error will be thrown.
 *
 * @Constraint(
 *   id = "Pnc Upper Case String",
 *   label = @Translation("Pnc Upper Case String", context = "Validation"),
 *   type = "pnc_upper_case_string"
 * )
 */
class PncUpperCaseStringConstraint extends Constraint {

  /**
   * The message shown when the value is a string with a-z characters .
   *
   * @var string
   */
  public $notValidString = '%value is not a valid it must only have characters (a-z).';

}
