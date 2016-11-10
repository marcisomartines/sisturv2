<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 12/09/2016
 * Time: 22:37
 */
class Destino extends CI_Controller
{
    public function index(){

        $this->load->library('viagem');
        $this->load->library('destino');
        $this->load->view('vw_destino');
    }

    public function cadastrarDestino(){
        $this->load->model('md_destino');
        $this->md_destino->cadastraDestino();
    }

    public function editarDestino(){
        $this->load->model('md_destino');
        $this->md_destino->editaDestino();
    }

    public function editarBusca(){
        $this->load->library('clientes');
        $this->clientes->editaBuscaCliente();
    }

    public function editarBuscaDestino(){
        $this->load->library('viagem');
        $this->viagem->editaBuscaDestino();
    }

    public function listaDestino(){
        $this->load->library('viagem');
        $this->viagem->listaDestino();
    }
}