<!-- Slider -->
<div class="container">
  <div class="margin-top-10 margin-bottom">
  <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselCaptions" data-slide-to="1"></li>
      <li data-target="#carouselCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
     {foreach from=$DESTAQUE item=D}
      <div class="carousel-item active">
        <img src="media/banners/{$D.banner_img}" class="d-block w-100" alt="{$D.banner_titulo}">
      </div>
     {/foreach}

{foreach from=$IMAGES item=I}
      <div class="carousel-item">
        <img src="media/banners/{$I.banner_img}" class="d-block w-100" alt="{$I.banner_titulo}">
         <!-- <div class="carousel-caption d-none d-md-block">
		    <h5 class="black">{$I.titulo}</h5>
		    <p class="black">{$I.descricao}</p>
		  </div> -->
      </div>
 {/foreach}
     
    <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>


<section class="sec-product bg0 p-t-100 p-b-50">
		<div class="container">
			<div class="p-b-32">
				<h3 class="ltext-105 cl5 txt-center respon1">
					Novidades
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01">
			

				<!-- Tab panes -->
				<div class="tab-content p-t-50">
					<!-- - -->
					<div class="tab-pane fade show active" role="tabpanel">
						<!-- Slide2 -->
						<div class="wrap-slick2">
							<div class="slick2">
								 {foreach from=$PRO item=P}
								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
											<form name="produto" method="post" action="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">
								              <button>
								              <img class="img-thumbnail padding" src="{$P.pro_img_eg}" alt="{$P.pro_nome}">
								              <input type="hidden" name="produto_id" value="{$P.pro_id}">
								              <input type="hidden" name="produto_subcategoria" value="{$P.cate_id}">
								              <input type="hidden" name="produto_nome" value="{$P.pro_nome}">
								            </button>
								            </form>
										</div>

										<div class="block2-txt flex-c margin-left-10 flex-t p-t-14  margin-left-10">
											<div class="block2-txt-child1 flex-col-l ">
												<form name="produto" method="post" action="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">
								                <button class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6 text-left">
								                  {$P.pro_nome}
								                <input type="hidden" name="produto_id" value="{$P.pro_id}">
								                <input type="hidden" name="produto_subcategoria" value="{$P.cate_id}">
								                <input type="hidden" name="produto_nome" value="{$P.pro_nome}">
								              </button>
								            </form>



												<span class="stext-105 cl3">
													R$ {$P.pro_valor}
												</span>
											</div>

											
										</div>

									</div>
								</div>

								


								{/foreach}



							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</section>



        <!-- BANNER PROMOÇÃO -->
              <div class="row">

               <div class="col-lg-12 txt-center">
                  <img src="{$GET_SITE}/media/promocoes/promo1.jpg" alt="" class="img-fluid" style="width:300px;height:auto;"> 
                 </div>
                  

                   <div class="col-lg-12 txt-center margin-top">
                  <a href="#" class="botao bg-azul branco txt-center text-uppercase">Saiba mais</a>
                   </div>
                     
                  

                  </div> 



	<section class="sec-product bg0 p-t-100 p-b-50">
		<div class="container">
			<div class="p-b-32">
				<h3 class="ltext-105 cl5 txt-center respon1">
					Ofertas
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01">
			

				<!-- Tab panes -->
				<div class="tab-content p-t-50">
					<!-- - -->
					<div class="tab-pane fade show active" role="tabpanel">
						<!-- Slide2 -->
						<div class="wrap-slick2">
							<div class="slick2">
								 {foreach from=$PROMO item=P}
								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15 pro">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
											<form name="produto" method="post" action="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">
								              <button>
								              	 {if $P.pro_desconto > 0 }
									              <div class="tag-sale bg-black"><span class="stext-105 branco text-uppercase">{$P.pro_desconto}% OFF</span></div>
									              {else}
									              {/if}
								              <img class="img-thumbnail padding" src="{$P.pro_img_eg}" alt="{$P.pro_nome}">
								              <input type="hidden" name="produto_id" value="{$P.pro_id}">
								              <input type="hidden" name="produto_subcategoria" value="{$P.cate_id}">
								              <input type="hidden" name="produto_nome" value="{$P.pro_nome}">
								            </button>
								            </form>
										</div>

										<div class="block2-txt flex-c margin-left-10 flex-t p-t-14  margin-left-10">
											<div class="block2-txt-child1 flex-col-l ">
												<form name="produto" method="post" action="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">
								                <button class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6 text-left">
								                  {$P.pro_nome}
								                <input type="hidden" name="produto_id" value="{$P.pro_id}">
								                <input type="hidden" name="produto_subcategoria" value="{$P.cate_id}">
								                <input type="hidden" name="produto_nome" value="{$P.pro_nome}">
								              </button>
								            </form>



											{if $P.pro_desconto > 0 }
							                 <div class="row">

							                  <div class="col-6">

							                  <strike>R${$P.pro_valor}</strike>
							                </div>

							                <div class="col-6">
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

									</div>
								</div>

								


								{/foreach}



							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</section>


	<!-- Blog -->
	<section class="sec-blog bg0 p-t-60 p-b-90">
		<div class="container">
			<div class="p-b-66">
				<a href="{$PAG_BLOG}">
				<h3 class="ltext-105 cl5 txt-center respon1">
					Blog
				</h3>
			   </a>
			</div>

			<div class="row">
				{foreach from=$BLOG item=B}
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<form name="blog" method="post" action="{$BLOG_CONTEUDO}/{$B.blog_url}">
                            <input type="hidden" name="id" value="{$B.blog_id}">
                            <input type="hidden" name="titulo" value="{$B.blog_titulo}">
                            <input type="hidden" name="categoria" value="{$B.blog_categorias}">
                            <button>
							<img src="{$GET_SITE}/media/blog/{$B.blog_img}" alt="{$B.blog_titulo}">
							</button>
						    </form>
						</div>

						<div class="p-t-15 blog-meta big-meta blog">
							<small class="firstsmall"><a class="bg-orange" href="#" title="">{$B.cateblog_nome}</a></small>
                            <small><a href="#" title="">{$B.blog_data_d} {$B.blog_data_m}, {$B.blog_data_a}</a></small>
                            <small><a href="#" title="">por {$B.user_nome} {$B.user_sobrenome}</a></small>
                            <small class="firstsmall"><a href="#" title=""><i class="fa fa-eye"></i> {$B.blog_views}</a></small>
                             

							<h4 class="p-b-12">
								
							<form name="blog" method="post" action="{$BLOG_CONTEUDO}/{$B.blog_url}">
                            <input type="hidden" name="id" value="{$B.blog_id}">
                            <input type="hidden" name="titulo" value="{$B.blog_titulo}">
                            <input type="hidden" name="categoria" value="{$B.blog_categorias}">
                            <button class="mtext-101 cl2 hov-cl1 trans-04 text-left">{$B.blog_titulo}</button>
                            </form>
								
							</h4>

							<p class="stext-108 cl6">
								{$B.blog_descricao}
							</p>
						</div>
					</div>
				</div>
				{/foreach}

			</div>
		</div>
	</section>














</div><!-- /Container --> 