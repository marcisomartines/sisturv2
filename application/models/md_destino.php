<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 12/09/2016
 * Time: 22:54
 */
class Md_destino extends CI_Model
{
    public function destinos(){

        $this->db->order_by("destino", "asc");
        $destino = $this->db->get('tb_viagem')->result_array();

        return $destino;
    }

    public function cadastraDestino(){
        $dados =[
            "destino" => strtoupper($this->input->post('destino')),
        ];
        $this->db->insert('tb_viagem',$dados);
    }

    public function editaDestino(){
        $dados =[
            "destino"              => strtoupper($this->input->post('nome'))
        ];
        $this->db->where('id_viagem', $this->input->post('id_viagem'))->update('tb_viagem', $dados);
    }

    public function editaBuscaDestino(){
        return $this->db->where('id_viagem',$this->input->post('id_viagem'))->get('tb_viagem')->result_array();
    }
}