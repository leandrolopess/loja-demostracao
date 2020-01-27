<!-- Titulo -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{$GET_TEMA}/assets/images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Blog
		</h2>
	</section>

{if $BLOG_TOTAL > 0}
<!-- Blog -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 p-b-80 blog" id="main">
					<div class="p-r-45 p-r-0-lg">

                        <div class="page-wrapper pro">
                        <div class="blog-list clearfix">
						<!-- item blog -->
						
                         

						{foreach from=$BLOG item=B}
						<div class="blog-box row-blog">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                         <form name="blog" method="post" action="{$BLOG_CONTEUDO}/{$B.blog_url}">
                                         <input type="hidden" name="id" value="{$B.blog_id}">
                                         <input type="hidden" name="titulo" value="{$B.blog_titulo}">
                                         <input type="hidden" name="categoria" value="{$B.blog_categorias}">
                                         <button>
                                          <img src="{$GET_HOME}/media/blog/{$B.blog_img}" alt="" class="img-fluid"> 
                                            <div class="hovereffect"></div>
                                            </button>
                                        </form>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                         <form name="blog" method="post" action="{$BLOG_CONTEUDO}/{$B.blog_url}">
                                         <input type="hidden" name="id" value="{$B.blog_id}">
                                         <input type="hidden" name="titulo" value="{$B.blog_titulo}">
                                         <input type="hidden" name="categoria" value="{$B.blog_categorias}">
                                        <h4><button>{$B.blog_titulo}</button></h4>
                                        </form>
                                        <p>{$B.blog_descricao}</p>
                                        <small class="firstsmall"><a class="bg-orange" href="#" title="">{$B.cateblog_nome}</a></small>
                                        <small><a href="#" title="">{$B.blog_data_d} {$B.blog_data_m}, {$B.blog_data_a}</a></small>
                                        <small><a href="#" title="">por {$B.user_nome} {$B.user_sobrenome}</a></small>
                                        <small><a href="#" title=""><i class="fa fa-eye"></i> {$B.blog_views}</a></small>
                                    </div><!-- meta -->
                                </div><!-- blog-box -->

                                <hr class="invis">
                                {/foreach}


                                </div>
                            </div>
						

						

						
					</div>
				</div>

				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 p-b-80">
					{include file="inc/sidebar-blog.tpl"}
				</div>
			</div>
		</div>


		<!-- Pagination -->
		<div id="pagination" class="flex-c">
         {$PAGINAS}
          </div>



	</section>
	{else}
<!-- Blog -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 p-b-80" id="main">
					<div class="p-r-45 p-r-0-lg">

                        <div class="page-wrapper pro">
                        <div class="blog-list clearfix">
						<!-- item blog -->
						<div class="text-center">
				          <h4>Nenhum post encontrado!!</h4>
				          <br><p class="margin-top-negativo-15">Verifique se você digitou as palavras corretamente ou tente novamente a busca.</p>
				          </div>
                          </div>
                       </div>
						
					</div>
				</div>
                 <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 p-b-80">
				{include file="inc/sidebar-blog.tpl"}
			</div>
			</div>
		</div>
	</section>


	{/if}