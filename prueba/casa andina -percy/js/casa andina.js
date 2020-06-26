/*var imagenes=new Array(
	['files/portada1.jpg'],
	['files/portada2.jpg',],
	['files/portada3.jpg'],
	['files/portada4.jpg']
);
var contador=0;

/**
 * Funcion para cambiar la imagen y link
 
function rotarImagenes()
{
	// cambiamos la imagen y la url
	contador++
	document.getElementById("portada").src=imagenes[contador%imagenes.length][0];
}

/**
 * Función que se ejecuta una vez cargada la página
 *
onload=function()
{
	// Cargamos una imagen aleatoria
	rotarImagenes();

	// Indicamos que cada 5 segundos cambie la imagen
	setInterval(rotarImagenes,3000);
}*/
var meses = new Array ("Ene.","Feb.","Mar.","Abr.","May.","Jun.","Jul.","Ago.","Sep.","Oct.","Nov.","Dic.");
var diasSemana = new Array("DOMINGO","LUNES","MARTES","MIÉRCOLES","JUEVES","VIERNES","SÁBADO");
var diasSemanaS = new Array("LUNES","MARTES","MIÉRCOLES","JUEVES","VIERNES","SÁBADO","DOMINGO");
var f=new Date();

document.getElementById("añoE").innerHTML = f.getFullYear();
document.getElementById("añoS").innerHTML = f.getFullYear();

document.getElementById("mesE").innerHTML = meses[f.getMonth()];
document.getElementById("mesS").innerHTML = meses[f.getMonth()];

document.getElementById("diaE").innerHTML = f.getDate();
document.getElementById("diaS").innerHTML = f.getDate() +1;

document.getElementById("nombE").innerHTML = diasSemana[f.getDay()];
document.getElementById("nombS").innerHTML = diasSemanaS[f.getDay()];