		<!-- Finalizar Pedido -->
		<div class="container-fluid">
		<div class="row">

		<div class="col-lg-10 col-xl-8 m-lr-auto m-b-50">
	    <center>
		<div class="col-md-9">
		<div class="alert alert-success text-center margin-top">Pedido Finalizado com Sucesso
		</div>
	    </div>
	    </center>
		<div class="page-title">
		<h1>Seu Pedido</h1> 
		</div>

	    <div id="order_review" class="woocommerce-checkout-review-order">
		<table class="table table-bordered" style="width:50%;margin-left:25%;">
        {foreach from=$PRO item=P}
        <tr>
        <td class=""><img width="80" height="80" src="{$P.pro_img}" class="#" alt="{$P.pro_nome}"/></td> 
        <td class="">{$P.pro_qtd} x {$P.pro_nome} - {$P.pro_subTotal}</td>  
        </tr>
        {/foreach}
       </table>

            <!-- Voltar para o carrinho 
			<a href="{$PAG_CARRINHO}" style="margin-top:5px;margin-left:25%;margin-bottom:15px;" class="continuar-btn margin-bottom">Voltar para o Carrinho</a>
		    -->
            <!-- Tabela Total -->
			<table cellspacing="0" class="shop_table3 shop_table_responsive">
            <!-- Subtotal -->
			<tr style="text-align:center;border-bottom: 1px solid #eaeaea;" class="cart-subtotal">
			<th style="text-align:center;">Subtotal</th>
			<td  data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span>{$TOTAL}</span>
			</td>
			</tr>
			<!-- Frete -->
			<tr style="text-align:center;border-bottom: 1px solid #eaeaea;" class="cart-subtotal">
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
		    </div>

            <!-- Formas de pagamento -->
            <h3 class="text-center margin-bottom"> Formas de pagamento </h3>
		    <div class="pagamento text-center">
		    
            <img src="{$GET_TEMA}/assets/images/pag/logo-pagseguro.png"  onclick="PagSeguroLightbox({
			    code: '{$PS_COD}'
			    }, {
			    success : function(transactionCode) {
			      alert('Transação efetuada - ' + transactionCode);
			        window.location ='{$PAG_RETORNO}/{$REF}';
			    },
			    abort : function() {
			       alert('Erro no processo de pagamento');
			         window.location ='{$PAG_ERRO}/{$REF}';
			    }
			});" 
            alt="pagseguro"> 
            <script type="text/javascript" src="{$PS_SCRIPT}"></script>
           
           
            
            <!-- <img src="{$GET_TEMA}/assets/images/pag/deposito.gif"  alt="">  
            <script type="text/javascript" src="{$PS_SCRIPT}"></script>-->
           
            </div>
			
			</div>
			</div>
	        </div>
            
          
           	
	        


		
	
	
    