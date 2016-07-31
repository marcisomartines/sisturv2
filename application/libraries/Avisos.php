<?php

/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 31/07/2016
 * Time: 13:04
 */
class Avisos
{
    protected $CI;

    public function  __construct()
    {
        $this->CI =&get_instance();
    }
//
//    public function retornaANTT(){
//        $this->CI->load->model('md_aviso');
//        $antt = $this->CI->md_aviso->antt();
//
//        return $antt;
//    }
//
//    public function retornaAGEPAN(){
//        $this->CI->load->model('md_aviso');
//        $agepan = $this->CI->md_aviso->agepan();
//
//        return $agepan;
//    }
//
//    public function retornaVISTEC(){
//        $this->CI->load->model('md_aviso');
//        $vistec = $this->CI->md_aviso->vistec();
//
//        return $vistec;
//    }
//
//    public function retornaINMETRO(){
//        $this->CI->load->model('md_aviso');
//        $inmetro = $this->CI->md_aviso->inmetro();
//
//        return $inmetro;
//    }
//
//    public function retornaSeguro(){
//        $this->CI->load->model('md_aviso');
//        $seguro = $this->CI->md_aviso->seguro();
//
//        return $seguro;
//    }
//
//    public function retornaLicenciamento(){
//        $this->CI->load->model('md_aviso');
//        $licenciamento = $this->CI->md_aviso->licenciamento();
//
//        return $licenciamento;
//    }

    public function avisosCarro(){
        $this->CI->load->model('md_aviso');
        $aviso = $this->CI->md_aviso->avisosCarro();

        return $aviso;
    }
}