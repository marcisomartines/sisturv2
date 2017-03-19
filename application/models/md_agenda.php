<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 17/03/2017
 * Time: 22:42
 */
class md_agenda extends CI_Model
{
    public function listarAgenda(){
        return $this->db->select("
                tb_tour.id_tour,
                tb_cars.codigo,
                tb_cars.modelo,
                DATE_FORMAT(tb_tour.data_saida,'%d/%m/%Y') as data_saida,
                DATE_FORMAT(tb_tour.data_retorno,'%d/%m/%Y') as data_retorno,
                tb_tour.id_viagem,
                CASE tb_tour.tipo
                    WHEN 'v' THEN 'Viagem'
                    WHEN 'f' THEN 'Fretamento'
                    WHEN 't' THEN 'Turismo'
                    WHEN 'e' THEN 'Escursão'
                END as tipo,
                tb_tour.status,
                tb_viagem.destino")
            ->from('tb_tour')
            ->join('tb_viagem','tb_viagem.id_viagem=tb_tour.id_viagem')
            ->join('tb_cars','tb_cars.id_cars=tb_tour.id_car')
            ->join('tb_drivers','tb_drivers.id_drivers=tb_tour.id_motorista')
            ->limit(15)
            ->order_by('tb_tour.data_saida','desc')
            ->get()
            ->result_array();
    }

    public function editaBuscaAgenda(){
        return $this->db->select("
            id_tour,
            id_viagem,
            id_car,
            DATE_FORMAT(data_saida,'%d/%m/%Y') as data_saida,
            DATE_FORMAT(data_retorno,'%d/%m/%Y') as data_retorno,
            id_motorista,
            preco,
            preco_un,
            tipo,
            observacao
        ")->where("id_tour",$this->input->post('id_tour'))->get('tb_tour')->result_array();
    }

    public function cadastraAgenda(){
        $dados = [
            'id_viagem'      => $this->input->post('id_viagem'),
            'id_car'         => $this->input->post('id_car'),
            'id_motorista'   => $this->input->post('id_motorista'),
            'data_saida'     => dataBanco($this->input->post('data_saida')),
            'data_retorno'   => dataBanco($this->input->post('data_retorno')),
            'observacao'     => strtoupper($this->input->post('observacao')),
            'preco'          => $this->input->post('preco'),
            'preco_un'       => $this->input->post('preco_un'),
            'tipo'           => $this->input->post('tipo')
        ];

        $this->db->insert('tb_tour',$dados);
    }

    public function editaAgenda(){

        $dados = [
            'id_viagem'      => $this->input->post('id_viagem'),
            'id_car'         => $this->input->post('id_car'),
            'id_motorista'   => $this->input->post('id_motorista'),
            'data_saida'     => dataBanco($this->input->post('data_saida')),
            'data_retorno'   => dataBanco($this->input->post('data_retorno')),
            'observacao'     => strtoupper($this->input->post('observacao')),
            'preco'          => $this->input->post('preco'),
            'preco_un'       => $this->input->post('preco_un'),
            'tipo'           => $this->input->post('tipo')
        ];
        $this->db->where('id_tour',$this->input->post('id_tour'))->update('tb_tour',$dados);
    }
}