<?php

namespace Drupal\pnc_entity_data_type_api\Plugin\DataType;

use Drupal\Core\TypedData\Plugin\DataType\Map;
use Drupal\pnc_entity_data_type_api\TypedData\Definition\PncDefinitionInterface;

/**
 * Provides the pnc_upper_case_string Typed Data type.
 *
 * Turns string upper case
 *
 * @DataType(
 *   id = "pnc_upper_case_string",
 *   label = @Translation("Pnc Upper Case String"),
 *   description = @Translation("A Complex Data object containing a color in hexadecimal and RGB formats"),
 *   definition_class = "\Drupal\pnc_upper_case_string\TypedData\Definition\PncDefinition"
 * )
 */
class PncUpperCaseString extends Map implements PncDefinitionInterface {

  /**
   * {@inheritdoc}
   */
  public function setValue($values, $notify = TRUE) {
    $this->setHexadecimal($values['hexadecimal'], $notify);
    $this->setRgb($values['rgb'], $notify);
  }

  /**
   * {@inheritdoc}
   */
  public function getValue() {
    return $this->getHexadecimal();
  }

  /**
   * {@inheritdoc}
   */
  public function setHexadecimal($color, $notify = TRUE) {
    $this->get('hexadecimal')->setValue($color, $notify);
  }

  /**
   * {@inheritdoc}
   */
  public function getHexadecimal() {
    return $this->get('hexadecimal')->getValue();
  }

  /**
   * {@inheritdoc}
   */
  public function setRgb(array $rgb, $notify = TRUE) {
    $this->get('rgb')->setValue($rgb, $notify);
  }

  /**
   * {@inheritdoc}
   */
  public function getRgb() {
    return $this->get('rgb')->getValue();
  }

  /**
   * {@inheritdoc}
   */
  public function setRed($red, $notify = TRUE) {
    $this->get('rgb')->setRed($red, $notify);
  }

  /**
   * {@inheritdoc}
   */
  public function getRed() {
    return $this->get('rgb')->getRed();
  }

  /**
   * {@inheritdoc}
   */
  public function setGreen($green, $notify = TRUE) {
    $this->get('rgb')->setGreen($green, $notify);
  }

  /**
   * {@inheritdoc}
   */
  public function getGreen() {
    return $this->get('rgb')->getGreen();
  }

  /**
   * {@inheritdoc}
   */
  public function setBlue($blue, $notify = TRUE) {
    $this->get('rgb')->setBlue($blue, $notify);
  }

  /**
   * {@inheritdoc}
   */
  public function getBlue() {
    return $this->get('rgb')->getBlue();
  }

}
