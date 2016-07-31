<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index()
	{
		$this->load->library('passagem');
		$this->load->library('viagem');
		$this->load->view('index');
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
