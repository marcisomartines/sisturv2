<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 09/10/2016
 * Time: 19:12
 */
class Md_cliente extends CI_Model
{
    public function listaCliente(){
        $cliente = $this->input->post('nome');
        return $this->db->like('nome',$cliente)->get('tb_clients')->result_array();
    }

    public function cadastraCliente(){
        $dados =[
            "nome" =>$this->input->post('nome'),
            'data_nascimento' => dataBanco($this->input->post('data_nascimento')),
            'sexo' => $this->input->post('sexo'),
            'rg' => $this->input->post('rg'),
            'cpf' => $this->input->post('cpf'),
            'email' => $this->input->post('email'),
            "telefone"=>$this->input->post('telefone'),
            "celular"=>$this->input->post('celular'),
            "bairro"=>$this->input->post('bairro'),
            "cidade"=>$this->input->post('cidade'),
            "loc_embarque"=>$this->input->post('loc_embarque'),
            "observacao"=>$this->input->post('observacao')
        ];
        $this->db->insert('tb_clients',$dados);
    }
}