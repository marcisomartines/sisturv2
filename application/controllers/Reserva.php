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

    public function mapa40(){
        $this->load->view('mapa/mapa40');
    }

    public function mapa42(){
        $this->load->view('mapa/mapa42');
    }

    public function mapa44(){
        $this->load->library('Reservas');

        $dados = [
            'reservas'=> $this->reservas->retornaReservas($this->input->get('id_tour'))
        ];
        $this->load->view('mapa/mapa44',$dados);
    }

    public function mapa52(){
        $this->load->view('mapa/mapa52');
    }

    public function autoComplete() {
        $this->load->view('ajaxBuscaCliente');
    }
}