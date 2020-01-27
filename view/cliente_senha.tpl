<div class="container-fluid">
        <div class="row">
    <div class="col-md-3">
        {include file="user-profile/sidebar.tpl"}
    </div>

    <div class="col-md-9 content-senha">
<form name="alterarsenha" method="post" action="">
    <section class="mudar-dados container">
    <h1 class="mtext-105 cl2 p-b-15 f-20">Alteração de senha</h1>
    <h2 class="f-18">Aqui você pode mudar sua senha atual para outra que deseja</h2>
    <hr>
    {$ERRO}
    {$SUCESSO}
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
