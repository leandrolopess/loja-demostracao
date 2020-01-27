// Preenchimento de CEP ViaCEP
		$(".cli_cep").focusout(function(){
			//Início do Comando AJAX
			$.ajax({
				//O campo URL diz o caminho de onde virá os dados
				//É importante concatenar o valor digitado no CEP
				url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
				//Aqui você deve preencher o tipo de dados que será lido,
				//no caso, estamos lendo JSON.
				dataType: 'json',
				//SUCESS é referente a função que será executada caso
				//ele consiga ler a fonte de dados com sucesso.
				//O parâmetro dentro da função se refere ao nome da variável
				//que você vai dar para ler esse objeto.
				success: function(resposta){
					//Agora basta definir os valores que você deseja preencher
					//automaticamente nos campos acima.
					$(".cli_endereco").val(resposta.logradouro);
					$("#complemento").val(resposta.complemento);
					$(".cli_bairro").val(resposta.bairro);
					$(".cli_cidade").val(resposta.localidade);
					$(".cli_uf").val(resposta.uf);
					//Vamos incluir para que o Número seja focado automaticamente
					//melhorando a experiência do usuário
					$(".cli_numero").focus();
				}
			});
		});


		// Verifica a força da senha
	function validarSenhaForca(){
	var senha = document.getElementsByClassName("senha")[0].value;
	var forca = 0;
	document.getElementById("impSenha").innerHTML = "Senha " + senha;

	if((senha.length >= 4) && (senha.length <= 7)){
		forca += 10;
	}else if(senha.length > 7){
		forca += 25;
	}

	if((senha.length >= 5) && (senha.match(/[a-z]+/))){
		forca += 10;
	}

	if((senha.length >= 6) && (senha.match(/[A-Z]+/))){
		forca += 25;
	}

	if((senha.length >= 7) && (senha.match(/[@#$%&;*]/))){
		forca += 25;
	}

	if(senha.match(/([1-9]+)\1{1,}/)){
		forca += 25;
	}

	mostrarForca(forca);
}

function mostrarForca(forca){
	document.getElementById("impForcaSenha").innerHTML = "Força: " + forca;

	if(forca < 30 ){
		document.getElementById("erroSenhaForca").innerHTML = "<span style='color: #ff0000'>Fraca</span>";
	}else if((forca >= 30) && (forca < 50)){
		document.getElementById("erroSenhaForca").innerHTML = "<span style='color: #FFD700'>Média</span>";
	}else if((forca >= 50) && (forca < 70)){
		document.getElementById("erroSenhaForca").innerHTML = "<span style='color: #7FFF00'>Forte</span>";
	}else if((forca >= 70) && (forca < 100)){
		document.getElementById("erroSenhaForca").innerHTML = "<span style='color: #008000'>Excelente</span>";
	}
}

// Mostrar senha
 $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye-slash fa-eye");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});


 // Script para ver o preview da imagem ao enviar imagem do produto
function previewImagem(){
var image = document.querySelector('input[name=pro_img]') .files[0];
var preview = document.querySelector('img[name=preview]');
var reader = new FileReader();
reader.onloadend = function(){
preview.src = reader.result;
 }
 if(image){
	reader.readAsDataURL(image);
 }else{
   preview.src = "";
 }	
}
// Preview da imagem ao editar o produto
function previewImagemAdc(){
var image = document.querySelector('input[name=pro_img_adc]') .files[0];
var preview = document.querySelector('img[name=preview_adc]');
var reader = new FileReader();
reader.onloadend = function(){
preview.src = reader.result;
 }
 if(image){
	reader.readAsDataURL(image);
 }else{
   preview.src = "";
 }	
}


// Script para ver o preview da imagem ao enviar imagem de banner
function previewImagemBanner(){
var image = document.querySelector('input[name=banner_img]') .files[0];
var preview = document.querySelector('img[name=preview_banner]');
var reader = new FileReader();
reader.onloadend = function(){
preview.src = reader.result;
 }
 if(image){
	reader.readAsDataURL(image);
 }else{
   preview.src = "";
 }	
}

function previewImagemBlog(){
var image = document.querySelector('input[name=blog_img]') .files[0];
var preview = document.querySelector('img[name=preview_blog]');
var reader = new FileReader();
reader.onloadend = function(){
preview.src = reader.result;
 }
 if(image){
	reader.readAsDataURL(image);
 }else{
   preview.src = "";
 }	
}

// Facebook Share
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Telegran Share
document.addEventListener("DOMContentLoaded", function() {
var url = encodeURIComponent(window.location.href); //url
var title = encodeURIComponent(document.title); //título
var telegramLink = "https://telegram.me/share/url?url=" + url + "&text=" + title;
document.getElementById("telegram-share-btt").href = telegramLink;
}, false);

// Whats Share
document.addEventListener("DOMContentLoaded", function() {
//conteúdo que será compartilhado: Título da página + URL
var conteudo = encodeURIComponent(document.title + " " + window.location.href);
//altera a URL do botão
document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
}, false);