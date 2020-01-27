<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-09 21:25:06
  from 'D:\xampp\htdocs\loja_adaptada\add\view\add_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5deed7d20a6429_47399824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3d67676a6b6e3af2b5ffca9ee5b00e406a5595a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\add\\view\\add_info.tpl',
      1 => 1575933903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5deed7d20a6429_47399824 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
  <div class="row">
    <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 margin-top margin-left p-lr-0-lg">
      <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADD']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>
      <span class="stext-109 cl4">
        <i class="fa fa-building"></i> Lojas
      </span>
    </div>

  <div class="col-md-12 text-center"> 
   <h1 class="cl2 text-center"><i class="fa fa-building mt-3"></i> Lojas
   </h1>
   <p class="mt-3 mtext-105 f-20">Faça aqui o gerenciamento das lojas, adicionando informações e dados sobre as lojas. </p>
   <hr>

  <!-- Conteúdo -->
<section class="row "> 

 <div class="col-md-4"></div>
    <div class="col-md-4 margin-bottom">  
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADICIONAR_LOJA']->value;?>
" class="btn btn-success"> <i class="fa fa-plus"></i> Novo Loja</a>
    </div>
    <div class="col-md-4"></div>

</section>

  <div class="table-responsive">
   <table class="table table-hover">
     <thead>
       <tr>
         <th class="text-center" style="border-left: 1px solid #e9ecef;border-right:1px solid #e9ecef;">Loja</th>
         <th class="text-center" style="border-right: 1px solid #e9ecef;">Cidade</th>
         <th class="text-center" style="border-right: 1px solid #e9ecef;">Estado</th>
         <th class="text-center" style="border-right: 1px solid #e9ecef;">Editar</th>
         <th class="text-center" style="border-right: 1px solid #e9ecef;">Apagar</th>
       </tr>
     </thead>
     <tbody>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INFO']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
       <tr>
        <td class="text-center">
        <form name="proeditar" method="get" action="<?php echo $_smarty_tpl->tpl_vars['LOJA_EDITAR']->value;?>
">
        <input type="hidden" name="pro_id" id="pro_id" value="">
        <button><?php echo $_smarty_tpl->tpl_vars['I']->value['info_loja'];?>
</button>
        </form>
        </td>

        <td >
        <?php echo $_smarty_tpl->tpl_vars['I']->value['info_cidade'];?>

        </td>

        <td>
        <?php echo $_smarty_tpl->tpl_vars['I']->value['info_estado'];?>

        </td>


        <td class="text-center">
        <form name="proeditar" method="get" action="<?php echo $_smarty_tpl->tpl_vars['LOJA_EDITAR']->value;?>
">
        <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['info_id'];?>
">
        <button> <i class="fa fa-pencil"></i> </button>
        </form>  
        </td>

        <td class="text-center">
        <form name="proeditar" method="get" action="">
        <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['info_id'];?>
">
        <button> <i class="fa fa-trash"></i> </button>
        </form>  
        </td>

       </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

     </tbody>
   </table>
 </div>




  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->

<?php }
}
