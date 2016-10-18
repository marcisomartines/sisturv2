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
    var dados ={
        nome :          $('#nome').val(),
        data_nascimento:$('#data_nascimento').val(),
        sexo:           $('#sexo').val(),
        rg:             $('#rg').val(),
        cpf:            $('#cpf').val(),
        email:          $('#email').val(),
        telefone:       $('#telefone').val(),
        celular:        $('#celular').val(),
        rua:            $('#rua').val(),
        bairro:         $('#bairro').val(),
        cidade:         $('#cidade').val(),
        loc_embarque:   $('#loc_embarque').val(),
        observacao:     $('#observacao').val()
    };
    $.ajax({
        url : 'cadastrarCliente',
        type: 'POST',
        data: dados,
        success: function(data){
            
        }
    });
}