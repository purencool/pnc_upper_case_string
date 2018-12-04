<?php

namespace Drupal\pnc_upper_case_string\Plugin\Validation\Constraint;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\pnc_upper_case_string\Service\PncUpperCaseStringServiceInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\DependencyInjection\ContainerInterface;


/**
 * Class PncUpperCaseStringConstraintValidator
 *
 * @package Drupal\pnc_upper_case_string\Plugin\Validation\Constraint
 */
class PncUpperCaseStringConstraintValidator extends ConstraintValidator implements ContainerInjectionInterface {


  /**
   * @var \Drupal\pnc_upper_case_string\Service\PncUpperCaseStringServiceInterface
   */
  protected $pncUpperCaseStringService;


  /**
   * PncUpperCaseStringConstraintValidator constructor.
   *
   * @param \Drupal\pnc_upper_case_string\Service\PncUpperCaseStringServiceInterface $pncUpperCaseStringService
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
    elseif (!$this->isCharacterString($items)) {
      $this->context->addViolation($constraint->notValidString , ['%value' => (string) $items]);
    }
  }


  /**
   * Check if a string is a valid string.
   *
   * @param string $value
   *   String that is being evaluated.
   *
   * @return bool
   *   Test to see if string has illegal characters
   */
  private function isCharacterString($value) {
    return  $this->pncUpperCaseStringService->isValidHexadecimalColorString($value);
  }

}
