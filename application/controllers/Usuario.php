<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 15/10/2016
 * Time: 10:35
 */
class Usuario extends CI_Controller
{
    public function index(){
        $this->load->library('Usuarios');
        $this->load->view('vw_usuario');
    }

    public function editaBuscaUsuario(){
        $this->load->library('Usuarios');
        $this->usuarios->editaBuscaUsuario();
    }

    public function cadastrarUsuario(){
        $this->load->model('md_usuario');
        $this->md_usuario->cadastraUsuario();
    }

    public function editarUsuario(){
        $this->load->model('md_usuario');
        $this->md_usuario->editaUsuario();
    }

    public function listaUsuario(){
        $this->load->library('Usuarios');
        $this->usuarios->listaUsuario();
    }

}