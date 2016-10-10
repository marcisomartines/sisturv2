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
    
}