/**
 * Created by marciso on 12/03/2017.
 */
 function limpaMotorista(){
 	fechaMsg();
 	$('#nome').val('');
 	$('#data_nascimento').val('');
 	$('#rg').val('');
 	$('#cpf').val('');
 	$('#cnh').val('');
 	$('#validade_cnh').val('');
 	$('#email').val('');
 	$('#telefone').val('');
 	$('#celular').val('');
 	$('#rua').val('');
 	$('#bairro').val('');
 	$('#cidade').val('');
 	$('#observacao').val('');
 }

 function acaoMotorista(){
     if($('#acao_cadastro').val()==1){
         cadastraMotorista();
     }else{
         editaMotorista();
     }
 }

 function listaMotorista(){
     $.ajax({
         url: 'listaMotorista',
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
             $('#motoristaLista').html("");
             $('#motoristaLista').html(data);
         }
     });

     return false;
 }

 function cadastraMotorista(){
     var dados = {
         nome 			 : $('#nome').val(),
         data_nascimento : $('#data_nascimento').val(),
         rg				 : $('#rg').val(),
         cpf			 : $('#cpf').val(),
         cnh			 : $('#cnh').val(),
         validade_cnh	 : $('#validade_cnh').val(),
         email			 : $('#email').val(),
         telefone		 : $('#telefone').val(),
         celular		 : $('#celular').val(),
         rua			 : $('#rua').val(),
         bairro			 : $('#bairro').val(),
         cidade			 : $('#cidade').val(),
         observacao 	 : $('#observacao').val()
     };

     $.ajax({
         url: 'cadastrarMotorista',
         type: 'POST',
         data: dados,
         beforeSend : function() {
             $.blockUI({
                 message: 'Salvando motorista...',
                 baseZ: 2000
             });
         },
         complete: function () {
             $.unblockUI();
         },
         success: function (data) {
             $('#cadastrarMotorista').modal('toggle');
             $('#alertCadastroSucesso').show();
             listaMotorista();
         },
         error: function(data){
             $('#cadastrarMotorista').modal('toggle');
             $('#alertCadastroFalha').show();
         }
     });
 }

 function editaMotorista(){
     var dados = {
         id_driver       : $('#id_driver').val(),
         nome 			 : $('#nome').val(),
         data_nascimento : $('#data_nascimento').val(),
         rg				 : $('#rg').val(),
         cpf			 : $('#cpf').val(),
         cnh			 : $('#cnh').val(),
         validade_cnh	 : $('#validade_cnh').val(),
         email			 : $('#email').val(),
         telefone		 : $('#telefone').val(),
         celular		 : $('#celular').val(),
         rua			 : $('#rua').val(),
         bairro			 : $('#bairro').val(),
         cidade			 : $('#cidade').val(),
         observacao 	 : $('#observacao').val()
     };

     $.ajax({
         url: 'editarMotorista',
         type: 'POST',
         data: dados,
         beforeSend : function() {
             $.blockUI({
                 message: 'Salvando motorista...',
                 baseZ: 2000
             });
         },
         complete: function () {
             $.unblockUI();
         },
         success: function (data) {
             $('#cadastrarMotorista').modal('toggle');
             $('#alertEditaSucesso').show('');
             //limpando campos
             listaMotorista();
         },
         error: function(data){
             $('#cadastrarMotorista').modal('toggle');
             $('#alertEditaFalha').show();
         }
     });
 }

 function editaBuscaMotorista(id_driver){
     limpaMotorista();

     var dados = {
         id_driver : id_driver
     };

     $.ajax({
         url: 'editaBuscaMotorista',
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
             var motorista = JSON.parse(data);

             $('#id_driver').val(motorista[0].id_drivers);
             $('#nome').val(motorista[0].nome);
             $('#data_nascimento').val(motorista[0].data_nascimento);
             $('#rg').val(motorista[0].rg);
             $('#cpf').val(motorista[0].cpf);
             $('#cnh').val(motorista[0].cnh);
             $('#validade_cnh').val(motorista[0].validade_cnh);
             $('#email').val(motorista[0].email);
             $('#telefone').val(motorista[0].telefone);
             $('#celular').val(motorista[0].celular);
             $('#rua').val(motorista[0].rua);
             $('#bairro').val(motorista[0].bairro);
             $('#cidade').val(motorista[0].cidade);
             $('#observacao').val(motorista[0].observacoes);
         }
     });
 }