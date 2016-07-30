<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 29/07/2016
 * Time: 22:23
 */
class Md_login extends CI_Model{

    public function can_log_in(){
        $this->db->where('nome_user',$this->input->post('nome'));
        $this->db->where('senha',md5($this->input->post('password')));
        $this->db->where('status','A');
        if($this->db->get('tb_users')->num_rows()){
            return true;
        }

        return false;

    }
}