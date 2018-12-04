<?php

namespace Drupal\pnc_upper_case_string\TypedData\Definition;

use Drupal\Core\TypedData\MapDataDefinition;


/**
 * Definition class for Typed Data API Color Complex Data types.
 */
class PncDefinition extends MapDataDefinition implements PncDefinitionInterface {


  /**
   * {@inheritdoc}
   */
  public function getPncUpperCaseString() {
    return 'This is the upper case string'; //$this->get('')->get('pnc_upper_case_string')->getValue();
  }


}
