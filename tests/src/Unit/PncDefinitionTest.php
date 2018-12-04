<?php

namespace Drupal\Tests\pnc_upper_case_string\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\pnc_upper_case_string\TypedData\Definition\PncDefinition;
  /**
 * Simple test to ensure that asserts pass.
 *
 * @group phpunit_example
 */
class PncDefinitionTest extends UnitTestCase {

  protected $unit;

  /**
   * Before a test method is run, setUp() is invoked.
   * Create new unit object.
   */
  public function setUp() {
    $this->unit = new PncDefinition();
  }

  /**
   * @covers Drupal\phpunit_example\Unit::setLength
   */
  public function testUpperCaseString() {

    $this->assertEquals(0, $this->unit->getPncUpperCaseString());
  }

  /**
   * Once test method has finished running, whether it succeeded or failed, tearDown() will be invoked.
   * Unset the $unit object.
   */
  public function tearDown() {
    unset($this->unit);
  }

}
