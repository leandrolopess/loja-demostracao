<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-21 18:04:46
  from 'D:\xampp\htdocs\loja_adaptada\add\view\add_subcategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dd6edde391861_79203517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2721236cb7738c24a9c921032fa5fe4f4d7856d7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\add\\view\\add_subcategorias.tpl',
      1 => 1574366099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd6edde391861_79203517 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
  <div class="row">
    <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-lr-0-lg margin-top margin-left">
      <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADD']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <span class="stext-109 cl4">
        <i class="fa fa-list"></i> Subcategorias
      </span>

    </div>

  <div class="col-md-12 text-center margin-top"> 
   <h1 class="cl2 text-center"><i class="fa fa-list mt-3"></i> Gerenciamento de Subcategorias
   </h1>
   <p class="mt-3 mtext-105 f-20">Aqui você pode adiconar novas subcategorias as categorias existentes na loja, além de editar e exluir subcategorias. </p>
   <hr>
</div>
</div>
<?php echo $_smarty_tpl->tpl_vars['SUCESSO']->value;
echo $_smarty_tpl->tpl_vars['ERRO']->value;?>

  <!-- Conteúdo -->

<div class="row">
<div class="col-sm-12 col-md-4 col-lg-4">
<div class="margin-top margin-bottom">
<form name="categoriainsere" method="post" action="">

        <div class="col-md-12"> 
         <label>Nome da subcategoria</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Nome da subcategoria" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cate_nome" required>
      </div>
        </div>

        <div class="col-md-12">
         <label>Categoria</label>
        <div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
      <div class="bor8 bg0 size-116">
      <select  required class="js-select2" name="pro_categoria" >
      <option value=""> Selecione a categoria a qual vai pertencer  </option>  
      <option value="masculino"> Masculino </option>  
      <option value="feminino"> Feminino </option> 
      <option value="infantil"> Infantil </option>
      <option value="bolas"> Bolas </option>  
      </select>
      <div class="dropDownSelect2"></div>
      </div>     
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
<?php if ($_smarty_tpl->tpl_vars['TOTAL_MASCULINO']->value > 0) {?>
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
    
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
       <tr>
        <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
 </td>

        <td class="text-center">
        <form name="sub_editar" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['PAG_SUB_EDITAR']->value;?>
">
        <input type="hidden" name="cate_nome" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
">	
        <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
">
        <input type="hidden" name="cate_sub" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_sub'];?>
">
        <button > <i class="fa fa-pencil"></i> </button>
        </form>
        </td>

        <td class="text-center">
        <form name="categorias_editar" method="post" action="">
        <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
">
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
 <?php } else { ?>
 <?php }?>
</div>

<div class="col-md-12">
<?php if ($_smarty_tpl->tpl_vars['TOTAL_FEMENINO']->value > 0) {?>
<div class="table-responsive">
   <table class="table table-bordered table-striped table-hover">
     <thead>
       <tr>
         <th class="text-center">Femenino</th>
         <th class="text-center">Editar</th>
         <th class="text-center">Apagar</th>
       </tr>
     </thead>
     <tbody>
    
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASFE']->value, 'F');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['F']->value) {
?>
       <tr>
        <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['F']->value['cate_nome'];?>
 </td>

        <td class="text-center">
        <form name="sub_editar" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['PAG_SUB_EDITAR']->value;?>
">
        <input type="hidden" name="cate_nome" value="<?php echo $_smarty_tpl->tpl_vars['F']->value['cate_nome'];?>
">	
        <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['F']->value['cate_id'];?>
">
        <input type="hidden" name="cate_sub" value="<?php echo $_smarty_tpl->tpl_vars['F']->value['cate_sub'];?>
">
        <button > <i class="fa fa-pencil"></i> </button>
        </form>
        </td>

        <td class="text-center">
        <form name="categorias_editar" method="post" action="">
        <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['F']->value['cate_id'];?>
">
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
 <?php } else { ?>
 <?php }?>
</div>


<div class="col-md-12">
<?php if ($_smarty_tpl->tpl_vars['TOTAL_INFANTIL']->value > 0) {?>
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
    
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASIN']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
       <tr>
        <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['I']->value['cate_nome'];?>
 </td>

        <td class="text-center">
        <form name="sub_editar" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['PAG_SUB_EDITAR']->value;?>
">
        <input type="hidden" name="cate_nome" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['cate_nome'];?>
">	
        <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['cate_id'];?>
">
        <input type="hidden" name="cate_sub" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['cate_sub'];?>
">
        <button > <i class="fa fa-pencil"></i> </button>
        </form>
        </td>

        <td class="text-center">
        <form name="categorias_editar" method="post" action="">
        <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['cate_id'];?>
">
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
 <?php } else { ?>
 <?php }?>
</div>

<div class="col-md-12">
<?php if ($_smarty_tpl->tpl_vars['TOTAL_BOLAS']->value > 0) {?>	
<div class="table-responsive">
   <table class="table table-bordered table-striped table-hover">
     <thead>
       <tr>
         <th class="text-center">Bolas</th>
         <th class="text-center">Editar</th>
         <th class="text-center">Apagar</th>
       </tr>
     </thead>
     <tbody>
    
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASBO']->value, 'B');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['B']->value) {
?>
       <tr>
        <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['B']->value['cate_nome'];?>
 </td>

        <td class="text-center">
        <form name="sub_editar" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['PAG_SUB_EDITAR']->value;?>
">
        <input type="hidden" name="cate_nome" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['cate_nome'];?>
">	
        <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['cate_id'];?>
">
        <input type="hidden" name="cate_sub" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['cate_sub'];?>
">
        <button > <i class="fa fa-pencil"></i> </button>
        </form>
        </td>

        <td class="text-center">
        <form name="categorias_editar" method="post" action="">
        <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['cate_id'];?>
">
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
 <?php } else { ?>
 <?php }?>
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
