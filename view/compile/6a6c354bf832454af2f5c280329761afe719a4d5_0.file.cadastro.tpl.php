<?php
/* Smarty version 3.1.33, created on 2019-11-06 15:22:32
  from 'D:\xampp\htdocs\loja_adaptada\view\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc30158d99463_52620828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a6c354bf832454af2f5c280329761afe719a4d5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\view\\cadastro.tpl',
      1 => 1573060940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc30158d99463_52620828 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 margin-bottom-50">
<h3 class="mtext-105 cl2 p-b-15 margin-top">Cadastro de novo cliente</h3>

<div class="box padding-20">
<form name="cadcliente" id="cadcliente" method="post" action="" enctype="multipart/form-data">

<section class="row" id="cadastro">
        <div class="col-md-12">
        <p class="margin-bottom pull-right red">* Campos obrigatórios</p> 
        </div>
        
        <div class="col-lg-4 col-md-6"> 
          <label>Nome</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Nome" value="<?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_nome" placeholder="* Nome" minlength="3" required>
      </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <label>Sobrenome</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Sobrenome" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_sobrenome" placeholder="* Sobrenome" minlength="3" required>
      </div> 
        </div>
        
        <div class="col-lg-4 col-md-6">
          <label>Data de nascimento</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Data de Nascimento" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="date" name="cli_data_nasc" placeholder="* Data de Nascimento" required>
      </div>
        </div>
        
        <div class="col-lg-6 col-md-6">
          <label>RG</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* RG" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_rg" placeholder="* RG" OnKeyPress="formatar('##.###.###-##', this)" maxlength="13" minlength="13" required>
      </div>   
        </div>
        
        <div class="col-lg-6 col-md-6">
          <label>CPF</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* CPF" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 " type="text" name="cli_cpf" placeholder="* CPF" minlength="14" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required>
      </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <label>DDD</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* DDD" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_ddd" placeholder="* DDD" minlength="2" maxlength="2" required>
      </div>   
        </div>
        
        <div class="col-lg-4 col-md-6">
          <label>Telefone</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="Telefone" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_fone"  maxlength="9" OnKeyPress="formatar('####-####', this)" placeholder=" Telefone">
      </div>  
        </div>
        
        <div class="col-lg-4 col-md-6">
          <label>Celular</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Celular" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_celular" minlength="10" maxlength="10" OnKeyPress="formatar('######-###', this)" placeholder="* Celular" required>
      </div> 
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6">
          <label>CEP</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* CEP" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_cep" type="text" name="cli_cep" minlength="9" maxlength="9" OnKeyPress="formatar('#####-###', this)" placeholder="* CEP" required>
      </div> 
      <small class="form-text text-muted pull-right margin-top-negativo-15 cart-cep">
      Não sabe o CEP? <a href="<?php echo $_smarty_tpl->tpl_vars['CORREIO']->value;?>
" target="_blank">Clique aqui!</a>
    </small> 
        </div>
               
        <div class="col-xl-4 col-lg-6 col-md-6">
          <label>Endereço</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Endereço" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_endereco" type="text" name="cli_endereco" placeholder="* Endereço" minlength="3" required>
      </div>  
        </div>
        
        <div class="col-xl-4 col-lg-6 col-md-6">
          <label>Bairro</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title=" * Bairro" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_bairro" type="text" name="cli_bairro" minlength="3" placeholder="* Bairro" required>
      </div> 
        </div>
       
        <div class="col-xl-4 col-lg-6 col-md-6"> 
          <label>Cidade</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Cidade" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_cidade" type="text" name="cli_cidade" minlength="3" placeholder="* Cidade" required>
      </div>   
        </div>
        
        <div class="col-xl-4 col-lg-6 col-md-6">
          <label>UF</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* UF" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_uf" type="text" name="cli_uf" minlength="2" maxlength="2" placeholder="* UF" required>
      </div> 
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6">
          <label>Número</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Número" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_numero" type="text" name="cli_numero"  placeholder="* Número" required>
      </div>
        </div>
        
      </section>

      <br>
      <br>
      
      
       </div>
    </div>
<div class="col-lg-4 margin-bottom-50">
  <h3 class="mtext-105 cl2 p-b-15 margin-top">Sobre sua conta</h3>

<div class="box padding-20">


<section class="row" id="cadastro">

        
        <div class="col-lg-12 col-md-12">
          <label>Email</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Email" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="cli_email" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" oninvalid="setCustomValidity('Email invalido. O Email precisa conter no mínimo um @ e um ponto(.) no endereço')" oninput="setCustomValidity('')" placeholder="* Email" required>
      </div>
        </div>


      <div class="col-lg-12 col-md-12">
        <div id="impSenha" class="d-none"></div> 
        <div id="impForcaSenha" class="d-none"></div>  
        <div class="pull-right" id="erroSenhaForca"></div>
          <label>Senha</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="A senha deve conter no mínimo 5 caracteres" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 senha" type="password" name="cli_senha"  minlength="5"  placeholder="* Senha" required onkeyup="validarSenhaForca()">
      </div>
        </div>

      <div class="col-lg-12 col-md-12">
      <div class="form-check">
    <input type="checkbox" class="form-check-input" name="cli_receber_email" style="position: relative;left: 15px;top: 21px;" value="sim">
    <label class="form-check-label f-14" for="exampleCheck1">Quero receber por email ofertas e novidades da <?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
. </label>
  </div>
  </div>


  <div class="col-lg-12 col-md-12">
      <label class="margin-top f-12">Concordo com o uso dos meus dados para compra e experiência no site conforme a <a href="#">Política de Privacidade</a></label>
  </div>
</section>

<section class="row" id="btngravar">
       <div class="col-lg-12 col-md-12">
       <button type="submit" class="botao btn-login margin-top margin-bottom-30"> <i class="zmdi zmdi-check f-25" style="position:relative;top:3px;"></i> Enviar </button>
       </div>
      
       </section>
       </form>



        </div>
       </div>
   

    </div>
    </div>

     <?php }
}
