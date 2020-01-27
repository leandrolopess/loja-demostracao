<?php
/* Smarty version 3.1.33, created on 2019-10-29 23:52:41
  from 'D:\xampp\htdocs\loja\add\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8faf94cc441_09722108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da43f8779d6d10549b5978c96d820d63e5701cec' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja\\add\\view\\login.tpl',
      1 => 1572403958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db8faf94cc441_09722108 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Login -->
<?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>


<?php } else { ?>

<div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 style="color:#FFF;">Mecânica 28</h1>
        
    <!-- Mostra mensagem de erro -->
    <?php echo $_smarty_tpl->tpl_vars['ERRO']->value;?>


   
        </div>
    </div>
      <form name="cliente_login" class="<?php echo $_smarty_tpl->tpl_vars['SHAKE']->value;?>
 form-signin" method="post" action="" >
        <label for="inputEmail" class="sr-only">Nome de Usuário</label>
        <input type="text" id="inputEmail" name="usuario" class="form-control" placeholder="Nome de Usuário" required autofocus autocomplete="off">
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required autocomplete="off">
        <div class="checkbox">
        </div>
        <input type="submit" name="submit" value="Entrar" class="btn btn-lg  btn-block btn-success">
      </form>
    </div> <!-- /container -->
<?php }
}
}
