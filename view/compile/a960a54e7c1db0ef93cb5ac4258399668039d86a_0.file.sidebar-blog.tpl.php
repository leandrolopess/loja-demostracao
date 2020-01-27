<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-05 01:07:38
  from 'D:\xampp\htdocs\loja_adaptada\view\inc\sidebar-blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5de8747a3068d4_96741658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a960a54e7c1db0ef93cb5ac4258399668039d86a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\view\\inc\\sidebar-blog.tpl',
      1 => 1575515255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de8747a3068d4_96741658 (Smarty_Internal_Template $_smarty_tpl) {
?>                   <div class="side-menu">
						<div class="bor17 of-hidden pos-relative">
							<form name="busca_blog" method="get" action="">
							<input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="s" placeholder="Buscar no blog">
                             <input type="hidden" name="p" value="1">
							<button  class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>
						</form>
						</div>
                         
						<div class="p-t-55">
							<h4 class="mtext-112-normal cl2 p-b-33">
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
							<h4 class="mtext-112-normal cl2 p-b-27">
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
				<?php }
}
