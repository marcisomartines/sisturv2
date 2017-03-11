function buscaDestino(){
    
}

function cadastraDestino(){
    if ($('#destino').val() == '') {
        $('#destinoDiv').addClass('has-error');
        $('#destino').focus();
        alert('Campo NOME obrigatório');
    } else {
        var dados = {
            destino: $('#destino').val(),
        };

        $.ajax({
            url: 'cadastrarDestino',
            type: 'POST',
            data: dados,
            beforeSend : function() {
                $.blockUI({
                    message: 'Salvando destino...',
                    baseZ: 2000
                });
            },
            complete: function () {
                $.unblockUI();
            },
            success: function (data) {
                $('#cadastrarDestino').modal('toggle');
                $('#alertCadastroSucesso').show('');
                $('#destino').val('');
                listaDestino();
            },
            error: function(data){
                $('#cadastrarDestino').modal('toggle');
                $('#alertCadastroFalha').show();
            }
        });
    }
}

function editaBuscaDestino(id_viagem){
    limpaDestino();
    var dados = {
        id_viagem : id_viagem
    };
    var item =[];
    $.ajax({
        url: 'editarBuscaDestino',
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
            var destino = JSON.parse(data);
            $('#id_viagem').val(destino[0].id_viagem);
            $('#destino').val(destino[0].destino);
        }
    });
}

function editaDestino(){
        if ($('#destino').val() == '') {
            $('#destinoDiv').addClass('has-error');
            $('#destino').focus();
            alert('Campo NOME obrigatório');
        } else {
            var dados = {
                destino: $('#destino').val(),
                id_viagem: $('#id_viagem').val()
            };

            $.ajax({
                url: 'editarDestino',
                type: 'POST',
                data: dados,
                beforeSend : function() {
                    $.blockUI({
                        message: 'Salvando destino...',
                        baseZ: 2000
                    });
                },
                complete: function () {
                    $.unblockUI();
                },
                success: function (data) {
                    $('#cadastrarDestino').modal('toggle');
                    $('#alertEditaSucesso').show('');
                    //limpando campos
                    $('#destino').val('');
                    $('#id_viagem').val('');
                    listaDestino();
                },
                error: function(data){
                    $('#cadastrarDestino').modal('toggle');
                    $('#alertEditaFalha').show();
                }
            });
        }
}

function acaoDestino(){
    if($('#acao_cadastro').val()==1){
        cadastraDestino();
    }else{
        editaDestino();
    }
}

function limpaDestino(){
    fechaMsg();
    $('#destino').val('');
    $('#id_viagem').val('');
}

function listaDestino(){
    $.ajax({
        url: 'listaDestino',
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
            $('#destinoLista').html("");
            $('#destinoLista').html(data);
        }
    });
    return false;
}