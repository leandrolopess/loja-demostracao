<?php
/* Smarty version 3.1.33, created on 2019-11-06 19:41:02
  from '/home/vol11_7/epizy.com/epiz_22059887/htdocs/loja_adaptada/view/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc33deea78373_26821940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64a7f87d711913a9cb0c2a30755db9abcdc33018' => 
    array (
      0 => '/home/vol11_7/epizy.com/epiz_22059887/htdocs/loja_adaptada/view/login.tpl',
      1 => 1573067292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc33deea78373_26821940 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Login -->
<?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>


<?php } else { ?>
<section id="fazerlogin">
<div class="container">
	<div class="row">
	<div class="col-md-6">
		
	<div class="col-md-9 cliente">
		<form name="cliente_login" class="<?php echo $_smarty_tpl->tpl_vars['SHAKE']->value;?>
" method="post" action="" >
   <h2 class="mtext-105 cl2 p-b-15">Já sou cliente</h2>
    <?php echo $_smarty_tpl->tpl_vars['ERRO']->value;?>


    <div class="bor8 m-b-20 how-pos4-parent">
	<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="usuario" placeholder="Email" required autocomplete="off">
	<i class="fs-16 fa fa-user cinza how-pos4 pointer-none"></i>
	</div>

	<div class="bor8 m-b-20 how-pos4-parent">
	<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 pass" type="password" name="senha" placeholder="Senha" required>
	<i class="fs-16 fa fa-lock cinza how-pos4 pointer-none"></i>
	<i toggle=".pass" class="fa fa-fw fa-eye-slash field-icon toggle-password f-20 pull-right" style="position:relative;top:-35px;right:30px;"></i>
	</div>

  <div class="lost-pass margin-bottom">
  <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
"><u style="color:#807e7e;">Esqueci minha senha</u></a>
  </div>

  <button type="submit" class="margin-bottom text-uppercase botao btn-login"> Acessar Conta <i class="fs-20 fa fa-sign-in branco" style="position:relative;top:2px;"></i></button>
</form>
</div>
</div>

	<div class="line-behind-text margin-bottom"></div>

	<div class="col-md-5">
		
	<div class="col-md-9 nova-conta">
	<div class="form-group">
	<h2 class="mtext-105 cl2 p-b-15">Criar Conta</h2>
	<form action="<?php echo $_smarty_tpl->tpl_vars['PAG_CRIAR_CONTA']->value;?>
" method="POST">
    <div class="bor8 m-b-20 how-pos4-parent">
	<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_email" placeholder="Informe seu email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" oninvalid="setCustomValidity('Email invalido. O Email precisa conter no mínimo um @ e um ponto(.) no endereço')" oninput="setCustomValidity('')" required>
	<i class="fs-16 fa fa-envelope cinza how-pos4 pointer-none"></i>
	</div>
  </div>
  <button type="submit" class="margin-bottom text-uppercase botao btn-login">Prosseguir <i class="fs-20 fa fa-chevron-right branco" style="position:relative;top:2px;"></i></button>
</form>

</div>
</div>
</div>

</div>
</section>
<?php }
}
}
