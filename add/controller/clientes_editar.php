<?php 

$smarty = new Template();
$pedidos = new Pedidos();
$clientes = new Clientes();


$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('ERRO', '');
$smarty->assign('SUCESSO', '');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_SITE_ADD', Rotas::get_SiteAdd());
$smarty->assign('PAG_CLIENTES', Rotas::pag_Add_Clientes());


// Verifica se o usuário está logado
if(Login::Logado()){
   $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
   $smarty->assign('CPF', Sistema::formatCnpjCpf($_SESSION['CLI']['cli_cpf']));
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
    $cli_data_cad  = $_SESSION['CLI']['cli_data_cad'];
    $cli_hora_cad  = $_SESSION['CLI']['cli_hora_cad'];;

       
    }else{
    if(isset(Rotas::$pag[1])){
    $id = Rotas::$pag[1];   
	}else{
	$id = 0;
	}

    $id = Rotas::$pag[1];
    $clientes->GetClientesID($id); 
    foreach ($clientes->GetItens()[1] as $campo => $valor) {
    $smarty->assign(strtoupper($campo), $valor);
    }

    $smarty->display('add_clientes_editar.tpl');

}



?>