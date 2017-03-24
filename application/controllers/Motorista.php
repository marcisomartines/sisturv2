<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 11/10/2016
 * Time: 17:13
 */
class Motorista extends CI_Controller
{
    public function index(){
        $this->load->library('Carros');
        $this->load->view('vw_motorista');
    }

    public function editaBuscaMotorista(){
        $this->load->library('Carros');
        $this->carros->editaBuscaMotorista();
    }

    public function cadastrarMotorista(){
        $this->load->model('md_motorista');
        $this->md_motorista->cadastraMotorista();
    }

    public function editarMotorista(){
        $this->load->model('md_motorista');
        $this->md_motorista->editaMotorista();
    }

    public function listaMotorista(){
        $this->load->library('Carros');
        $this->carros->listaMotorista();
    }
}