<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 12/10/2016
 * Time: 17:26
 */
class Motorista extends CI_Controller
{
    public function index(){
        $this->load->library('Driver');
        $this->load->view('vw_motorista');
    }

}