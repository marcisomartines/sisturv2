<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 11/10/2016
 * Time: 17:19
 */
class Usuarios
{
    protected $CI;
    
    public function __construct()
    {
        $this->CI = &get_instance();
    }
    
    public function listarUsuarios(){
        $this->CI->load->model('md_usuario');
        return $this->CI->md_usuario->listarUsuarios();
    }

}