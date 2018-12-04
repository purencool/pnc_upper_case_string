<?php

namespace Drupal\Tests\pnc_upper_case_string\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\pnc_upper_case_string\Plugin\Validation\Constraint\PncUpperCaseStringConstraintValidator;






/**
 * Simple test to ensure that asserts pass.
 *
 * @group phpunit_example
 */
class PncUpperCaseStringConstraintTest extends UnitTestCase {


  /**
   * @var  $unit
   */
  protected $unit;


  /**
   * Before a test method is run, setUp() is invoked.
   * Create new unit object.
   */
  public function setUp() {
    $this->unit = new PncUpperCaseStringConstraintValidator();
  }




  /**
   * Once test method has finished running, whether it succeeded or failed,
   * tearDown() will be invoked. Unset the $unit object.
   */
  public function tearDown() {
    unset($this->unit);
  }

}
