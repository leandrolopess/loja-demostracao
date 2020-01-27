<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-29 20:49:24
  from 'D:\xampp\htdocs\loja_adaptada\add\view\add_info_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5de1a0741b9602_96000703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcdc345ad6043e798086dcd729e5564a053ec367' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\add\\view\\add_info_editar.tpl',
      1 => 1575067753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de1a0741b9602_96000703 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-lr-0-lg margin-top">
      <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADD']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_INFO']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-info-circle"></i> Informações
      </a>

    </div>
  <div class="col-md-12 margin-top"> 
   <h1 class="cl2 mtext-105"> <i class="fa fa-pencil"></i> Editar Informações
   </h1>
   <?php echo $_smarty_tpl->tpl_vars['SUCESSO']->value;
echo $_smarty_tpl->tpl_vars['ERRO']->value;?>

<!-- Row Principal -->
<div class="row">
<!--  Col Conteúdo -->
<div class="col-md-12">
<div class="box padding-20 margin-top margin-bottom">
<form name="info_editar" method="post" action="">

<section class="row" id="camposproduto">

         <div class="col-md-12 flex-c">
        <!-- Tab01 -->
        <div class="tab01">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item p-b-10">
              <a class="nav-link active" data-toggle="tab" href="#gerais" role="tab"><i class="fa fa-map-marker"></i> Informações Gerais</a>
            </li>

            <li class="nav-item p-b-10">
              <a class="nav-link" data-toggle="tab" href="#contato" role="tab"><i class="fa fa-phone"></i> Contato</a>
            </li>

            <li class="nav-item p-b-10">
              <a class="nav-link" data-toggle="tab" href="#redes_socias" role="tab"><i class="fa fa-facebook"></i>&nbsp;<i class="fa fa-twitter"></i>&nbsp;<i class="fa fa-instagram"></i> Redes Socias</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content p-t-43">
            <!-- Informações Gerais --->
            <div class="tab-pane fade show active" id="gerais" role="tabpanel">
              <div class="col-10 col-lg-8 m-lr-auto text-center">
                  <table class="table table-bordered cl2 info-table">
                      
                      <div class="row">
                     <div class="col-md-6"> 
                    <label>Rua</label>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <input title="* Nome da rua da loja" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 text-center" type="text"  name="info_rua" placeholder="* Nome da rua da loja" required value="<?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_rua'];?>
">
                    </div>
                  </div>
                     
                    <div class="col-md-6">
                    <label>Número</label>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <input title="* Número da loja" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 text-center" type="text"  name="info_numero" placeholder="* Número da loja" required value="<?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_numero'];?>
" minlength="3" maxlength="5">
                    </div>
                    </div>

                     <div class="col-md-6"> 
                    <label>Cidade</label>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <input title="* Cidade da loja" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 text-center" type="text"  name="info_cidade" placeholder="* Cidade da loja" required value="<?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_cidade'];?>
">
                    </div>
                  </div>
                     
                    <div class="col-md-6">
                    <label>Estado</label>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <input title="* Estado onde fica localizado a loja" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 text-center" type="text"  name="info_estado" placeholder="* Estado onde fica localizado a loja" required value="<?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_estado'];?>
">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <label>Cep</label>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <input title="* Cep da loja" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 text-center" type="text"  name="info_cep" placeholder="* Cep da loja" required minlength="9" maxlength="9" value="<?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_cep'];?>
" OnKeyPress="formatar('#####-###', this)">
                    </div>
                    </div>

                  </div>

                    </table>
                </div>
            </div>

            <!-- Contato--->
            <div class="tab-pane fade" id="contato" role="tabpanel">
              <div class="row">
                <div class="col-10 col-lg-8 m-lr-auto text-center">
                  <table class="table table-bordered cl2 info-table">
                    
                    <div class="row">
                    <div class="col-md-6">
                    <label>Telefone</label>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <input title="* Telefone da loja" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 text-center" type="text"  name="info_telefone" placeholder="* Telefone da loja" required value="<?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_telefone'];?>
" minlength="13" maxlength="14" OnKeyPress="formatar('########-####', this)">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <label>Whats</label>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <input title="* Whats da loja" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 text-center" type="text"  name="info_whats" placeholder="* Whats da loja" required value="<?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_whats'];?>
" minlength="13" maxlength="15" OnKeyPress="formatar('#########-###', this)">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <label>Email</label>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <input title="* Email da loja" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 text-center" type="email"  name="info_email" placeholder="* Email da loja" value=" <?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_email'];?>
">
                    </div>
                    </div>
                     
                     </div>
                    </table>
                </div>
              </div>
            </div>
                   
            <!-- Redes Socias --->
            <div class="tab-pane fade" id="redes_socias" role="tabpanel">
              <div class="row">
                <div class="col-12 m-lr-auto text-center">
                  <table class="table table-bordered cl2 info-table">
                    
                    <div class="row">
                    <div class="col-md-12">
                    <label>Facebook</label>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <input title="* Link do facebook da loja" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 text-center" type="text"  name="info_face" placeholder="* ex: https://www.facebook.com/nomedaloja" value="<?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_face'];?>
">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <label>Twitter</label>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <input title="* Link do twitter da loja" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 text-center" type="text"  name="info_twitter" placeholder="* ex: https://twitter.com/nomedaloja" value="<?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_twitter'];?>
">
                    </div>
                    </div>

                    <div class="col-md-12">
                    <label>Instagram</label>
                    <div class="bor8 m-b-20 how-pos4-parent">
                    <input title="* Link do instagram da loja" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 text-center" type="text"  name="info_insta" placeholder="* ex: https://www.instagram.com/nomedaloja" value="<?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_insta'];?>
">
                    </div>
                    </div>

                    </div>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 text-center">
         <button type="submit" class="botao bg-azul" name="btn_gravar"> <i class="zmdi zmdi-check f-25" style="position:relative;top:3px;"></i> Salvar </button>
         </div>
       </section>
      </form>
       
     </div>
    </div>

    
    </div>
  
  </section>

  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->

<?php }
}
