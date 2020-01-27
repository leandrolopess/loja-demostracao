{if $TOTAL == 0}
<div class="not txt-center margin-bottom margin-top">
<h4 class="margin-bottom-10">Seu carrinho está vazio!!</h4>
<a href="{$GET_HOME}" class="continuar-btn">Voltar para a loja</a>
</div>
{else}

<!-- Carrinho -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-xl-8 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
					<div class="page-title">
                   <h1>Meu Carrinho</h1>
                    </div>
				<div class="wrap-table-shopping-cart">
				<div class="table_wrap">
				<table class="table_type_1 shopping_cart_table shop_table cart woocommerce-cart-form__contents table-carrinho table-2" cellspacing="0">
					<thead>
						<tr>
						<th class="product_image_col"  style="border-bottom:1px solid #eaeaea;border-top:1px solid #eaeaea;border-right:1px solid #eaeaea;border-left:1px solid #eaeaea;">Imagem do Produto</th>
						<th style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;" class="product_title_col">Nome do Produto</th>
						<th style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">Preço por Unidade</th>
						<th style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;" class="product_qty_col">Quantidade</th>
						<th style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">Total</th>
						<th style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;" class="product_actions_col">Ação</th>
						</tr>
					</thead>
					<tbody>
					{foreach from=$PRO item=P}
					<tr style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;" class="woocommerce-cart-form__cart-item cart_item">
                    <td class="product_image_col" data-title="Imagem do Produto">
					<!-- Imagem -->
					<a href="{$P.pro_link}">
					<img width="120" height="120" src="{$P.pro_img}" alt="{$P.pro_nome}" />
				    </a>
					</td>
					<td  data-title="Nome do Produto">
					<!-- Nome -->
					<a style="font-size:16px;color:#555;" href="{$P.pro_link}">{$P.pro_nome}</a>
					</td>
                    <!-- Valor -->
					<td class="subtotal" data-title="Preço por Unidade" style="color:#555;">
					<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span>{$P.pro_valor}</span>	</td>
					<!-- Quantidade -->
					<td data-title="Quantidade">
					<div class="quantity">
					<div class="wrap-num-product flex-w m-r-20 m-tb-10">
                    <!-- Diminui -->
					<div class="cl8 hov-btn4 trans-04 flex-c-m">
					<form name="carrinho" method="post" action="{$PAG_CARRINHO_ALTERAR}">
					<button title="Diminuir" type="submit" class="button_dark_grey icon_btn edit_product">
					<input type="hidden" name="pro_id" value="{$P.pro_id}">
                    <input type="hidden" name="acao" value="diminui">
					<i class="fs-16 zmdi zmdi-minus cinza"></i>
				    </button>
					</div>
					</form>
                    <!-- Mostra quantidade -->
					<input class="mtext-104 cl3 txt-center num-product" type="text" name="qua" value="{$P.pro_qtd}">
					<!-- Aumenta -->
					<div class="cl8 hov-btn4 trans-04 flex-c-m">
					<form name="carrinho" method="post" action="{$PAG_CARRINHO_ALTERAR}">
					<button title="Aumentar" type="submit" class="button_dark_grey icon_btn edit_product">
					<input type="hidden" name="pro_id" value="{$P.pro_id}">
                    <input type="hidden" name="acao" value="aumenta">
					<i class="fs-16 zmdi zmdi-plus cinza"></i>
					</button>
					</div>
					</div>
					</form>							
					</div>
					</td>
					<!-- Total -->
					<td class="total" data-title="Total">
					<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span>{$P.pro_subTotal}</span>	</td>
                    <!-- Ação -->
					<td class="acao-icone" data-title="Ação">
					<!-- Atualiza Carrinho 
					<form name="" method="post" action="">
					<input type="hidden" name="pro_id" value="{$P.pro_id}">
                    <input type="hidden" name="acao" value="">
					<button title="Remover Item" type="submit" class="button_dark_grey icon_btn edit_product"><i class="zmdi zmdi-refresh black" style="font-size:30px;margin-top:-3px;"></i></img><div class="i-remover"><h5>Atualizar</h5></div></button>
				    </form>-->
					<!-- Deleta do carrinho -->
                    <form name="carrinho_dell" method="post" action="{$PAG_CARRINHO_ALTERAR}">
					<input type="hidden" name="pro_id" value="{$P.pro_id}">
					<input type="hidden" name="acao" value="del">
					<button title="Remover Item" class="button_dark_grey icon_btn edit_product"><i class="zmdi zmdi-close black f-30" style="margin-top:-3px;"></i></img><div class="i-remover"><h5>Remover</h5></div></button>
					</form>		
				     </td>
					</tr>

                    {/foreach}



					</tbody>
				</table>	
		          </div>
          <!-- Continuar Comprando -->
			<div class="left_side" style="border-left: 1px solid #eaeaea;border-right: 1px solid #eaeaea;">
				<a style="margin-top: 10px;margin-left:15px;" href="{$GET_HOME}" class="continuar-btn">Continuar Comprando</a>
			</div>
			</div>
            <!-- Cupom -->
			<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
			<div class="flex-w flex-m m-r-20 m-tb-5">
			<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Código do cupom">
										
			<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
			Aplicar cupom
			</div>
			</div>
            <!-- Atualizar Carrinho -->
            <form name="limpar" method="post" action="{$PAG_CARRINHO_ALTERAR}">
			
			<input type="hidden" name="acao" value="limpar">
			<input type="hidden" name="pro_id" value="{$P.pro_id}">
			<button title="Remover Item" class="flex-c-m stext-101 branco size-119 bg-red borda btn3 p-lr-15 trans-04 pointer m-tb-10">Limpar Carrinho &nbsp;<i class="fa fa-trash-o f-25"></i></button>
			
		    </form>
			</div>
			</div>
			</div>
            <!-- Total Carrinho -->
			<div class="col-sm-10 col-lg-7 col-xl-8 m-lr-auto m-b-50">
			<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
			<h4 class="mtext-109 cl2 p-b-30">
			Total no carrinho
			</h4>

			<div class="flex-w flex-t bor12 margin-top">
			<div class="size-208 w-full-ssm">
			<span class="stext-110 cl2">
			Entrega:
			</span>
			</div>

			<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">					
		   {if $VALOR_FRETE > 0}
			
			
			<p>{$SERVICO} <span class="mtext-110 cl2">{$REAL}{$VALOR_FRETE} - {$PRAZO}</p>
		
			</span>
			{/if}
            
            <form  method="post"> 
			<div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
			<div class="bor8 bg0">
			<select  required class="js-select2" name="servico" >
			<option value="">Selecione o tipo de envio</option>
		    <option value="SEDEX">SEDEX</option>
			<option value="PAC">PAC</option>
		    </select>
			<div class="dropDownSelect2"></div>
		    </div>
						
			<input type="hidden" name="peso_frete" id="peso_frete" value="{$PESO}" class="form-control " readonly>
            
			<div class="bor8 bg0 margin-top">

		    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="destino" id="cep_frete" value="{$CEP}" placeholder="*CEP" required>

		    <input type="hidden" name="frete_valor" id="frete_valor" value="0">

			</div>
            {if $VERIFICA < 8}
            <div class="margin-top">
			<span style="color:red;">{$ERRO}</span>
		    </div>
			{/if}


			{if $VERIFICA > 9}
            <div class="margin-top">
			<span style="color:red;">{$ERRO_2}</span>
		    </div>
			{/if}

			<div class="cart-cep">
			<p class="margin-bottom-30 margin-top-5">Não sabe o CEP? <a href="{$CORREIO}" target="_blank">Clique aqui!</a></p>
		    </div>

			<div class="flex-w">

			<button title="Atualizar total" class="flex-c-m stext-101 cl2 hov-btn3 bor13  size-119 bg8 borda btn3 p-lr-15 trans-04 pointer btn-atualizar" id="buscar_frete">Atualizar total</button>
		    </form>
			
			
			</div>
			</div>
			</div>
			</div>

			<div class="flex-w flex-t p-b-13 margin-top text-center">
			<div class="size-208">
			<span class="stext-110 cl2">
			Subtotal:
			</span>
		    </div>

			<div class="size-209">
			<span class="mtext-110 cl2">
			${$TOTAL}
			</span>
			</div>
			</div>

            {if $VALOR_FRETE > 0}
			<div class="flex-w flex-t p-b-13 margin-top text-center">
			<div class="size-208">
			<span class="stext-110 cl2">
			Frete:
			</span>
		    </div>
            

			<div class="size-209">
			<span class="mtext-110 cl2">
			${$VALOR_FRETE}
			</span>
			</div>
			</div>
            
           

			<div class="flex-w flex-t p-t-27 p-b-33 text-center">
			<div class="size-208">
			<span class="mtext-101 cl2">
			Total:
			</span>
			</div>

            
			<div class="size-209 p-t-1">
			<span class="mtext-110 cl2">
			${$TOTAL_COM_FRETE} 
			
			<form name="pedido_confirmar" id="pedido_confirmar" method="post" action="{$PAG_CONFIRMAR}">
			<input type="hidden" name="frete_radio" id="frete_radio" value="{$VALOR_USA}">
			
			</span>
			</div>
			</div>
			{/if}
            {if $VALOR_FRETE > 0}
             
			<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
			 Confirmar Pedido &nbsp;<i class="zmdi zmdi-check f-25" style="margin-top: -3px;"></i>
			</button>
		    </form>
		    {else}
		    <div class="txt-center margin-top">
		    <span style="color:red;">{$ERRO_3}</span>
		    </div>
		    {/if}
			</div>
			</div>
			</div>
		</div>
		{/if}