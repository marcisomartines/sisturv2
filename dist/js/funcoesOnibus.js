/**
 * Created by marciso on 11/03/2017.
 */
function limpaOnibus(){
    fechaMsg();
    $('#codigo').val('');
    $('#montadora').val('');
    $('#modelo').val('');
    $('#ano').val('');
    $('#placa').val('');
    $('#chassis').val('');
    $('#nr_poltrona').val('');
    $('#antt').val('');
    $('#agepan').val('');
    $('#vistec').val('');
    $('#inmetro').val('');
    $('#seguro_inicio').val('');
    $('#seguro_final').val('');
    $('#licenciamento').val('');
}

function editaBuscaOnibus(id_cars){
    limpaOnibus();

    var dados = {
        id_cars : id_cars
    };

    $.ajax({
        url: 'editaBuscaOnibus',
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
            var veiculo = JSON.parse(data);

            $('#id_cars').val(veiculo[0].id_cars);
            $('#codigo').val(veiculo[0].codigo);
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

function cadastraOnibus(){
    var dados = {
        codigo          : $('#codigo').val(),
        montadora       : $('#montadora').val(),
        modelo          : $('#modelo').val(),
        ano             : $('#ano').val(),
        placa           : $('#placa').val(),
        chassis         : $('#chassis').val(),
        nr_poltrona     : $('#nr_poltrona').val(),
        antt            : $('#antt').val(),
        agepan          : $('#agepan').val(),
        vistec          : $('#vistec').val(),
        inmetro         : $('#inmetro').val(),
        seguro_inicio   : $('#seguro_inicio').val(),
        seguro_final    : $('#seguro_final').val(),
        licenciamento   : $('#licenciamento').val()
    };

    $.ajax({
        url: 'cadastrarOnibus',
        type: 'POST',
        data: dados,
        beforeSend : function() {
            $.blockUI({
                message: 'Salvando ônibus...',
                baseZ: 2000
            });
        },
        complete: function () {
            $.unblockUI();
        },
        success: function (data) {
            $('#cadastrarOnibus').modal('toggle');
            $('#alertCadastroSucesso').show();
            listaOnibus();
        },
        error: function(data){
            $('#cadastrarOnibus').modal('toggle');
            $('#alertCadastroFalha').show();
        }
    });
}

function editaOnibus(){
     var dados = {
        id_cars         : $('#id_cars').val(),
        codigo          : $('#codigo').val(),
        montadora       : $('#montadora').val(),
        modelo          : $('#modelo').val(),
        ano             : $('#ano').val(),
        placa           : $('#placa').val(),
        chassis         : $('#chassis').val(),
        nr_poltrona     : $('#nr_poltrona').val(),
        antt            : $('#antt').val(),
        agepan          : $('#agepan').val(),
        vistec          : $('#vistec').val(),
        inmetro         : $('#inmetro').val(),
        seguro_inicio   : $('#seguro_inicio').val(),
        seguro_final    : $('#seguro_final').val(),
        licenciamento   : $('#licenciamento').val()
    };

    $.ajax({
        url: 'editarOnibus',
        type: 'POST',
        data: dados,
        beforeSend : function() {
            $.blockUI({
                message: 'Salvando ônibus...',
                baseZ: 2000
            });
        },
        complete: function () {
            $.unblockUI();
        },
        success: function (data) {
            $('#cadastrarOnibus').modal('toggle');
            $('#alertEditaSucesso').show('');
            //limpando campos
            listaDestino();
        },
        error: function(data){
            $('#cadastrarOnibus').modal('toggle');
            $('#alertEditaFalha').show();
        }
    });
}

function acaoOnibus(){
    if($('#acao_cadastro').val()==1){
        cadastraOnibus();
    }else{
        editaOnibus();
    }
}

function listaOnibus(){
    $.ajax({
        url: 'listaOnibus',
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
            $('#onibusLista').html("");
            $('#onibusLista').html(data);
        }
    });

    return false;
}