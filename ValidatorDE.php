<?php

namespace Valitron;

use InvalidArgumentException;

class ValidatorDE extends \Valitron\Validator
{
  public function __construct($data, $fields = array(), $lang = null, $langDir = null) {

    return parent::__construct($data, $fields, 'de', 'Valitron/lang');
  }
  
}
?>