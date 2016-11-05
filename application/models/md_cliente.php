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
            "rua"=>$this->input->post('rua'),
            "bairro"=>$this->input->post('bairro'),
            "cidade"=>$this->input->post('cidade'),
            "loc_embarque"=>$this->input->post('loc_embarque'),
            "observacao"=>$this->input->post('observacao'),
            "tipo_cliente"=>$this->input->post('tipo'),
            "cnpj"=>$this->input->post('cnpj'),
            "responsavel"=>$this->input->post('responsavel'),
            "contato1"=>$this->input->post('contato1'),
            "contato2"=>$this->input->post('contato2'),
            "contato3"=>$this->input->post('contato3'),
            "cont_tel1"=>$this->input->post('cont_tel1'),
            "cont_tel2"=>$this->input->post('cont_tel2'),
            "cont_tel3"=>$this->input->post('cont_tel3'),
            "cont_email1"=>$this->input->post('cont_email1'),
            "cont_email2"=>$this->input->post('cont_email2'),
            "cont_email3"=>$this->input->post('cont_email3')
        ];
        $this->db->insert('tb_clients',$dados);
    }

    public function editaCliente(){
        $dados =[
            "nome" =>$this->input->post('nome'),
            'data_nascimento' => dataBanco($this->input->post('data_nascimento')),
            'sexo' => $this->input->post('sexo'),
            'rg' => $this->input->post('rg'),
            'cpf' => $this->input->post('cpf'),
            'email' => $this->input->post('email'),
            "telefone"=>$this->input->post('telefone'),
            "celular"=>$this->input->post('celular'),
            "rua"=>$this->input->post('rua'),
            "bairro"=>$this->input->post('bairro'),
            "cidade"=>$this->input->post('cidade'),
            "loc_embarque"=>$this->input->post('loc_embarque'),
            "observacao"=>$this->input->post('observacao'),
            "tipo_cliente"=>$this->input->post('tipo'),
            "cnpj"=>$this->input->post('cnpj'),
            "responsavel"=>$this->input->post('responsavel'),
            "contato1"=>$this->input->post('contato1'),
            "contato2"=>$this->input->post('contato2'),
            "contato3"=>$this->input->post('contato3'),
            "cont_tel1"=>$this->input->post('cont_tel1'),
            "cont_tel2"=>$this->input->post('cont_tel2'),
            "cont_tel3"=>$this->input->post('cont_tel3'),
            "cont_email1"=>$this->input->post('cont_email1'),
            "cont_email2"=>$this->input->post('cont_email2'),
            "cont_email3"=>$this->input->post('cont_email3')
        ];
        $this->db->where('id_clients', $this->input->post('id_cliente'))->update('tb_clients', $dados);
    }

    public function editaBuscaCliente(){
        return $this->db->where('id_clients',$this->input->post('id_clients'))->get('tb_clients')->result_array();
    }
}