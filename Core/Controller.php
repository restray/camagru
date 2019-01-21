<?php

namespace Core;

/**
 * Controller abstract class
 */

abstract class Controller {
    public $name;

    public function redirect($loc) {
        header("Location: " . $loc);
        die();
    }
}
