		<!-- Confirmar Pedido -->
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
			{foreach from=$PRO item=P}		
			<tr class="woocommerce-cart-form__cart-item cart_item">
            <!-- Imagem Produto -->
			<td class="product_image_col" data-title="Imagem do Produto">
			<a href="#">
			<img width="120" height="120" src="{$P.pro_img}" class="#" alt="{$P.pro_nome}"/>
		    </a>
			</td>
            <!-- Nome Produto -->
			<td data-title="Nome do Produto">
			<a style="font-size:16px;color:#555;" href="#">{$P.pro_nome}</a>
			</td>
			<!-- Valor Unidade-->
			<td class="subtotal" data-title="Preço por Unidade" style="color:#555;">
			<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span>{$P.pro_valor}</span>	
		    </td>
			<!-- Quantidade -->
			<td data-title="Quantidade">
			<div class="quantity">
			<div class="quantidade flex-w m-r-20 m-tb-10">    
            <!-- Mostra quantidade -->
			<div class="mtext-104 cl3 txt-center num-product">
			<p class="margin-top-10">{$P.pro_qtd}</p>
		    </div>									
		    </div>
			</td>
            <!-- Total -->
			<td class="total" data-title="Total" style="border-bottom: none;">
			<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span>{$P.pro_subTotal}</span>
		    </td>
			</tr>
			{/foreach}
			</tbody>
	        </table>
          
	        <!-- Voltar para o carrinho -->
			<a href="{$PAG_CARRINHO}" style="position:relative;top:-30px;" class="continuar-btn">Voltar para o Carrinho</a>
		
            <!-- Tabela 2 -->
			<table cellspacing="0" class="shop_table2 shop_table_responsive">
            <!-- Subtotal -->
			<tr style="text-align: center;" class="cart-subtotal border-bottom">
			<th style="text-align: center;">Subtotal</th>
			<td  data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span>{$TOTAL}</span>
			</td>
			</tr>
			<!-- Frete -->
			<tr style="text-align: center;" class="cart-subtotal border-bottom">
			<th style="text-align: center;">Frete</th>
			<td  data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;{$FRETE}</span></span>
			</td>
			</tr>
            <!-- Total -->
			<tr style="text-align:center;" class="order-total">
			<th style="text-align: center;">Total</th>
			<td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span>{$TOTAL_FRETE}</span></strong> 
			</td>
			</tr>	
			</table>
			<!-- Confirmar Pedido -->
			<form name="pedido_finalizar" id="pedido_finalizar" method="post" action="{$PAG_FINALIZAR}">
			<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
				<input type="hidden" name="frete_radio" id="frete_radio" value="{$FRETE}">
			Finalizar &nbsp;<i class="zmdi zmdi-check f-25" style="margin-top: -3px;"></i>
			</button>
			</form>
		    </div>
			
			</div>
			</div>
	        </div>


		
	
	
    