$(document).ready(function() {
	var resultado = $(".resultado");
	var link = $(".link_remover");
	
	$(link).click(function(e){
        e.preventDefault();
        
        $(resultado).html("");
	});
});