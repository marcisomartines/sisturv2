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
        return $this->db->limit(10,0)->like('nome',$cliente)->order_by('nome','ASC')->get('tb_clients')->result_array();
    }

    public function cadastraCliente(){
        $dados =[
            "nome"              => strtoupper($this->input->post('nome')),
            'data_nascimento'   => dataBanco($this->input->post('data_nascimento')),
            'sexo'              => $this->input->post('sexo'),
            'rg'                => $this->input->post('rg'),
            'cpf'               => $this->input->post('cpf'),
            'email'             => $this->input->post('email'),
            "telefone"          => $this->input->post('telefone'),
            "celular"           => $this->input->post('celular'),
            "rua"               => strtoupper($this->input->post('rua')),
            "bairro"            => strtoupper($this->input->post('bairro')),
            "cidade"            => strtoupper($this->input->post('cidade')),
            "loc_embarque"      => strtoupper($this->input->post('loc_embarque')),
            "observacao"        => strtoupper($this->input->post('observacao')),
            "tipo_cliente"      => $this->input->post('tipo'),
            "cnpj"              => $this->input->post('cnpj'),
            "responsavel"       => strtoupper($this->input->post('responsavel')),
            "contato1"          => strtoupper($this->input->post('contato1')),
            "contato2"          => strtoupper($this->input->post('contato2')),
            "contato3"          => strtoupper($this->input->post('contato3')),
            "cont_tel1"         => $this->input->post('cont_tel1'),
            "cont_tel2"         => $this->input->post('cont_tel2'),
            "cont_tel3"         => $this->input->post('cont_tel3'),
            "cont_email1"       => $this->input->post('cont_email1'),
            "cont_email2"       => $this->input->post('cont_email2'),
            "cont_email3"       => $this->input->post('cont_email3')
        ];
        $this->db->insert('tb_clients',$dados);
    }

    public function editaCliente(){
        $dados =[
            "nome"              => strtoupper($this->input->post('nome')),
            'data_nascimento'   => dataBanco($this->input->post('data_nascimento')),
            'sexo'              => $this->input->post('sexo'),
            'rg'                => $this->input->post('rg'),
            'cpf'               => $this->input->post('cpf'),
            'email'             => $this->input->post('email'),
            "telefone"          => $this->input->post('telefone'),
            "celular"           => $this->input->post('celular'),
            "rua"               => strtoupper($this->input->post('rua')),
            "bairro"            => strtoupper($this->input->post('bairro')),
            "cidade"            => strtoupper($this->input->post('cidade')),
            "loc_embarque"      => strtoupper($this->input->post('loc_embarque')),
            "observacao"        => strtoupper($this->input->post('observacao')),
            "tipo_cliente"      => $this->input->post('tipo'),
            "cnpj"              => $this->input->post('cnpj'),
            "responsavel"       => strtoupper($this->input->post('responsavel')),
            "contato1"          => strtoupper($this->input->post('contato1')),
            "contato2"          => strtoupper($this->input->post('contato2')),
            "contato3"          => strtoupper($this->input->post('contato3')),
            "cont_tel1"         => $this->input->post('cont_tel1'),
            "cont_tel2"         => $this->input->post('cont_tel2'),
            "cont_tel3"         => $this->input->post('cont_tel3'),
            "cont_email1"       => $this->input->post('cont_email1'),
            "cont_email2"       => $this->input->post('cont_email2'),
            "cont_email3"       => $this->input->post('cont_email3')
        ];
        $this->db->where('id_clients', $this->input->post('id_cliente'))->update('tb_clients', $dados);
    }

    public function editaBuscaCliente(){
        return $this->db->select("id_clients,nome,rua,bairro,cidade,loc_embarque,
            telefone,celular,DATE_FORMAT(data_nascimento,'%d/%m/%Y') as data_nascimento,
            sexo,observacao,cpf,rg,
            email,tipo_cliente,contato1,cont_tel1,cont_email1,
            contato2,cont_tel2,cont_email2,contato3,cont_tel3,cont_email3,
            responsavel,cnpj")->where('id_clients',$this->input->post('id_clients'))->get('tb_clients')->result_array();
    }
}