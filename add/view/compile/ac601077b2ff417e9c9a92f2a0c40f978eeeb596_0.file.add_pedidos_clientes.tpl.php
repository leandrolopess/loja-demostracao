<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-22 01:33:17
  from 'D:\xampp\htdocs\loja_adaptada\add\view\add_pedidos_clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dd756fdb039a3_57800139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac601077b2ff417e9c9a92f2a0c40f978eeeb596' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\add\\view\\add_pedidos_clientes.tpl',
      1 => 1574393594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd756fdb039a3_57800139 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
	<div class="row">
		<!-- breadcrumb -->
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-lr-0-lg margin-top">
			<a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADD']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
				<i class="fa fa-tachometer"></i> Painel de controle
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTES']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
				<i class="fa fa-users"></i> Clientes
			</a>

		</div>

	<div class="col-md-12 text-center"> 
   <h1 class="cl2 mtext-105 text-center"><i class="fa fa-file-text mt-3"></i> Pedidos Cliente <?php echo $_smarty_tpl->tpl_vars['PEDIDOS']->value[1]['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['PEDIDOS']->value[1]['cli_sobrenome'];?>

   </h1>
</div>
    
    <div class="col-md-12">
    <hr>

     
   <div class="table-responsive-md margin-top-10">
<table class="table">

  <thead style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">
    <tr>
      <th scope="col" class="text-center">Pedido</th>
      <th scope="col" class="text-center">Data</th>
      <th scope="col" class="text-center">Status</th>
      <th scope="col" class="text-center">Ver</th>
      <th scope="col" class="text-center">Apagar</th>
    </tr>
  </thead>
  <tbody style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
    <tr>
      <th scope="row" class="text-center">#<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
 </th>
      <th scope="row" class="text-center"  style="border-left: 1px solid #eaeaea;"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
 </th>
      <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'NAO') {?> 
      <td  class="text-center"><span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
      <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'Pago') {?>
      <td  class="text-center"><span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
      <?php } else { ?>
      <td  class="text-center"><span class="badge badge-warning">Processando</span></td>
    
      <?php }?>
     
      <form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
      <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
      <td class="text-center">
      <button class="btn bg-azul btn-pedido">
      <i class="fa fa-eye "></i> Detalhes
      </button>
      </td>
      </form> 

      <form name="deletar" method="post" action="">
      <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
      <td class="text-center">
      <button class="btn btn-danger" name="ped_apagar" value="ped_apagar">
      <i class="fa fa-trash-o "></i> Apagar
      </button>
      </td>
      </form> 

    </tr>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>

</div>

 <div class="flex-c-m flex-w w-full p-t-45 margin-bottom">
 <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>
     
 </div> 




</div>
</div>
</div>  <?php }
}
