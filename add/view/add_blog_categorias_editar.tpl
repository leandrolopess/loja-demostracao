<div class="container">
  <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-lr-0-lg margin-top">
      <a href="{$GET_SITE_ADD}" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <a href="{$PAG_CATEGORIAS}" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-newspaper-o"></i> Categorias
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <span class="stext-109 cl4">
         {$CATE_NOME}
      </span>

    </div>
  <div class="col-md-12 margin-top"> 
   <h1 class="cl2 mtext-105"> <i class="fa fa-pencil"></i> Editar Categoria {$CATE_NOME}
   </h1>
   {$SUCESSO}{$ERRO}
<!-- Row Principal -->
<div class="row">
<!--  Col Conteúdo -->
<div class="col-md-12">
<div class="box padding-20 margin-top margin-bottom">
<form name="categorias_editar" method="post" action="">

<section class="row" id="camposproduto">
        
        <div class="col-md-12"> 
         <label>Novo nome da categoria</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Novo nome da categoria" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cate_nome" value="{$CATE_NOME}" required>
      <input type="hidden" name="cate_id" value="{$CATE_ID}">
      </div>
        </div>

          <div class="col-md-12 text-center">
         <button class="btn btn-lg bg-azul branco" name="cate_editar" value="cate_editar">Salvar</button>
     </div>
   </section>
  </form>
       


      </div>
    </div>

    
    </div>
  
  </section>

  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->

