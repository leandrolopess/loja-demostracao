 <div class="container-fluid">
  <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-lr-0-lg margin-top">
      <a href="{$GET_SITE_ADD}" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <a href="{$PAG_CLIENTES}" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-users"></i> Clientes
      </a>

    </div>
    
  <div class="col-md-12 margin-top"> 
   <h1 class="cl2 mtext-105 text-center"> <i class="fa fa-user"></i> Cliente {$CLI_NOME} {$CLI_SOBRENOME}
   </h1>
   {$SUCESSO}{$ERRO}
 </div>
 <!-- Row Principal -->
<div class="col-md-12 box padding-35 margin-top margin-bottom-30">
<div class="row">
  <form name="cadcliente" id="cadcliente" method="post" action="">
    <section class="row" class="mudar-dados" id="cadastro">
    {$ERRO}{$SUCESSO}

    <div class="col-md-4"> 
          <label>Nome</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Nome" value="{$CLI_NOME}" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_nome" minlength="3" readonly>
      </div>
        </div>

        <div class="col-md-4">
          <label>Sobrenome</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Sobrenome" value="{$CLI_SOBRENOME}" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_sobrenome" minlength="3" readonly>
      </div> 
        </div>

        <div class="col-md-4">
          <label>Data de nascimento</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Data de Nascimento" value="{$CLI_DATA_NASC}" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="date" name="cli_data_nasc" readonly>
      </div>
        </div>

        <div class="col-md-4">
          <label>RG</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* RG" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_rg" value="{$CLI_RG}"  maxlength="9" minlength="9" readonly>
      </div>   
        </div>

        <div class="col-md-4">
          <label>CPF</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* O CPF não pode ser mudado" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 " type="text" name="cli_cpf" value="{$CPF}" minlength="14" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required readonly>
      </div>
        </div>

        <div class="col-md-4">
          <label>DDD</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* DDD" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_ddd" value="{$CLI_DDD}" minlength="2" maxlength="2" readonly>
      </div>   
        </div>

        <div class="col-md-4">
          <label>Telefone</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="Telefone" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_fone" value="{$CLI_FONE}" maxlength="9" OnKeyPress="formatar('####-####', this)" readonly>
      </div>  
        </div>

        <div class="col-md-4">
          <label>Celular</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Celular" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_celular" value="{$CLI_CELULAR}" minlength="10" maxlength="10" OnKeyPress="formatar('######-###', this)" readonly>
      </div> 
        </div>

        <div class="col-md-4">
          <label>CEP</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* CEP" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_cep" type="text" name="cli_cep" value="{$CLI_CEP}" minlength="9" maxlength="9" OnKeyPress="formatar('#####-###', this)" readonly>
      </div> 
      </div>

        <div class="col-md-4">
          <label>Endereço</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Endereço" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_endereco" type="text" name="cli_endereco" value="{$CLI_ENDERECO}" minlength="3" readonly>
      </div>  
        </div>

        <div class="col-md-4">
          <label>Bairro</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title=" * Bairro" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_bairro" type="text" name="cli_bairro" value="{$CLI_BAIRRO}" minlength="3" readonly>
      </div> 
        </div>

        <div class="col-md-4"> 
          <label>Cidade</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Cidade" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_cidade" type="text" name="cli_cidade" value="{$CLI_CIDADE}" minlength="3" readonly>
      </div>   
        </div>

         <div class="col-md-4">
          <label>UF</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* UF" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_uf" type="text" name="cli_uf" value="{$CLI_UF}" minlength="2" maxlength="2" readonly>
      </div> 
        </div>

        <div class="col-md-4">
          <label>Número</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Número" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_numero" type="text" name="cli_numero" value="{$CLI_NUMERO}" readonly>
      </div>
        </div>

        <div class="col-md-4">
          <label>Email</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Email" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="cli_email" value="{$CLI_EMAIL}" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" oninvalid="setCustomValidity('Email invalido. O Email precisa conter no mínimo um @ e um ponto(.) no endereço')" oninput="setCustomValidity('')" readonly>
      </div>
        </div>

    </div>
    </section>
    </form>

  </div>
 </div><!--/Row-->
</div><!--/Container-->

