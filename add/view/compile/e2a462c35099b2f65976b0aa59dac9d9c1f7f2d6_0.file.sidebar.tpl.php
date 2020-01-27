<?php
/* Smarty version 3.1.33, created on 2019-10-29 22:51:41
  from 'D:\xampp\htdocs\loja\add\view\user-profile\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8ecad857e60_16033673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2a462c35099b2f65976b0aa59dac9d9c1f7f2d6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja\\add\\view\\user-profile\\sidebar.tpl',
      1 => 1571960678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db8ecad857e60_16033673 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Sidebar -->
<div class="user-profile margin-top relative left-10">
	<?php if ($_smarty_tpl->tpl_vars['IMG']->value) {?>
<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/user/<?php echo $_smarty_tpl->tpl_vars['IMG']->value;?>
" alt="Usuário">
<?php } else { ?>
<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/user/user.png" alt="Usuário">
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
<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
" class="list-group-item stext-115 cl6">
 Pedidos <i class="f-20 azul fa fa-shopping-cart"></i>
</a></li>
<li><a href='comments.php' class='list-group-item stext-115 cl6'> Endereços  <i class="f-20 azul fa fa-home"></i></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
" class="list-group-item stext-115 cl6"> Detalhes da Conta <i class="f-20 azul fa fa-user"></i></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_SENHA']->value;?>
" class="list-group-item stext-115 cl6"> Trocar Senha <i class="f-20 azul fa fa-lock"></i></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="list-group-item stext-115 cl6"> Sair <i class="f-20 azul fa fa-power-off"></i></a></li>
</div>



<?php }
}
