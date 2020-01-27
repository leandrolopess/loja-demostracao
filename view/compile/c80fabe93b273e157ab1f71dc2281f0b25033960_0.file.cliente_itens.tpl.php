<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-27 16:22:17
  from 'D:\xampp\htdocs\loja_adaptada\view\cliente_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ddebed9e03b73_91256636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c80fabe93b273e157ab1f71dc2281f0b25033960' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\view\\cliente_itens.tpl',
      1 => 1574878930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user-profile/sidebar.tpl' => 1,
  ),
),false)) {
function content_5ddebed9e03b73_91256636 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
	<div class="container-fluid">
		<div class="row">
    <div class="col-md-3">
        <?php $_smarty_tpl->_subTemplateRender("file:user-profile/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="col-md-9 content-dados">
      <h1 class="mtext-105 cl2 p-b-15 f-20">Detalhes do Pedido</h1>
  <hr>

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
<table cellspacing="0" class="shop_table4 table-hover table-2 shop_table_responsive">
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
<td  data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36; <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor_br'];?>
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

<?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'] == 'Cancelado') {?>          
<section class="row">
<div class="col-sm-4 "></div>
<div class="col-sm-4 margin-bottom text-center">
               
<button class="btn btn-success btn-lg " onclick="           
PagSeguroLightbox({
code: '<?php echo $_smarty_tpl->tpl_vars['PS_COD']->value;?>
'
}, {
success : function(transactionCode) {
alert('Transação efetiva - ' + transactionCode);
window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_RETORNO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
},
abort : function() {
alert('Erro no processo de pagamento');
window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_ERRO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
}
});              
">Pagar Agora via PagSeguro</button>
<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/pag/logo-pagseguro.png"  onclick="PagSeguroLightbox({
  code: '<?php echo $_smarty_tpl->tpl_vars['PS_COD']->value;?>
'
  }, {
  success : function(transactionCode) {
  alert('Transação efetuada - ' + transactionCode);
  window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_RETORNO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
  },
  abort : function() {
  alert('Erro no processo de pagamento');
  window.location ='<?php echo $_smarty_tpl->tpl_vars['PAG_ERRO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
';
  }
  });" 
  alt="pagseguro"> 
                   
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
                
</div>
<div class="col-sm-4"></div>
</section>
<?php }?>


</div>
</div>
</div>
</div>
</div>  
</section><?php }
}
