<div class="bg0 m-t-23 p-b-140">
    <div class="container">
          {if $PRO_TOTAL < 1}
          <div class="text-center">
          <h4>Nenhum produto encontrado!!</h4>
          <a class="btn btn margin-top bg-azul branco" href="javascript:history.back()">Voltar</a>
          </div>
          {else}

          <div class="row">

            <div class="col-md-12 text-center">

    <div class="flex-c flex-c-m margin-bottom">
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

        <!-- Buscar Produto -->
        <form name="buscar" method="get" action="{$PAG_PRODUTOS}/{$PRO.1.cate_id}/">
        <div class="dis-none panel-search p-t-10 p-b-15 margin-left-10 w-80">
          <div class="bor8 dis-flex p-l-15 margin-bottom">
            
            
            <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="s" placeholder="Buscar na categoria...">
            <input type="hidden" name="p" value="1">
            <button class="size-113 flex-c-m fs-25 cl2 hov-cl1 trans-04">
              <i class="zmdi zmdi-search"></i>
            </button>
          
          </div>  
        </div>
       </form>

        <!-- Filter -->
        <div class="dis-none panel-filter w-full p-t-10 margin-bottom">
          <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
            <div class="filter-col1 p-r-15 p-b-27">
              <div class="mtext-102 cl2 p-b-15">
                Sort By
              </div>

              <ul>
                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    Default
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    Popularity
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    Average rating
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                    Newness
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    Price: Low to High
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    Price: High to Low
                  </a>
                </li>
              </ul>
            </div>

            <div class="filter-col2 p-r-15 p-b-27">
              <div class="mtext-102 cl2 p-b-15">
                Price
              </div>

              <ul>
                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                    All
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    $0.00 - $50.00
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    $50.00 - $100.00
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    $100.00 - $150.00
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    $150.00 - $200.00
                  </a>
                </li>

                <li class="p-b-6">
                  <a href="#" class="filter-link stext-106 trans-04">
                    $200.00+
                  </a>
                </li>
              </ul>
            </div>

            <div class="filter-col3 p-r-15 p-b-27">
              <div class="mtext-102 cl2 p-b-15">
                Color
              </div>

              <ul>
                <li class="p-b-6">
                  <span class="fs-15 lh-12 m-r-6" style="color: #222;">
                    <i class="zmdi zmdi-circle"></i>
                  </span>

                  <a href="#" class="filter-link stext-106 trans-04">
                    Black
                  </a>
                </li>

                <li class="p-b-6">
                  <span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
                    <i class="zmdi zmdi-circle"></i>
                  </span>

                  <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                    Blue
                  </a>
                </li>

                <li class="p-b-6">
                  <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
                    <i class="zmdi zmdi-circle"></i>
                  </span>

                  <a href="#" class="filter-link stext-106 trans-04">
                    Grey
                  </a>
                </li>

                <li class="p-b-6">
                  <span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
                    <i class="zmdi zmdi-circle"></i>
                  </span>

                  <a href="#" class="filter-link stext-106 trans-04">
                    Green
                  </a>
                </li>

                <li class="p-b-6">
                  <span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
                    <i class="zmdi zmdi-circle"></i>
                  </span>

                  <a href="#" class="filter-link stext-106 trans-04">
                    Red
                  </a>
                </li>

                <li class="p-b-6">
                  <span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
                    <i class="zmdi zmdi-circle-o"></i>
                  </span>

                  <a href="#" class="filter-link stext-106 trans-04">
                    White
                  </a>
                </li>
              </ul>
            </div>

            <div class="filter-col4 p-b-27">
              <div class="mtext-102 cl2 p-b-15">
                Tags
              </div>

              <div class="flex-w p-t-4 m-r--5">
                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                  Fashion
                </a>

                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                  Lifestyle
                </a>

                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                  Denim
                </a>

                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                  Streetstyle
                </a>

                <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                  Crafts
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
       

       <div class="col-md-12" id="main">
       
        <ul class="pro p-b-35 isotope-item"> 
        {foreach from=$PRO item=P}
          <!-- Produto -->
          <li class="block2 col-sm-3 text-center">
            <!-- Imagem do produto -->
            <div class="block2-pic hov-img0">
              <form name="produto" method="post" action="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">
              <button>
              {if $P.pro_desconto > 0 }
              <div class="tag-sale bg-black"><span class="stext-105 branco text-uppercase">{$P.pro_desconto}% OFF</span></div>
              {else}
              {/if}
              <img src="{$P.pro_img_eg}" alt="{$P.pro_nome}">
              <input type="hidden" name="produto_id" value="{$P.pro_id}">
              <input type="hidden" name="produto_subcategoria" value="{$SUBCATEGORIA_ID}">
              <input type="hidden" name="produto_nome" value="{$P.pro_nome}">
            </button>
            </form>
            </div>

            <div class="block2-txt flex-c flex-t p-t-14 margin-bottom">
              <div class="block2-txt-child1 flex-col-l produto_info">
                <!-- Nome do produto -->
                <form name="produto" method="post" action="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">
                <button class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6 text-left">
                  {$P.pro_nome}
                <input type="hidden" name="produto_id" value="{$P.pro_id}">
                <input type="hidden" name="produto_subcategoria" value="{$SUBCATEGORIA_ID}">
                <input type="hidden" name="produto_nome" value="{$P.pro_nome}">
              </button>
            </form>


                {if $P.pro_desconto > 0 }
                 <div class="row">

                  <div class="col-6 col-sm-12 col-md-6">

                  <strike>R${$P.pro_valor}</strike>
                </div>

                <div class="col-6 col-sm-12 col-md-6">
                  <span class="stext-105 cl3">
                    R${$P.pro_valor_com_desconto}
                </span>
              </div>
              </div>

                {else}
                 <span class="stext-105 cl3">
                    R${$P.pro_valor}
                </span>
                {/if}

              </div>
            
            </div>

          </li>   
      {/foreach}
     </ul>

      <!-- Carregar mais produtos -->
      <div id="pagination" class="flex-c">
         {$PAGINAS}
          </div>
        </div>
      </div> 
      {/if}
    </div>
  </div>
