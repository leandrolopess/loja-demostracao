<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-11 20:55:00
  from 'D:\xampp\htdocs\vanuza\view\blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df173c4d59795_50164239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaa9c68f52ac84264b056c35f4be2d71dec1c1d5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\vanuza\\view\\blog.tpl',
      1 => 1575577927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/sidebar-blog.tpl' => 2,
  ),
),false)) {
function content_5df173c4d59795_50164239 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Titulo -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Blog
		</h2>
	</section>

<?php if ($_smarty_tpl->tpl_vars['BLOG_TOTAL']->value > 0) {?>
<!-- Blog -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 p-b-80 blog" id="main">
					<div class="p-r-45 p-r-0-lg">

                        <div class="page-wrapper pro">
                        <div class="blog-list clearfix">
						<!-- item blog -->
						
                         

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOG']->value, 'B');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['B']->value) {
?>
						<div class="blog-box row-blog">
                                    <div class="col-md-4">
                                        <div class="post-media">
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
                                          <img src="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/media/blog/<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_img'];?>
" alt="" class="img-fluid"> 
                                            <div class="hovereffect"></div>
                                            </button>
                                        </form>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                         <form name="blog" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BLOG_CONTEUDO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_url'];?>
">
                                         <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_id'];?>
">
                                         <input type="hidden" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_titulo'];?>
">
                                         <input type="hidden" name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['blog_categorias'];?>
">
                                        <h4><button><?php echo $_smarty_tpl->tpl_vars['B']->value['blog_titulo'];?>
</button></h4>
                                        </form>
                                        <p><?php echo $_smarty_tpl->tpl_vars['B']->value['blog_descricao'];?>
</p>
                                        <small class="firstsmall"><a class="bg-orange" href="#" title=""><?php echo $_smarty_tpl->tpl_vars['B']->value['cateblog_nome'];?>
</a></small>
                                        <small><a href="#" title=""><?php echo $_smarty_tpl->tpl_vars['B']->value['blog_data_d'];?>
 <?php echo $_smarty_tpl->tpl_vars['B']->value['blog_data_m'];?>
, <?php echo $_smarty_tpl->tpl_vars['B']->value['blog_data_a'];?>
</a></small>
                                        <small><a href="#" title="">por <?php echo $_smarty_tpl->tpl_vars['B']->value['user_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['B']->value['user_sobrenome'];?>
</a></small>
                                        <small><a href="#" title=""><i class="fa fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['B']->value['blog_views'];?>
</a></small>
                                    </div><!-- meta -->
                                </div><!-- blog-box -->

                                <hr class="invis">
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </div>
                            </div>
						

						

						
					</div>
				</div>

				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 p-b-80">
					<?php $_smarty_tpl->_subTemplateRender("file:inc/sidebar-blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>
			</div>
		</div>


		<!-- Pagination -->
		<div id="pagination" class="flex-c">
         <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

          </div>



	</section>
	<?php } else { ?>
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
				<?php $_smarty_tpl->_subTemplateRender("file:inc/sidebar-blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			</div>
			</div>
		</div>
	</section>


	<?php }
}
}
