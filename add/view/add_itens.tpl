<section>
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
    <td style="width:10%"><b>Data:</b> {$ITENS.1.ped_data}</td>
    <td style="width:10%"><b>Ref:</b> {$ITENS.1.ped_ref}</td>     
    <td style="width:22%"><b>Status:</b> {$ITENS.1.ped_pag_status}</td>    
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
  	{foreach from=$ITENS item=P}
    <tr>
      <th scope="row"> {$P.item_nome} x {$P.item_qtd}</th>
      <th scope="row" class="text-center"> {$P.item_sub}</th>
    </tr>

    {/foreach}
  </tbody>
</table>

</div>

<!-- Tabela 2 -->
<table cellspacing="0" class="shop_table4  table-hover table-2 shop_table_responsive">
<!-- Subtotal -->
<tr  style="text-align:center;border-bottom:1px solid #eaeaea;border-top: 1px solid #fff0;" class="cart-subtotal">
<th style="width:50%;">Total</th>
<td style="border-top: 1px solid #fff0;"  data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36; {$TOTAL}</span></span>
</td>
</tr>
<!-- Frete -->
<tr style="text-align: center;border-bottom:1px solid #eaeaea;" class="cart-subtotal">
<th>Frete</th>
<td  data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36; {$ITENS.1.ped_frete_valor}</span></span>
</td>
</tr>
<!-- Total -->
<tr style="text-align:center;" class="order-total">
<th>Total do Pedido</th>
<td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36; {$TOTAL_PEDIDO}</span></span></strong> 
</td>
</tr>	
</table>


</div>
</div>
</div>
</div>
</div>  
</section>