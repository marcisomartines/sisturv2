<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 08/10/2016
 * Time: 21:12
 */
class Reserva extends CI_COntroller
{
    public function index(){
        $this->load->library('viagem');
        $this->load->view('vw_reserva');
    }

    public function mapa(){
        $this->load->view('mapa/mapa44');
    }
}