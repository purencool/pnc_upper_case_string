<?php

namespace Drupal\pnc_upper_case_string\TypedData\Definition;

use Drupal\Core\TypedData\MapDataDefinition;


/**
 * Class PncDefinition
 *
 * @package Drupal\pnc_upper_case_string\TypedData\Definition
 */
class PncDefinition extends MapDataDefinition implements PncDefinitionInterface {


  /**
   * {@inheritdoc}
   */
  public function getPncUpperCaseString() {
    return 0; //$this->get('')->get('pnc_upper_case_string')->getValue();
  }


}
