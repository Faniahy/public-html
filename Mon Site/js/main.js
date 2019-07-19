$(document).ready(function(){

	$('.afficher').click(function(){

		$('h1').css('color','red');

		/*console.log("La couleur vient de changer en rouge!");
		alert("La couleur vient de changer en rouge!");*/

		/*$('h1').hide();*/

		$('.texte').html("<div>Je suis là!</div>");

		$('#content').css({
			'background-color':'blue',
			'transform':'scale(0.25)'
		});
	});


	$("#fb").click(function(){
	alert("Hello les gens");
	});

});


