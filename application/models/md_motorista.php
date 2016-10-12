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

}