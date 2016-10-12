/**
 * Script que controla a troca de texto baseado na seleção do usuário na combobox
 */

function voltarTela() {
    window.history.back();
}

$(document).ready(function() {
    $("#assuntoSelect").change(function() {
        $('#escolhaSelect').html($(this).val());

        if($(this).val() == "erro-musica") {
            var texto = "Em caso de erros em músicas em títulos, traduções, imagens, vídeos, datas, álbuns, compositores, artistas entre outros.";
        }
        else if($(this).val() == "erro-video") {
        	var texto = "Em caso de erros em vídeos em títulos, legendas, imagens, datas, álbuns entre outros.";            
        }
        else if($(this).val() == "erro-site") {
        	var texto = "Em caso de erros no site em relação a layout (erros em versão PC e mobile), links, imagens não encontradas,<br> páginas não encontradas."
            	+ "Você também pode dar sugestões de cores, layout, disposição de conteúdo entre outros.<br>Informe o link da página com problemas.";
        }
        else if($(this).val() == "pedido-legenda"){
        	var texto = "Faça seus pedidos de legendas por aqui. Informe o link para o vídeo que deseja que seja legendado.";
        }
        else {
        	var texto = "Assuntos variados além dos já listados.";
        }
        
        $('#assuntoSelectedTexto').html(texto);
    }).change();
});