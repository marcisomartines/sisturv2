<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 11/10/2016
 * Time: 17:19
 */
class Carros
{
    protected $CI;
    
    public function __construct()
    {
        $this->CI = &get_instance();
    }
    
    public function listarOnibus(){
        $this->CI->load->model('md_carro');
        return $this->CI->md_carro->listarOnibus();
    }

    public function listarMotorista(){
        $this->CI->load->model('md_motorista');
        return $this->CI->md_motorista->listarMotorista();
    }

    public function editaBuscaMotorista(){
        $this->CI->load->model('md_motorista');
        $motorista = $this->CI->md_carro->editaBuscaMotorista();

        echo json_encode($motorista);
    }

    public function editaBuscaOnibus(){
        $this->CI->load->model('md_carro');
        $veiculo = $this->CI->md_carro->editaBuscaOnibus();

        echo json_encode($veiculo);
    }

     public function listaOnibus(){
        $this->CI->load->model('md_carro');
        $veiculos = $this->CI->md_carro->listaOnibus();

        $html = ' <table class="table table-hover">';
        $html .= '<th>Código</th>';
        $html .= '<th>Modelo</th>';
        $html .= '<th>N° Poltrona</th>';
        $html .= '<th>Placa</th>';
        $html .= '<th>Status</th>';
        $html .= '<th>Ação</th>';
        foreach($veiculos as $vec){
            $html .= '<tr>';
            $html .= '<td>'.$vec['codigo'].'</td>';
            $html .= '<td>'.$vec['modelo'].'</td>';
            $html .= '<td>'.$vec['nr_poltrona'].'</td>';
            $html .= '<td>'.$vec['placa'].'</td>';
            $html .= '<td>'.($vec['status']=='A'?'ATIVO':'INATIVO').'</td>';
            $html .= '<td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#cadastrarOnibus" onclick="limpaOnibus();editaBuscaOnibus('.$vec['id_cars'].');$(\'#acao_cadastro\').val(2);"><i class="fa fa-pencil-square-o"></i> Editar</button></td>';
            $html .= '</tr>';
        }
        $html .= "</table>";

        echo $html;
    }

    public function listaMotorista(){
        
    }
}