$(document).ready(function() {
	var resultado = $(".resultado");
	var link = $(".link_remover");

	$(link).click(function(e) {
		e.preventDefault();

		$(resultado).html("");
	});

	$('input[type=radio][name=escolhaLetra]').change(function() {
		if (this.value == 'arquivo') {
			getCamposParaLetra("camposLetraArquivo.html");
		} else {
			getCamposParaLetra("camposLetraComboBox.html");
			getOpcoesComboBoxMusica();
		}
	});
	
	getCamposParaLetra("camposLetraArquivo.html");
});

function getOpcoesComboBoxMusica() {
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var comboboxes = document.getElementsByClassName("comboBoxMusica");
			var i;

			for (i = 0; i < comboboxes.length; i++) {
				comboboxes[i].innerHTML = this.responseText;
			}
		}
	};

	xmlhttp.open("GET", "retornaMusicaParaComboBoxCadastroMusica.php", true);
	xmlhttp.send();
}

function getCamposParaLetra(arquivoFonte) {
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var container = document.getElementById("letraContainer");

			container.innerHTML = this.responseText;
		}
	};

	xmlhttp.open("GET", arquivoFonte, true);
	xmlhttp.send();
}