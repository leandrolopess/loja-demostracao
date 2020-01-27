<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-11 15:23:54
  from 'D:\xampp\htdocs\vanuza\add\view\add_produtos_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df1262a7e2bb8_24958652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '248f2dc1d758fc0d24ba29d58aebf2f3aa815665' => 
    array (
      0 => 'D:\\xampp\\htdocs\\vanuza\\add\\view\\add_produtos_editar.tpl',
      1 => 1575758916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1262a7e2bb8_24958652 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/ckeditor-full/ckeditor.js"><?php echo '</script'; ?>
> 
<div class="container-fluid">
  <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 margin-top p-lr-0-lg">
      <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADD']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tag"></i> Produtos
         <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <span class="stext-109 cl4"><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_nome'];?>
</span>

    </div>
    
  <div class="col-md-12 margin-top"> 
   <h1 class="cl2 mtext-105"> <i class="fa fa-pencil"></i> Editar produto
   </h1>
   <?php echo $_smarty_tpl->tpl_vars['SUCESSO']->value;
echo $_smarty_tpl->tpl_vars['ERRO']->value;?>

<!-- Row Principal -->
<div class="row">
<!--  Col Conteúdo -->
<div class="col-sm-12 col-md-8 col-lg-8">
<div class="box padding-20 margin-top margin-bottom">
<form name="frm_produto" method="post" action=""  enctype="multipart/form-data">

<section class="row" id="camposproduto">
        
        <div class="col-md-12"> 
         <label>Produto</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Nome do Produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_nome" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_nome'];?>
" required>
      </div>
        </div>

        <div class="col-12">
      <label>Descrição</label>
     <div class="m-b-30">
      <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25 no-resize" name="pro_desc" id="pro_desc" required><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_desc'];?>
</textarea>
      <?php echo '<script'; ?>
> 
      CKEDITOR.replace( 'pro_desc' );
      <?php echo '</script'; ?>
> 
      </div>
      </div>


        <div class="col-lg-4 col-md-6"> 
          <label>Marca</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Marca do Produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_modelo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_modelo'];?>
" required>
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Referência</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Referência do Produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_ref" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ref'];?>
" required>
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Estoque</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Quantos produtos em estoque" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_estoque" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_estoque'];?>
" required>
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Peso</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Peso do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_peso" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_peso'];?>
" required>
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Altura</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title=" Altura do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_altura" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_altura'];?>
">
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Largura</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title=" Largura do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_largura" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_largura'];?>
">
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Comprimento</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="Comprimento do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_comprimento" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_comprimento'];?>
">
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Preço (R$)</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Preço do Produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_valor" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_valor'];?>
" required>
      </div>
        </div>
          <?php if ($_smarty_tpl->tpl_vars['PRO']->value[1]['pro_desconto'] > 0) {?>
         <div class="col-lg-4 col-md-6"> 
          <label>Preço com desconto</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title=" Preço com desconto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_valor_com_desconto'];?>
" readonly>
      </div>
        </div>
        <?php } else { ?>
        <?php }?>
         
        <div class="col-lg-4 col-md-6"> 
          <label>Porcentagem do desconto (%)</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Porcentagem do Produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_desconto" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_desconto'];?>
">
      </div>
        </div>

      </div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="box padding-20 margin-top margin-bottom">
          <div class="row">
        <div class="col-md-12"> 
          <label>Imagem Principal</label>
        <div class="m-b-20 how-pos4-parent">
      <img name="preview" src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img'];?>
" class="img-thumbnail padding-20 " alt="">

      <input type="file" name="pro_img" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 relative top-15 text-center inputfile" id="pro_img" onchange="previewImagem()">

      <label for="pro_img" class="margin-top" style="outline:none;"><h5 class="text-center">Adicionar Imagem<br>
        <i class="fa fa-upload margin-top"></i></h5></label>




      <!--pega o nome da imagem atual -->
      <input type="hidden" name="pro_img_atual" id="pro_img_atual" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_atual'];?>
">
      <!----pega o caminho completo da imagem atual -->
       <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_arquivo'];?>
">
      </div>
        </div>

        <div class="col-md-12">
         <label>Categoria</label>
        <div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
      <div class="bor8 bg0 size-116">
      <select  required class="js-select2" name="pro_categoria" >
      <option value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cate_nome'];?>
 </option>
      <option value=""> MASCULINO </option> 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>                    
        <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</option>                
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         <option value=""> FEMININO </option>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASFE']->value, 'F');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['F']->value) {
?>                    
        <option value="<?php echo $_smarty_tpl->tpl_vars['F']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['F']->value['cate_nome'];?>
</option>                
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <option value=""> INFANTIL </option>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASIN']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>                    
        <option value="<?php echo $_smarty_tpl->tpl_vars['I']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['I']->value['cate_nome'];?>
</option>                
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <option value=""> BOLAS </option>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASBO']->value, 'B');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['B']->value) {
?>                    
        <option value="<?php echo $_smarty_tpl->tpl_vars['B']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['B']->value['cate_nome'];?>
</option>                
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      <div class="dropDownSelect2"></div>
      </div>     
      </div>
        </div>
        
      <div class="col-md-12">
      <label>Mostrar no site</label>
      <div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
      <div class="bor8 bg0 size-116">
      <select  required class="js-select2" name="pro_ativo">
      <option value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ativo'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ativo'];?>
 </option>
      <option value=""> Escolha </option>
      <option value="NAO"> Não </option>
      <option value="SIM"> Sim </option> 
      </select>
      <div class="dropDownSelect2"></div>
      </div>     
      </div>
      </div>

      <div class="col-12"> 
          <label class="text-left">Slug</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Slug do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" readonly name="pro_slug" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_slug'];?>
