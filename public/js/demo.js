function cortarTexto(){
	var tag = document.getElementById('user_nome');
	var valor = tag.innerHTML;
	var result = valor.split(" ");
	tag.innerHTML = result[0];
}
function ajustarBackground(){
	x = screen.width;
	y = screen.height;
	$('.background-index').css('width', x);
	$('.background-index').css('height', y);
}
$(document).ready(function () {
	cortarTexto();
	ajustarBackground();
});