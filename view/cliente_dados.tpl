<!-- MEUS DADOS -->
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-3">
    {include file="user-profile/sidebar.tpl"}
    </div>
    <div class="col-md-9 content-perfil">
    <h1 class="mtext-105 cl2 p-b-15 f-20">Meus Dados</h1>
    <h2 class="f-18">Aqui você pode mudar seus dados, como nome, sobrenome, email e celular</h2>
    <hr>
    
    <form name="cadcliente" id="cadcliente" method="post" action="">
    <section class="row" class="mudar-dados" id="cadastro">
    {$ERRO}{$SUCESSO}

    <div class="col-md-4"> 
          <label>Nome</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Nome" value="{$CLI_NOME}" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_nome" minlength="3" required>
      </div>
        </div>

        <div class="col-md-4">
          <label>Sobrenome</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Sobrenome" value="{$CLI_SOBRENOME}" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_sobrenome" minlength="3" required>
      </div> 
        </div>

        <div class="col-md-4">
          <label>Data de nascimento</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Data de Nascimento" value="{$CLI_DATA_NASC}" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="date" name="cli_data_nasc" required>
      </div>
        </div>

        <div class="col-md-4">
          <label>RG</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* RG" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_rg" value="{$CLI_RG}"  maxlength="9" minlength="9" required>
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
    <input title="* DDD" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_ddd" value="{$CLI_DDD}" minlength="2" maxlength="2" required>
      </div>   
        </div>

        <div class="col-md-4">
          <label>Telefone</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="Telefone" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_fone" value="{$CLI_FONE}" minlength="8" maxlength="8">
      </div>  
        </div>

        <div class="col-md-4">
          <label>Celular</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Celular" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_celular" value="{$CLI_CELULAR}" minlength="9" maxlength="9" required>
      </div> 
        </div>

        <div class="col-md-4">
          <label>CEP</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* CEP" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_cep" type="text" name="cli_cep" value="{$CLI_CEP}" minlength="9" maxlength="9" OnKeyPress="formatar('#####-###', this)" required>
      </div>
      <small class="form-text text-muted pull-right margin-top-negativo-15 cart-cep">
      Não sabe o CEP? <a href="{$CORREIO}" target="_blank">Clique aqui!</a>
    </small>  
        </div>

        <div class="col-md-4">
          <label>Endereço</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Endereço" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_endereco" type="text" name="cli_endereco" value="{$CLI_ENDERECO}" minlength="3" required>
      </div>  
        </div>

        <div class="col-md-4">
          <label>Bairro</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title=" * Bairro" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_bairro" type="text" name="cli_bairro" value="{$CLI_BAIRRO}" minlength="3" required>
      </div> 
        </div>

        <div class="col-md-4"> 
          <label>Cidade</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Cidade" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_cidade" type="text" name="cli_cidade" value="{$CLI_CIDADE}" minlength="3" required>
      </div>   
        </div>

         <div class="col-md-4">
          <label>UF</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* UF" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_uf" type="text" name="cli_uf" value="{$CLI_UF}" minlength="2" maxlength="2" required>
      </div> 
        </div>

        <div class="col-md-4">
          <label>Número</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Número" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 cli_numero" type="text" name="cli_numero" value="{$CLI_NUMERO}" required>
      </div>
        </div>

        <div class="col-md-4">
          <label>Email</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Email" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="cli_email" value="{$CLI_EMAIL}" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" oninvalid="setCustomValidity('Email invalido. O Email precisa conter no mínimo um @ e um ponto(.) no endereço')" oninput="setCustomValidity('')" required>
      </div>
        </div>

    <div class="col-4"></div>
    <div class="col-9 box-red margin-bottom-30 margin-top-15 padding-20" style="margin-left:15%;">
    <label class="text-center">Digite sua senha atual por segurança<br>(<small>sua senha não será alterada</small>)</label>
    <div class="bor8 m-b-20 how-pos4-parent">
   <input type="password" name="cli_senha" id="cli_senha" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 visi-pass" required>
    <i toggle=".visi-pass" class="fa fa-fw fa-eye-slash field-icon toggle-password f-20 pull-right" style="position:relative;top:-35px;right:30px;"></i>
    </div>
    <button type="submit" class="botao btn-login"> <i class="zmdi zmdi-check f-25" style="position:relative;top:3px;"></i> Salvar </button>
    </div>    
    </div>
    <div class="col-4"></div>
    </section>
    </form>

    </div><!--</col-md-9> -->
    </div>
    </div>  