" required>
      </div>
        </div>

        <div class="col-12"> 
          <label class="text-left">Views</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Views do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" readonly name="pro_views" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_views'];?>
">
      </div>
        </div>

        <div class="col-12"> 
        <button type="submit" class="botao btn-login" name="btn_gravar"> <i class="zmdi zmdi-check f-25" style="position:relative;top:3px;"></i> Salvar </button>
        <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
">
      </div>
        </form>

        <div class="col-md-12 text-right  margin-bottom margin-top">
        <!-- Botão Modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal">
         <i class="fa fa-trash-o f-20"></i> Apagar Produto 
        </button>

        <!-- Modal -->
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Apagar Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-center">
        
              <!---botao que apagar o produto de uma vez -->
              <form name="frm_apagar" method="post" action="">
              <label>Tem certeza que deseja apagar este produto?</label>
              <div style="display:block ruby">
              <input type="radio" name="confirmar" value="SIM" required>Sim
              <!-- <input type="radio" name="confirmar" value="NAO" required>Não -->
              </div>
              <!---botao que apagar o produto de uma vez -->
              <button class="btn btn-danger " name="btn_apagar"><i class="glyphicon glyphicon-remove"></i> Confirmar </button> 
                <button class="btn btn-success" data-dismiss="modal"> Cancelar </button>
              <input type="hidden" name="pro_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
">
              <input type="hidden" name="pro_apagar" value="SIM">
                          
              <!----pega o caminho completo da imagem atual -->
              <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_arquivo'];?>
">

              </form>
      
               </div>
              </div>
             </div>
            </div>
          </div>

          <div class="col-md-12 text-right margin-bottom">    
        <form name="ver_produto" method="post" action="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/produto/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_slug'];?>
" target="_blank">
        <input type="hidden" name="produto_subcategoria" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_categoria'];?>
">
        <button class="btn btn-success"><i class="fa fa-eye f-20"></i> Visualizar</button>
       </form>
        </div>

        
         </div>
        </div>

      </div>
    </div>
  
  </section>

  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->

<?php }
}
