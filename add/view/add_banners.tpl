<div class="container-fluid">
  <div class="row">
    <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 margin-top margin-left p-lr-0-lg">
      <a href="{$GET_SITE_ADD}" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>
      <span class="stext-109 cl4">
        <i class="fa fa-image"></i> Banners
      </span>
    </div>

  <div class="col-md-12 text-center"> 
   <h1 class="cl2 text-center"><i class="fa fa-image mt-3"></i> Banners
   </h1>
   <p class="mt-3 mtext-105 f-20">Adicione aqui os banners com suas novidades e promoções <br>para que assim que seus clientes entrarem no site fiquem por dentro de todas as novas da loja. </p>
   <hr>

  <!-- Conteúdo -->
<section class="row "> 

<!-- <div class="col-md-12 text-center margin-top"> -->

     <!-- <div class="flex-w flex-c-m m-tb-10">
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
        </div> -->
        
        <!-- Busca -->
        <!-- <div class="dis-none panel-search w-full p-t-10 p-b-15">
          <div class="bor8 dis-flex p-l-15">
            <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
              <i class="zmdi zmdi-search"></i>
            </button>

            <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Buscar">
          </div>  
        </div> -->

        <!-- Filtros -->
        <!-- <div class="dis-none panel-filter w-full p-t-10 margin-bottom">
          <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
            <div class="filter-col1 p-r-15 p-b-27"> 
              <div class="mtext-102 cl2 p-b-15">
                Buscar por subcategoria
              </div>
              
               <label>Subcategoria</label>
              <div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
                <div class="bor8 bg0 size-116">
                <select  required class="js-select2" name="pro_categoria" onchange="javascript:handleSelect(this)">
                <option value=""> MASCULINO </option> 
                  {foreach from=$CATEGORIAS item=C}                    
                  <option value="{$C.cate_link_adm}">{$C.cate_nome}</option>                
                  {/foreach}
                   <option value=""> FEMININO </option>
                   {foreach from=$CATEGORIASFE item=F}                    
                  <option value="{$F.cate_link_adm}">{$F.cate_nome}</option>                
                  {/foreach}
                  <option value=""> INFANTIL </option>
                   {foreach from=$CATEGORIASIN item=I}                    
                  <option value="{$I.cate_link_adm}">{$I.cate_nome}</option>                
                  {/foreach}
                  <option value=""> BOLAS </option>
                   {foreach from=$CATEGORIASBO item=B}                    
                  <option value="{$B.cate_link_adm}">{$B.cate_nome}</option>                
                  {/foreach}
                  </select>
                <div class="dropDownSelect2"></div>
                </div>     
                </div>
                </div> -->
             

            <!-- <div class="filter-col2 p-r-15 p-b-27">
              <div class="mtext-102 cl2 p-b-15">
                Buscar por referência
              </div>
              
              <div class="row">
                <div class="col-md-12">
                  <form name="buscarrefcod" method="post" action=""> 
                  <label>Referência</label>
                  <input type="text" name="txt_ref" class="bor8 bg0 size-116 text-center" required 
                  style="width: 80%;margin-left: 15%;">
                </div> -->

                <!-- <div class="col-md-12 margin-top">
                  <button class="btn btn-success"> Buscar </button> 
                </div> -->
              
             <!--  </div>
            </form>
            </div>

          </div>
        </div>

        </div> -->


 <div class="col-md-4"></div>
    <div class="col-md-4 margin-bottom">  
      <a href="{$ADICIONAR_BANNER}" class="btn btn-success"> <i class="fa fa-plus"></i> Novo Banner</a>
    </div>
    <div class="col-md-4"></div>

</section>

  <div class="table-responsive">
   <table class="table table-hover">
     <thead>
       <tr>
         <th class="text-center" style="border-left: 1px solid #e9ecef;border-right:1px solid #e9ecef;">Imagem</th>
         <th class="text-center" style="border-right: 1px solid #e9ecef;">Titulo</th>
         <th class="text-center" style="border-right: 1px solid #e9ecef;">Descrição</th>
          <th class="text-center" style="border-right: 1px solid #e9ecef;">Ordem</th>
         <th class="text-center" style="border-right: 1px solid #e9ecef;">Editar</th>
         <!-- <th class="text-center" style="border-right: 1px solid #e9ecef;">Apagar</th> -->
       </tr>
     </thead>
     <tbody>
     {foreach from=$BANNERS item=B}
       <tr>
        <td style="width:10%;" class="text-center">
        <form name="proeditar" method="get" action="{$PAG_PRODUTO_EDITAR}">
        <input type="hidden" name="pro_id" id="pro_id" value="">
        <button><img src="{$GET_SITE_HOME}/media/banners/{$B.banner_img}" alt="{$B.banner_titulo}" width="100px"></button>
        </form>
        </td>

        <td style="width:20%;">
        {$B.banner_titulo}
        </td>

        <td style="width:40%;" class="text-left">
        {$B.banner_descricao}
        </td>

        <td style="width:10%;" class="text-center">{$B.banner_ordem}
        </td>

        <td style="width:10%;" class="text-center">
        <form name="proeditar" method="get" action="{$PAG_BANNER_EDITAR}">
        <input type="hidden" name="id" id="id" value="{$B.banner_id}">
        <button> <i class="fa fa-pencil"></i> </button>
        </form>  
        </td>

        <!-- <td style="width:10%;" class="text-center">
        <form name="proeditar" method="get" action="{$PAG_PRODUTO_IMG}">
        <input type="hidden" name="pro_id" id="pro_id" value="">
        <button> <i class="fa fa-trash"></i></button>
        </form>
       </td> -->

       </tr>
      {/foreach}

     </tbody>
   </table>
 </div>




  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->

<script type="text/javascript">
function handleSelect(elm)
{
window.location = elm.value+"?p=1";
}
</script>