<?php 

$smarty = new Template();
$clientes = new Clientes();

//Valores para o template
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PAG_LOGIN', Rotas::pag_MinhaConta());
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('CORREIO', 'http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCepEndereco.cfm');

if($_POST){ 
$email = $_POST['cli_email'];


$smarty->assign('EMAIL', $email);

}else{
$smarty->assign('EMAIL', '');


}
if(isset($_POST['cli_nome'])){
$cli_nome = $_POST['cli_nome'];

$smarty->assign('NOME', $cli_nome);    
}else{
$smarty->assign('NOME', '');
}

if(isset($_POST['cli_nome']) and isset($_POST['cli_email']) and isset($_POST['cli_cpf'])){

	$cli_nome = $_POST['cli_nome'];
	$cli_sobrenome = $_POST['cli_sobrenome'];
    $cli_data_nasc = $_POST['cli_data_nasc'];
    $cli_rg        = preg_replace("/\D+/", "", $_POST['cli_rg']);
    $cli_cpf       = preg_replace("/\D+/", "", $_POST['cli_cpf']); 
    $cli_ddd       = $_POST['cli_ddd'];
    $cli_fone      = $_POST['cli_fone'];
    $cli_celular   = $_POST['cli_celular'];
    $cli_endereco  = $_POST['cli_endereco'];
    $cli_numero    = $_POST['cli_numero'];
    $cli_bairro    = $_POST['cli_bairro'];
    $cli_cidade    = $_POST['cli_cidade'];
    $cli_uf        = $_POST['cli_uf'];
    $cli_cep       = $_POST['cli_cep'];
    $cli_email     = $_POST['cli_email'];
    $cli_senha     = $_POST['cli_senha'];
    $cli_data_cad  = Sistema::DataAtualUS();
    $cli_hora_cad  = Sistema::HoraAtual();
    $cli_user_name = $_POST['cli_user_name'];

    $clientes->Preparar($cli_nome, $cli_sobrenome, $cli_data_nasc, $cli_rg, $cli_cpf, $cli_ddd, $cli_fone, $cli_celular, $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade, $cli_uf, $cli_cep, $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha, $cli_user_name);

    $clientes->Inserir();

    $smarty->assign('NOME', $cli_nome);
    $smarty->assign('SITE', Config::SITE_NOME);
    $smarty->assign('EMAIL', $cli_email);
    $smarty->assign('SENHA', $cli_senha);
    $smarty->assign('PAG_LOGIN', Rotas::pag_MinhaConta());
    $smarty->assign('SITE_HOME', Rotas::get_SiteHOME());

    //$email = new EnviarEmail();

    //$assunto = 'Cadastro Efetuado - ' .Config::SITE_NOME;
    //$msg = $smarty->fetch('email_cliente_cadastro.tpl');
    //$destinatarios = array($cli_email, Config::SITE_EMAIL_ADM);
    //$email->Enviar($assunto, $msg, $destinatarios);


    // Mensagem ao cadastrar com sucesso
    $site_tema = Config::GET_TEMA;
    echo '<div id="preloader">
         <img class="preloader" src="'.$site_tema.'/assets/images/gif/loading.gif" alt="">
      </div>';
   Rotas::Redirecionar(1, Rotas::pag_ClienteConta());


    
   
}else{
	$smarty->display('cadastro.tpl');

}





// Favoritos
//$pedido = new Pedidos();
//$cliente = $_SESSION['CLI']['cli_id'];
//$cod = "teste2";
//$ref = "teste2";
//$smarty->assign('ADD_FAVORITO', $pedido->PedidoGravar($cliente, $cod, $ref));


// Sempre no final

?>