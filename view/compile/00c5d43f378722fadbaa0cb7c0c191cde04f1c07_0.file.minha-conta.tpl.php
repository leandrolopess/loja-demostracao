<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-11 22:21:36
  from 'D:\xampp\htdocs\loja_adaptada\view\minha-conta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dc9fb10f25908_56462397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00c5d43f378722fadbaa0cb7c0c191cde04f1c07' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\view\\minha-conta.tpl',
      1 => 1572029906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user-profile/sidebar.tpl' => 1,
  ),
),false)) {
function content_5dc9fb10f25908_56462397 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
	<div class="container-fluid">
		<div class="row">
    <div class="col-md-3">
        <?php $_smarty_tpl->_subTemplateRender("file:user-profile/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="col-md-9 content-perfil">
    <h1 class="mtext-105 cl2 p-b-15 f-20">Painel</h1>
    <h2 class="f-18">Olá, <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 este é seu painel do cliente</h2>
    <hr>

<p class="stext-115 cl6">A partir do painel de sua conta, você pode ver suas <a href="#">compras recentes</a>, gerenciar seus <a href="#">endereços de entrega e cobrança</a>, e <a href="#">editar sua senha e detalhes da sua conta</a>.</p>

    </div>

     </div>
    </div>  
</section><?php }
}
