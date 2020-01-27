<?php
/* Smarty version 3.1.33, created on 2019-11-02 23:15:35
  from 'D:\xampp\htdocs\loja\add\view\add_produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbe38477e0589_44187814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd022f5eeba7115c83273ef3bda0740d794a1f8f9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja\\add\\view\\add_produtos.tpl',
      1 => 1572747332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbe38477e0589_44187814 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
  <div class="row">
  <div class="col-md-12 text-center margin-top"> 
   <h1 class="cl2 text-center"><i class="fa fa-tag mt-3"></i> Gerenciamento de Produtos
   </h1>
   <p class="mt-3 mtext-105 f-20">Aqui você encontra todos os produtos cadastrados no sistema, apartir daqui você pode visualizar e editar infomações, além de adicionar novos produtos a loja. </p>
   <hr>

  <!-- Conteúdo -->
<section class="row "> 
 <div class="col-md-4"> </div>
    <div class="col-md-4"> </div>
    <div class="col-md-4 text-right margin-bottom-30 margin-top">
    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_NOVO']->value;?>
" class="btn btn-success"> <i class="fa fa-plus"></i> Novo Produto</a>
    </div>

</section>

 <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
 <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>  
 <?php }?>

  <div class="table-responsive">
   <table class="table table-bordered table-striped table-hover">
     <thead>
       <tr>
         <th class="text-center">Imagem</th>
         <th class="text-center">Produto</th>
         <th class="text-center">Preço</th>
         <th class="text-center">Editar</th>
         <th class="text-center">Apagar</th>
       </tr>
     </thead>
     <tbody>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
       <tr>
        <td style="width:10%;" class="text-center">
        <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_p'];?>
" alt="" width="100px"></a>
        </td>
        <td style="width:50%;"><a href=""><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td></a>
        <td style="width:10%;" class="text-center">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
        <td style="width:10%;" class="text-center">
        <form name="proeditar" method="post" action="">
        <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
        <a href=""> <i class="fa fa-pencil"></i> </a>
        </form> 
        </td>
        <td style="width:10%;" class="text-center"><a href=""><i class="fa fa-times"></i></a></td>
       </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     </tbody>
   </table>
 </div>

 <!--  paginação inferior   -->  
   

    <div class="flex-c-m flex-w w-full p-t-45 margin-bottom">
         <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

        
      </div>

    

  
  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->
<?php }
}
