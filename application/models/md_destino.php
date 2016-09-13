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

}