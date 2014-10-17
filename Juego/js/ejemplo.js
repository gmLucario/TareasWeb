//$==Jquery(atributo-etiquetaAmodificar).[que es lo que hara]
//document==el archivo en general
$(document).ready(function(){
	//Referirnos a etiquetas:
	$("p").click(function(){   //Alaa etiqueta p le haras esto cuando le des click
		$(this).hide();
});
	//Para referirnos a una clase es con punto. 
	$(".un1").click(function(){   //Alaa etiqueta p le haras esto cuando le des click
		$(this).hide();
	});

});

$("button").click(function(){
	$("p").hide("slow");
});
//Boton para mostrar
$("#m").click(function(){
	$("p").show("slow");
});

//Boton que muestra y oculta
$("#dos").click(function(){
	$("p").toggle("slow");
});
/
$("#p1").mouseenter(function(){
	alert("Estas sobre p1");
});

$(function() {
    $( "#selectable" ).selectable();
  });
//Te madna alerta cuando entras y cuando sales
$("#p1").hover(function(){
	alert("Entraste");
},function(){
	alert("Saliste");
});

//Ocultar agregar los divs
$("#tres").click(function(){
	var d1 = $("#div1");
	d1.fadeToggle("slow");
	$("#div2").fadeToggle("slow");
});

$("#eje").click(function(){
	$("#panel").slideToggle();
});

$("btn3").click(function(){
	$("#div3").animate({left;'500px',opacity});
});




