$(document).ready(function() {
    var wrapper         = $(".musicasWrapper"); //Fields wrapper
    var add_button      = $(".add_combobox"); //Add button ID
    var i, x = 1;
    var vetorComboBox, vetorLabel;
    
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        
        var items = document.getElementById('musica_' + x).options;
        
        x++; //text box increment
        
        $(wrapper).append('<div><label class="musIndex">' + x + '. </label><select id="musica_' + x + '" class="comboboxMusica"><option value=\"0\">Selecione a Música</option></select><a href="#" class="link_remover">Remover</a></div>'); //add input box
        
        populaCombobox(HTMLOptionElementParaArray(items));
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

function populaCombobox(array) {
	var guardaPosicoes = [];
	
	vetorComboBox = document.getElementsByClassName("comboboxMusica");
	
	for(i = 0; i < vetorComboBox.length; i++) {
		guardaPosicoes[i] = $(vetorComboBox[i]).val();
	}
	
	var option = "<option value=\"0\">Selecione a Música</option>";
	
	for (i = 0; i < array.length; i++){
		option += "<option value=" + (i + 1) + ">" + array[i] + "</option>;"
	}
	
	$(".comboboxMusica").html(option);
	
	// Reposiocinando escolhas anteriores
	for(i = 0; i < vetorComboBox.length; i++) {
		$(vetorComboBox[i]).val(guardaPosicoes[i]);
	}
};

function HTMLOptionElementParaArray(items) {
	var c;
	var array = [];
	
	for(c = 1; c < items.length; c++) {
		array[c - 1] = items[c].text;
	}
	
	return array;
}


