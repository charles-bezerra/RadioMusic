function cortarTexto(){
	var tag = document.getElementById('user_nome');
	var valor = tag.innerHTML;
	var result = valor.split(" ");
	tag.innerHTML = result[0];
}
$(document).ready(function () {
	cortarTexto();
});