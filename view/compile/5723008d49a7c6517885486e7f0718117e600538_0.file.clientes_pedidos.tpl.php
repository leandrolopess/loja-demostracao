<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-26 21:40:31
  from 'D:\xampp\htdocs\loja_adaptada\view\clientes_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dddb7ef07dba7_10349412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5723008d49a7c6517885486e7f0718117e600538' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\view\\clientes_pedidos.tpl',
      1 => 1574811626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user-profile/sidebar.tpl' => 1,
  ),
),false)) {
function content_5dddb7ef07dba7_10349412 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
	<div class="container-fluid">
		<div class="row">
    <div class="col-md-3">
        <?php $_smarty_tpl->_subTemplateRender("file:user-profile/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="col-md-9 content-pedidos">
    <h1 class="mtext-105 cl2 p-b-15 f-20">Meus Pedidos</h1>
    <h2 class="f-18">Aqui você pode acompanhar o andamento dos seus pedidos</h2>
    <hr>

      <?php if ($_smarty_tpl->tpl_vars['TOTAL_PEDIDOS']->value > 0) {?>
   <div class="table-responsive-md margin-top-10">
<table class="table">

  <thead style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">
    <tr>
      <th scope="col" class="text-center">Pedido</th>
      <!-- <th scope="col" class="text-center">Data</th> -->
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
      <!-- <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td> -->
      <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'NAO') {?> 
      <td  class="text-center"><span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
      <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'Pago') {?>
      <td  class="text-center"><span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
      <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'Cancelado') {?>
      <td  class="text-center"><span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>      
      <?php } else { ?>
      <td  class="text-center"><span class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
    
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

 <div class="flex-c-m flex-w w-full p-t-45 margin-bottom">
         <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

        
      </div>

<?php } else { ?>
<div class="col-xl-9">
<div class="woo-info">
<a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Ir às compras</a>
<div class="margin-left-30 margin-top-negativo-22"> Você não tem nem um pedido ainda :(</div>
</div>
</div>
<?php }?>

</div>
</div>
</div>  
</section><?php }
}
