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

 }

 function listaMotorista(){

 }

 function cadastraMotorista(){

 }

 function editaMotorista(){

 }

 function editaBuscaMotorista(id_drivers){
     limpaOnibus();

     var dados = {
         id_cars : id_cars
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

             $('#id_driver').val(motorista[0].id_driver);
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