<?php
/* Smarty version 3.1.33, created on 2019-11-03 16:32:13
  from 'D:\xampp\htdocs\loja\add\view\add_produtos_novo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbf1d2d658ee3_02989074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7495e03f956c3c399a0b910bba791f6d97165601' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja\\add\\view\\add_produtos_novo.tpl',
      1 => 1572805775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbf1d2d658ee3_02989074 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
  <div class="row">
  <div class="col-md-12 text-center margin-top"> 
   <h1 class="cl2 text-center"> Adicionar novo produto
   </h1>
   <?php echo $_smarty_tpl->tpl_vars['SUCESSO']->value;
echo $_smarty_tpl->tpl_vars['ERRO']->value;?>

  <!-- Conteúdo -->
<div class="box padding-20 margin-top margin-bottom">
<form name="frm_produto" method="post" action=""  enctype="multipart/form-data">

<section class="row" id="camposproduto">
  
        <div class="col-md-12">
        <p class="margin-bottom pull-right red">* Todos os campos são obrigatórios</p> 
        </div>
        
        <div class="col-lg-4 col-md-6"> 
          <label>Produto</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Nome do Produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text"  name="pro_nome" placeholder="* Nome do Produto" required>
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Modelo</label>
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
          <label>Valor</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Preço do Produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_valor" placeholder="* Preço do Produto" required>
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
      <input title="* Altura do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_altura" placeholder="* Altura do produto" required>
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Largura</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Largura do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_largura" placeholder="* Largura do produto" required>
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Comprimento</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Comprimento do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="pro_comprimento" placeholder="* Comprimento do produto" required>
      </div>
        </div>



        <div class="col-lg-4 col-md-6">
          <label>Categoria</label>
        <div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
      <div class="bor8 bg0 size-116">
      <select  required class="js-select2" name="pro_categoria" >
      <option value=""> Escolha </option> 
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
        </select>
      <div class="dropDownSelect2"></div>
      </div>     
      </div>
        </div>

        <div class="col-lg-4 col-md-6"> 
          <label>Imagem Principal</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input type="file" name="pro_img" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30  relative top-15 text-center" id="pro_img">
      </div>
        </div>

        
      <div class="col-lg-4 col-md-6">
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
      <label class="text-left">Descrição</label>
     <div class="bor8 m-b-30">
      <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25 no-resize" name="pro_desc" placeholder="Descrição do produto*" required></textarea>
      <?php echo '<script'; ?>
> 
      tinymce.init({ selector:'textarea'  });
      <?php echo '</script'; ?>
> 
          
      </div>
      </div>

      <div class="col-12"> 
          <label class="text-left">Slug</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Slug do produto" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" readonly name="pro_slug" required>
      </div>
        </div>
      

      </section>

      <br>
      <br>
      
      <section class="row" id="btngravar">
       <div class="col-md-4"></div>
       <div class="col-md-4">
       <button type="submit" class="botao btn-login" name="btn_gravar"> <i class="zmdi zmdi-check f-25" style="position:relative;top:3px;"></i> Gravar </button>
       </div>
       <div class="col-md-4"></div>
       </section>
       </form>
       </div>

 

    

  
  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->
<?php }
}
