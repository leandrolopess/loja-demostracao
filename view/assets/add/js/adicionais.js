// Script para ver o preview da imagem ao enviar imagem de perfil ao criar usuário
function previewImagem(){
var image = document.querySelector('input[name=image]') .files[0];
var preview = document.querySelector('img');
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

// Script para selecionar todas as checkboxes
$('#select-all').click(function(event) {   
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;                        
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;                       
        });
    }
});