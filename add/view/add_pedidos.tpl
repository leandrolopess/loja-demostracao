<div class="container-fluid">
	<div class="row">
    <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 margin-top margin-left p-lr-0-lg">
      <a href="{$GET_SITE_ADD}" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>
      <span class="stext-109 cl4">
        <i class="fa fa-file-text"></i> Pedidos
      </span>
    </div>
	<div class="col-md-12 text-center margin-top"> 
   <h1 class="cl2 text-center"><i class="fa fa-file-text mt-3"></i> Gerenciamento de Pedidos
   </h1>
   <p class="mt-3 mtext-105 f-20">Aqui você encontra todos os pedidos feitos e compras realizadas na loja. </p>
   

   <div class="col-md-12 text-center margin-bottom-30 margin-top">

     <div class="flex-w flex-c-m m-tb-10">
          <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
            <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
             Filtro
          </div>

          <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
            <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
            <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
            Buscar
          </div>
        </div>
        
        <!-- Busca -->
        <div class="dis-none panel-search w-full p-t-10 p-b-15">
          <div class="bor8 dis-flex p-l-15">
            <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
              <i class="zmdi zmdi-search"></i>
            </button>

            <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Buscar">
          </div>  
        </div>

        <!-- Filtros -->
        <div class="dis-none panel-filter w-full p-t-10">
          <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
            <div class="filter-col6 p-r-15 p-b-27"> 
            <form name="buscardata" method="post" action="">
              <div class="mtext-102 cl2 p-b-15">
                Buscar entre datas
              </div>
               
                <div class="row">
               <div class="col-6">
              <label>Data Inicio</label>
              <input type="date" name="data_ini" class="bor8 bg0 size-116 text-center" required >
            </div>

          <div class="col-6">
            <label>Data Final</label>
            <input type="date" name="data_fim" class="bor8 bg0 size-116 text-center" required>
          </div>
           
           <div class="col-12 margin-top">
           <button class="btn btn-success"> Buscar </button>
           </div>
              
            </div> 
          </form>
          </div>
       

            <div class="filter-col6 p-r-15 p-b-27">
              <div class="mtext-102 cl2 p-b-15">
                Buscar por pedido
              </div>
              
              <div class="row">
                <div class="col-md-12">
                  <form name="buscarrefcod" method="post" action=""> 
                  <label>Pedido</label>
                  <input type="text" name="txt_ref" class="bor8 bg0 size-116 text-center" required 
                  style="width: 80%;margin-left: 15%;">
                </div>

                <div class="col-md-12 margin-top">
                  <button class="btn btn-success"> Buscar </button> 
                </div>
              
              </div>
            </form>
            </div>

          </div>
        </div>

        </div>
        <center>
      {$TOTAL_PEDIDOS}
    </center>


   <hr>

    <div class="col-md-12">

     
   <div class="table-responsive-md margin-top-10">
<table class="table">

  <thead style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">
    <tr>
      <th scope="col" class="text-center">Pedido</th>
       <th scope="col" class="text-center">Data</th>
      <th scope="col" class="text-center">Cliente</th>
      <th scope="col" class="text-center">Status</th>
      <th scope="col" class="text-center">Ver</th>
      <th scope="col" class="text-center">Apagar</th>
    </tr>
  </thead>
  <tbody style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">
    {foreach from=$PEDIDOS item=P}
    <tr>
      <th scope="row" class="text-center">{$P.ped_ref} </th>
      <th scope="row" style="border-left: 1px solid #eaeaea;">{$P.ped_data}
      <th scope="row" style="border-left: 1px solid #eaeaea;">{$P.cli_nome} {$P.cli_sobrenome} </th>
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
</div>  