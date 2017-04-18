$(document).ready(function() {
    var resultado = $(".resultado");
	var link = $(".link_remover_resultado");
    
    // Carrega opcoes em combobox ao carregar página
    getOpcoesTipoVideo();
    
    $(link).click(function(e) {
		e.preventDefault();

		$(resultado).html("");
	});
});

function getOpcoesTipoVideo() {
	if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var combobox = document.getElementById("tipoVideo");
            
            combobox.innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","retornaTipoVideoComboBox.php",true);
    xmlhttp.send();
}