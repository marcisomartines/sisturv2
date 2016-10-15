<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 11/10/2016
 * Time: 17:24
 */
class Md_usuario extends CI_Model
{
    public function listarUsuarios(){
        return $this->db->get('tb_users')->result_array();
    }

}