/**
 * Created by marciso on 16/03/2017.
 */

function limpaAgenda(){
    fechaMsg();
    $('#id_tour').val('');
    $('#id_viagem').val(0);
    $('#id_cars').val(0);
    $('#id_motorista').val(0);
    $('#data_saida').val('');
    $('#data_retorno').val('');
    $('#preco').val('');
    $('#preco_un').val('');
    $('#tipo').val('v');
    $('#observacao').val('');
}

function acaoAgenda(){
    if($('#acao_cadastro').val()==1){
        cadastraAgenda();
    }else{
        editaAgenda();
    }
}

function listaAgenda(){
    $.ajax({
        url: 'listaAgenda',
        type: 'POST',
        beforeSend: function(){
            $.blockUI({
                message: 'Carregando...',
                baseZ: 2000
            });
        },
        complete: function () {
            $.unblockUI();
        },
        success: function(data){
            $('#agendaLista').html("");
            $('#agendaLista').html(data);
        }
    });

    return false;
}

function cadastraAgenda(){
    var dados = {
        id_car       : $('#id_cars').val(),
        id_viagem    : $('#id_viagem').val(),
        id_motorista : $('#id_motorista').val(),
        data_saida   : $('#data_saida').val(),
        data_retorno : $('#data_retorno').val(),
        preco        : $('#preco').val(),
        preco_un     : $('#preco_un').val(),
        tipo         : $('#tipo').val(),
        observacao   : $('#observacao').val()
    };

    $.ajax({
        url: 'cadastrarAgenda',
        type: 'POST',
        data: dados,
        beforeSend : function() {
            $.blockUI({
                message: 'Salvando agenda...',
                baseZ: 2000
            });
        },
        complete: function () {
            $.unblockUI();
        },
        success: function (data) {
            $('#cadastrarAgenda').modal('toggle');
            $('#alertCadastroSucesso').show();
            listaAgenda();
        },
        error: function(data){
            $('#cadastrarAgenda').modal('toggle');
            $('#alertCadastroFalha').show();
        }
    });
}

function editaAgenda(){
    var dados = {
        id_tour      : $('#id_tour').val(),
        id_car       : $('#id_cars').val(),
        id_viagem    : $('#id_viagem').val(),
        id_motorista : $('#id_motorista').val(),
        data_saida   : $('#data_saida').val(),
        data_retorno : $('#data_retorno').val(),
        preco        : $('#preco').val(),
        preco_un     : $('#preco_un').val(),
        tipo         : $('#tipo').val(),
        observacao   : $('#observacao').val()
    };

    $.ajax({
        url: 'editarAgenda',
        type: 'POST',
        data: dados,
        beforeSend : function() {
            $.blockUI({
                message: 'Salvando agenda...',
                baseZ: 2000
            });
        },
        complete: function () {
            $.unblockUI();
        },
        success: function (data) {
            $('#cadastrarAgenda').modal('toggle');
            $('#alertEditaSucesso').show('');
            //limpando campos
            listaAgenda();
        },
        error: function(data){
            $('#cadastrarAgenda').modal('toggle');
            $('#alertEditaFalha').show();
        }
    });
}

function editaBuscaAgenda(id_tour){
    limpaAgenda();

    var dados = {
        id_tour : id_tour
    };

    $.ajax({
        url: 'editarBuscaAgenda',
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
            var agenda = JSON.parse(data);

                $('#id_tour').val(agenda[0].id_tour);
                $('#id_cars').val(agenda[0].id_car);
                $('#id_viagem').val(agenda[0].id_viagem);
                $('#id_motorista').val(agenda[0].id_motorista);
                $('#data_saida').val(agenda[0].data_saida);
                $('#data_retorno').val(agenda[0].data_retorno);
                $('#preco').val(agenda[0].preco);
                $('#preco_un').val(agenda[0].preco_un);
                $('#tipo').val(agenda[0].tipo);
                $('#observacao').val(agenda[0].observacao);
        }
    });
}