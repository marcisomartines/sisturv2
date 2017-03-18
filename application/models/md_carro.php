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

    public function editaBuscaOnibus(){
        return $this->db->select(
        	"id_cars,
        	montadora,
        	modelo,
        	chassis,
        	placa,
        	ano,
        	codigo,
        	nr_poltrona,
        	status,
        	observacao,
        	DATE_FORMAT(antt,'%d/%m/%Y') as antt,
        	DATE_FORMAT(agepan,'%d/%m/%Y') as agepan,
        	DATE_FORMAT(vistec,'%d/%m/%Y') as vistec,
        	DATE_FORMAT(inmetro,'%d/%m/%Y') as inmetro,
        	DATE_FORMAT(seguro_inicio,'%d/%m/%Y') as seguro_inicio,
        	DATE_FORMAT(seguro_final,'%d/%m/%Y') as seguro_final,
        	licenciamento"
        	)->where('id_cars',$this->input->post('id_cars'))->get('tb_cars')->result_array();
    }

    public function cadastraOnibus(){
    	$dados = [
		'codigo'          => strtoupper($this->input->post('codigo')),
        'montadora'       => strtoupper($this->input->post('montadora')),
        'modelo'          => strtoupper($this->input->post('modelo')),
        'ano'             => $this->input->post('ano'),
        'placa'           => strtoupper($this->input->post('placa')),
        'chassis'         => strtoupper($this->input->post('chassis')),
        'nr_poltrona'     => $this->input->post('nr_poltrona'),
        'antt'            => dataBanco($this->input->post('antt')),
        'agepan'          => dataBanco($this->input->post('agepan')),
        'vistec'          => dataBanco($this->input->post('vistec')),
        'inmetro'         => dataBanco($this->input->post('inmetro')),
        'seguro_inicio'   => dataBanco($this->input->post('seguro_inicio')),
        'seguro_final'    => dataBanco($this->input->post('seguro_final')),
        'licenciamento'   => $this->input->post('licenciamento')
    	];

    	$this->db->insert('tb_cars',$dados);
    }

    public function editaOnibus(){
    	$dados = [
		'codigo'          => strtoupper($this->input->post('codigo')),
        'montadora'       => strtoupper($this->input->post('montadora')),
        'modelo'          => strtoupper($this->input->post('modelo')),
        'ano'             => $this->input->post('ano'),
        'placa'           => strtoupper($this->input->post('placa')),
        'chassis'         => strtoupper($this->input->post('chassis')),
        'nr_poltrona'     => $this->input->post('nr_poltrona'),
        'antt'            => dataBanco($this->input->post('antt')),
        'agepan'          => dataBanco($this->input->post('agepan')),
        'vistec'          => dataBanco($this->input->post('vistec')),
        'inmetro'         => dataBanco($this->input->post('inmetro')),
        'seguro_inicio'   => dataBanco($this->input->post('seguro_inicio')),
        'seguro_final'    => dataBanco($this->input->post('seguro_final')),
        'licenciamento'   => $this->input->post('licenciamento')
    	];

    	$this->db->where('id_cars',$this->input->post('id_cars'))->update('tb_cars',$dados);
    }

    public function onibus(){
        return $this->db->select("
        id_cars,
        modelo,
        codigo
        ")->get('tb_cars')->result_array();
    }
}