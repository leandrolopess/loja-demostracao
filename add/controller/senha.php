<?php 

$smarty = new Template();


$smarty->assign('ERRO', '');
$smarty->assign('SUCESSO', '');
$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());



if(isset($_POST['add_senha_atual']) and isset($_POST['add_senha'])){

	$senha_atual = md5($_POST['add_senha_atual']);
	$senha_nova = $_POST['add_senha'];
	$email = $_SESSION['ADM']['user_email'];

	if($senha_atual != $_SESSION['ADM']['user_pw']){   
    $smarty->assign('ERRO', '<center><div class="col-md-7 margin-top"><ul class="woo-error" role="alert">
   <li> A senha atual está incorreta, tente novamente</li>
   </ul></div></center>');
     // exit();
	}else{
		$user = new User();
   if ($user->AlterarSenha($senha_nova, $email)):        
    $smarty->assign('SUCESSO', '<center><div class="col-md-7 margin-top"><ul class="woo-sucesso" role="alert">
   <li> Senha alterada com sucesso, faça login com sua nova senha</li>
   </ul></div></center>');
       
       // faz redirecioamento para LOGOFF
        Rotas::Redirecionar(2, Rotas::get_SiteAdd() . '/logoff');

    else:

    endif;
	}

}



$smarty->display('add_senha.tpl');

?>