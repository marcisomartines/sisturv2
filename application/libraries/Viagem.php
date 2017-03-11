<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 30/07/2016
 * Time: 21:02
 */
class Viagem
{
    protected $CI;
    
    public function __construct()
    {
        $this->CI = &get_instance();
    }
    
    public function viagens(){
        $this->CI->load->model('md_viagem');
        $viagem = $this->CI->md_viagem->viagens();
        
        return $viagem;
    }

    public function retornaListaViagem($id_viagem){

        $this->CI->load->model('md_viagem');
        $listaViagem = $this->CI->md_viagem->listaViagem($id_viagem);

        return $listaViagem;
    }

    public function destinos(){

        $this->CI->load->model('md_destino');
        $destino = $this->CI->md_destino->destinos();
        
        return $destino;
    }

    public function editaBuscaDestino(){
        $this->CI->load->model('md_destino');
        $destino = $this->CI->md_destino->editaBuscaDestino();

        echo json_encode($destino);
    }

    public function listaDestino(){
        $this->CI->load->model('md_destino');
        $destino = $this->CI->md_destino->listaDestino();

        $html = ' <table class="table table-hover">';
        $html .= '<th>Nome</th>';
        $html .= '<th>Ação</th>';
        foreach($destino as $des){
            $html .= '<tr>';
            $html .= '<td>'.$des['destino'].'</td>';
            $html .= '<td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#cadastrarDestino" onclick="editaBuscaDestino('.$des['id_viagem'].');$(\'#acao_cadastro\').val(2);"><i class="fa fa-pencil-square-o"></i> Editar</button></td>';
            $html .= '</tr>';
        }
        $html .= "</table>";
        echo $html;
    }
}