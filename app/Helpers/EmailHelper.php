<?php
/**
 * Created by PhpStorm.
 * User: vahid
 * Date: 4/22/18
 * Time: 2:35 PM
 */

namespace App\Helpers;


class EmailHelper
{
    private $var;

    public function __construct($var)
    {
        $this->var = $var;
    }
    public function send()
    {
        return $this->var;
    }
}