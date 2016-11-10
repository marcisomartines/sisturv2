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
            success: function (data) {
                $('#cadastrarDestino').modal('toggle');
                $('#alertCadastroSucesso').show('');
                $('#destino').val('');
                listaDestino();
            },
            error: function(data){
                $('#myModal').modal('toggle');
                $('#alertCadastroFalha').show();
            }
        });
    }
}

function editaBuscaDestino(id_viagem){

    var dados = {
        id_viagem : id_viagem
    };
    var item =[];
    $.ajax({
        url: 'editarBuscaDestino',
        type: 'POST',
        data: dados,
        success: function(data){
            var destino = JSON.parse(data);
            $('#id_viagem').val(destino[0].id_viagem);
            $('#destino').val(destino[0].destino);
        }
    });
}

function editaCliente(){
    if($('#tipo_cadastro').val()==0 ) {//pessoa fisica
        if ($('#destino').val() == '') {
            $('#destinoDiv').addClass('has-error');
            $('#destino').focus();
            alert('Campo NOME obrigatório');
        } else {
            var dados = {
                destino: $('#destino').val(),
                id_cliente: $('#id_viagem').val()
            };

            $.ajax({
                url: 'editarDestino',
                type: 'POST',
                data: dados,
                success: function (data) {
                    $('#myModal').modal('toggle');
                    $('#alertEditaSucesso').show('');
                    //limpando campos
                    $('#destino').val('');
                    $('#id_viagem').val('');
                },
                error: function(data){
                    $('#alertEditaFalha').show();
                }
            });
        }
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
    $('#destino').val('');
    $('#id_viagem').val('');
}

function listaDestino(){
    $.ajax({
        url: 'listaDestino',
        type: 'POST',
        success: function(data){
            $('#destinoLista').html("");
            $('#destinoLista').html(data);
        }
    });
    return false;
}