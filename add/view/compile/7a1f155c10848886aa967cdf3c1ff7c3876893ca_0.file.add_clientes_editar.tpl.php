<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-22 17:52:50
  from 'D:\xampp\htdocs\loja_adaptada\add\view\add_clientes_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dd83c92057e94_96290808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a1f155c10848886aa967cdf3c1ff7c3876893ca' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\add\\view\\add_clientes_editar.tpl',
      1 => 1574365222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd83c92057e94_96290808 (Smarty_Internal_Template $_smarty_tpl) {
?> <div class="container-fluid">
  <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-lr-0-lg margin-top">
      <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADD']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTES']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-users"></i> Clientes
      </a>

    </div>
    
  <div class="col-md-12 margin-top"> 
   <h1 class="cl2 mtext-105 text-center"> <i class="fa fa-user"></i> Cliente <?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>

   </h1>
   <?php echo $_smarty_tpl->tpl_vars['SUCESSO']->value;
echo $_smarty_tpl->tpl_vars['ERRO']->value;?>

 </div>
 <!-- Row Principal -->
<div class="col-md-12 box padding-35 margin-top margin-bottom-30">
<div class="row">
  <form name="cadcliente" id="cadcliente" method="post" action="">
    <section class="row" class="mudar-dados" id="cadastro">
    <?php echo $_smarty_tpl->tpl_vars['ERRO']->value;
echo $_smarty_tpl->tpl_vars['SUCESSO']->value;?>


    <div class="col-md-4"> 
          <label>Nome</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Nome" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_nome" minlength="3" readonly>
      </div>
        </div>

        <div class="col-md-4">
          <label>Sobrenome</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Sobrenome" value="<?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>
" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_sobrenome" minlength="3" readonly>
      </div> 
        </div>

        <div class="col-md-4">
          <label>Data de nascimento</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Data de Nascimento" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DATA_NASC']->value;?>
" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="date" name="cli_data_nasc" readonly>
      </div>
        </div>

        <div class="col-md-4">
          <label>RG</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* RG" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_rg" value="<?php echo $_smarty_tpl->tpl_vars['CLI_RG']->value;?>
"  maxlength="9" minlength="9" readonly>
      </div>   
        </div>

        <div class="col-md-4">
          <label>CPF</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* O CPF não pode ser mudado" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 " type="text" name="cli_cpf" value="<?php echo $_smarty_tpl->tpl_vars['CPF']->value;?>
" minlength="14" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required readonly>
      </div>
        </div>

        <div class="col-md-4">
          <label>DDD</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* DDD" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_ddd" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DDD']->value;?>
" minlength="2" maxlength="2" readonly>
      </div>   
        </div>

        <div class="col-md-4">
          <label>Telefone</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="Telefone" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_fone" value="<?php echo $_smarty_tpl->tpl_vars['CLI_FONE']->value;?>
" maxlength="9" OnKeyPress="formatar('####-####', this)" readonly>
      </div>  
        </div>

        <div class="col-md-4">
          <label>Celular</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Celular" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_celular" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CELULAR']->value;?>
" minlength="10" maxlength="10" OnKeyPress="formatar('######-###', this)" readonly>
      </div> 
        </div>

        <div class="col-md-4">
          <label>CEP</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* CEP" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_cep" type="text" name="cli_cep" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
" minlength="9" maxlength="9" OnKeyPress="formatar('#####-###', this)" readonly>
      </div> 
      </div>

        <div class="col-md-4">
          <label>Endereço</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Endereço" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_endereco" type="text" name="cli_endereco" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
" minlength="3" readonly>
      </div>  
        </div>

        <div class="col-md-4">
          <label>Bairro</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title=" * Bairro" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_bairro" type="text" name="cli_bairro" value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
" minlength="3" readonly>
      </div> 
        </div>

        <div class="col-md-4"> 
          <label>Cidade</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Cidade" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_cidade" type="text" name="cli_cidade" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
" minlength="3" readonly>
      </div>   
        </div>

         <div class="col-md-4">
          <label>UF</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* UF" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_uf" type="text" name="cli_uf" value="<?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
" minlength="2" maxlength="2" readonly>
      </div> 
        </div>

        <div class="col-md-4">
          <label>Número</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Número" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_numero" type="text" name="cli_numero" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
" readonly>
      </div>
        </div>

        <div class="col-md-4">
          <label>Email</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Email" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="cli_email" value="<?php echo $_smarty_tpl->tpl_vars['CLI_EMAIL']->value;?>
" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" oninvalid="setCustomValidity('Email invalido. O Email precisa conter no mínimo um @ e um ponto(.) no endereço')" oninput="setCustomValidity('')" readonly>
      </div>
        </div>

    </div>
    </section>
    </form>

  </div>
 </div><!--/Row-->
</div><!--/Container-->

<?php }
}
