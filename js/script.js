/******A Fazer******
[x] Tema escuro
[] Contador de tempo
********************/

function criaCookie(nomeCookie, valor, dias) {
	// declara as variáveis
	var expires;
	var date;
	var value;

	// cria um objeto do tipo data
	date = new Date();

	// define a data com base em dias
	date.setTime(date.getTime() + (dias * 24 * 60 * 60 * 1000));

	// converte a data para string no formato UTC(Tempo Universal Coordenado)
	expires = date.toUTCString();

	// pega o valor recebido pela função
	value = valor;

	// cria e atribui os valores do cookie
	document.cookie = nomeCookie + "=" + value + "; expires=" + expires + "; path=/";

	return true;
}

function lerCookies() {
	var cookies = document.cookie;
	if (cookies == "") {
		return "Não há cookies";
	}
	else {
		return document.cookie;
	}
}

function lerCookie(nomeCookie) {
	var name = nomeCookie + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}

function apagaCookie(nomeCookie) {
	criaCookie(nomeCookie, "", -1);
}

function login(formulario) {
	// codigo login
	usuario = document.forms["cadastro"]["nome"].value;
	prontuario = document.forms["cadastro"]["pront"].value;
	curso = document.forms["cadastro"]["curso"].value;
	modulo = document.forms["cadastro"]["modulo"].value;
	tipodeteste = document.forms["cadastro"]["tipo"].value;

	criaCookie('usuario', usuario, 1);
	criaCookie('prontuario', prontuario, 1);
	criaCookie('curso', curso, 1);
	criaCookie('modulo', modulo, 1);
	criaCookie('tipodeteste', tipodeteste, 1);

	return true;
}

function logoff() {
	// codigo logoff
	// pega todos os cookies do site e apaga-os
	cookies = document.cookie;
	splitCookies = cookies.split(";");
	for (i = 0; i < splitCookies.length; i++) {
		splitCookie = splitCookies[i].split("=");
		apagaCookie(splitCookie[0]);
	}
	// redireciona para a pagina inicial
	window.location.replace("index.php");
}

function checaUsuario() {
	usuario = lerCookie("usuario");
	tag = document.getElementById("usuario");
	if (usuario != "") {
		splitNome = usuario.split(" ");
		nomeUsuario = splitNome[0];
		tag.innerHTML = nomeUsuario;
		tag.parentNode.classList.remove('oculta');
	}
	else {
		tag.parentNode.classList.add('oculta');
	}
}

function init() {
	checaUsuario();
}



//Questões:

function esconde() {
	var esc = document.getElementsByClassName('questao');
	var totalQuestoes = esc.length;
	for (x = 0; x < totalQuestoes; x++) {
		esc[x].style.display = "none";
	}
}



function setProgress(numero) {
	document.getElementById('progresso').innerHTML = '<progress max="25" value="' + numero + '"></progress>';

}

function tema() {
	$('#form1').toggleClass('dark');
	$('.tema').hide('explode', {}, 500);
	$('.tema').show('explode', {}, 500);
	//  $('#form1').effect('',{},1000);
}

$('#esconder').click(function () {
	//$('aside').slideToggle();
	$('div').removeClass('col-sm-10');
	$('aside').toggle({ width: '0px' });
});

function old() {
	if ($('#showOld').hasClass('glyphicon-chevron-up')) {
		$('#showOld').removeClass('glyphicon-chevron-up');
		$('#showOld').addClass('glyphicon-chevron-down');
		$('#oldNews').slideToggle();
	}
	else {
		$('#oldNews').slideToggle();
		$('#showOld').removeClass('glyphicon-chevron-down');
		$('#showOld').addClass('glyphicon-chevron-up');
	}
}

$('#alunoif').click(function () {
	$('#checaAluno').hide('explode', {}, 1000);
	$('#cadastro').toggleClass('oculta');
	$('#checaAluno').toggleClass('oculta');
	$('#tipoaluno').val('IF');
});

$('#naoaluno').click(function () {
	$('#checaAluno').hide('explode', {}, 1000);
	$('#tipoaluno').val('NA');
	$('#cadastro').toggleClass('oculta');
	$('#checaAluno').toggleClass('oculta');
	$('#pront,#lpront,#curso,#lcurso,#modulo,#lmodulo').toggleClass('oculta');


});

