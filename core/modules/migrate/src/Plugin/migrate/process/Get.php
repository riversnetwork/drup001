<?php

/**
 * @file
 * Contains \Drupal\migrate\Plugin\migrate\process\Get.
 */

namespace Drupal\migrate\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;

/**
 * This plugin copies from the source to the destination.
 *
 * @MigrateProcessPlugin(
 *   id = "get"
 * )
 */
class Get extends ProcessPluginBase {

  /**
   * @var bool
   */
  protected $multiple;

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    $source = $this->configuration['source'];
    $properties = is_string($source) ? array($source) : $source;
    $return = array();
    foreach ($properties as $property) {
      if (empty($property)) {
        $return[] = $value;
      }
      else {
        $is_source = TRUE;
        if ($property[0] == '@') {
          $property = preg_replace_callback('/^(@?)((?:@@)*)([^@]|$)/', function ($matches) use (&$is_source) {
            // If there are an odd number of @ in the beginning, it's a
            // destination.
            $is_source = empty($matches[1]);
            // Remove the possible escaping and do not lose the terminating
            // non-@ either.
            return str_replace('@@', '@', $matches[2]) . $matches[3];
          }, $property);
        }
        if ($is_source) {
          $return[] = $row->getSourceProperty($property);
        }
        else {
          $return[] = $row->getDestinationProperty($property);
        }
      }
    }
    if (is_string($source)) {
      $this->multiple = is_array($return[0]);
      return $return[0];
    }
    return $return;
  }

  /**
   * {@inheritdoc}
   */
  public function multiple() {
    return $this->multiple;
  }
}
