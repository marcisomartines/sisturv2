<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 30/07/2016
 * Time: 14:24
 */
class Md_passagem extends CI_Model
{
    public function reservaFeita(){
        $numReserva = $this->db->select('MONTH(tb_tour.data_saida) as mes,COUNT(*) as vendas')
            ->from('tb_reservs')
            ->join('tb_tour','tb_tour.id_tour=tb_reservs.id_tour')
            ->where('YEAR(tb_tour.data_saida)=YEAR(CURDATE())')
            ->where('MONTH(tb_tour.data_saida)=MONTH(CURDATE())')
            ->group_by('MONTH(tb_tour.data_saida)')
            ->get()->result_array();
        
        if(empty($numReserva)){
            return $numReserva[0]['vendas']=0;
        }

        return $numReserva[0];
    }

    public function tourMes(){
        $numTour = $this->db->select('MONTH(tb_tour.data_saida) as mes,COUNT(*) as vendas')
            ->from('tb_tour')
            ->where('MONTH(tb_tour.data_saida)=MONTH(CURDATE())')
            ->where('status','a')
            ->group_by('MONTH(tb_tour.data_saida)')
            ->get()->result_array();

        if(empty($numTour)){
            return $numTour[0]['vendas']=0;
        }

        return $numTour[0];
    }

    public function reservaConfirmada(){
        $numReserva = $this->db->select('MONTH(tb_tour.data_saida) as mes,COUNT(*) as vendasConfirmada')
            ->from('tb_reservs')
            ->join('tb_tour','tb_tour.id_tour=tb_reservs.id_tour')
            ->where('YEAR(tb_tour.data_saida)=YEAR(CURDATE())')
            ->where('tb_reservs.status_reserva','C')
            ->where('MONTH(tb_tour.data_saida)=MONTH(CURDATE())')
            ->group_by('MONTH(tb_tour.data_saida)')
            ->get()->result_array();

        if(empty($numReserva)){
            return $numReserva[0]['vendasConfirmada']=0;
        }

        return $numReserva[0];
    }

    public function reservaAusente(){
        $numReserva = $this->db->select('MONTH(tb_tour.data_saida) as mes,COUNT(*) as vendasAusente')
            ->from('tb_reservs')
            ->join('tb_tour','tb_tour.id_tour=tb_reservs.id_tour')
            ->where('YEAR(tb_tour.data_saida)=YEAR(CURDATE())')
            ->where('tb_reservs.status_reserva','A')
            ->where('MONTH(tb_tour.data_saida)=MONTH(CURDATE())')
            ->group_by('MONTH(tb_tour.data_saida)')
            ->get()->result_array();

        if(empty($numReserva)){
            return $numReserva[0]['vendasAusente']=0;
        }

        return $numReserva[0];
    }

    public function reservaGrafico(){
        $confirmados = $this->db->select('MONTH(tb_tour.data_saida) as mes,COUNT(*) as vendasConfirmada')
            ->from('tb_reservs')
            ->join('tb_tour','tb_tour.id_tour=tb_reservs.id_tour')
            ->where('YEAR(tb_tour.data_saida)=YEAR(CURDATE())')
            ->where('tb_reservs.status_reserva','C')
            ->group_by('MONTH(tb_tour.data_saida)')
            ->get()->result_array();
        $i=0;
        foreach($confirmados as $con){
            $res[$i]['mes'] = $con['mes'];
            $res[$i]['confirmado'] = $con['vendasConfirmada'];
            $i++;
        }

        $ausente = $this->db->select('MONTH(tb_tour.data_saida) as mes,COUNT(*) as vendasAusente')
            ->from('tb_reservs')
            ->join('tb_tour','tb_tour.id_tour=tb_reservs.id_tour')
            ->where('YEAR(tb_tour.data_saida)=YEAR(CURDATE())')
            ->where('tb_reservs.status_reserva','A')
            ->group_by('MONTH(tb_tour.data_saida)')
            ->get()->result_array();

        $i=0;
        foreach($ausente as $con){
            $res[$i]['ausente'] = $con['vendasAusente'];
            $i++;
        }
        return $res;
    }

    public function retornaReservas($id_tour){
        return $this->db
            ->select("id_reservs,nr_poltrona,id_tour,id_client,status_reserva,nome,sexo,tipo")
            ->from('tb_reservs')
            ->join('tb_clients','tb_clients.id_clients=tb_reservs.id_client')
            ->where('id_tour',$id_tour)
            ->order_by('nr_poltrona')
            ->get()
            ->result_array();
    }
}