<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 11/10/2016
 * Time: 17:24
 */
class Md_usuario extends CI_Model
{
    public function listarUsuarios(){
        return $this->db->get('tb_users')->result_array();
    }

    public function editaBuscaUsuario(){
        return $this->db->select("
        id_users,
        nome_comp,
        nome_user,
        email,
        telefone,
        celular,
        tipo
        ")->where("id_users",$this->input->post('id_users'))->get('tb_users')->result_array();
    }

    public function cadastraUsuario(){
        $dados = [
            'nome_comp' => strtoupper($this->input->post('nome_comp')),
            'nome_user' => $this->input->post('nome_user'),
            'email'     => $this->input->post('email'),
            'telefone'  => $this->input->post('telefone'),
            'celular'   => $this->input->post('celular'),
            'tipo'      => $this->input->post('tipo'),
            'senha'     => md5($this->input->post('senha'))
        ];

        $this->db->insert('tb_users',$dados);
    }

    public function editaUsuario(){
        $dados = [
            'nome_comp' => strtoupper($this->input->post('nome_comp')),
            'nome_user' => $this->input->post('nome_user'),
            'email'     => $this->input->post('email'),
            'telefone'  => $this->input->post('telefone'),
            'celular'   => $this->input->post('celular'),
            'tipo'      => $this->input->post('tipo'),
            'senha'     => md5($this->input->post('senha'))
        ];
        $this->db->where('id_users',$this->input->post('id_users'))->update('tb_users',$dados);
    }
}