//Modal
$('#best').click(function () {

	$('#myModal').modal('show');
});


//Animaçoes da página Sobre
$('.contato,.contato2,.contato3').click(function () {
	$(this).effect('explode', { pieces: 30 }, 1000, function () { $(this).show('explode', { pieces: 30 }, 1000); });
});

//Requisições AjaX

$('#login').click(function(){
	alert('Verificando...');
});






/****************************************************** 
	FUNÇÕES PARA MOSTRAR E ESCONDER AS QUESTÕES:

	O código abaixo não deve ser editado. é melhor
	deixa-lo assim, tá uma gambiarra mas funciona
	muito bem. Só irei muda-lo quando achar um jeito
	melhor para se fazer isso.
******************************************************/
function showq1() {
	numero = 1;
	setProgress(numero);
	esconde();
	//document.getElementById('linkq1').style.backgroundColor = 'red';
	document.getElementById('questao1').style.display = 'block';
}

function showq2() {
	//document.getElementById('linkq2').style.backgroundColor = 'red';
	numero = 2;
	setProgress(numero);
	esconde();
	document.getElementById('progresso').innerHTML = '<progress max="25" value="2"></progress>';
	document.getElementById('questao2').style.display = 'block';
}

function showq3() {
	numero = 3;
	setProgress(numero);
	esconde();
	document.getElementById('questao3').style.display = 'block';
}

function showq4() {
	numero = 4;
	setProgress(numero);
	esconde();
	document.getElementById('questao4').style.display = 'block';
}

function showq5() {
	numero = 5;
	setProgress(numero);
	esconde();
	document.getElementById('questao5').style.display = 'block';
}

function showq6() {
	numero = 6;
	setProgress(numero);
	esconde();
	document.getElementById('questao6').style.display = 'block';
}

function showq7() {
	numero = 7;
	setProgress(numero);
	esconde();
	document.getElementById('questao7').style.display = 'block';
}

function showq8() {
	numero = 8;
	setProgress(numero);
	esconde();
	document.getElementById('questao8').style.display = 'block';
}

function showq9() {
	numero = 9;
	setProgress(numero);
	esconde();
	document.getElementById('questao9').style.display = 'block';
}

function showq10() {
	numero = 10;
	setProgress(numero);
	esconde();
	document.getElementById('questao10').style.display = 'block';
}

function showq11() {
	numero = 11;
	setProgress(numero);
	esconde();
	document.getElementById('questao11').style.display = 'block';
}

function showq12() {
	numero = 12;
	setProgress(numero);
	esconde();
	document.getElementById('questao12').style.display = 'block';
}

function showq13() {
	numero = 13;
	setProgress(numero);
	esconde();
	document.getElementById('questao13').style.display = 'block';
}

function showq14() {
	numero = 14;
	setProgress(numero);
	esconde();
	document.getElementById('questao14').style.display = 'block';
}

function showq15() {
	numero = 15;
	setProgress(numero);
	esconde();
	document.getElementById('questao15').style.display = 'block';
}

function showq16() {
	numero = 16;
	setProgress(numero);
	esconde();
	document.getElementById('questao16').style.display = 'block';
}

function showq17() {
	numero = 17;
	setProgress(numero);
	esconde();
	document.getElementById('questao17').style.display = 'block';
}

function showq18() {
	numero = 18;
	setProgress(numero);
	esconde();
	document.getElementById('questao18').style.display = 'block';
}

function showq19() {
	numero = 19;
	setProgress(numero);
	esconde();
	document.getElementById('questao19').style.display = 'block';
}

function showq20() {
	numero = 20;
	setProgress(numero);
	esconde();
	document.getElementById('questao20').style.display = 'block';
}

function showq21() {
	numero = 21;
	setProgress(numero);
	esconde();
	document.getElementById('questao21').style.display = 'block';
}

function showq22() {
	numero = 22;
	setProgress(numero);
	esconde();
	document.getElementById('questao22').style.display = 'block';
}

function showq23() {
	numero = 23;
	setProgress(numero);
	esconde();
	document.getElementById('questao23').style.display = 'block';
}

function showq24() {
	numero = 24;
	setProgress(numero);
	esconde();
	document.getElementById('questao24').style.display = 'block';
}

function showq25() {
	numero = 25;
	setProgress(numero);
	esconde();
	document.getElementById('questao25').style.display = 'block';
}
