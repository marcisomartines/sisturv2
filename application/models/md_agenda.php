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

    public function editaBuscaMotorista(){
        return $this->db->select("
        id_drivers,
        nome,
        DATE_FORMAT(data_nascimento,'%d/%m/%Y') as data_nascimento,
        rg,
        cpf,
        cnh,
        DATE_FORMAT(validade_cnh,'%d/%m/%Y') as validade_cnh,
        email,
        telefone,
        celular,
        rua,
        bairro,
        cidade,
        observacao
        ")->where("id_drivers",$this->input->post('id_driver'))->get('tb_drivers')->result_array();
    }

    public function cadastraMotorista(){
        $dados = [
            'nome'             => strtoupper($this->input->post('nome')),
            'data_nascimento'  => dataBanco($this->input->post('data_nascimento')),
            'rg'               => $this->input->post('rg'),
            'cpf'              => $this->input->post('cpf'),
            'cnh'              => $this->input->post('cnh'),
            'validade_cnh'     => dataBanco($this->input->post('validade_cnh')),
            'email'            => $this->input->post('email'),
            'telefone'         => $this->input->post('telefone'),
            'celular'          => $this->input->post('celular'),
            'rua'              => strtoupper($this->input->post('rua')),
            'bairro'           => strtoupper($this->input->post('bairro')),
            'cidade'           => strtoupper($this->input->post('cidade')),
            'observacao'       => strtoupper($this->input->post('observacao'))
        ];

        $this->db->insert('tb_drivers',$dados);
    }

    public function editaMotorista(){

        $dados = [
            'nome'             => strtoupper($this->input->post('nome')),
            'data_nascimento'  => dataBanco($this->input->post('data_nascimento')),
            'rg'               => $this->input->post('rg'),
            'cpf'              => $this->input->post('cpf'),
            'cnh'              => $this->input->post('cnh'),
            'validade_cnh'     => dataBanco($this->input->post('validade_cnh')),
            'email'            => $this->input->post('email'),
            'telefone'         => $this->input->post('telefone'),
            'celular'          => $this->input->post('celular'),
            'rua'              => strtoupper($this->input->post('rua')),
            'bairro'           => strtoupper($this->input->post('bairro')),
            'cidade'           => strtoupper($this->input->post('cidade')),
            'observacao'       => strtoupper($this->input->post('observacao'))
        ];
        $this->db->where('id_drivers',$this->input->post('id_driver'))->update('tb_drivers',$dados);
    }
}