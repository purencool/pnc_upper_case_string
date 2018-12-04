<?php

namespace Drupal\pnc_upper_case_string\Plugin\DataType;

use Drupal\Core\TypedData\Plugin\DataType\Map;

/**
 * Provides the pnc_upper_case_string Typed Data type.
 *
 * Turns string upper case
 *
 * @DataType(
 *   id = "pnc_upper_case_string",
 *   label = @Translation("Pnc Upper Case String"),
 *   description = @Translation("A Complex Data object containing uppper case formats"),
 *   definition_class = "\Drupal\pnc_upper_case_string\TypedData\Definition\PncDefinition"
 * )
 */
class PncUpperCaseString extends Map implements PncUpperCaseStringInterface {


  /**
   * @var string
   */
  private $string;


  /**
   * {@inheritdoc}
   */
  public function setUpperCaseString($string){
    $this->string = strtoupper($string);
  }


  /**
   * {@inheritdoc}
   */
  public function getUpperCaseString(){
    return $this->string;
  }

}
