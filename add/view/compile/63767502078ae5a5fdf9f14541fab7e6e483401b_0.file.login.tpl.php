<?php
/* Smarty version 3.1.33, created on 2019-10-26 18:32:29
  from 'D:\xampp\htdocs\loja\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db4751d0a26a3_24922650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63767502078ae5a5fdf9f14541fab7e6e483401b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja\\view\\login.tpl',
      1 => 1572107546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db4751d0a26a3_24922650 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Login -->
<?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>


<?php } else { ?>

<section id="fazerlogin">
<div class="container">
	<div class="row">
		<div class="col-md-12 col-lg-4"></div>
		<div class="col-md-12 col-lg-4">

	  <form name="cliente_login" class="<?php echo $_smarty_tpl->tpl_vars['SHAKE']->value;?>
" method="post" action="" >
  <h2 class="mtext-105 cl2 p-b-15 text-center">Login do Cliente</h2>
    <?php echo $_smarty_tpl->tpl_vars['ERRO']->value;?>


    <div class="bor8 m-b-20 how-pos4-parent">
	<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="usuario" placeholder="Nome de usuário ou email" required autocomplete="off">
	<i class="fs-16 fa fa-user cinza how-pos4 pointer-none"></i>
	</div>

  <div class="bor8 m-b-20 how-pos4-parent">
	<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 pass" type="password" name="senha" placeholder="Senha" required>
	<i class="fs-16 fa fa-lock cinza how-pos4 pointer-none"></i>
	<i toggle=".pass" class="fa fa-fw fa-eye-slash field-icon toggle-password f-20 pull-right" style="position:relative;top:-35px;right:30px;"></i>
	</div>

<div class="text-center">
<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
" class="">Cliente novo?
Faça seu cadastro <u style="color:#807e7e;">aqui</u></a>
             
<br><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
" class=" "> Esqueceu a senha?
</a>
</div>
 <button type="submit" class="margin-bottom margin-top-5 text-uppercase botao btn-login"><i class="fs-16 fa fa-sign-in branco"></i> Acessar Conta </button>
</form>
</div>
<div class="col-md-12 col-lg-4"></div>

</div>
</div>
</section>
<?php }
}
}
