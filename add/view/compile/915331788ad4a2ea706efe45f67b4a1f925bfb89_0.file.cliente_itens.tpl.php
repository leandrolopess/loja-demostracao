<?php
/* Smarty version 3.1.33, created on 2019-10-29 22:39:27
  from 'D:\xampp\htdocs\loja\view\cliente_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8e9cf3d8197_18267878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '915331788ad4a2ea706efe45f67b4a1f925bfb89' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja\\view\\cliente_itens.tpl',
      1 => 1572386417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user-profile/sidebar.tpl' => 1,
  ),
),false)) {
function content_5db8e9cf3d8197_18267878 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!-- <td><b>Hora:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</td> -->
    <td style="width:10%"><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</td>
    <td style="width:22%"><b>Status:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'];?>
</td>     
    </tr> 
  </tbody>
</table>
</div>
      
   <div class="table-responsive-md margin-top-10">
<table class="table">

  <thead style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">
    <tr>
      <th style="width:50%;background: #51c1ec;color: #FFF;border-right: 1px solid #0000;border-bottom: 1px solid #0000;" scope="col" class="text-center">Produto</th>
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
      <th style="border-right: 1px solid #0000;background: #dbdbdb;border-top: 1px solid #0000;border-bottom: 1px solid #0000;" scope="row"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
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
<table cellspacing="0" class="shop_table2 shop_table_responsive">
<!-- Subtotal -->
<tr style="text-align: center;" class="cart-subtotal">
<th style="text-align: center;">Total</th>
<td  data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36; <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span></span>
</td>
</tr>
<!-- Frete -->
<tr style="text-align: center;" class="cart-subtotal">
<th style="text-align: center;">Frete</th>
<td  data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36; <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</span></span>
</td>
</tr>
<!-- Total -->
<tr style="text-align:center;" class="order-total">
<th style="text-align: center;">Total do Pedido</th>
<td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36; <?php echo $_smarty_tpl->tpl_vars['TOTAL_PEDIDO']->value;?>
</span></span></strong> 
</td>
</tr>	
</table>

<?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'] == 'NAO') {?>          
                         <!--  modos de pagamento e outras informações --> 
        <section class="row">
            <h3 class="text-center"> Formas de pagamento </h3>     
            
            <div class="col-md-4">
              
            </div>
            <!-- botao de pagamento  -->
            <div class="col-md-4">
               
                BOTÃO DE PAGAMENTO
                
                
                   <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> 
                   <?php echo '<script'; ?>
 type="text/javascript" src=""><?php echo '</script'; ?>
>
                
            </div>
            <div class="col-md-4">
                
            </div>
         
            
        </section>

 <?php }?>


</div>
</div>
</div>
</div>
</div>  
</section><?php }
}
