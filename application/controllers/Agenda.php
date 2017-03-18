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



}