<?php

namespace Drupal\ctools\Plugin\Condition;

use Drupal\node\Plugin\Condition\NodeType as CoreNodeType;
use Drupal\ctools\ConstraintConditionInterface;

/**
 * Entity Bundle Constraints
 *
 * Adds constraints to the core NodeType condition.
 *
 * @deprecated in ctools:8.x-1.10. Will be removed before ctools:4.1.0.
 *   Use \Drupal\ctools\Plugin\Condition\EntityBundle instead.
 *
 * @see https://www.drupal.org/node/2983299
 */
//@phpstan-ignore-next-line
class NodeType extends CoreNodeType implements ConstraintConditionInterface {

  /**
   * {@inheritdoc}
   *
   * @param \Drupal\Core\Plugin\Context\ContextInterface[] $contexts
   */
  public function applyConstraints(array $contexts = []) {
    // Nullify any bundle constraints on contexts we care about.
    $this->removeConstraints($contexts);
    // If a single bundle is configured, we can set a proper constraint.
    if (count($this->configuration['bundles']) == 1) {
      $bundle = array_values($this->configuration['bundles']);
      foreach ($this->getContextMapping() as $definition_id => $context_id) {
        $contexts[$context_id]->getContextDefinition()->addConstraint('Bundle', ['value' => $bundle[0]]);
      }
    }
  }

  /**
   * {@inheritdoc}
   *
   * @param \Drupal\Core\Plugin\Context\ContextInterface[] $contexts
   */
  public function removeConstraints(array $contexts = []) {
    // Reset the bundle constraint for any context we've mapped.
    foreach ($this->getContextMapping() as $definition_id => $context_id) {
      $constraints = $contexts[$context_id]->getContextDefinition()->getConstraints();
      unset($constraints['Bundle']);
      $contexts[$context_id]->getContextDefinition()->setConstraints($constraints);
    }
  }

}
