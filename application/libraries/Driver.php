<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 12/10/2016
 * Time: 17:46
 */
class Driver
{
    protected $CI;

    public function __construct(){
        $this->CI = &get_instance();
    }

    public function listarMotorista(){
        $this->CI->load->model('md_motorista');
        return $this->CI->md_motorista->listarMotorista();
    }
}