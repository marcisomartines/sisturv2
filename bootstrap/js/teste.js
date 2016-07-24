function getPage(url, div) {

	// - Limpa a janela antes de escrever
	if(div === 'janela') {
		$('#' + div).html("");
	}

	$.ajax({
		url: url,
		dataType: 'html',
		type: 'GET',
		beforeSend: function () {
			$('#load').slideDown();
			if (document.getElementById('btnSalvar') != null)
				document.getElementById('btnSalvar').disabled = true;

		},
		complete: function () {

			$('#load').slideUp();

			if (document.getElementById('btnSalvar') != null)
				document.getElementById('btnSalvar').disabled = false;

		},
		success: function (data, textStatus) {

			$('#' + div).html(data); 

		},
		error: function (xhr, er) {
			
			alert('Página não existe ou houve perda de conexão com a internet ' + xhr.status + ' ' + xhr.statusText);
		}
	});
}