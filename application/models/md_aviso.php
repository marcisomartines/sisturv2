<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 31/07/2016
 * Time: 13:15
 */
class Md_aviso extends CI_Model
{
    public function antt(){
        $antt = $this->db->query("SELECT * FROM tb_cars WHERE Month(antt)=Month(Now()) and Year(antt)=Year(Now()) AND status='A'")->result_array();

        return $antt;
    }

    public function agepan(){
        $agepan = $this->db->query("SELECT * FROM tb_cars WHERE Month(agepan)=Month(Now()) and Year(agepan)=Year(Now())")->result_array();

        return $agepan;
    }

    public function vistec(){
        $vistec = $this->db->query("SELECT * FROM tb_cars WHERE Month(vistec)=Month(Now()) and Year(vistec)=Year(Now())")->result_array();

        return $vistec;
    }

    public function inmetro(){
        $inmetro = $this->db->query("SELECT * FROM tb_cars WHERE Month(inmetro)=Month(Now()) and Year(inmetro)=Year(Now())")->result_array();
        
        return $inmetro;
    }

    public function seguro(){
        $seguro = $this->db->query("SELECT * FROM tb_cars WHERE Month(seguro_final)=Month(Now()) and Year(seguro_final)=Year(Now())")->result_array();
        
        return $seguro;
    }

    public function licenciamento(){
        $licenciamento = $this->db->query("SELECT * FROM tb_cars WHERE licenciamento=Month(Now())")->result_array();
        
        return $licenciamento;
    }
    
    public function avisosCarro(){
        $aviso['antt'] = $this->antt();
        $aviso['agepan'] = $this->agepan();
        $aviso['vistec'] = $this->vistec();
        $aviso['inmetro'] = $this->inmetro();
        $aviso['seguro'] = $this->seguro();
        $aviso['licenciamento'] = $this->licenciamento();
        
        return $aviso;
    }
}