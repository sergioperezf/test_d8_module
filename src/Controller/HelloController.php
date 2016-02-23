<?php
/**
 * File: HelloController.php.
 * Project: drupal-8
 * 2016
 */

namespace Drupal\test_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
    public function content() {
        return array(
            '#type' => 'markup',
            '#markup' => $this->t('Hola mundo')
        );
    }
}