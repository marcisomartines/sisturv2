<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 30/07/2016
 * Time: 14:24
 */
class md_passagem extends CI_Model
{
    public function reservaFeita(){
        $numReserva = $this->db->select('MONTH(tb_tour.data_saida) as mes,COUNT(*) as vendas')
            ->from('tb_reservs')
            ->join('tb_tour','tb_tour.id_tour=tb_reservs.id_tour')
            ->where('YEAR(tb_tour.data_saida)=YEAR(CURDATE())')
            ->where('MONTH(tb_tour.data_saida)=MONTH(CURDATE())')
            ->group_by('MONTH(tb_tour.data_saida)')
            ->get()->result_array();
        return $numReserva[0];
    }
    
    public function reservaConfirmada(){
        $numReserva = $this->db->select('MONTH(tb_tour.data_saida) as mes,COUNT(*) as vendas')
            ->from('tb_reservs')
            ->join('tb_tour','tb_tour.id_tour=tb_reservs.id_tour')
            ->where('YEAR(tb_tour.data_saida)=YEAR(CURDATE())')
            ->where('tb_reservs.status_reserva','C')
            ->where('MONTH(tb_tour.data_saida)=MONTH(CURDATE())')
            ->group_by('MONTH(tb_tour.data_saida)')
            ->get()->result_array();
        return $numReserva[0];
    }

    public function reservaAusente(){
        $numReserva = $this->db->select('MONTH(tb_tour.data_saida) as mes,COUNT(*) as vendas')
            ->from('tb_reservs')
            ->join('tb_tour','tb_tour.id_tour=tb_reservs.id_tour')
            ->where('YEAR(tb_tour.data_saida)=YEAR(CURDATE())')
            ->where('tb_reservs.status_reserva','A')
            ->where('MONTH(tb_tour.data_saida)=MONTH(CURDATE())')
            ->group_by('MONTH(tb_tour.data_saida)')
            ->get()->result_array();
        return $numReserva[0];
    }
}