<?php
/* Smarty version 3.1.33, created on 2019-10-02 04:42:02
  from 'D:\xampp\htdocs\loja\view\user-profile\menu-cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d940e7a0e7768_68539945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c8f58092873354e0569deb0cd7bb82b01255871' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja\\view\\user-profile\\menu-cliente.tpl',
      1 => 1569984118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./sidebar.tpl' => 1,
  ),
),false)) {
function content_5d940e7a0e7768_68539945 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
	<div class="container-fluid">
		<div class="row">
    <div class="col-md-3">
        <?php $_smarty_tpl->_subTemplateRender("file:./sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="col-md-9 content">
<p class="margin-top stext-115 cl6">Olá, <strong style="color:#333"><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</strong>.</p>

<p class="stext-115 cl6">A partir do painel de controle de sua conta, você pode ver suas <a href="#">compras recentes</a>, gerenciar seus <a href="#">endereços de entrega e cobrança</a>, e <a href="#">editar sua senha e detalhes da conta</a>.</p>

    </div>

     </div>
    </div>  
</section><?php }
}
