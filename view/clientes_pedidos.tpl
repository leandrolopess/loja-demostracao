<section>
	<div class="container-fluid">
		<div class="row">
    <div class="col-md-3">
        {include file="user-profile/sidebar.tpl"}
    </div>

    <div class="col-md-9 content-pedidos">
    <h1 class="mtext-105 cl2 p-b-15 f-20">Meus Pedidos</h1>
    <h2 class="f-18">Aqui você pode acompanhar o andamento dos seus pedidos</h2>
    <hr>

      {if $TOTAL_PEDIDOS > 0}
   <div class="table-responsive-md margin-top-10">
<table class="table">

  <thead style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">
    <tr>
      <th scope="col" class="text-center">Pedido</th>
      <!-- <th scope="col" class="text-center">Data</th> -->
      <th scope="col" class="text-center">Status</th>
      <th scope="col" class="text-center">Ações</th>
    </tr>
  </thead>
  <tbody style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">
    {foreach from=$PEDIDOS item=P}
    <tr>
      <th scope="row" class="text-center">#{$P.ped_ref} </th>
      <!-- <td class="text-center">{$P.ped_data}</td> -->
      {if $P.ped_pag_status == 'NAO'} 
      <td  class="text-center"><span class="badge badge-danger">{$P.ped_pag_status}</span></td>
      {elseif $P.ped_pag_status == 'Pago'}
      <td  class="text-center"><span class="badge badge-success">{$P.ped_pag_status}</span></td>
      {elseif $P.ped_pag_status == 'Cancelado'}
      <td  class="text-center"><span class="badge badge-danger">{$P.ped_pag_status}</span></td>      
      {else}
      <td  class="text-center"><span class="badge badge-warning">{$P.ped_pag_status}</span></td>
    
      {/if}
     
      <form name="itens" method="post" action="{$PAG_ITENS}">
      <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
      <td class="text-center"><button class="btn bg-azul btn-pedido"><i class="fa fa-eye "></i> Detalhes</button></td>
     </form> 
    </tr>
   {/foreach}
  </tbody>
</table>

</div>

 <div class="flex-c-m flex-w w-full p-t-45 margin-bottom">
         {$PAGINAS}
        
      </div>

{else}
<div class="col-xl-9">
<div class="woo-info">
<a href="{$GET_HOME}">Ir às compras</a>
<div class="margin-left-30 margin-top-negativo-22"> Você não tem nem um pedido ainda :(</div>
</div>
</div>
{/if}

</div>
</div>
</div>  
</section>