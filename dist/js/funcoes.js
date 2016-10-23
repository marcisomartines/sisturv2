function buscaCliente(){
    $.ajax({
        url: 'buscaCliente',
        type: 'POST',
        data: {nome: $("#course").val()},
        success: function(data){ 
            $('#clienteLista').html("");
            $('#clienteLista').html(data);
        }
    });
    return false;
}

function cadastraCliente(){
    if($('#nome').val()==''){
        $('#nomeDiv').addClass('has-error');
        $('#nome').focus();
        alert('Campo NOME obrigatório');
    }else {

        var dados = {
            nome: $('#nome').val(),
            data_nascimento: $('#data_nascimento').val(),
            sexo: $('#sexo').val(),
            rg: $('#rg').val(),
            cpf: $('#cpf').val(),
            email: $('#email').val(),
            telefone: $('#telefone').val(),
            celular: $('#celular').val(),
            rua: $('#rua').val(),
            bairro: $('#bairro').val(),
            cidade: $('#cidade').val(),
            loc_embarque: $('#loc_embarque').val(),
            observacao: $('#observacao').val()
        };
        $.ajax({
            url: 'cadastrarCliente',
            type: 'POST',
            data: dados,
            success: function (data) {
                    $('#myModal').modal('toggle');
                    $('#alertCadastroSucesso').show('');
                //limpando campos
                    $('#nome').val('');
                    $('#data_nascimento').val('');
                    $('#sexo').val('');
                    $('#rg').val('');
                    $('#cpf').val('');
                    $('#email').val('');
                    $('#telefone').val('');
                    $('#celular').val('');
                    $('#rua').val('');
                    $('#bairro').val('');
                    $('#cidade').val('');
                    $('#loc_embarque').val('');
                    $('#observacao').val('');
            },
            error: function(data){
                $('#alertCadastroFalha').show();
            }
        });
    }
}