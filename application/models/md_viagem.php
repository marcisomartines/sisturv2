<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 30/07/2016
 * Time: 21:07
 */
class Md_viagem extends CI_Model
{
    public function viagens(){
        $viagem = $this->db->select('tb_viagem.destino,tb_tour.id_viagem')
                 ->from('tb_tour')
                 ->join('tb_viagem',"tb_viagem.id_viagem=tb_tour.id_viagem")
                 ->where('status','A')
                 ->group_by('tb_tour.id_viagem')
                 ->get()->result_array();

        return $viagem;
    }

    public function listaViagem($id_viagem){
        $lista = $this->db->select('*')
            ->from('tb_tour')
            ->join('tb_viagem','tb_tour.id_viagem=tb_viagem.id_viagem')
            ->join('tb_cars','tb_cars.id_cars=tb_tour.id_car')
            ->where('tb_tour.status','A')
            ->where("(tb_tour.tipo='v' OR tb_tour.tipo='t' OR tb_tour.tipo='e' OR tb_tour.tipo='f')")
            ->where('tb_tour.id_viagem',$id_viagem)
            ->order_by('tb_tour.id_viagem,tb_tour.data_saida','ASC')
            ->get()->result_array();

        return $lista;
    }
}