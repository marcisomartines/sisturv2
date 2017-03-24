<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index()
	{
		$this->load->library('Passagem');
		$this->load->library('Viagem');
		$this->load->library('Avisos');
		$this->load->view('index');
	}

	public function cliente(){
		$this->load->view('vw_cliente');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function inicio()
	{
		$this->load->view('principal');
	}
}
