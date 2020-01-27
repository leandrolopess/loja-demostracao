<?php 

date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION)){
	session_start();
	
}


require '../lib/autoload.php';

$smarty = new Template();
$smarty->assign('ERRO', '');
$smarty->assign('SHAKE', '');
$smarty->assign('SUCESSO', '');

 if(isset($_POST['recovery'])):
    
 
     // obejto USER
     $user = new User();
    // passo alguns valores
    $email = $_POST['txt_email'];
     $senha = Sistema::GerarSenha();
   // verifico se tem este email na tabela 
     if($user->GetUserEmail($email) > 0):
        
         // faz alteração 
         $user->AlterarSenha($senha, $email);  
        
           // apos alterar envia email com a nova senha
          $enviar = new EnviarEmail();
         
         $assunto = 'Nova senha solicitada para a área administrativa do site '. Sistema::DataAtualBR();
         $destinatarios = array($email,  Config::SITE_EMAIL_ADM);
         $msg = ' Foi solicitado uma nova senha para a área administrativa do site 
         <br> sua nova senha:'.$senha;
         
         
          $enviar->Enviar($assunto, $msg, $destinatarios);
            // echo '<div class="alert alert-success"> Foi enviado um email com a NOVA SENHA  </div>';
          $smarty->assign('SUCESSO', '<center><div class="alert alert-success">Foi enviado uma nova senha para seu email</div></center>');

          else: 
         // echo '<div class="alert alert-danger"> Email não encontrado </div>';
          $smarty->assign('ERRO', '<center><div class="alert alert-danger">Email não encontrado</div></center>');
     endif;
  endif;




 if(isset($_POST['txt_logar']) && isset($_POST['txt_email'])){
	$user = $_POST['txt_email'];
	$senha = $_POST['txt_senha'];
	$login = new Login();
	if($login->GetLoginADM($user, $senha)){
		Rotas::Redirecionar(0, 'index.php');
		exit();
	}else{
		$smarty->assign('ERRO', '<center><div class="alert alert-danger">Login incorreto, tente novamente</div></center>');
		$smarty->assign('SHAKE', 'animated shake');
	}
}

if(isset($_POST['txt_logar']) && isset($_POST['txt_email'])){
	$user = $_POST['txt_email'];
	$senha = $_POST['txt_senha'];
	$login = new Login();
	if($login->GetLoginNomeADM($user, $senha)){
		Rotas::Redirecionar(0, 'index.php');
		exit();
	}else{
		$smarty->assign('ERRO', '<center><div class="alert alert-danger">Login incorreto, tente novamente</div></center>');
		$smarty->assign('SHAKE', 'animated shake');
	}
}


$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('HOME', Rotas::get_SiteHOME());

$smarty->display('add_login.tpl');