/**
 * Created by marciso on 19/03/2017.
 */
function carregarMapa(id_tour){
    var dados = {
        id_tour : id_tour
    }
    $.blockUI({
        message: 'Carregando...',
        baseZ: 2000
    });

    $("#conteudo").load('mapa');

    $.unblockUI();
}

function salvarReserva(){

}

function editarReserva(){

}

function acaoReserva(){

}

function excluirReserva(id_reservs){

}

function confirmarReserva(){

}

function ausenteReserva(){

}

function limparReserva(){

}

function editaBuscaReserva(id_reservs){

}

$("#course").autocomplete({
    source: "autoComplete",
    width: 260,
    matchContains: true,
    selectFirst: false
});