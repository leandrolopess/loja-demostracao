<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-15 01:32:10
  from 'D:\xampp\htdocs\loja_adaptada\add\view\add_categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dce1c3a7dfe37_16660457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81aa0179e096a11c9c5c67739320577e2b5ea6de' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\add\\view\\add_categorias.tpl',
      1 => 1573788722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dce1c3a7dfe37_16660457 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
  <div class="row">
  <div class="col-md-12 text-center margin-top"> 
   <h1 class="cl2 text-center"><i class="fa fa-list mt-3"></i> Gerenciamento de Subcategorias
   </h1>
   <p class="mt-3 mtext-105 f-20">Aqui você pode adiconar novas subcategorias as categorias existentes na loja, além de editar e exluir subcategorias. </p>
   <hr>
</div>
</div>
  <!-- Conteúdo -->
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-4">
<div class="margin-top margin-bottom">
<form name="categoriainsere" method="post" action="">

	<div class="col-md-12">
         <label>Categoria</label>
        <div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
      <div class="bor8 bg0 size-116">
      <select  required class="js-select2" name="pro_categoria" >
      <option value=""> Selecione a categoria </option>  
      <option value="masculino"> Masculino </option>  
      <option value="feminino"> Feminino </option> 
      <option value="infantil"> Infantil </option>  
      </select>
      <div class="dropDownSelect2"></div>
      </div>     
      </div>
        </div>

        <div class="col-md-12"> 
         <label>Nome da subcategoria</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Nome da subcategoria" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cate_nome" required>
      </div>
        </div>

        <div class="col-md-12 text-center">
        	<button class="btn btn-lg bg-azul branco" name="cate_nova" value="cate_nova">Adicionar</button>
        </div>

    </div>
</div>
</form>

       

<div class="col-sm-12 col-md-8 col-lg-8">
	<div class="margin-top margin-bottom">


<div class="col-md-12">
<div class="table-responsive">
   <table class="table table-bordered table-striped table-hover">
     <thead>
       <tr>
         <th class="text-center">Masculino</th>
         <th class="text-center">Editar</th>
         <th class="text-center">Apagar</th>
       </tr>
     </thead>
     <tbody>
     <form name="categorias_editar" method="post" action="">
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
       <tr>
        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</td>
        <td class="text-center">
        
        <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
">
        <button name="cate_editar" value="cate_editar"> <i class="fa fa-pencil"></i> </button>
      
        </td>
        <td class="text-center">
        
        <input type="hidden" name="pro_id" id="pro_id" value="">
        <button name="cate_apagar" value="cate_apagar"> <i class="fa fa-trash"></i></button>
       
       </td>
       </tr>
       </form>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     </tbody>
   </table>
 </div>
</div>

<div class="col-md-12">
<div class="table-responsive">
   <table class="table table-bordered table-striped table-hover">
     <thead>
       <tr>
         <th class="text-center">Feminino</th>
         <th class="text-center">Editar</th>
         <th class="text-center">Apagar</th>
       </tr>
     </thead>
     <tbody>
     <form name="categorias_editar" method="post" action="">
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASFE']->value, 'F');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['F']->value) {
?>
       <tr>
        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['F']->value['cate_nome'];?>
</td>
        <td class="text-center">
        
        <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['F']->value['cate_id'];?>
">
        <button name="cate_editar" value="cate_editar"> <i class="fa fa-pencil"></i> </button>
      
        </td>
        <td class="text-center">
        
        <input type="hidden" name="pro_id" id="pro_id" value="">
        <button name="cate_apagar" value="cate_apagar"> <i class="fa fa-trash"></i></button>
       
       </td>
       </tr>
       </form>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     </tbody>
   </table>
 </div>
</div>


<div class="col-md-12">
<div class="table-responsive">
   <table class="table table-bordered table-striped table-hover">
     <thead>
       <tr>
         <th class="text-center">Infantil</th>
         <th class="text-center">Editar</th>
         <th class="text-center">Apagar</th>
       </tr>
     </thead>
     <tbody>
     <form name="categorias_editar" method="post" action="">
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASIN']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
       <tr>
        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['I']->value['cate_nome'];?>
</td>
        <td class="text-center">
        
        <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['cate_id'];?>
">
        <button name="cate_editar" value="cate_editar"> <i class="fa fa-pencil"></i> </button>
      
        </td>
        <td class="text-center">
        
        <input type="hidden" name="pro_id" id="pro_id" value="">
        <button name="cate_apagar" value="cate_apagar"> <i class="fa fa-trash"></i></button>
       
       </td>
       </tr>
       </form>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     </tbody>
   </table>
 </div>
</div>



    </div>
</div>


  


    
    </div>
   </div>
  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->
<?php }
}
