<?php
/* Smarty version 3.1.33, created on 2019-10-27 04:02:56
  from 'D:\xampp\htdocs\loja\view\cliente_dados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db508e067c2b9_61394246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6e0b2f35e185c59209fb505cb27a9c403f871d6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja\\view\\cliente_dados.tpl',
      1 => 1572145356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user-profile/sidebar.tpl' => 1,
  ),
),false)) {
function content_5db508e067c2b9_61394246 (Smarty_Internal_Template $_smarty_tpl) {
?>    <!-- MEUS DADOS -->
    <div class="container-fluid">
	<div class="row">
    <div class="col-md-3">
    <?php $_smarty_tpl->_subTemplateRender("file:user-profile/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="col-md-9 content-dados">
	<h1 class="mtext-105 cl2 p-b-15 f-20">Meus Dados</h1>
	<hr>
	<?php echo $_smarty_tpl->tpl_vars['ERRO']->value;
echo $_smarty_tpl->tpl_vars['SUCESSO']->value;?>

	<form name="cadcliente" id="cadcliente" method="post" action="">
    <section class="row" class="mudar-dados" id="cadastro">
    

    <div class="col-lg-4 col-md-4"> 
    <label>Nome</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Nome" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_nome" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" minlength="3" required>
    </div>
    </div>
        
    <div class="col-lg-4 col-md-4">
    <label>Sobrenome</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Sobrenome" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_sobrenome"  value="<?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>
" minlength="3" required>
    </div> 
    </div>

    <div class="col-lg-4 col-md-4">
    <label>Data de nascimento</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Data de Nascimento" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="date" name="cli_data_nasc" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DATA_NASC']->value;?>
" required>
    </div>
    </div>
        
    <div class="col-lg-4 col-md-4">
    <label>RG</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* RG" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_rg" value="<?php echo $_smarty_tpl->tpl_vars['CLI_RG']->value;?>
" maxlength="9" minlength="9" required>
    </div>   
    </div>

    <div class="col-lg-4 col-md-4">
    <label>CPF</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* CPF" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 " type="text" name="cli_cpf" value="<?php echo $_smarty_tpl->tpl_vars['CPF']->value;?>
" minlength="14" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required readonly>
     </div>
     </div>

    <div class="col-lg-4 col-md-4">
    <label>DDD</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* DDD" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_ddd" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DDD']->value;?>
" minlength="2" maxlength="2" required>
    </div>   
    </div>
        
    <div class="col-lg-4 col-md-4">
    <label>Telefone</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title="Telefone" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_fone" value="<?php echo $_smarty_tpl->tpl_vars['CLI_FONE']->value;?>
" maxlength="9" OnKeyPress="formatar('####-####', this)">
    </div>  
    </div>  
        
    <div class="col-lg-4 col-md-4">
    <label>Celular</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Celular" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_celular" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CELULAR']->value;?>
" minlength="10" maxlength="10" OnKeyPress="formatar('######-###', this)" required>
    </div> 
    </div>
      
    <div class="col-lg-4 col-md-4">
    <label>CEP</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* CEP" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_cep" type="text" name="cli_cep"  value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
" minlength="9" maxlength="9" OnKeyPress="formatar('#####-###', this)" required>
    </div>
    <small class="form-text text-muted pull-right margin-top-negativo-15 cart-cep">
      Não sabe o CEP? <a href="<?php echo $_smarty_tpl->tpl_vars['CORREIO']->value;?>
" target="_blank">Clique aqui!</a>
    </small>  
    </div>

    <div class="col-lg-4 col-md-4">
    <label>Endereço</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Endereço" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_endereco" type="text" name="cli_endereco" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
" placeholder="* Endereço" minlength="3" required>
    </div>  
    </div>

    <div class="col-xl-4 col-lg-4 col-md-4">
    <label>Bairro</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title=" * Bairro" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_bairro" type="text" name="cli_bairro" value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
" minlength="3" required>
    </div> 
    </div>

    <div class="col-xl-4 col-lg-4 col-md-4"> 
    <label>Cidade</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Cidade" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_cidade" type="text" name="cli_cidade" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
" minlength="3" required>
     </div>   
     </div>

    <div class="col-xl-4 col-lg-4 col-md-4">
    <label>UF</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* UF" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_uf" type="text" name="cli_uf" value="<?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
" minlength="2" maxlength="2" required>
    </div> 
    </div>

    <div class="col-xl-4 col-lg-4 col-md-4">
    <label>Número</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Número" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_numero" type="text" name="cli_numero" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
" required>
    </div>
    </div>

    <div class="col-lg-4 col-md-4">
    <label>Email</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Email" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="cli_email" value="<?php echo $_smarty_tpl->tpl_vars['CLI_EMAIL']->value;?>
" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" oninvalid="setCustomValidity('Email invalido. O Email precisa conter no mínimo um @ e um ponto(.) no endereço')" oninput="setCustomValidity('')" required>
    </div>
    </div>

    <div class="col-4"></div>
    <div class="col-9 box-red margin-bottom-30 margin-top-15 padding-20" style="margin-left:15%;">
    <label class="text-center">Digite sua senha atual por segurança<br>(<small>sua senha não será alterada</small>)</label>
    <div class="bor8 m-b-20 how-pos4-parent">
    <input type="password" name="cli_senha" id="cli_senha" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 visi-pass" required>
    <i toggle=".visi-pass" class="fa fa-fw fa-eye field-icon toggle-password f-20 pull-right" style="position:relative;top:-35px;right:30px;"></i>
    </div>
    <button type="submit" class="botao btn-login"> <i class="zmdi zmdi-check f-25" style="position:relative;top:3px;"></i> Salvar Alterações </button>
       </div>    
    </div>
    <div class="col-4"></div>
</section>
</form>

</div><!--</col-md-9> -->
</div>
</div>  
<?php }
}
