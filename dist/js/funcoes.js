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
    if($('#tipo_cadastro').val()==0 ) {//pessoa fisica
        if ($('#nome').val() == '') {
            $('#nomeDiv').addClass('has-error');
            $('#nome').focus();
            alert('Campo NOME obrigatório');
        } else {
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
                observacao: $('#observacao').val(),
                tipo: $('#tipo_cadastro').val()
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

    if($('#tipo_cadastro').val()==1) {
        if ($('#nomej').val() == '') {
            $('#razaoDiv').addClass('has-error');
            $('#nomej').focus();
            alert('Campo RAZÃO SOCIAL obrigatório');
        } else {
            var dados = {
                nome: $('#nomej').val(),
                email: $('#emailj').val(),
                telefone: $('#telefonej').val(),
                celular: $('#celularj').val(),
                rua: $('#ruaj').val(),
                bairro: $('#bairroj').val(),
                cidade: $('#cidadej').val(),
                responsavel: $('#responsavel').val(),
                cnpj: $('#cnpj').val(),
                contato1: $('#contato1').val(),
                contato2: $('#contato2').val(),
                contato3: $('#contato3').val(),
                cont_tel1: $('#cont_tel1').val(),
                cont_tel2: $('#cont_tel2').val(),
                cont_tel3: $('#cont_tel3').val(),
                cont_email1: $('#cont_email1').val(),
                cont_email2: $('#cont_email2').val(),
                cont_email3: $('#cont_email3').val(),
                tipo: $('#tipo_cadastro').val()
            };

            $.ajax({
                url: 'cadastrarCliente',
                type: 'POST',
                data: dados,
                success: function (data) {
                    $('#myModal').modal('toggle');
                    $('#alertCadastroSucesso').show('');
                    //limpando campos
                    $('#nomej').val('');
                    $('#emailj').val('');
                    $('#telefonej').val('');
                    $('#celularj').val('');
                    $('#ruaj').val('');
                    $('#bairroj').val('');
                    $('#cidadej').val('');
                    $('#responsavel').val('');
                    $('#cnpj').val('');
                    $('#contato1').val('');
                    $('#contato2').val('');
                    $('#contato3').val('');
                    $('#cont_tel1').val('');
                    $('#cont_tel2').val('');
                    $('#cont_tel3').val('');
                    $('#cont_email1').val('');
                    $('#cont_email2').val('');
                    $('#cont_email3').val('');
                },
                error: function (data) {
                    $('#alertCadastroFalha').show();
                }
            });
        }
    }
}

function editaCliente(id_client){

    var dados = {
        id_clients : id_client
    };
    var item =[];
    $.ajax({
        url: 'editarCliente',
        type: 'POST',
        data: dados,
        success: function(data){
            var cliente = JSON.parse(data);
            if(cliente[0].tipo_cliente==1){
                $('#juridicoTab').attr('class','active');
                $('#juridica').attr('class','tab-pane fade in active active');
                $('#fisicoTab').removeAttr('class');
                $('#fisico').attr('class','tab-pane fade');
                //inserindo valor
                $('#nomej').val(cliente[0].nome);
                $('#emailj').val(cliente[0].email);
                $('#telefonej').val(cliente[0].telefone);
                $('#celularj').val(cliente[0].celular);
                $('#ruaj').val(cliente[0].rua);
                $('#bairroj').val(cliente[0].bairro);
                $('#cidadej').val(cliente[0].cidade);
                $('#responsavel').val(cliente[0].responsavel);
                $('#cnpj').val(cliente[0].cnpj);
                $('#contato1').val(cliente[0].contato1);
                $('#contato2').val(cliente[0].contato2);
                $('#contato3').val(cliente[0].contato3);
                $('#cont_tel1').val(cliente[0].cont_tel1);
                $('#cont_tel2').val(cliente[0].cont_tel2);
                $('#cont_tel3').val(cliente[0].cont_tel3);
                $('#cont_email1').val(cliente[0].cont_email1);
                $('#cont_email2').val(cliente[0].cont_email2);
                $('#cont_email3').val(cliente[0].cont_email3);
            }else{
                
            }
        }
    });
}