<?php
/* Smarty version 3.1.33, created on 2019-10-27 22:19:49
  from 'D:\xampp\htdocs\loja\view\clientes_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db64235d55b84_02300683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e7e94593c8d8b6fb642b679db3c6539f53115b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja\\view\\clientes_pedidos.tpl',
      1 => 1572225587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user-profile/sidebar.tpl' => 1,
  ),
),false)) {
function content_5db64235d55b84_02300683 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
	<div class="container-fluid">
		<div class="row">
    <div class="col-md-3">
        <?php $_smarty_tpl->_subTemplateRender("file:user-profile/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="col-md-9 content-dados">
      <h1 class="mtext-105 cl2 p-b-15 f-20">Meus Pedidos</h1>
  <hr>
      <?php if ($_smarty_tpl->tpl_vars['TOTAL_PEDIDOS']->value > 0) {?>
   <div class="table-responsive-md margin-top-10">
<table class="table">

  <thead style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">
    <tr>
      <th scope="col" class="text-center">Pedido</th>
      <th scope="col" class="text-center">Data</th>
      <th scope="col" class="text-center">Status</th>
      <th scope="col" class="text-center">Ações</th>
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
      <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
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
      <td class="text-center"><button class="btn bg-azul btn-pedido"><i class="fa fa-eye "></i> Detalhes</button></td>
     </form> 
    </tr>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>

</div>
<?php } else { ?>
<div class="col-md-9">
<div class="woocommerce-info">
<a class="woocommerce-Button button" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">Ir às compras</a>
<div style="margin-top:2px;" class="margin-left-30"> Você não tem nem um pedido ainda</div>
</div>
</div>
<?php }?>

</div>
</div>
</div>
</div>
</div>  
</section><?php }
}
