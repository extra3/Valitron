<?php
/**
 * Recapo <http://recapo.de>
 *
 * @link      http://github.com/lherich/recapo.de
 * @copyright Copyright (c) 2014 Lucas Herich <info@recapo.de>
 * @license   MIT License <http://recapo.de/license>
 */

namespace Valitron;

/**
 *
 */
class ValidatorDE extends \Valitron\Validator
{
    public function __construct($data, $fields = array(), $lang = null, $langDir = null)
    {
        return parent::__construct($data, $fields, 'de', 'Valitron/lang');
    }
}
