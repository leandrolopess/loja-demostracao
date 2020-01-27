<?php
/* Smarty version 3.1.33, created on 2019-10-30 15:04:08
  from 'D:\xampp\htdocs\loja\add\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db9d0988bf1d9_56976632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dbe745b018ba2e32427bf601bfa19c89dd2fa94' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja\\add\\view\\home.tpl',
      1 => 1572458645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db9d0988bf1d9_56976632 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="wrapper">
  <!-- Cabeçalho -->
<?php echo '<?php ';?>require_once('inc/header.php'); <?php echo '?>';?>
<div class="container-fluid body-section">
<div class="row"> 
<div class="col-md-12">
<div class="msg-user">
<!-- Mensage de boas vinda ao usuário -->
<h4 class="mt-4 pull-right">Bem vindo, <?php echo '<?php ';?>echo ucfirst($_SESSION['username']);<?php echo '?>';?></h4>
</div>
<h1><i class="fas fa-tachometer-alt"></i> Painel de Controle </h1> <hr>
<!-- Conteudo -->
<div class="row tag-boxes">
<!-- Painel Clientes -->
<div class="col-md-6 col-lg-4">
<div class="panel panel-primary">
<div class="panel-heading">
<div class="row">
<div class="col-xs-3 col-lg-3">
<a href="clientes.php"><i class="fas fa-users white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a  class="white" href="clientes.php">Clientes</a></div>
</div>
</div>
</div>
<a href="clientes.php">
<div class="panel-footer blue">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fas fa-arrow-circle-right"></i></span>
</div>
</a>
</div>
</div>

<!-- Painel Carros -->
<div class="col-md-6 col-lg-4">
<div class="panel panel-red">
<div class="panel-heading">
<div class="row">
<div class="col-xs-3 col-lg-3 panel-red">
<a href="carros.php"><i class="fas fa-car white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a style="color:#FFF;" class="white" href="carros.php">Carros</a></div>
</div>
</div>
</div>
<a href="carros.php">
<div class="panel-footer">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fas fa-arrow-circle-right"></i> </span>
</div>
</a>
</div>
</div>

<!-- Painel Serviços -->
<div class="col-md-6 col-lg-4">
<div class="panel panel-yellow">
<div class="panel-heading">
<div class="row">
<div class="col-xs-3 col-lg-3">
<a href="servicos.php"><i class="fas fa-wrench white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a style="color:#FFF;" class="white" href="servicos.php">Serviços</a></div>
</div>
</div>
</div>
<a href="servicos.php">
<div class="panel-footer">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fas fa-arrow-circle-right"></i> </span>
</div>
</a>
</div>
</div>
</div>
    
</div><!--/Row tags -->
</div><!--/Col 9-->
</div><!--/Row-->
</div><!--/Container--><?php }
}
