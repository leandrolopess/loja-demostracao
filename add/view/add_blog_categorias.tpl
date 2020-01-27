<div class="container-fluid">
  <div class="row">
    <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-lr-0-lg margin-top margin-left">
      <a href="{$GET_SITE_ADD}" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <a href="{$BLOG}" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-newspaper-o"></i> Blog
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <span class="stext-109 cl4">
         Categorias
      </span>

    </div>

  <div class="col-md-12 text-center margin-top"> 
   <h1 class="cl2 text-center"><i class="fa fa-newspaper-o mt-3"></i> Categorias do blog
   </h1>
   <p class="mt-3 mtext-105 f-20">Aqui você pode adiconar novas categorias aos posts do blog. </p>
   <hr>
</div>
</div>
{$SUCESSO}{$ERRO}
  <!-- Conteúdo -->

<div class="row">
<div class="col-sm-12 col-md-4 col-lg-4">
<div class="margin-top margin-bottom">
<form name="categoriainsere" method="post" action="">

        <div class="col-md-12"> 
         <label>Nome da categoria</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Nome da categoria" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cateblog_nome" required>
      </div>
        </div>


        <div class="col-md-12 text-center">
        	<button class="btn btn-lg bg-azul branco" name="cate_nova" value="cate_nova">Adicionar</button>
        </div>

    </div>
</div>
</form>

       

<div class="col-sm-12 col-md-8 col-lg-8">
	<div class="margin-top margin-bottom">

{if $TOTAL_CATEGORIAS > 0}
<div class="col-md-12">

<div class="table-responsive">
   <table class="table table-bordered table-striped table-hover">
     <thead>
       <tr>
         <th class="text-center">Nome</th>
         <th class="text-center">Editar</th>
         <th class="text-center">Apagar</th>
       </tr>
     </thead>
     <tbody>
    
     {foreach from=$CATEGORIAS item=C}
       <tr>
        <td class="text-center"> {$C.cateblog_nome} </td>

        <td class="text-center">
        <form name="cate_editar" method="POST" action="{$EDITAR}">
        <input type="hidden" name="cate_nome" value="{$C.cateblog_nome}">	
        <input type="hidden" name="cate_id" value="{$C.cateblog_id}">
        <button > <i class="fa fa-pencil"></i> </button>
        </form>
        </td>

        <td class="text-center">
        <form name="categorias_editar" method="post" action="">
        <input type="hidden" name="cate_id" value="{$C.cateblog_nome}">
        <button name="cate_apagar" value="cate_apagar"> <i class="fa fa-trash"></i></button> 
       </td>

       </tr>
       </form>
      {/foreach}
     </tbody>
   </table>
 </div>

</div>

 {else}
{$AVISO}
 {/if}

	</div>
	</div>

    </div>
   </div>
  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->
