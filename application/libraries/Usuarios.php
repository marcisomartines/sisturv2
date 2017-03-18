<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 11/10/2016
 * Time: 17:19
 */
class Usuarios
{
    protected $CI;
    
    public function __construct()
    {
        $this->CI = &get_instance();
    }
    
    public function listarUsuarios(){
        $this->CI->load->model('md_usuario');
        return $this->CI->md_usuario->listarUsuarios();
    }

    public function editaBuscaUsuario(){
        $this->CI->load->model('md_usuario');
        $motorista = $this->CI->md_usuario->editaBuscaUsuario();

        echo json_encode($motorista);
    }

    public function listaUsuario(){
        $this->CI->load->model('md_usuario');
        $usuario = $this->CI->md_usuario->listarUsuarios();

        $html = ' <table class="table table-hover">';
        $html .= '<th>Nome</th>';
        $html .= '<th>Nome Usuário</th>';
        $html .= '<th>E-mail</th>';
        $html .= '<th>Telefone</th>';
        $html .= '<th>Celular</th>';
        $html .= '<th>Status</th>';
        $html .= '<th>Ação</th>';
        foreach($usuario as $us){
            $html .= '<tr>';
            $html .= '<td>'.$us['nome_comp'].'</td>';
            $html .= '<td>'.$us['nome_user'].'</td>';
            $html .= '<td>'.$us['email'].'</td>';
            $html .= '<td>'.$us['telefone'].'</td>';
            $html .= '<td>'.$us['celular'].'</td>';
            $html .= '<td>'.($us['status']=='A'?'ATIVO':'INATIVO').'</td>';
            $html .= '<td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#cadastrarUsuario" onclick="limpaUsuario();editaBuscaUsuario('.$us['id_users'].');$(\'#acao_cadastro\').val(2);"><i class="fa fa-pencil-square-o"></i> Editar</button></td>';
            $html .= '</tr>';
        }
        $html .= "</table>";

        echo $html;
    }
}