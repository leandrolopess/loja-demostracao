<?php
/* Smarty version 3.1.33, created on 2019-11-06 19:41:28
  from '/home/vol11_7/epizy.com/epiz_22059887/htdocs/loja_adaptada/view/minha-conta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc33e08a3d895_16528431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd85af2f860afbed6b5d2a684e671dac4a84e4ffe' => 
    array (
      0 => '/home/vol11_7/epizy.com/epiz_22059887/htdocs/loja_adaptada/view/minha-conta.tpl',
      1 => 1573067292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user-profile/sidebar.tpl' => 1,
  ),
),false)) {
function content_5dc33e08a3d895_16528431 (Smarty_Internal_Template $_smarty_tpl) {
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
