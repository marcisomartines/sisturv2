<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 31/07/2016
 * Time: 13:04
 */
class Avisos
{
    protected $CI;

    public function  __construct()
    {
        $this->CI =&get_instance();
    }

    public function avisosCarro(){
        $this->CI->load->model('md_aviso');
        $aviso = $this->CI->md_aviso->avisosCarro();

        return $aviso;
    }

    public function avisosMotorista(){
        $this->CI->load->model('md_aviso');
        $aviso = $this->CI->md_aviso->avisosMotorista();

        return $aviso;
    }
}