<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 25/03/2017
 * Time: 17:59
 */
class Guia extends CI_Controller
{
    public function index(){
        $this->load->library('viagem');
        $this->load->view('vw_guia');
    }

    public function listaGuia(){

    }

}