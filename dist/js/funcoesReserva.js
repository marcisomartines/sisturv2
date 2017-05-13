/**
 * Created by marciso on 19/03/2017.
 */
function carregarMapa(id_tour){
   id_tour = 'id_tour='+id_tour;
    $.blockUI({
        message: 'Carregando...',
        baseZ: 2000
    });

    $("#conteudo").load('mapa44',id_tour);

    $.unblockUI();
}

function salvarReserva(){

}

function editarReserva(){

}

function acaoReserva(){

    var dados = {
        nome: $('#course').val(),//reserva
        data_nascimento: $('#data_nascimento').val(),
        sexo: $("[name=sexo]").val(),//name
        rg: $('#rg').val(),
        cpf: $('#cpf').val(),
        telefone: $('#telefone').val(),
        celular: $('#celular').val(),
        email: $('#email').val(),
        rua: $('#rua').val(),
        bairro: $('#bairro').val(),
        cidade: $('#cidade').val(),
        loc_embarque: $('#loc_embarque').val(),//reserva
        observacao: $('#observacao').val()//reserva
    };

    console.log(dados)
}

function excluirReserva(id_reservs){

}

function confirmarReserva(){

}

function ausenteReserva(){

}

function limparReserva(){

}

function limpaClienteReserva(){

    $('#course').val();//reserva
    $('#data_nascimento').val();
    $("input[type=text][name=sexo]").val();//name
    $('#rg').val();
    $('#cpf').val();
    $('#telefone').val();
    $('#celular').val();
    $('#email').val();
    $('#rua').val();
    $('#bairro').val();
    $('#cidade').val();
    $('#loc_embarque').val();//reserva
    $('#observacao').val();//reserva

}

function editaBuscaReserva(id_reservs){

}

$("#course").autocomplete({
    source: "autoComplete",
    width: 260,
    matchContains: true,
    selectFirst: false
});