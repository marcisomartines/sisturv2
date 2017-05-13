/**
 * Created by marciso on 10/05/2017.
 */
function Ajax(dados,metodo){
    $.ajax({
        url: metodo,
        type: 'POST',
        data: dados,
        beforeSend : function() {
            $.blockUI({
                message: 'Processando, aguarde...',
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