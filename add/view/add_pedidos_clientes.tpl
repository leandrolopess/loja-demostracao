<div class="container-fluid">
	<div class="row">
		<!-- breadcrumb -->
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-lr-0-lg margin-top">
			<a href="{$GET_SITE_ADD}" class="stext-109 cl8 hov-cl1 trans-04">
				<i class="fa fa-tachometer"></i> Painel de controle
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="{$PAG_CLIENTES}" class="stext-109 cl8 hov-cl1 trans-04">
				<i class="fa fa-users"></i> Clientes
			</a>

		</div>

	<div class="col-md-12 text-center"> 
   <h1 class="cl2 mtext-105 text-center"><i class="fa fa-file-text mt-3"></i> Pedidos Cliente {$PEDIDOS.1.cli_nome} {$PEDIDOS.1.cli_sobrenome}
   </h1>
</div>
    
    <div class="col-md-12">
    <hr>

     
   <div class="table-responsive-md margin-top-10">
<table class="table">

  <thead style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">
    <tr>
      <th scope="col" class="text-center">Pedido</th>
      <th scope="col" class="text-center">Data</th>
      <th scope="col" class="text-center">Status</th>
      <th scope="col" class="text-center">Ver</th>
      <th scope="col" class="text-center">Apagar</th>
    </tr>
  </thead>
  <tbody style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">
    {foreach from=$PEDIDOS item=P}
    <tr>
      <th scope="row" class="text-center">#{$P.ped_ref} </th>
      <th scope="row" class="text-center"  style="border-left: 1px solid #eaeaea;">{$P.ped_data} </th>
      {if $P.ped_pag_status == 'NAO'} 
      <td  class="text-center"><span class="badge badge-danger">{$P.ped_pag_status}</span></td>
      {elseif $P.ped_pag_status == 'Pago'}
      <td  class="text-center"><span class="badge badge-success">{$P.ped_pag_status}</span></td>
      {else}
      <td  class="text-center"><span class="badge badge-warning">Processando</span></td>
    
      {/if}
     
      <form name="itens" method="post" action="{$PAG_ITENS}">
      <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
      <td class="text-center">
      <button class="btn bg-azul btn-pedido">
      <i class="fa fa-eye "></i> Detalhes
      </button>
      </td>
      </form> 

      <form name="deletar" method="post" action="">
      <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
      <td class="text-center">
      <button class="btn btn-danger" name="ped_apagar" value="ped_apagar">
      <i class="fa fa-trash-o "></i> Apagar
      </button>
      </td>
      </form> 

    </tr>
   {/foreach}
  </tbody>
</table>

</div>

 <div class="flex-c-m flex-w w-full p-t-45 margin-bottom">
 {$PAGINAS}     
 </div> 




</div>
</div>
</div>  