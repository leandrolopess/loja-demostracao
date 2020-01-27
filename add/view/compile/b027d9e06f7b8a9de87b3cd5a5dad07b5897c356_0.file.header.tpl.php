<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-19 00:29:07
  from 'D:\xampp\htdocs\loja_adaptada\add\view\inc\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dd353730eb599_03994075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b027d9e06f7b8a9de87b3cd5a5dad07b5897c356' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\add\\view\\inc\\header.tpl',
      1 => 1572541242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd353730eb599_03994075 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Menu Principal -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="row">
<div class="col-3">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
      
      <a class="navbar-brand logo"  href="index.php" alt="Logo">Mecânica 28</a>
    </div>
  </div>

<div class="col-9">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
"><i class="fas fa-tachometer-alt"></i> Painel de Controle</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
"><i class="fas fa-users"></i></i> Produtos</a></li>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTES']->value;?>
"><i class="fas fa-car"></i> Clientes</a></li>
 <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
"><i class="fas fa-wrench"></i> Categorias </a></li>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
"><i class="fas fa-wrench"></i> Pedidos </a></li>
 <li><a href="ajuda.php"><i class="fas fa-question"></i> Ajuda </a></li>
  <li><a href="logout.php"><i class="fas fa-power-off"></i> Sair </a></li>
  </ul>
  </div>
  </div><!-- /.navbar-collapse -->
  </div>
  </div><!-- /.container-fluid -->
</nav>

<?php }
}
