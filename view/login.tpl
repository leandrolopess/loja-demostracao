<!-- Login -->
{if $LOGADO == true}


{else}
<section id="fazerlogin" class="margin-top">
<div class="container">
	<div class="row">
	<div class="col-md-6">
		
	<div class="col-md-9 cliente">
		<form name="cliente_login" class="{$SHAKE}" method="post" action="" >
   <h2 class="mtext-105 cl2 p-b-15">Já sou cliente</h2>
    {$ERRO}

    <div class="bor8 m-b-20 how-pos4-parent">
	<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="usuario" placeholder="Nome de usuário ou email" required autocomplete="off">
	<i class="fs-16 fa fa-user cinza how-pos4 pointer-none"></i>
	</div>

	<div class="bor8 m-b-20 how-pos4-parent">
	<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 pass" type="password" name="senha" placeholder="Senha" required>
	<i class="fs-16 fa fa-lock cinza how-pos4 pointer-none"></i>
	<i toggle=".pass" class="fa fa-fw fa-eye-slash field-icon toggle-password f-20 pull-right" style="position:relative;top:-35px;right:30px;"></i>
	</div>

  <div class="lost-pass margin-bottom">
  <a href="{$PAG_RECOVERY}"><u style="color:#807e7e;">Esqueci minha senha</u></a>
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
	<form action="{$PAG_CRIAR_CONTA}" method="POST">
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
{/if}