<div class="container">
<h3 class="text-center text-danger margin-top"> Ocorreu um problema no pagamento</h3>

<section  class="row">
    
    <div class="col-sm-3"></div>
    <div class="col-sm-6 box padding-20 margin-top margin-bottom text-center">
        
          <h4 class="mtext-105 cl2"> Caso teve algum problema entre em contato conosco, informando o seguinte código de referência:<b> {$REF} 191126161138143</b>
        </h4> 
        
         <h4 class="mtext-105 cl2">você também pode fazer o pagamento na seção "Pedidos" e depois clicando em "Detalhes", onde você verá seus itens comprados e abaixo o botão "Completar Pagamento Agora".
        </h4>  
        
         <h4 class="mtext-105 cl2"> Para ir a tela do pedido e efetivar o pagamento, clique no botão abaixo.</h4>  
         
         <form name="pagamento" method="post" action="{$PAG_ITENS}">
         <input type="hidden" name="cod_pedido" value="{$REF}">  
         <button class="btn btn-success btn-block btn-lg margin-top"> Fazer Pagamento Agora</button>
                  
         </form>          
         
         
    </div>
    <div class="col-sm-3"></div>
      
</section>
</div>