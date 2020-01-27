<div class="container-fluid">
  <div class="row">
    <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-lr-0-lg margin-top margin-left">
      <a href="{$GET_SITE_ADD}" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <span class="stext-109 cl4">
        <i class="fa fa-list"></i> Subcategorias
      </span>

    </div>

  <div class="col-md-12 text-center margin-top"> 
   <h1 class="cl2 text-center"><i class="fa fa-list mt-3"></i> Gerenciamento de Subcategorias
   </h1>
   <p class="mt-3 mtext-105 f-20">Aqui você pode adiconar novas subcategorias as categorias existentes na loja, além de editar e exluir subcategorias. </p>
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
         <label>Nome da subcategoria</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Nome da subcategoria" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cate_nome" required>
      </div>
        </div>

        <div class="col-md-12">
         <label>Categoria</label>
        <div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
      <div class="bor8 bg0 size-116">
      <select  required class="js-select2" name="pro_categoria" >
      <option value=""> Selecione a categoria a qual vai pertencer  </option>  
      <option value="masculino"> Masculino </option>  
      <option value="feminino"> Feminino </option> 
      <option value="infantil"> Infantil </option>
      <option value="bolas"> Bolas </option>  
      </select>
      <div class="dropDownSelect2"></div>
      </div>     
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


<div class="col-md-12">
{if $TOTAL_MASCULINO > 0}
<div class="table-responsive">
   <table class="table table-bordered table-striped table-hover">
     <thead>
       <tr>
         <th class="text-center">Masculino</th>
         <th class="text-center">Editar</th>
         <th class="text-center">Apagar</th>
       </tr>
     </thead>
     <tbody>
    
     {foreach from=$CATEGORIAS item=C}
       <tr>
        <td class="text-center"> {$C.cate_nome} </td>

        <td class="text-center">
        <form name="sub_editar" method="POST" action="{$PAG_SUB_EDITAR}">
        <input type="hidden" name="cate_nome" value="{$C.cate_nome}">	
        <input type="hidden" name="cate_id" value="{$C.cate_id}">
        <input type="hidden" name="cate_sub" value="{$C.cate_sub}">
        <button > <i class="fa fa-pencil"></i> </button>
        </form>
        </td>

        <td class="text-center">
        <form name="categorias_editar" method="post" action="">
        <input type="hidden" name="cate_id" value="{$C.cate_id}">
        <button name="cate_apagar" value="cate_apagar"> <i class="fa fa-trash"></i></button> 
       </td>

       </tr>
       </form>
      {/foreach}
     </tbody>
   </table>
 </div>
 {else}
 {/if}
</div>

<div class="col-md-12">
{if $TOTAL_FEMENINO > 0}
<div class="table-responsive">
   <table class="table table-bordered table-striped table-hover">
     <thead>
       <tr>
         <th class="text-center">Femenino</th>
         <th class="text-center">Editar</th>
         <th class="text-center">Apagar</th>
       </tr>
     </thead>
     <tbody>
    
     {foreach from=$CATEGORIASFE item=F}
       <tr>
        <td class="text-center"> {$F.cate_nome} </td>

        <td class="text-center">
        <form name="sub_editar" method="POST" action="{$PAG_SUB_EDITAR}">
        <input type="hidden" name="cate_nome" value="{$F.cate_nome}">	
        <input type="hidden" name="cate_id" value="{$F.cate_id}">
        <input type="hidden" name="cate_sub" value="{$F.cate_sub}">
        <button > <i class="fa fa-pencil"></i> </button>
        </form>
        </td>

        <td class="text-center">
        <form name="categorias_editar" method="post" action="">
        <input type="hidden" name="cate_id" value="{$F.cate_id}">
        <button name="cate_apagar" value="cate_apagar"> <i class="fa fa-trash"></i></button> 
       </td>

       </tr>
       </form>
      {/foreach}
     </tbody>
   </table>
 </div>
 {else}
 {/if}
</div>


<div class="col-md-12">
{if $TOTAL_INFANTIL > 0}
<div class="table-responsive">
   <table class="table table-bordered table-striped table-hover">
     <thead>
       <tr>
         <th class="text-center">Infantil</th>
         <th class="text-center">Editar</th>
         <th class="text-center">Apagar</th>
       </tr>
     </thead>
     <tbody>
    
     {foreach from=$CATEGORIASIN item=I}
       <tr>
        <td class="text-center"> {$I.cate_nome} </td>

        <td class="text-center">
        <form name="sub_editar" method="POST" action="{$PAG_SUB_EDITAR}">
        <input type="hidden" name="cate_nome" value="{$I.cate_nome}">	
        <input type="hidden" name="cate_id" value="{$I.cate_id}">
        <input type="hidden" name="cate_sub" value="{$I.cate_sub}">
        <button > <i class="fa fa-pencil"></i> </button>
        </form>
        </td>

        <td class="text-center">
        <form name="categorias_editar" method="post" action="">
        <input type="hidden" name="cate_id" value="{$I.cate_id}">
        <button name="cate_apagar" value="cate_apagar"> <i class="fa fa-trash"></i></button> 
       </td>

       </tr>
       </form>
      {/foreach}
     </tbody>
   </table>
 </div>
 {else}
 {/if}
</div>

<div class="col-md-12">
{if $TOTAL_BOLAS > 0}	
<div class="table-responsive">
   <table class="table table-bordered table-striped table-hover">
     <thead>
       <tr>
         <th class="text-center">Bolas</th>
         <th class="text-center">Editar</th>
         <th class="text-center">Apagar</th>
       </tr>
     </thead>
     <tbody>
    
     {foreach from=$CATEGORIASBO item=B}
       <tr>
        <td class="text-center"> {$B.cate_nome} </td>

        <td class="text-center">
        <form name="sub_editar" method="POST" action="{$PAG_SUB_EDITAR}">
        <input type="hidden" name="cate_nome" value="{$B.cate_nome}">	
        <input type="hidden" name="cate_id" value="{$B.cate_id}">
        <input type="hidden" name="cate_sub" value="{$B.cate_sub}">
        <button > <i class="fa fa-pencil"></i> </button>
        </form>
        </td>

        <td class="text-center">
        <form name="categorias_editar" method="post" action="">
        <input type="hidden" name="cate_id" value="{$B.cate_id}">
        <button name="cate_apagar" value="cate_apagar"> <i class="fa fa-trash"></i></button> 
       </td>

       </tr>
       </form>
      {/foreach}
     </tbody>
   </table>
 </div>
 {else}
 {/if}
</div>


	</div>
	</div>

    </div>
   </div>
  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->
