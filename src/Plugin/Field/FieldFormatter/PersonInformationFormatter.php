<?php

namespace Drupal\os2web_person_information\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\Plugin\Field\FieldFormatter\EntityReferenceFormatterBase;
use Drupal\views\Views;

/**
 * Plugin implementation of the 'os2web_person_information' formatter.
 *
 * @FieldFormatter(
 *   id = "os2web_person_information_view",
 *   label = @Translation("Person informaion view"),
 *   description = @Translation("Display the view with PersonInformationFormatter entities."),
 *   field_types = {
 *     "entity_reference"
 *   }
 * )
 */
class PersonInformationFormatter extends EntityReferenceFormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    $view = Views::getView('os2web_pi');
    if (empty($view)) {
      return $elements;
    }

    foreach ($this->getEntitiesToView($items, $langcode) as $delta => $entity) {
      if ($entity->id()) {
        $view->setDisplay('default');
        $view->setArguments([$entity->id()]);
        $render = $view->render();
        if (empty($render)) {
          $render = [];
        }
        $elements[$delta] = array_merge_recursive($render, ['#cache' => ['tags' => $entity->getCacheTags()]]);
      }
    }

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public static function isApplicable(FieldDefinitionInterface $field_definition) {
    return $field_definition->get('field_name') == 'field_os2web_pi_paragraph_group';
  }

}
