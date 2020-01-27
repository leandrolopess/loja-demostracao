<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-11 20:55:14
  from 'D:\xampp\htdocs\vanuza\view\blog_conteudo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df173d23f0be3_14030178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99b89b4f13b508fb3bc661ed332619991c451e59' => 
    array (
      0 => 'D:\\xampp\\htdocs\\vanuza\\view\\blog_conteudo.tpl',
      1 => 1575576766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df173d23f0be3_14030178 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
				<i class="fa fa-home"></i> Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_BLOG']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
				<i class="fa fa-newspaper-o"></i> Blog
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_titulo'];?>

			</span>
		</div>
	</div>


	<!-- Blog Conteudo -->
	<section class="bg0 p-t-52 p-b-20">
		<div class="container">
			<div class="row">


					 <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 p-b-80 blog">
                        <div class="page-wrapper">

                            <div class="blog-title-area text-center">
                                

                                <span class="color-orange"><a href="#" title=""><?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['cateblog_nome'];?>
</a></span>

                                <h3><?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_titulo'];?>
</h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="#" title=""><?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_data_d'];?>
 <?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_data_m'];?>
, <?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_data_a'];?>
</a></small>
                                    <small><a href="#" title="">por <?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['user_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['user_sobrenome'];?>
</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_views'];?>
</a></small>
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/media/blog/<?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_img'];?>
" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content margin-bottom">  
                                
                                    <?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['blog_conteudo'];?>


                               

                                </div><!-- end pp -->
                            </div><!-- end content -->

                            <div class="flex-w flex-t p-t-16 margin-bottom">
							<span class="size-216 stext-116 cl8 p-t-4">
								Tags
							</span>

							<div class="flex-w size-217">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Teste
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Teste
								</a>
							</div>
						</div>

						<div class="blog-title-area">
							<div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->


                             <!-- BANNER PROMOÇÃO -->
                            <!-- <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/blog/upload/banner_01.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <hr class="invis1">

                            <div class="custombox authorbox clearfix">
                                <h4 class="small-title">Sobre o autor</h4>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/blog/upload/author.jpg" alt="" class="img-fluid rounded-circle"> 
                                    </div><!-- end col -->

                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <h4><a href="#"><?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['user_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['BLOG']->value[1]['user_sobrenome'];?>
</a></h4>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                        <div class="topsocial">
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                        </div><!-- end social -->

                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end author-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">Você pode gostar</h4>
                                <div class="row">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELACIONADOS']->value, 'R');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['R']->value) {
?>
                                    <div class="col-lg-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <form name="blog" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTEUDO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['R']->value['blog_url'];?>
">
                                                     <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['R']->value['blog_id'];?>
">
                                                     <input type="hidden" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['R']->value['blog_titulo'];?>
">
                                                     <input type="hidden" name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['R']->value['blog_categorias'];?>
">
                                                     <button>
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/media/blog/<?php echo $_smarty_tpl->tpl_vars['R']->value['blog_img'];?>
" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                    </div><!-- end hover -->
                                               </button>
                                             </form>
                                            </div><!-- end media -->
                                            <div class="blog-meta">
                                                <form name="blog" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTEUDO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['R']->value['blog_url'];?>
">
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['R']->value['blog_id'];?>
">
                                                <input type="hidden" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['R']->value['blog_titulo'];?>
">
                                                <input type="hidden" name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['R']->value['blog_categorias'];?>
">
                                                <button>
                                                <h4><?php echo $_smarty_tpl->tpl_vars['R']->value['blog_titulo'];?>
</h4>
                                                </button>
                                                </form>
                                                <div class="text-center">
                                                <small><a href="blog-category-01.html" title=""><?php echo $_smarty_tpl->tpl_vars['R']->value['blog_categorias'];?>
</a></small>
                                                <small><a href="blog-category-01.html" title=""><?php echo $_smarty_tpl->tpl_vars['R']->value['blog_data_d'];?>
 <?php echo $_smarty_tpl->tpl_vars['R']->value['blog_data_m'];?>
, <?php echo $_smarty_tpl->tpl_vars['R']->value['blog_data_a'];?>
</a></small>
                                            </div>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">3 Comentários</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="comments-list">
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/blog/upload/author.jpg" alt="" class="rounded-circle">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading user_name">Amanda <small>5 dias atrás</small></h4>
                                                    <p> Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                    <!-- <a href="#" class="btn btn-primary btn-sm">Reply</a> -->
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/blog/upload/author_01.jpg" alt="" class="rounded-circle">
                                                </a>
                                                <div class="media-body">

                                                    <h4 class="media-heading user_name">Juliana <small>5 dias atrás</small></h4>

                                                    <p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                                </div>
                                            </div>
                                            <div class="media last-child">
                                                <a class="media-left" href="#">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/blog/upload/author_02.jpg" alt="" class="rounded-circle">
                                                </a>
                                                <div class="media-body">

                                                    <h4 class="media-heading user_name">Jessica <small>5 dias atrás</small></h4>
                                                    <p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">Deixe seu comentário</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="form-wrapper">

                                            <div class="bor19 size-218 m-b-20">
											<input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="name" placeholder="Nome *">
										    </div>

                                            <div class="bor19 size-218 m-b-20">
											<input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="email" placeholder="Email *">
										    </div>

                                            <div class="bor19 m-b-20">
											<textarea class="stext-111 cl2 plh3 size-124 p-lr-18 p-tb-15 no-resize" name="cmt" placeholder="Comentário..."></textarea>
										    </div>

                                            <button class="flex-c-m stext-101 cl0 size-125 bg-azul bor2 hov-btn3 p-lr-15 trans-04">
											Enviar
										   </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    

				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 p-b-80">
					<div class="side-menu">
						<div class="bor17 of-hidden pos-relative">
                            <form name="busca_blog" method="get" action="<?php echo $_smarty_tpl->tpl_vars['PAG_BLOG']->value;?>
">
							<input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="s" placeholder="Buscar no blog">
                            <input type="hidden" name="p" value="1">
							<button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-33">
								Categorias
							</h4>

							<ul>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEBLOG']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										<?php echo $_smarty_tpl->tpl_vars['C']->value['cateblog_nome'];?>

									</a>
								</li>

								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							</ul>
						</div>

						<!-- <div class="p-t-65">
							<h4 class="mtext-112 cl2 p-b-33">
								Produtos Destaque
							</h4>

							<ul>
								<li class="flex-w flex-t p-b-30">
									<a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
										<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/product-min-01.jpg" alt="PRODUCT">
									</a>

									<div class="size-215 flex-col-t p-t-8">
										<a href="#" class="stext-116 cl8 hov-cl1 trans-04">
											White Shirt With Pleat Detail Back
										</a>

										<span class="stext-116 cl6 p-t-20">
											$19.00
										</span>
									</div>
								</li>

								
							</ul>
						</div> -->

						<div class="p-t-50">
							<h4 class="mtext-112 cl2 p-b-27">
								Tags
							</h4>

							<div class="flex-w m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Teste
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Teste
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Teste
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Teste
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Teste
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	<?php }
}
