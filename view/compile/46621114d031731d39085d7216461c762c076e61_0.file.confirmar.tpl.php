<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-06 15:46:50
  from 'D:\xampp\htdocs\loja_adaptada\view\confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dea940a8ce985_15281966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46621114d031731d39085d7216461c762c076e61' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\view\\confirmar.tpl',
      1 => 1575654269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dea940a8ce985_15281966 (Smarty_Internal_Template $_smarty_tpl) {
?>		<!-- Confirmar Pedido -->
		<div class="container">
		<div class="row">
		<div class="col-lg-10 col-xl-8 m-lr-auto m-b-50">
		<div class="page-title">
		<h1>Seu Pedido</h1> 
		</div>

	    <div id="order_review" class="woocommerce-checkout-review-order">
		<table class="table_type_1 shopping_cart_table shop_table cart woocommerce-cart-form__contents" cellspacing="0">
			<thead>
			<tr>
			<th class="product_image_col" style="border-right:1px solid #e6e6e6;">Imagem do Produto</th>
			<th class="product_title_col" style="border-right:1px solid #e6e6e6;">Nome do Produto</th>
			<th style="border-right:1px solid #e6e6e6;">Preço por Unidade</th>
			<th class="product_qty_col" style="border-right:1px solid #e6e6e6;">Quantidade</th>
			<th style="border-right:1px solid #e6e6e6;">Total</th>		
			</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>		
			<tr class="woocommerce-cart-form__cart-item cart_item">
            <!-- Imagem Produto -->
			<td class="product_image_col" data-title="Imagem do Produto">
			<a href="#">
			<img width="120" height="120" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" class="#" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"/>
		    </a>
			</td>
            <!-- Nome Produto -->
			<td data-title="Nome do Produto">
			<a style="font-size:16px;color:#555;" href="#"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a>
			</td>
			<!-- Valor Unidade-->
			<td class="subtotal" data-title="Preço por Unidade" style="color:#555;">
			<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</span>	
		    </td>
			<!-- Quantidade -->
			<td data-title="Quantidade">
			<div class="quantity">
			<div class="quantidade flex-w m-r-20 m-tb-10">    
            <!-- Mostra quantidade -->
			<div class="mtext-104 cl3 txt-center num-product">
			<p class="margin-top-10"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
</p>
		    </div>									
		    </div>
			</td>
            <!-- Total -->
			<td class="total" data-title="Total" style="border-bottom: none;">
			<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</span>
		    </td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
	        </table>
          
	        <!-- Voltar para o carrinho -->
			<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" style="position:relative;top:-30px;" class="continuar-btn">Voltar para o Carrinho</a>
		
            <!-- Tabela 2 -->
			<table cellspacing="0" class="shop_table2 shop_table_responsive">
            <!-- Subtotal -->
			<tr style="text-align: center;" class="cart-subtotal border-bottom">
			<th style="text-align: center;">Subtotal</th>
			<td  data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span><?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span>
			</td>
			</tr>
			<!-- Frete -->
			<tr style="text-align: center;" class="cart-subtotal border-bottom">
			<th style="text-align: center;">Frete</th>
			<td  data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;<?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
</span></span>
			</td>
			</tr>
            <!-- Total -->
			<tr style="text-align:center;" class="order-total">
			<th style="text-align: center;">Total</th>
			<td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span><?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</span></strong> 
			</td>
			</tr>	
			</table>
			<!-- Confirmar Pedido -->
			<form name="pedido_finalizar" id="pedido_finalizar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
">
			<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
				<input type="hidden" name="frete_radio" id="frete_radio" value="<?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
">
			Finalizar &nbsp;<i class="zmdi zmdi-check f-25" style="margin-top: -3px;"></i>
			</button>
			</form>
		    </div>
			
			</div>
			</div>
	        </div>


		
	
	
    <?php }
}
