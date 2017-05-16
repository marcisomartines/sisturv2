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

            $('#id_reservs').val(reserva[0].id_cars);
            $('#course').val(reserva[0].codigo);
            $('#montadora').val(veiculo[0].montadora);
            $('#modelo').val(veiculo[0].modelo);
            $('#ano').val(veiculo[0].ano);
            $('#placa').val(veiculo[0].placa);
            $('#chassis').val(veiculo[0].chassis);
            $('#nr_poltrona').val(veiculo[0].nr_poltrona);
            $('#antt').val(veiculo[0].antt);
            $('#agepan').val(veiculo[0].agepan);
            $('#vistec').val(veiculo[0].vistec);
            $('#inmetro').val(veiculo[0].inmetro);
            $('#seguro_inicio').val(veiculo[0].seguro_inicio);
            $('#seguro_final').val(veiculo[0].seguro_final);
            $('#licenciamento').val(veiculo[0].licenciamento);
        }
    });
}

$("#course").autocomplete({
    source: "autoComplete",
    width: 260,
    matchContains: true,
    selectFirst: false
});

