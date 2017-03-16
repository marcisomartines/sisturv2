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
        rua
        bairro,
        cidade,
        observacao
        ")->where("id_driver",$this->input->post('id_driver'))->get('tb_drivers')->result_array();
    }


}