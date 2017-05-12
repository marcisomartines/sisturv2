<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 19/03/2017
 * Time: 11:38
 */
class Reservas
{
    public function reservs($id_tour){
        $resultado = $this->CI->db
            ->select("
            nr_poltrona,
            id_tour,
            id_client,
            status_reserva,
            nome,
            sexo,
            tipo
            ")
            ->from('tb_reservs')
            ->join('tb_clients','tb_clients.id_clients=tb_reservs.id_client')
            ->where('id_tour',366)
            ->order_by('nr_poltrona')
            ->get()
            ->result_array();

        $reservas =[];
        foreach($resultado as $res){
            $reservas[$res['nr_poltrona']][$res['id_client']]['nome']=$res['nome'];
            $reservas[$res['nr_poltrona']][$res['id_client']]['tipo']=$res['tipo'];
            $reservas[$res['nr_poltrona']][$res['id_client']]['id_tour']=$res['id_tour'];
            $reservas[$res['nr_poltrona']][$res['id_client']]['id_client']=$res['id_client'];
            $reservas[$res['nr_poltrona']][$res['id_client']]['status_reserva']=$res['status_reserva'];
            $reservas[$res['nr_poltrona']][$res['id_client']]['sexo']=$res['sexo'];
        }

        return $reservas;
    }

    public function retornaReservas(){
        echo 'teste';
    }

}