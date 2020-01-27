<?php
/* Smarty version 3.1.33, created on 2019-10-24 00:01:18
  from 'D:\xampp\htdocs\loja\view\recuperar-senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db0cdae1bdb88_43775654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bdf1ce47e558af8cb61a155dd2406b8696690fd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja\\view\\recuperar-senha.tpl',
      1 => 1571868073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db0cdae1bdb88_43775654 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="fazerlogin" class="margin-top margin-bottom">
<div class="container">
	<div class="row">
	<div class="col-sm-2 col-md-4 col-lg-4"></div>
	<div class="col-sm-9 col-md-4 col-lg-4">

	<form name="recuperarsenha" class="<?php echo $_smarty_tpl->tpl_vars['SHAKE']->value;?>
" method="post" action="">
  <h2 class="mtext-105 cl2 p-b-15 text-center">Digite seu email cadastrado</h2>
    <?php echo $_smarty_tpl->tpl_vars['ERRO']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['SUCESSO']->value;?>

    <div class="bor8 m-b-20 how-pos4-parent">
	<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="cli_email" id="cli_email" placeholder="Seu email">
	<i class="fs-16 fa fa-envelope cinza how-pos4 pointer-none"></i>
	</div>

	<button type="submit" class="margin-bottom margin-top-5 text-uppercase botao btn-login"> Recuperar Senha </button>
	</form>
	</div>
	<div class="col-sm-2 col-md-4 col-lg-4"></div>

	</div>
	</div>
</section>             


        <?php }
}
