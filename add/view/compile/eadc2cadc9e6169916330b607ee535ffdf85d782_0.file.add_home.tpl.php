<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-06 01:32:05
  from 'D:\xampp\htdocs\loja_adaptada\add\view\add_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5de9cbb532f428_77782508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eadc2cadc9e6169916330b607ee535ffdf85d782' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\add\\view\\add_home.tpl',
      1 => 1575603121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de9cbb532f428_77782508 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
  <div class="row">
  <div class="col-md-12 text-center margin-top"> 
   <h1 class="cl2 text-center"><i class="fa fa-tachometer"></i> Painel de Controle </h1> 
   <h2 class="mt-1 mtext-105 f-20">Bem vindo, <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['SOBRENOME']->value;?>
</h2>
   <div class="mt-3">
  <a href="<?php echo $_smarty_tpl->tpl_vars['SENHA']->value;?>
" class="btn btn-warning"><i class="fa fa-lock"></i> Mudar Senha</a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['LOGOFF']->value;?>
" class="btn btn-danger"><i class="fa fa-power-off"></i> Sair</a> 
   </div>
   <hr>
  <!-- Conteúdo -->
<div class="row tag-boxes">
<!-- Painel Produtos -->
<div class="col-md-6 col-lg-4">
<div class="panel panel-primary">
<div class="panel-heading">
<div class="row">
<div class="col-xs-3 col-lg-3">
<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
"><i class="fa fa-tag white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a  class="white" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Produtos</a></div>
</div>
</div>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">
<div class="panel-footer blue">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fa fa-arrow-circle-right"></i></span>
</div>
</a>
</div>
</div>

<!-- Painel Clientes -->
<div class="col-md-6 col-lg-4">
<div class="panel panel-red">
<div class="panel-heading">
<div class="row">
<div class="col-xs-3 col-lg-3 panel-red">
<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTES']->value;?>
"><i class="fa fa-users white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a style="color:#FFF;" class="white" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTES']->value;?>
">Clientes</a></div>
</div>
</div>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTES']->value;?>
">
<div class="panel-footer">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fa fa-arrow-circle-right"></i> </span>
</div>
</a>
</div>
</div>

<!-- Painel Subcategorias -->
<div class="col-md-6 col-lg-4">
<div class="panel panel-yellow">
<div class="panel-heading">
<div class="row">
<div class="col-xs-3 col-lg-3">
<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SUBCATEGORIAS']->value;?>
"><i class="fa fa-list white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a style="color:#FFF;" class="white" href="<?php echo $_smarty_tpl->tpl_vars['PAG_SUBCATEGORIAS']->value;?>
">Subcategorias</a></div>
</div>
</div>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SUBCATEGORIAS']->value;?>
">
<div class="panel-footer">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fa fa-arrow-circle-right"></i> </span>
</div>
</a>
</div>
</div>

<!-- Painel Pedidos -->
<div class="col-md-6 col-lg-4">
<div class="panel panel-purple">
<div class="panel-heading">
<div class="row">
<div class="col-xs-3 col-lg-3">
<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
"><i class="fa fa-file-text white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a style="color:#FFF;" class="white" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
">Pedidos</a></div>
</div>
</div>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
">
<div class="panel-footer">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fa fa-arrow-circle-right"></i> </span>
</div>
</a>
</div>
</div>

<!-- Painel Blog -->
<div class="col-md-6 col-lg-4">
<div class="panel panel-green">
<div class="panel-heading">
<div class="row">
<div class="col-xs-3 col-lg-3">
<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_BLOG']->value;?>
"><i class="fa fa-newspaper-o white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a style="color:#FFF;" class="white" href="<?php echo $_smarty_tpl->tpl_vars['PAG_BLOG']->value;?>
">Blog</a></div>
</div>
</div>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_BLOG']->value;?>
">
<div class="panel-footer">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fa fa-arrow-circle-right"></i> </span>
</div>
</a>
</div>
</div>




</div>
  
</div><!--/Col 12-->
</div><!--/Row-->
</div><!--/Container-->
<?php }
}
