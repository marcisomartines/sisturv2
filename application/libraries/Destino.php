<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 12/09/2016
 * Time: 23:04
 */
class Destino
{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function destinos(){
        $this->CI->load->model('md_destino');
        $destino = $this->CI->md_destino->destinos();

        return $destino;
    }
}