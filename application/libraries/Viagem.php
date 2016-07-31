<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 30/07/2016
 * Time: 21:02
 */
class Viagem
{
    protected $CI;
    
    public function __construct()
    {
        $this->CI = &get_instance();
    }
}