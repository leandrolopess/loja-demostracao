<?php
/* Smarty version 3.1.33, created on 2019-11-06 19:42:51
  from '/home/vol11_7/epizy.com/epiz_22059887/htdocs/loja_adaptada/add/view/add_produtos_novo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc33e5b0701d9_81989337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88441dba4efdabd19635ebf74e0ac6ed5b5630b6' => 
    array (
      0 => '/home/vol11_7/epizy.com/epiz_22059887/htdocs/loja_adaptada/add/view/add_produtos_novo.tpl',
      1 => 1573067328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc33e5b0701d9_81989337 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

  
<div class="container-fluid">
  <div class="col-md-12 margin-top"> 
   <h1 class="cl2 mtext-105"> Adicionar novo produto
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
        <p class="margin-bottom pull-right red">* Campos obrigatórios</p> 
        </div>
        
        <div class="col-md-12"> 
         <label>Produto</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Nome do Produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text"  name="pro_nome" placeholder="* Nome do Produto" required>
      </div>
        </div>

        <div class="col-12">
      <label>Descrição</label>
     <div class="bor8 m-b-30">
      <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25 no-resize" name="pro_desc" id="pro_desc" placeholder="Descrição do produto*" required></textarea>
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
      <input title="* Referencia do Produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_modelo" placeholder="* Referencia do Produto" required>
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Referência</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Referência do Produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_ref" placeholder="* Referência do Produto" required>
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Estoque</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Quantos produtos em estoque" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_estoque" placeholder="* Quantos produtos em estoque" required>
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Peso</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Peso do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_peso" placeholder="* Peso do produto" required>
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Altura</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title=" Altura do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_altura" placeholder=" Altura do produto">
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Largura</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title=" Largura do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_largura" placeholder=" Largura do produto">
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Comprimento</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="Comprimento do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_comprimento" placeholder="Comprimento do produto">
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Preço (R$)</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Preço do Produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_valor" placeholder="* Preço do Produto" required>
      </div>
        </div>



        

      </div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="box padding-20 margin-top margin-bottom">
        <div class="col-md-12"> 
          <label>Imagem Principal</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input type="file" name="pro_img" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30  relative top-15 text-center" id="pro_img">
      </div>
        </div>


        <div class="col-md-12">
          <label>Categoria</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <ul class="list-group margin-bottom">

  <li class="list-group-item" style="margin-bottom:-15px;">
    <input type="checkbox" class="form-check-input" id="masculino" style="position: relative;left: 15px;top: 18px;">
    <label class="form-check-label f-14" for="masculino">Masculino</label></li>
    <ul class="list-group" style="margin-left:20px;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'M');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['M']->value) {
?>
  <li class="list-group-item" style="margin-bottom:-15px;">
    <input type="checkbox" class="form-check-input" id="subcat-masculino" style="position: relative;left: 15px;top: 18px;" name="pro_categoria" value="<?php echo $_smarty_tpl->tpl_vars['M']->value['cate_id'];?>
">
    <label class="form-check-label f-14" for="subcat-masculino"><?php echo $_smarty_tpl->tpl_vars['M']->value['cate_nome'];?>
</label></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    </ul>

  <li class="list-group-item" style="margin-bottom:-15px;">
    <input type="checkbox" class="form-check-input" id="feminino" style="position: relative;left: 15px;top: 18px;">
    <label class="form-check-label f-14" for="feminino">Feminino</label></li>
    <ul class="list-group" style="margin-left:20px;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASFE']->value, 'F');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['F']->value) {
?> 
  <li class="list-group-item" style="margin-bottom:-15px;">
    <input type="checkbox" class="form-check-input" id="subcat-feminino" style="position: relative;left: 15px;top: 18px;" name="pro_categoria" value="<?php echo $_smarty_tpl->tpl_vars['F']->value['cate_id'];?>
">
    <label class="form-check-label f-14" for="subcat-feminino"><?php echo $_smarty_tpl->tpl_vars['F']->value['cate_nome'];?>
</label></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    </ul>

    <li class="list-group-item" style="margin-bottom:-15px;">
      <input type="checkbox" class="form-check-input" id="infantil" style="position: relative;left: 15px;top: 18px;">
    <label class="form-check-label f-14" for="infantil">Infantil</label></li>
    <ul class="list-group" style="margin-left:20px;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASIN']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
  <li class="list-group-item" style="margin-bottom:-15px;">
    <input type="checkbox" class="form-check-input" id="subcat-infantil"  value="<?php echo $_smarty_tpl->tpl_vars['I']->value['cate_id'];?>
" name="pro_categoria" style="position: relative;left: 15px;top: 18px;">
    <label class="form-check-label f-14" for="subcat-infantil"><?php echo $_smarty_tpl->tpl_vars['I']->value['cate_nome'];?>
</label></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    </ul>
    
      </div>
        </div>





        
      <div class="col-md-12">
      <label>Mostrar no site</label>
      <div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
      <div class="bor8 bg0 size-116">
      <select  required class="js-select2" name="pro_ativo">
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
      <input title="* Slug do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" readonly name="pro_slug" required>
      </div>
        </div>

        <div class="col-12"> 
          <button type="submit" class="botao btn-login" name="btn_gravar"> <i class="zmdi zmdi-check f-25" style="position:relative;top:3px;"></i> Gravar </button>
      </div>
        </div>

        
      </div>
    </div>
     </form> 
      </section>

     

 

    

  
  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->
<?php }
}
