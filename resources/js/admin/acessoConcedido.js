$(function() {
	$('#admin-tabView').puitabview();
});

function getDadosParaTabela(id, arquivoDeConsulta) {
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById(id).innerHTML = this.responseText;
			}
		}
	};
	xmlhttp.open("GET", arquivoDeConsulta, true);
	xmlhttp.send();
}