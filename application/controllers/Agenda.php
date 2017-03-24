<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 17/03/2017
 * Time: 22:23
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    public function index(){
        $this->load->library('agendas');
        $this->load->view('vw_agenda');
    }

    public function cadastrarAgenda(){
        $this->load->model('md_agenda');
        $this->md_agenda->cadastraAgenda();
    }

    public function editarAgenda(){
        $this->load->model('md_agenda');
        $this->md_agenda->editaAgenda();
    }

    public function editarBuscaAgenda(){
        $this->load->library('Agendas');
        $this->agendas->editaBuscaAgenda();
    }

    public function listaAgenda(){
        $this->load->library('Agendas');
        $this->agendas->listaAgenda();
    }

}