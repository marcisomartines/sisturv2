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
            "nome" =>,
            "rua"=>,
            "bairro"=>,
            ""
        ]
    }
}