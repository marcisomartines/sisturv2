/**
 * Created by marciso on 19/03/2017.
 */

function acaoReserva(){
    if($('#acao_cadastro').val()==1){
        cadastraReserva();
    }else{
        editaReserva();
    }
}

function limpaReserva(){
    $('#course').val('');//reserva
    $('#data_nascimento').val('');
    $("input[type=text][name=sexo]").val('');//name
    $('#rg').val('');
    $('#cpf').val('');
    $('#telefone').val('');
    $('#celular').val('');
    $('#email').val('');
    $('#rua').val('');
    $('#bairro').val('');
    $('#cidade').val('');
    $('#loc_embarque').val('');//reserva
    $('#observacao').val('');//reserva
}

function carregarMapa(id_tour){
   id_tour = 'id_tour='+id_tour;
    $.blockUI({
        message: 'Carregando...',
        baseZ: 2000
    });

    $("#conteudo").load('mapa44',id_tour);

    $.unblockUI();
}

function cadastraReserva(){

}

function editaReserva(id_reservs){
    $('#cancelarReserva').show();

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

function cancelaReserva(id_reservs){
    $('#cancelaReserva').show();
}

function confirmaReserva(){

}

function ausenteReserva(){

}

function limpaClienteReserva(){

}

function editaBuscaReserva(id_reservs){
    limpaReserva();

    $('#cancelarReserva').show();

    var dados = {
        id_reservs : id_reservs
    };

    $.ajax({
        url: 'editaBuscaReserva',
        type: 'POST',
        data: dados,
        beforeSend : function() {
            $.blockUI({
                message: 'Carregando...',
                baseZ: 2000
            });
        },
        complete: function () {
            $.unblockUI();
        },
        success: function(data){
            var reserva = JSON.parse(data);


            $('#course').val(reserva[0].nome);
            $('#id_reservs').val(reserva[0].id_reservs);
            $('#data_nascimento').val(reserva[0].data_nascimento);
            $('#sexo').val(reserva[0].sexo);
            $('#rg').val(reserva[0].rg);
            $('#cpf').val(reserva[0].cpf);
            $('#telefone').val(reserva[0].telefone);
            $('#celular').val(reserva[0].celular);
            $('#email').val(reserva[0].email);
            $('#bairro').val(reserva[0].bairro);
            $('#rua').val(reserva[0].rua);
            $('#cidade').val(reserva[0].cidade);
            $('#loc_embarque').val(reserva[0].loc_embarque);
            $('#observacoes').val(reserva[0].observacoes);
        }
    });
}

$("#course").autocomplete({
    source: "autoComplete",
    width: 260,
    matchContains: true,
    selectFirst: false
});

