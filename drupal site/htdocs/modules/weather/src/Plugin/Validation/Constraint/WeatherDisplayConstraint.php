<?php

namespace Drupal\weather\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Checks that created Weather Display is valid.
 *
 * @Constraint(
 *   id = "WeatherDisplay",
 *   label = @Translation("Weather display unique", context = "Validation"),
 *   type = "string"
 * )
 */
class WeatherDisplayConstraint extends Constraint {

  public $notUniqueDefaultDisplay = '%value default display already exists.';

  public $notUniqueUserDisplay = '%value display for this use already exists.';

}
