<?php
/* Smarty version 3.1.33, created on 2019-11-06 19:41:28
  from '/home/vol11_7/epizy.com/epiz_22059887/htdocs/loja_adaptada/view/user-profile/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc33e08a601f6_34106453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7807196351ac4927dbf20c1273352febf69a6b5d' => 
    array (
      0 => '/home/vol11_7/epizy.com/epiz_22059887/htdocs/loja_adaptada/view/user-profile/sidebar.tpl',
      1 => 1573067453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc33e08a601f6_34106453 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Sidebar -->
<div class="user-profile margin-top relative left-10">
	<?php if ($_smarty_tpl->tpl_vars['IMG']->value) {?>
<img src="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/media/img/<?php echo $_smarty_tpl->tpl_vars['IMG']->value;?>
" alt="Usuário">
<?php } else { ?>
<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/user/sem-foto.jpg" alt="Usuário">
<?php }?>
<p><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</p>
<br><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
">Sair</a>
</div>
<div class="list-group margin-bottom-50 margin-top-negativo-65 side">
<li></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
" class="list-group-item stext-115 cl6">
Painel <i class="f-20 azul fa fa-tachometer"></i>
</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PERFIL']->value;?>
" class="list-group-item stext-115 cl6">
Perfil <i class="f-20 azul fa fa-user"></i>
</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
" class="list-group-item stext-115 cl6">
 Pedidos <i class="f-20 azul fa fa-shopping-cart"></i>
</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
" class="list-group-item stext-115 cl6"> Detalhes da Conta <i class="f-20 azul fa fa-edit"></i></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_SENHA']->value;?>
" class="list-group-item stext-115 cl6"> Trocar Senha <i class="f-20 azul fa fa-lock"></i></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="list-group-item stext-115 cl6"> Sair <i class="f-20 azul fa fa-power-off"></i></a></li>
</div>



<?php }
}
