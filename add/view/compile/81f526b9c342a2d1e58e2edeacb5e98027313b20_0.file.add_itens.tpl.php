<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-20 00:54:08
  from 'D:\xampp\htdocs\loja_adaptada\add\view\add_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dd4aad00e0ab2_00342860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81f526b9c342a2d1e58e2edeacb5e98027313b20' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\add\\view\\add_itens.tpl',
      1 => 1574218443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd4aad00e0ab2_00342860 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
	<div class="container-fluid">
		<div class="row">
   <div class="col-md-12 margin-top"> 
   <h1 class="cl2 mtext-105 text-center"> Detalhes do Pedido
   </h1>
 </div>
 <hr>

    <div class="col-md-12">
  <div class="table-responsive-md margin-top-10">
<table class="table">
  <tbody style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">
    <tr >        
    <td style="width:10%"><b>Data:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</td>
    <td style="width:10%"><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</td>     
    <td style="width:22%"><b>Status:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'];?>
</td>    
    </tr> 
  </tbody>
</table>
</div>
      
   <div class="table-responsive-md margin-top-10">
<table class="table table-hover table-1 margin-bottom-0">

  <thead style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">
    <tr>
      <th scope="col" class="text-center">Produto</th>
      <th style="width:50%;" scope="col" class="text-center">Total</th>
    </tr>
  </thead>
  <tbody style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">
  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
    <tr>
      <th scope="row"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
 x <?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</th>
      <th scope="row" class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</th>
    </tr>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>

</div>

<!-- Tabela 2 -->
<table cellspacing="0" class="shop_table4  table-hover table-2 shop_table_responsive">
<!-- Subtotal -->
<tr  style="text-align:center;border-bottom:1px solid #eaeaea;border-top: 1px solid #fff0;" class="cart-subtotal">
<th style="width:50%;">Total</th>
<td style="border-top: 1px solid #fff0;"  data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36; <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span></span>
</td>
</tr>
<!-- Frete -->
<tr style="text-align: center;border-bottom:1px solid #eaeaea;" class="cart-subtotal">
<th>Frete</th>
<td  data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36; <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</span></span>
</td>
</tr>
<!-- Total -->
<tr style="text-align:center;" class="order-total">
<th>Total do Pedido</th>
<td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36; <?php echo $_smarty_tpl->tpl_vars['TOTAL_PEDIDO']->value;?>
</span></span></strong> 
</td>
</tr>	
</table>


</div>
</div>
</div>
</div>
</div>  
</section><?php }
}
