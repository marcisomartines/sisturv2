<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 11/10/2016
 * Time: 17:19
 */
class Carros
{
    protected $CI;
    
    public function __construct()
    {
        $this->CI = &get_instance();
    }
    
    public function listarOnibus(){
        $this->CI->load->model('md_carro');
        return $this->CI->md_carro->listarOnibus();
    }

    public function listarMotorista(){
        $this->CI->load->model('md_motorista');
        return $this->CI->md_motorista->listarMotorista();
    }
}