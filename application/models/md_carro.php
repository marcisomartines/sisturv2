<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 11/10/2016
 * Time: 17:24
 */
class Md_carro extends CI_Model
{
    public function listarOnibus(){
        return $this->db->get('tb_cars')->result_array();
    }

}