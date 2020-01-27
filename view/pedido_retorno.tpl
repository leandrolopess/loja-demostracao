<div class="container">
<h3 class="text-center azul"> Obrigado pela sua compra na {$SITE_NOME} </h3>
<section class="row">
    
    <div class="col-3"></div> 
    <div class="col-sm-6 box margin-bottom margin-top padding-20 text-center">
    <h4> Informações do pagamento </h4>
    <p> <b>Código da transação:</b> {$CODIGO}</p>
    <p> <b>Referencia:</b> {$REF}</p>
    <p> <b>Status do pagamento:</b> {$PAGO}</p>
    <p> <b>Forma do pagamento: </b>{$FORMA_PAG}</p>
                        
    <form name="pagamento" method="post" action="{$PAG_ITENS}">
    <input type="hidden" name="cod_pedido" value="{$REF}">  
    <button class="btn bg-azul branco btn-block btn-lg margin-top"> Detalhes do pedido</button>

    </form>        
   
    </div> 
    <div class="col-sm-3"></div> 
    
</section>
</div>
