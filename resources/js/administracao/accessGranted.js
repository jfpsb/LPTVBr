/**
 * 
 */

$(function() {
	$('#admin-tabView').puitabview();
});

$(document).ready(function() {	
	$(".linksLista").on("click", function() {
		var id = $(this).attr('id');
		$(".adminOpcaoContent").load("paginasCRUD/" + id + ".php");
	});
});