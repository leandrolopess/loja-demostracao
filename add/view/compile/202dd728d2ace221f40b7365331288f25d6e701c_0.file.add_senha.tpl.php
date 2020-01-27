<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-24 21:38:13
  from 'D:\xampp\htdocs\loja_adaptada\add\view\add_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ddb1465e99330_65184622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '202dd728d2ace221f40b7365331288f25d6e701c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\add\\view\\add_senha.tpl',
      1 => 1574638682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddb1465e99330_65184622 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
  <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 margin-top p-lr-0-lg">
      <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADD']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <a href="#" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-address-card"></i> Usúarios
      </a>

    </div>
    
  <div class="col-md-12"> 
   <h1 class="cl2 mtext-105 text-center"> &nbsp;<i class="fa fa-lock"></i> Mudar Senha
   </h1>
   <?php echo $_smarty_tpl->tpl_vars['SUCESSO']->value;
echo $_smarty_tpl->tpl_vars['ERRO']->value;?>

   <hr>
<!-- Row Principal -->
<div class="row">
<!--  Col Conteúdo -->
<div class="col-md-12 flex-c">
<div class="margin-top margin-bottom">


<form name="alterarsenha" method="post" action="">
  
    <div class="col-md-12">
    <label>Digite sua senha atual</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input type="password" name="add_senha_atual" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 visi-pass visi-pass2" required>
    <i toggle=".visi-pass2" class="fa fa-fw fa-eye-slash field-icon toggle-password f-20 pull-right" style="position:relative;top:-35px;right:30px;"></i>
    </div>
    </div>
    
    <div class="col-md-12">
    <div id="impSenha" class="d-none"></div> 
    <div id="impForcaSenha" class="d-none"></div>  
    <div class="pull-right" id="erroSenhaForca"></div>
    <label>Digite sua nova senha</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input type="password" name="add_senha" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 visi-pass senha" required onkeyup="validarSenhaForca()">
    <i toggle=".senha" class="fa fa-fw fa-eye-slash field-icon toggle-password f-20 pull-right" style="position:relative;top:-35px;right:30px;"></i>
    </div>
    </div>
     
    <div class="col-12">      
    <button type="submit" class="botao btn-login margin-bottom-30"><i class="zmdi zmdi-check f-25" style="position:relative;top:3px;"></i> Alterar </button>
    </div>

    </div>
    </section> 
    </form>

  </div>
  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->

<?php }
}
