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
                    $('#clienteLista').html("");
                    $("#course").val('');
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
    //pessoa juridica
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
                    $('#clienteLista').html("");
                    $("#course").val('');
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
                    $('#clienteLista').html("");
                    $("#course").val('')
                }
            });
        }
    }
}

function editaBuscaCliente(id_client){

    var dados = {
        id_clients : id_client
    };
    var item =[];
    $.ajax({
        url: 'editarBuscaCliente',
        type: 'POST',
        data: dados,
        success: function(data){
            var cliente = JSON.parse(data);
            $('#id_cliente').val(cliente[0].id_clients);
            if(cliente[0].tipo_cliente==1){//cliente juridico
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
            }else{//cliente fisico
                $('#nome').val(cliente[0].nome);
                $('#data_nascimento').val(cliente[0].data_nascimento);
                $('#sexo').val(cliente[0].sexo);
                $('#rg').val(cliente[0].rg);
                $('#cpf').val(cliente[0].cpf);
                $('#email').val(cliente[0].email);
                $('#telefone').val(cliente[0].telefone);
                $('#celular').val(cliente[0].celular);
                $('#rua').val(cliente[0].rua);
                $('#bairro').val(cliente[0].bairro);
                $('#cidade').val(cliente[0].cidade);
                $('#observacao').val(cliente[0].observacao);
                $('#loc_embarque').val(cliente[0].loc_embarque);
            }
        }
    });
}

function editaCliente(){
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
                tipo: $('#tipo_cadastro').val(),
                id_cliente: $('#id_cliente').val()
            };

            $.ajax({
                url: 'editarCliente',
                type: 'POST',
                data: dados,
                success: function (data) {
                    $('#myModal').modal('toggle');
                    $('#alertEditaSucesso').show('');
                    $('#clienteLista').html("");
                    $("#course").val('');
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
                    $('#alertEditaFalha').show();
                }
            });
        }
    }
    //pessoa juridica
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
                tipo: $('#tipo_cadastro').val(),
                id_cliente: $('#id_cliente').val()
            };

            $.ajax({
                url: 'editarCliente',
                type: 'POST',
                data: dados,
                success: function (data) {
                    $('#myModal').modal('toggle');
                    $('#alertCadastroSucesso').show('');
                    $('#clienteLista').html("");
                    $("#course").val('');
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

function acaoCliente(){
    if($('#acao_cadastro').val()==1){
        cadastraCliente();
    }else{
        editaCliente();
    }
}

function limpaCliente(){
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
}