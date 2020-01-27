<div class="container-fluid">
  <div class="row">
    <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 margin-top margin-left p-lr-0-lg">
      <a href="{$GET_SITE_ADD}" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>
      <span class="stext-109 cl4">
        <i class="fa fa-building"></i> Lojas
      </span>
    </div>

  <div class="col-md-12 text-center"> 
   <h1 class="cl2 text-center"><i class="fa fa-building mt-3"></i> Lojas
   </h1>
   <p class="mt-3 mtext-105 f-20">Faça aqui o gerenciamento das lojas, adicionando informações e dados sobre as lojas. </p>
   <hr>

  <!-- Conteúdo -->
<section class="row "> 

 <div class="col-md-4"></div>
    <div class="col-md-4 margin-bottom">  
      <a href="{$ADICIONAR_LOJA}" class="btn btn-success"> <i class="fa fa-plus"></i> Novo Loja</a>
    </div>
    <div class="col-md-4"></div>

</section>

  <div class="table-responsive">
   <table class="table table-hover">
     <thead>
       <tr>
         <th class="text-center" style="border-left: 1px solid #e9ecef;border-right:1px solid #e9ecef;">Loja</th>
         <th class="text-center" style="border-right: 1px solid #e9ecef;">Cidade</th>
         <th class="text-center" style="border-right: 1px solid #e9ecef;">Estado</th>
         <th class="text-center" style="border-right: 1px solid #e9ecef;">Editar</th>
         <th class="text-center" style="border-right: 1px solid #e9ecef;">Apagar</th>
       </tr>
     </thead>
     <tbody>
     {foreach from=$INFO item=I}
       <tr>
        <td class="text-center">
        <form name="proeditar" method="get" action="{$LOJA_EDITAR}">
        <input type="hidden" name="id" id="id" value="{$I.info_id}">
        <button>{$I.info_loja}</button>
        </form>
        </td>

        <td >
        {$I.info_cidade}
        </td>

        <td>
        {$I.info_estado}
        </td>


        <td class="text-center">
        <form name="proeditar" method="get" action="{$LOJA_EDITAR}">
        <input type="hidden" name="id" id="id" value="{$I.info_id}">
        <button> <i class="fa fa-pencil"></i> </button>
        </form>  
        </td>

        <td class="text-center">
        <form name="loja_apagar" method="post" action="">
        <input type="hidden" name="loja_id" id="loja_id" value="{$I.info_id}">
        <button> <i class="fa fa-trash"></i> </button>
        </form>  
        </td>

       </tr>
      {/foreach}

     </tbody>
   </table>
 </div>




  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->

