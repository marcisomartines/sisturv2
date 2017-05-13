<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 19/03/2017
 * Time: 11:38
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Reservas
{

    protected $CI;
    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function retornaReservas($id_tour)
    {
        $this->CI->load->model('md_passagem');

        $resultado = $this->CI->md_passagem->retornaReservas($id_tour);

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
}