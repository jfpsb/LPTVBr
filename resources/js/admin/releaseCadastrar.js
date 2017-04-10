$(document).ready(function() {
    var wrapper         = $(".musicasWrapper"); //Fields wrapper
    var add_button      = $(".add_combobox"); //Add button ID
    var i, x = 1;
    var vetorComboBox;
    
    // Carrega opcoes em combobox ao carregar página
    getOpcoes();
    
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        
        x++; //text box increment
        
        $(wrapper).append('<div><label class="musIndex">' + x + '. </label><select id="musica_' + x + '" class="comboboxMusica"></select><a href="#" class="link_remover">Remover</a></div>');
        
        gerenciaOpcoesAoAdicionarComboBox(x);
    });
    
    $(wrapper).on("click",".link_remover", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove();
        
        x--;
        
        vetorComboBox = document.getElementsByClassName("comboboxMusica");
        vetorLabel = document.getElementsByClassName("musIndex");
        
        for(i = 0; i < x; i++) {
        	$(vetorComboBox[i]).attr('id', 'musica_' + (i + 1));
        	$(vetorLabel[i]).html(i + 1 + '. ');
        }
    });
});

function gerenciaOpcoesAoAdicionarComboBox(index) {	
	getOpcoes();
};

function getOpcoes() {
	if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var comboboxes = document.getElementsByClassName("comboboxMusica");
            var i;
            
            // Guarda as posições já escolhidas pelo usuário
            var guardaPosicoes = [];
        	for(i = 0; i < comboboxes.length; i++) {
        		guardaPosicoes[i] = $(comboboxes[i]).val();
        	}
            
            for (i = 0; i < comboboxes.length; i++) {
				comboboxes[i].innerHTML = this.responseText;
				$(comboboxes[i]).val(guardaPosicoes[i]); // Reposiciona as escolhas do usuário feitas antes de atualizar
			}
        }
    };
    xmlhttp.open("GET","getOpcoesComboBox.php",true);
    xmlhttp.send();
}