<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-11 01:48:24
  from 'D:\xampp\htdocs\vanuza\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df06708ef8641_05988833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e479f3a5661dca58f3038528460a57ed3e255361' => 
    array (
      0 => 'D:\\xampp\\htdocs\\vanuza\\view\\home.tpl',
      1 => 1576036065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df06708ef8641_05988833 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Slider -->
<div class="container">
  <div class="margin-top-10 margin-bottom">
  <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselCaptions" data-slide-to="1"></li>
      <li data-target="#carouselCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DESTAQUE']->value, 'D');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['D']->value) {
?>
      <div class="carousel-item active">
        <img src="media/banners/<?php echo $_smarty_tpl->tpl_vars['D']->value['banner_img'];?>
" class="d-block w-100" alt="<?php echo $_smarty_tpl->tpl_vars['D']->value['banner_titulo'];?>
">
      </div>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
      <div class="carousel-item">
        <img src="media/banners/<?php echo $_smarty_tpl->tpl_vars['I']->value['banner_img'];?>
" class="d-block w-100" alt="<?php echo $_smarty_tpl->tpl_vars['I']->value['banner_titulo'];?>
">
         <!-- <div class="carousel-caption d-none d-md-block">
		    <h5 class="black"><?php echo $_smarty_tpl->tpl_vars['I']->value['titulo'];?>
</h5>
		    <p class="black"><?php echo $_smarty_tpl->tpl_vars['I']->value['descricao'];?>
</p>
		  </div> -->
      </div>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     
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
								 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
											<form name="produto" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">
								              <button>
								              <img class="img-thumbnail padding" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_eg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
								              <input type="hidden" name="produto_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
								              <input type="hidden" name="produto_subcategoria" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_id'];?>
">
								              <input type="hidden" name="produto_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
								            </button>
								            </form>
										</div>

										<div class="block2-txt flex-c margin-left-10 flex-t p-t-14  margin-left-10">
											<div class="block2-txt-child1 flex-col-l ">
												<form name="produto" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">
								                <button class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6 text-left">
								                  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>

								                <input type="hidden" name="produto_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
								                <input type="hidden" name="produto_subcategoria" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_id'];?>
">
								                <input type="hidden" name="produto_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
								              </button>
								            </form>



												<span class="stext-105 cl3">
													R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>

												</span>
											</div>

											
										</div>

									</div>
								</div>

								


								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



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
                  <img src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE']->value;?>
/media/promocoes/promo1.jpg" alt="" class="img-fluid" style="width:300px;height:auto;"> 
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
								 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROMO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15 pro">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
											<form name="produto" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">
								              <button>
								              	 <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_desconto'] > 0) {?>
									              <div class="tag-sale bg-black"><span class="stext-105 branco text-uppercase"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desconto'];?>
% OFF</span></div>
									              <?php } else { ?>
									              <?php }?>
								              <img class="img-thumbnail padding" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_eg'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
								              <input type="hidden" name="produto_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
								              <input type="hidden" name="produto_subcategoria" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_id'];?>
">
								              <input type="hidden" name="produto_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
								            </button>
								            </form>
										</div>

										<div class="block2-txt flex-c margin-left-10 flex-t p-t-14  margin-left-10">
											<div class="block2-txt-child1 flex-col-l ">
												<form name="produto" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">
								                <button class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6 text-left">
								                  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>

								                <input type="hidden" name="produto_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
								                <input type="hidden" name="produto_subcategoria" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['cate_id'];?>
">
								                <input type="hidden" name="produto_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
								              </button>
								            </form>



											<?php if ($_smarty_tpl->tpl_vars['P']->value['pro_desconto'] > 0) {?>
							                 <div class="row">

							                  <div class="col-6">

							                  <strike>R$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</strike>
							                </div>

							                <div class="col-6">
							                  <span class="stext-105 cl3">
							                    R$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor_com_desconto'];?>

							                </span>
							              </div>
							              </div>

							                <?php } else { ?>
							                 <span class="stext-105 cl3">
							                    R$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>

							                </span>
							                <?php }?>
											</div>

											
										</div>

									</div>
								</div>

								


								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



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
				<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_BLOG']->value;?>
">
				<h3 class="ltext-105 cl5 txt-center respon1">
					Blog
				</h3>
			   </a>
			</div>

			<div class="row">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOG']->value, 'B');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['B']->value) {
?>
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<form name="blog" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BLOG_CONTEUDO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_url'];?>
">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_id'];?>
">
                            <input type="hidden" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_titulo'];?>
">
                            <input type="hidden" name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_categorias'];?>
">
                            <button>
							<img src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE']->value;?>
/media/blog/<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_titulo'];?>
">
							</button>
						    </form>
						</div>

						<div class="p-t-15 blog-meta big-meta blog">
							<small class="firstsmall"><a class="bg-orange" href="#" title=""><?php echo $_smarty_tpl->tpl_vars['B']->value['cateblog_nome'];?>
</a></small>
                            <small><a href="#" title=""><?php echo $_smarty_tpl->tpl_vars['B']->value['blog_data_d'];?>
 <?php echo $_smarty_tpl->tpl_vars['B']->value['blog_data_m'];?>
, <?php echo $_smarty_tpl->tpl_vars['B']->value['blog_data_a'];?>
</a></small>
                            <small><a href="#" title="">por <?php echo $_smarty_tpl->tpl_vars['B']->value['user_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['B']->value['user_sobrenome'];?>
</a></small>
                            <small class="firstsmall"><a href="#" title=""><i class="fa fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['B']->value['blog_views'];?>
</a></small>
                             

							<h4 class="p-b-12">
								
							<form name="blog" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BLOG_CONTEUDO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_url'];?>
">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_id'];?>
">
                            <input type="hidden" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_titulo'];?>
">
                            <input type="hidden" name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_categorias'];?>
">
                            <button class="mtext-101 cl2 hov-cl1 trans-04 text-left"><?php echo $_smarty_tpl->tpl_vars['B']->value['blog_titulo'];?>
</button>
                            </form>
								
							</h4>

							<p class="stext-108 cl6">
								<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_descricao'];?>

							</p>
						</div>
					</div>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			</div>
		</div>
	</section>














</div><!-- /Container --> <?php }
}
