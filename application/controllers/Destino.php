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
}