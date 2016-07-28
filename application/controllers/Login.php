<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 27/07/2016
 * Time: 22:08
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function login()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome','login','required|trim|callback_validate_credentials');
        $this->form_validation->set_rules('password','senha','required|sha1|trim');
        if($this->form_validation->run()){
            $usuario =[
                'nome'=>$this->input->post('nome'),
                'is_logged_in'=>1
            ];
            $this->session->set_userdata($usuario);
        }else{
            $this->load->view('login');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Principal/index');
    }

}
