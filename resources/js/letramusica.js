var letraPathTrad = "/musicas/letras/traducao/";
var letraPathOrig = "/musicas/letras/original/";

function loadLetra(album, musica) {
	loadTraducao(album, musica);
	loadOriginal(album, musica);
}

function loadTraducao(album, musica) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("tradTextArea").innerHTML = xhttp.responseText;
		} else {
			if (xhttp.status == 404 || xhttp.status == 204) {
				document.getElementById("tradTextArea").innerHTML = "Não há letra disponível"
						+ " para essa música.";
			}
		}
	};

	xhttp.open("GET", letraPathTrad + album + "/" + musica + ".txt", true);
	xhttp.send();
}

function loadOriginal(album, musica) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("origTextArea").innerHTML = xhttp.responseText;
		} else {
			if (xhttp.status == 404 || xhttp.status == 204) {
				document.getElementById("origTextArea").innerHTML = "Não há letra disponível"
						+ " para essa música.";
			}
		}
	};

	xhttp.open("GET", letraPathOrig + album + "/" + musica + ".txt", true);
	xhttp.send();
}