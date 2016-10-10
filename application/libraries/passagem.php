<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 30/07/2016
 * Time: 12:50
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Passagem
{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();

    }

    public function reservaFeita()
    {
        $this->CI->load->model('md_passagem');
        $feitas = $this->CI->md_passagem->reservaFeita();
        
        return $feitas['vendas'];
    }

    public function reservaConfirmada()
    {
        $this->CI->load->model('md_passagem');
        $confirmada = $this->CI->md_passagem->reservaConfirmada();
        
        return $confirmada['vendasConfirmada'];
    }

    public function reservaAusente()
    {
        $this->CI->load->model('md_passagem');
        $ausente = $this->CI->md_passagem->reservaAusente();
        
        return $ausente['vendasAusente'];
    }

    public function reservaGrafico(){
        $this->CI->load->model('md_passagem');
        $this->CI->load->helper('data');
        $grafico = $this->CI->md_passagem->reservaGrafico();

        return $grafico;
    }
    
    public function tourMes(){
        $this->CI->load->model('md_passagem');
        $tour = $this->CI->md_passagem->tourMes();

        return $tour['vendas'];
    }
}