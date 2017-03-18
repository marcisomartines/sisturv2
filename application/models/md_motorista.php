<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 12/10/2016
 * Time: 17:36
 */
class Md_motorista extends CI_Model
{
    public function listarMotorista(){
        return $this->db->get('tb_drivers')->result_array();
    }

    public function editaBuscaMotorista(){
        return $this->db->select("
        id_drivers,
        nome,
        DATE_FORMAT(data_nascimento,'%d/%m/%Y') as data_nascimento,
        rg,
        cpf,
        cnh,
        DATE_FORMAT(validade_cnh,'%d/%m/%Y') as validade_cnh,
        email,
        telefone,
        celular,
        rua,
        bairro,
        cidade,
        observacao
        ")->where("id_drivers",$this->input->post('id_driver'))->get('tb_drivers')->result_array();
    }

    public function cadastraMotorista(){
        $dados = [
            'nome'             => strtoupper($this->input->post('nome')),
            'data_nascimento'  => dataBanco($this->input->post('data_nascimento')),
            'rg'               => $this->input->post('rg'),
            'cpf'              => $this->input->post('cpf'),
            'cnh'              => $this->input->post('cnh'),
            'validade_cnh'     => dataBanco($this->input->post('validade_cnh')),
            'email'            => $this->input->post('email'),
            'telefone'         => $this->input->post('telefone'),
            'celular'          => $this->input->post('celular'),
            'rua'              => strtoupper($this->input->post('rua')),
            'bairro'           => strtoupper($this->input->post('bairro')),
            'cidade'           => strtoupper($this->input->post('cidade')),
            'observacao'       => strtoupper($this->input->post('observacao'))
        ];

        $this->db->insert('tb_drivers',$dados);
    }

    public function editaMotorista(){

        $dados = [
            'nome'             => strtoupper($this->input->post('nome')),
            'data_nascimento'  => dataBanco($this->input->post('data_nascimento')),
            'rg'               => $this->input->post('rg'),
            'cpf'              => $this->input->post('cpf'),
            'cnh'              => $this->input->post('cnh'),
            'validade_cnh'     => dataBanco($this->input->post('validade_cnh')),
            'email'            => $this->input->post('email'),
            'telefone'         => $this->input->post('telefone'),
            'celular'          => $this->input->post('celular'),
            'rua'              => strtoupper($this->input->post('rua')),
            'bairro'           => strtoupper($this->input->post('bairro')),
            'cidade'           => strtoupper($this->input->post('cidade')),
            'observacao'       => strtoupper($this->input->post('observacao'))
        ];
        $this->db->where('id_drivers',$this->input->post('id_driver'))->update('tb_drivers',$dados);
    }
}