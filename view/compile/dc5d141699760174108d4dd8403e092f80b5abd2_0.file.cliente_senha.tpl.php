<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-12 01:57:20
  from 'D:\xampp\htdocs\loja_adaptada\view\cliente_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dca2da04c2b57_85668279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc5d141699760174108d4dd8403e092f80b5abd2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\view\\cliente_senha.tpl',
      1 => 1572107755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user-profile/sidebar.tpl' => 1,
  ),
),false)) {
function content_5dca2da04c2b57_85668279 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
        <div class="row">
    <div class="col-md-3">
        <?php $_smarty_tpl->_subTemplateRender("file:user-profile/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="col-md-9 content-senha">
<form name="alterarsenha" method="post" action="">
    <section class="mudar-dados container">
    <h1 class="mtext-105 cl2 p-b-15 f-20">Alteração de senha</h1>
    <h2 class="f-18">Aqui você pode mudar sua senha atual para outra que deseja</h2>
    <hr>
    <?php echo $_smarty_tpl->tpl_vars['ERRO']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['SUCESSO']->value;?>

    <div class="col-md-7">
    <label>Digite sua senha atual</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input type="password" name="cli_senha_atual" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 visi-pass visi-pass2" required>
    <i toggle=".visi-pass2" class="fa fa-fw fa-eye-slash field-icon toggle-password f-20 pull-right" style="position:relative;top:-35px;right:30px;"></i>
    </div>
    </div>
    
    <div class="col-md-7">
    <div id="impSenha" class="d-none"></div> 
    <div id="impForcaSenha" class="d-none"></div>  
    <div class="pull-right" id="erroSenhaForca"></div>
    <label>Digite sua nova senha</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input type="password" name="cli_senha" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 visi-pass senha" required onkeyup="validarSenhaForca()">
    <i toggle=".senha" class="fa fa-fw fa-eye-slash field-icon toggle-password f-20 pull-right" style="position:relative;top:-35px;right:30px;"></i>
    </div>
    </div>
     
    <div class="col-12 col-md-5 col-lg-3">      
    <button type="submit" class="botao btn-login margin-bottom-30"><i class="zmdi zmdi-check f-25" style="position:relative;top:3px;"></i> Alterar </button>
    </div>

    </div>
    </section> 
    </form>

    </div>

     </div>
    </div>  
<?php }
}
