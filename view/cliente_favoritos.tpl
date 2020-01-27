<section>
	<div class="container-fluid">
		<div class="row">
    <div class="col-md-3">
        {include file="user-profile/sidebar.tpl"}
    </div>

    <div class="col-md-9 content-pedidos">
    <h1 class="mtext-105 cl2 p-b-15 f-20">Meus Favoritos</h1>
    <h2 class="f-18">Aqui você encontra seus produtos favoritos</h2>
    <hr>
    {$ERRO}

      {if $TOTAL_FAVORITOS > 0}
  <div class="col-md-12 box padding-20">
    <div class="row">
 
    {foreach from=$FAVORITOS item=F}
    
               
     <div class="col-4 col-sm-2">
      <form name="produto" method="post" action="{$GET_HOME}/produto/{$F.fav_produto_id}/{$F.pro_slug}">
       <button>
      <img style="width:80px;height:80px;" src="{$F.pro_img}">
      <input type="hidden" name="produto_id" value="{$F.fav_produto_id}">
    </button>
        </form>
    </div>
    <div class="col-4">
      <form name="produto" method="post" action="{$GET_HOME}/produto/{$F.fav_produto_id}/{$F.pro_slug}">
      <button class="stext-102">
      {$F.pro_nome}
      <input type="hidden" name="produto_id" value="{$F.fav_produto_id}">
    </button>
    </form>
    <span class="stext-102">R$ {$F.pro_valor}</span>
    </div>
    <div class="col-4">
      <div class="dropdown pull-right">
  <button class="btn bg-azul branco dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-bars"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item stext-102" href="{$GET_HOME}/produto/{$F.fav_produto_id}/{$F.pro_slug}">Ver produto </a>
    <form name="frm_apagar" method="post" action="">
              
    <input type="hidden" name="pro_id_apagar" value="{$F.fav_id}">
    <input type="hidden" name="pro_apagar" value="">
    <!---botao que apagar o produto de uma vez -->
    <button class="dropdown-item stext-102" name="btn_apagar"> Excluir </button> 
         
    </form>
    
  </div>
</div>
</div>

<div class="col-12 border-bottom margin-bottom margin-top"></div>


   {/foreach}
   


 </div>
<div class="text-right">
  <h5 class="stext-102 cl6 f-18">Total de favoritos: {$TOTAL}</h5>
</div>
</div>

<div class="flex-c-m flex-w w-full p-t-45 margin-bottom">
         {$PAGINAS}
        
      </div>

{else}
<div class="col-xl-9">
<div class="woo-info">
<a href="{$HOME}">Ir às compras</a>
<div class="margin-left-30 margin-top-negativo-22"> Você não tem nem um favorito ainda :(</div>
</div>
</div>
{/if}

</div>
</div>
</div>  
</section>