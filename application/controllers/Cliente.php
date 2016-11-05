<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 11/09/2016
 * Time: 20:51
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller{

    public function index(){
        $this->load->view('vw_cliente');
    }

    public function autoComplete() {
		$this->load->view('ajaxBuscaCliente');
	}

	public function buscaCliente(){
		$this->load->library('clientes');
		$this->clientes->listaCliente();
	}

	public function cadastrarCliente(){
		$this->load->model('md_cliente');
		$this->md_cliente->cadastraCliente();
	}

	public function editarBuscaCliente(){
		$this->load->library('clientes');
		$this->clientes->editaBuscaCliente();
	}

	public function editarCliente(){
		$this->load->model('md_cliente');
		$this->md_cliente->editaCliente();
	}


}