<?php

namespace Drupal\pnc_upper_case_string\Plugin\Validation\Constraint;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\pnc_upper_case_string\Service\PncUpperCaseStringServiceInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Validates the hexadecimal_color constraint.
 */
class PncUpperCaseStringConstraintValidator extends ConstraintValidator implements ContainerInjectionInterface {

  /**
   * The Color API service.
   *
   * @var \Drupal\pnc_upper_case_string\Service\PncUpperCaseStringService
   */
  protected $pncUpperCaseStringService;

  /**
   *
   * @param \Drupal\pnc_upper_case_string\Service\PncUpperCaseStringService $colorapiService
   *   THe Color API service.
   */
  public function __construct(PncUpperCaseStringServiceInterface $pncUpperCaseStringService) {
    $this->pncUpperCaseStringService = $pncUpperCaseStringService;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('pnc_upper_case_string.service')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function validate($items, Constraint $constraint) {
    if (is_array($items)) {
      foreach ($items as $item) {
        if (!$this->isCharacterString($item)) {
          $this->context->addViolation($constraint->notValidString , ['%value' => (string) $item]);
        }
      }
    }
    elseif (!$this->isCharacterString(($items)) {
      $this->context->addViolation($constraint->notValidString , ['%value' => (string) $items]);
    }
  }

  /**
   * Check if a string is a valid hexadecimal color string.
   *
   * @param mixed $value
   *   The item to check as a hexadecimal color string.
   *
   * @return bool
   *   TRUE if the given value is a valid hexadecimal color string. FALSE if it
   *   is not.
   */
  private function isCharacterString($value) {
    return  $this->pncUpperCaseStringService->isValidHexadecimalColorString($value);
  }

}
