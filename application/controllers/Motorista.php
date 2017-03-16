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
        $this->load->library('carros');
        $this->load->view('vw_motorista');
    }

    public function editaBuscaMotorista(){
        $this->load->library('carros');
        $this->carros->editaBuscaMotorista();
    }
}