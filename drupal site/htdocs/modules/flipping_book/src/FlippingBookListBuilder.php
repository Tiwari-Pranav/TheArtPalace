<?php

namespace Drupal\flipping_book;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Flipping Book entities.
 *
 * @ingroup flipping_book
 */
class FlippingBookListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Flipping Book ID');
    $header['name'] = $this->t('Name');
    $header['type'] = $this->t('Type');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\flipping_book\Entity\FlippingBook */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute($entity->label(), 'entity.flipping_book.edit_form', ['flipping_book' => $entity->id()]);
    $row['type'] = $entity->getTypeLabel();
    return $row + parent::buildRow($entity);
  }

}
