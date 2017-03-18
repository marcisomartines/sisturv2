/**
 * Created by marciso on 16/03/2017.
 */

function limpaUsuario(){
    fechaMsg();
    $('#id_users').val('');
    $('#nome').val('');
    $('#usuario').val('');
    $('#email').val('');
    $('#senha').val('');
    $('#telefone').val('');
    $('#celular').val('');
    $('#tipo').val(0);
}

function acaoUsuario(){
    if($('#acao_cadastro').val()==1){
        cadastraUsuario();
    }else{
        editaUsuario();
    }
}

function listaUsuario(){
    $.ajax({
        url: 'listaUsuario',
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
            $('#usuarioLista').html("");
            $('#usuarioLista').html(data);
        }
    });

    return false;
}

function cadastraUsuario(){
    var dados = {
        nome_comp : $('#nome').val(),
        nome_user : $('#usuario').val(),
        email     : $('#email').val(),
        senha     : $('#senha').val(),
        telefone  : $('#telefone').val(),
        celular   : $('#celular').val(),
        tipo      : $('#tipo').val()
    };

    $.ajax({
        url: 'cadastrarUsuario',
        type: 'POST',
        data: dados,
        beforeSend : function() {
            $.blockUI({
                message: 'Salvando usuário...',
                baseZ: 2000
            });
        },
        complete: function () {
            $.unblockUI();
        },
        success: function (data) {
            $('#cadastrarUsuario').modal('toggle');
            $('#alertCadastroSucesso').show();
            listaUsuario();
        },
        error: function(data){
            $('#cadastrarUsuario').modal('toggle');
            $('#alertCadastroFalha').show();
        }
    });
}

function editaUsuario(){
    var dados = {
        id_users  : $('#id_users').val(),
        nome_comp : $('#nome').val(),
        nome_user : $('#usuario').val(),
        email     : $('#email').val(),
        senha     : $('#senha').val(),
        telefone  : $('#telefone').val(),
        celular   : $('#celular').val(),
        tipo      : $('#tipo').val()
    };

    $.ajax({
        url: 'editarUsuario',
        type: 'POST',
        data: dados,
        beforeSend : function() {
            $.blockUI({
                message: 'Salvando usuário...',
                baseZ: 2000
            });
        },
        complete: function () {
            $.unblockUI();
        },
        success: function (data) {
            $('#cadastrarUsuario').modal('toggle');
            $('#alertEditaSucesso').show('');
            //limpando campos
            listaUsuario();
        },
        error: function(data){
            $('#cadastrarUsuario').modal('toggle');
            $('#alertEditaFalha').show();
        }
    });
}

function editaBuscaUsuario(id_users){
    limpaUsuario();

    var dados = {
        id_users : id_users
    };

    $.ajax({
        url: 'editaBuscaUsuario',
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
            var usuario = JSON.parse(data);

            $('#id_users').val(usuario[0].id_users);
            $('#nome').val(usuario[0].nome_comp);
            $('#usuario').val(usuario[0].nome_user);
            $('#email').val(usuario[0].email);
            $('#senha').val(usuario[0].senha);
            $('#telefone').val(usuario[0].telefone);
            $('#celular').val(usuario[0].celular);
            $('#tipo').val(usuario[0].tipo);
        }
    });
}