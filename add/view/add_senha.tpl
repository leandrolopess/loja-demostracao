<div class="container-fluid">
  <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 margin-top p-lr-0-lg">
      <a href="{$GET_SITE_ADD}" class="stext-109 cl8 hov-cl1 trans-04">
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
   {$SUCESSO}{$ERRO}
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

