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
    
    public function viagens(){
        $this->CI->load->model('md_viagem');
        $viagem = $this->CI->md_viagem->viagens();
        
        return $viagem;
    }

    public function retornaListaViagem($id_viagem){

        $this->CI->load->model('md_viagem');
        $listaViagem = $this->CI->md_viagem->listaViagem($id_viagem);

        return $listaViagem;
    }

    public function destinos(){

        $this->CI->load->model('md_destino');
        $destino = $this->CI->md_destino->destinos();
        
        return $destino;
    }
}