<?php
/* Smarty version 3.1.33, created on 2019-11-02 23:17:51
  from 'D:\xampp\htdocs\loja\add\view\add_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbe38cf9f7421_87265005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb513ac18295b862db0795a34f68009aca14e19c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja\\add\\view\\add_home.tpl',
      1 => 1572747408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbe38cf9f7421_87265005 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
  <div class="row">
  <div class="col-md-12 text-center margin-top"> 
   <h1 class="cl2 text-center"><i class="fa fa-tachometer"></i> Painel de Controle </h1> 
   <h2 class="mt-3 mtext-105 f-20">Bem vindo, <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 </h2>
   <hr>
  <!-- Conteúdo -->
<div class="row tag-boxes">
<!-- Painel Clientes -->
<div class="col-md-6 col-lg-4">
<div class="panel panel-primary">
<div class="panel-heading">
<div class="row">
<div class="col-xs-3 col-lg-3">
<a href=""><i class="fa fa-tag white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a  class="white" href="">Produtos</a></div>
</div>
</div>
</div>
<a href="clientes.php">
<div class="panel-footer blue">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fa fa-arrow-circle-right"></i></span>
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
<a href=""><i class="fa fa-users white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a style="color:#FFF;" class="white" href="">Clientes</a></div>
</div>
</div>
</div>
<a href="">
<div class="panel-footer">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fa fa-arrow-circle-right"></i> </span>
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
<a href=""><i class="fa fa-list white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a style="color:#FFF;" class="white" href="">Categorias</a></div>
</div>
</div>
</div>
<a href="">
<div class="panel-footer">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fa fa-arrow-circle-right"></i> </span>
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
<a href=""><i class="fa fa-file-text white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a style="color:#FFF;" class="white" href="">Pedidos</a></div>
</div>
</div>
</div>
<a href="">
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
