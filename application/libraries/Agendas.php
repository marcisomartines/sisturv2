<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 17/03/2017
 * Time: 22:41
 */
class Agendas
{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function listarAgenda(){
        $this->CI->load->model('md_agenda');
        return $this->CI->md_agenda->listarAgenda();
    }

    public function editaBuscaAgenda(){
        $this->CI->load->model('md_agenda');
        $agenda = $this->CI->md_agenda->editaBuscaAgenda();

        echo json_encode($agenda);
    }

    public function listaAgenda(){
        $this->CI->load->model('md_agenda');
        $agenda = $this->CI->md_agenda->listarAgenda();

        $html = ' <table class="table table-hover">';
        $html .= '<th>Código</th>';
        $html .= '<th>Ônibus</th>';
        $html .= '<th>Destino</th>';
        $html .= '<th>Saída</th>';
        $html .= '<th>Retorno</th>';
        $html .= '<th>Tipo</th>';
        $html .= '<th>Situação</th>';
        $html .= '<th>Ação</th>';
        foreach($agenda as $ag){
            $html .= '<tr>';
            $html .= '<td>'.$ag['nome'].'</td>';
            $html .= '<td>'.$ag['email'].'</td>';
            $html .= '<td>'.$ag['telefone'].'</td>';
            $html .= '<td>'.$ag['celular'].'</td>';
            $html .= '<td>'.($ag['status']=='A'?'ATIVO':'INATIVO').'</td>';
            $html .= '<td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#cadastrarOnibus" onclick="limpaMotorista();editaBuscaAgenda('.$ag['id_drivers'].');$(\'#acao_cadastro\').val(2);"><i class="fa fa-pencil-square-o"></i> Editar</button></td>';
            $html .= '</tr>';
        }
        $html .= "</table>";

        echo $html;
    }

    public function motorista(){
        $this->CI->load->model('md_motorista');
        $motoristaArray = $this->CI->md_motorista->motoristas();

        $motorista[]="Escolha...";

        foreach($motoristaArray as $value){
            $motorista[$value['id_drivers']]=$value['nome'];
        }

        return $motorista;
    }

    public function onibus(){
        $this->CI->load->model('md_carro');
        $onibusArray = $this->CI->md_carro->onibus();

        $onibus[]="Escolha...";

        foreach($onibusArray as $value){
            $onibus[$value['id_cars']]=$value['codigo'].'-'.$value['modelo'];
        }

        return $onibus;
    }

    public function destino(){
        $this->CI->load->model('md_destino');
        $destinoArray = $this->CI->md_destino->destinos();

        $destino[]="Escolha...";

        foreach($destinoArray as $value){
            $destino[$value['id_viagem']]=$value['destino'];
        }

        return $destino;
    }

    public function tipo(){
        return [
            0  => 'Escolha...',
            'v' => 'Viagem',
            'f' => 'Fretamento',
            't' => 'Turismo',
            'e' => 'Escursão'
        ];
    }

}