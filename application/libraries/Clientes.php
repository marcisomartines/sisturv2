<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 09/10/2016
 * Time: 19:12
 */
class Clientes
{
    protected $CI;

    public function  __construct()
    {
        $this->CI =&get_instance();
    }

    public function listaCliente(){
        $this->CI->load->model('md_cliente');
        $clientes = $this->CI->md_cliente->listaCliente();
        $html = ' <table class="table table-hover">';
        $html .= '<th>Nome</th>';
        $html .= '<th>RG</th>';
        $html .= '<th>CPF</th>';
        $html .= '<th>Telefone</th>';
        $html .= '<th>Celular</th>';
        $html .= '<th>Loc. Embarque</th>';
        $html .= '<th>Ação</th>';
        foreach($clientes as $cli){
            $html .= '<tr>';
            $html .= '<td>'.$cli['nome'].'</td>';
            $html .= '<td>'.$cli['rg'].'</td>';
            $html .= '<td>'.$cli['cpf'].'</td>';
            $html .= '<td>'.$cli['telefone'].'</td>';
            $html .= '<td>'.$cli['celular'].'</td>';
            $html .= '<td>'.$cli['loc_embarque'].'</td>';
            $html .= '<td><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i> Editar</button></td>';
            $html .= '</tr>';
        }
        $html .= "</table>";
        echo $html;
    }
}