<?php
/**
 * Created by PhpStorm.
 * User: marciso
 * Date: 13/05/2017
 * Time: 12:45
 */

function retornaSituacaoAssento($nr_poltrona, $poltronas){
    $html = '';
    if(count($poltronas)>0 && !empty($poltronas)) {
        $html = '<td class="danger">';

        foreach($poltronas as $res) {
            if ($res['tipo'] == 'i') {
                $cor = 'primary';
            }elseif ($res['tipo'] == 'v'){
                $cor = 'warning';
            }else{
                $cor = 'danger';
            }

            $html .= "<button class='btn btn-{$cor}' data-toggle='modal' data-target='#reservaModal' onclick=\"$('#assento').html('{$nr_poltrona}');$('#acao_cadastro').val(2);editaBuscaReserva('{$res['id_reservs']}')\">{$nr_poltrona}</button>";

        }

        $html .= '</td>';

    }else{

        $html .= "<td class='success'>";
        $html .= "<button class='btn btn-success' data-toggle='modal' data-target='#reservaModal' onclick=\"$('#assento').html('{$nr_poltrona}');$('#acao_cadastro').val(1);$('#cancelarReserva').hide();limpaReserva();\">{$nr_poltrona}";
        $html .= '</button>';
        $html .= '</td>';
    }

    echo $html;
}