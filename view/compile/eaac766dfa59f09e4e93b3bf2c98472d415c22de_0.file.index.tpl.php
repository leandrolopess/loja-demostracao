<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-27 02:03:11
  from 'D:\xampp\htdocs\vanusa\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e2e60ff8afe97_85134054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaac766dfa59f09e4e93b3bf2c98472d415c22de' => 
    array (
      0 => 'D:\\xampp\\htdocs\\vanusa\\view\\index.tpl',
      1 => 1579039911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2e60ff8afe97_85134054 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Vanuza Esportes - <?php echo $_smarty_tpl->tpl_vars['PAGINA']->value;?>
 </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/perfect-scrollbar/perfect-scrollbar.css">

	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/css/efeitos.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/css/share-bar.css">
	<!-- Carrinho -->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/css/cart-1.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/css/cart-3.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/css/cart-4.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/css/cart-5.css">

	<!-- Blog -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<?php echo $_smarty_tpl->tpl_vars['BLOG_CSS']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['RESPONSIVE_CSS']->value;?>


	<!--===============================================================================================-->
</head>
<!-- Header -->
<header class="header-v2 border-bottom">
	<!-- Header desktop -->
	<div class="container-menu-desktop trans-03">
		<div class="wrap-menu-desktop ">
			<nav class="limiter-menu-desktop p-l-45">

				<!-- Logo desktop -->
				<a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="logo">
					<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu">

						<li><a href='#'><i class="fa fa-male"></i> MASCULINO</a>
							<ul style="z-index:1000;" class='sub-menu'>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
								<form name="cate_masculino" method="post" action="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
" class="hov-main">
									<input type="hidden" name="sub_masculino" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
">
									<li><button class="grey"><a><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a></button></li>
								</form>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</li>

						<li><a href='#'><i class="fa fa-female"></i> FEMININO</a>
							<ul style="z-index:1000;" class='sub-menu'>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASFE']->value, 'F');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['F']->value) {
?>
								<form name="cate_feminino" method="post" action="<?php echo $_smarty_tpl->tpl_vars['F']->value['cate_link'];?>
" class="hov-main">
									<input type="hidden" name="sub_feminino" value="<?php echo $_smarty_tpl->tpl_vars['F']->value['cate_nome'];?>
">
									<li><button class="grey"><a><?php echo $_smarty_tpl->tpl_vars['F']->value['cate_nome'];?>
</a></button></li>
								</form>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</li>

						<li><a href='#'><i class="fa fa-child"></i> INFATIL</a>
							<ul style="z-index:1000;" class='sub-menu'>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASIN']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
								<form name="cate_infantil" method="post" action="<?php echo $_smarty_tpl->tpl_vars['I']->value['cate_link'];?>
" class="hov-main">
									<input type="hidden" name="sub_infantil" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['cate_nome'];?>
">
									<li><button class="grey"><a><?php echo $_smarty_tpl->tpl_vars['I']->value['cate_nome'];?>
</a></button></li>
								</form>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</li>

						<li><a href='#'><i class="fa fa-soccer-ball-o"></i> BOLAS</a>
							<ul style="z-index:1000;" class='sub-menu'>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASBO']->value, 'B');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['B']->value) {
?>
								<form name="cate_bolas" method="post" action="<?php echo $_smarty_tpl->tpl_vars['B']->value['cate_link'];?>
" class="hov-main">
									<input type="hidden" name="sub_bolas" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['cate_nome'];?>
">
									<li><button class="grey"><a><?php echo $_smarty_tpl->tpl_vars['B']->value['cate_nome'];?>
</a></button></li>
								</form>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</li>

						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_BLOG']->value;?>
"><i class="fa fa-newspaper-o"></i> Blog</a>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
"><i class="fa fa-envelope-o"></i> Contato</a>
						</li>
					</ul>
				</div>

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m h-full">
					<div class="flex-c-m h-full">
						<div class="icon-header-item cl2 hov-cl1 trans-04 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>
					</div>

					<div class="flex-c-m h-full p-l-18 bor5">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-5 icon-header-noti js-show-cart"
							data-notify="<?php echo $_smarty_tpl->tpl_vars['CONTAGEM']->value;?>
">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
					</div>


					<div class="flex-c-m h-full p-l-18 bor5">
						<div class="icon-header-item cl2 hov-cl1 trans-04">
							<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
"><i class="f-35 zmdi zmdi-account margin-top-negativo"></i>
							</a>
						</div>
					</div>

					<div class="flex-c-m h-full p-lr-19">
						<div class="icon-header-item cl2 hov-cl1 trans-04 js-show-sidebar">
							<i class="zmdi zmdi-menu f-30"></i>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap-header-mobile">
		<!-- Logo moblie -->
		<div class="logo-mobile">
			<a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/icons/logo.png" alt="IMG-LOGO"></a>
		</div>

		<!-- Icon header -->
		<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
			<div class="flex-c-m h-full p-r-10">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>
			</div>

			<div class="flex-c-m h-full p-lr-10 bor5">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart"
					data-notify="<?php echo $_smarty_tpl->tpl_vars['CONTAGEM']->value;?>
">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>
			</div>
		</div>

		<!-- Button show menu -->
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
	</div>

	<!-- Menu Mobile -->
	<div class="menu-mobile">
		<ul class="main-menu-m bg-azul">

			<li>
				<a href='#'><i class="fa fa-male"></i> MASCULINO</a>
				<ul class="sub-menu-m">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
					<form name="cate_masculino" method="post" action="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
" class="hov-main">
						<input type="hidden" name="sub_masculino" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
">
						<li><button class="grey"><a><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a></button></li>
					</form>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
				<span class="arrow-main-menu-m">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
			</li>

			<li>
				<a href='#'><i class="fa fa-female"></i> FEMININO</a>
				<ul class="sub-menu-m">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASFE']->value, 'F');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['F']->value) {
?>
					<form name="cate_feminino" method="post" action="<?php echo $_smarty_tpl->tpl_vars['F']->value['cate_link'];?>
" class="hov-main">
						<input type="hidden" name="sub_feminino" value="<?php echo $_smarty_tpl->tpl_vars['F']->value['cate_nome'];?>
">
						<li><button class="grey"><a><?php echo $_smarty_tpl->tpl_vars['F']->value['cate_nome'];?>
</a></button></li>
					</form>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
				<span class="arrow-main-menu-m">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
			</li>

			<li>
				<a href='#'><i class="fa fa-child"></i> INFATIL</a>
				<ul class="sub-menu-m">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASIN']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
					<form name="cate_infantil" method="post" action="<?php echo $_smarty_tpl->tpl_vars['I']->value['cate_link'];?>
" class="hov-main">
						<input type="hidden" name="sub_infantil" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['cate_nome'];?>
">
						<li><button class="grey"><a><?php echo $_smarty_tpl->tpl_vars['I']->value['cate_nome'];?>
</a></button></li>
					</form>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
				<span class="arrow-main-menu-m">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
			</li>

			<li>
				<a href='#'><i class="fa fa-soccer-ball-o"></i> BOLAS</a>
				<ul class="sub-menu-m">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASBO']->value, 'B');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['B']->value) {
?>
					<form name="cate_bolas" method="post" action="<?php echo $_smarty_tpl->tpl_vars['B']->value['cate_link'];?>
" class="hov-main">
						<input type="hidden" name="sub_bolas" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['cate_nome'];?>
">
						<li><button class="grey"><a><?php echo $_smarty_tpl->tpl_vars['B']->value['cate_nome'];?>
</a></button></li>
					</form>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
				<span class="arrow-main-menu-m">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
			</li>

			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_BLOG']->value;?>
"><i class="fa fa-newspaper-o"></i> Blog</a>
			</li>

			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
"><i class="fa fa-envelope-o"></i> Contato</a>
			</li>
			<hr>

			<?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
"><i class="fa fa-user"></i> Minha Conta</a>
			</li>
			<?php } else { ?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
"><i class="fa fa-user"></i> Entrar</a>
			</li>
			<?php }?>

		</ul>
	</div>

	<!-- Modal Search -->
	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
		<div class="container-search-header">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/icons/icon-close2.png" alt="CLOSE">
			</button>

			<form class="wrap-search-header flex-w p-l-15" method="get" action="<?php echo $_smarty_tpl->tpl_vars['PAG_BUSCA']->value;?>
">
				<input class="plh3" type="text" name="s" placeholder="Buscar na loja...">
				<input type="hidden" name="p" value="1">
				<button class="flex-c-m trans-04">
					<i class="zmdi zmdi-search"></i>
				</button>
			</form>
		</div>
	</div>
</header>

<!-- Sidebar -->
<aside class="wrap-sidebar js-sidebar animsition">
	<div class="s-full js-hide-sidebar"></div>

	<div class="sidebar flex-col-l p-t-22 p-b-25">
		<div class="flex-r w-full p-b-30 p-r-27">
			<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
				<i class="zmdi zmdi-close"></i>
			</div>
		</div>

		<div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
			<ul class="sidebar-link w-full">
				<li class="p-b-13">
					<a href="index.html" class="stext-102 cl2 hov-cl1 trans-04">
						Home
					</a>
				</li>

				<li class="p-b-13">
					<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
						My Wishlist
					</a>
				</li>
				<?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
				<li class="p-b-13">

					<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
" class="stext-102 cl2 hov-cl1 trans-04">
						Minha Conta
					</a>

				</li>
				<?php }?>
				<li class="p-b-13">
					<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
						Track Oder
					</a>
				</li>

				<li class="p-b-13">
					<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
						Refunds
					</a>
				</li>

				<li class="p-b-13">
					<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
						Help & FAQs
					</a>
				</li>
			</ul>

			<div class="sidebar-gallery w-full p-tb-30">
				<span class="mtext-101 cl5">
					@ CozaStore
				</span>

				<div class="flex-w flex-sb p-t-36 gallery-lb">
					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-01.jpg"
							data-lightbox="gallery"
							style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-01.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-02.jpg"
							data-lightbox="gallery"
							style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-02.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-03.jpg"
							data-lightbox="gallery"
							style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-03.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-04.jpg"
							data-lightbox="gallery"
							style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-04.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-05.jpg"
							data-lightbox="gallery"
							style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-05.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-06.jpg"
							data-lightbox="gallery"
							style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-06.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-07.jpg"
							data-lightbox="gallery"
							style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-07.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-08.jpg"
							data-lightbox="gallery"
							style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-08.jpg');"></a>
					</div>

					<!-- item gallery sidebar -->
					<div class="wrap-item-gallery m-b-10">
						<a class="item-gallery bg-img1" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/gallery-09.jpg"
							data-lightbox="gallery" style="background-image: url('assets/images/gallery-09.jpg');"></a>
					</div>
				</div>
			</div>

			<div class="sidebar-gallery w-full">
				<span class="mtext-101 cl5">
					About Us
				</span>

				<p class="stext-108 cl6 p-t-27">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur maximus vulputate hendrerit.
					Praesent faucibus erat vitae rutrum gravida. Vestibulum tempus mi enim, in molestie sem fermentum
					quis.
				</p>
			</div>
		</div>
	</div>
</aside>


<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
	<div class="s-full js-hide-cart"></div>

	<div class="header-cart flex-col-l p-l-65 p-r-25">
		<div class="header-cart-title flex-w flex-sb-m p-b-8">
			<span class="mtext-103 cl2">
				Meu Carrinho
			</span>

			<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
				<i class="zmdi zmdi-close"></i>
			</div>
		</div>

		<div class="header-cart-content flex-w js-pscroll">
			<ul class="header-cart-wrapitem w-full">
				<?php if ($_smarty_tpl->tpl_vars['TOTAL']->value == 0) {?>
				<h4>Seu carrinho está vazio!!</h4>
				<?php }?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
				<li class="header-cart-item flex-w flex-t m-b-12">
					<div class="header-cart-item-img">
						<img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
					</div>

					<div class="header-cart-item-txt p-t-8">
						<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>

						</a>

						<span class="header-cart-item-info">
							<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
 x $<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>

						</span>
					</div>
				</li>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


			</ul>
			<?php if ($_smarty_tpl->tpl_vars['TOTAL']->value > 0) {?>
			<div class="w-full">
				<div class="header-cart-total w-full p-tb-40">
					Total: $<?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

				</div>

				<div class="header-cart-buttons flex-c w-full">
					<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
"
						class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
						Ver Carrinho
					</a>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</div>

<body>
	<!--Mostra o conteúdo da página selecionada -->
	<?php 
	Rotas::get_Pagina();
	?>


	<!-- Footer -->
	<footer class="bg-black p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Institucional
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Política de Privacidade
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Trabalhe Conosco
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Regulamentos
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Sobre a <?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>

							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Ajuda
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Entregas
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Pagamentos
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Devoluções
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						SIGA-NOS NAS REDES SOCIAS
					</h4>

					<div class="margin-left">
						<?php if ($_smarty_tpl->tpl_vars['FACE']->value != '') {?>
						<a href="$FACE" class="fs-18 cl7 hov-cl1 trans-04 m-r-16" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
						<?php } else { ?>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['INSTA']->value != '') {?>
						<a href="$INSTA" class="fs-18 cl7 hov-cl1 trans-04 m-r-16" target="_blank">
							<i class="fa fa-instagram"></i>
						</a>
						<?php } else { ?>
						<?php }?>


					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Novidades
					</h4>
					<h5 class="margin-bottom stext-107 cl7 trans-04">Assine nossa notificação de email e receba
						novidades e descontos exclusivos</h5>

					<form>
						<div class="wrap-input1 w-full p-b-4 margin-bottom">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="text" placeholder="Nome"
								required>
							<div class="focus-input1 bg-azul trans-04"></div>
						</div>

						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="email" name="email"
								placeholder="seu melhor email" required>
							<div class="focus-input1  bg-azul trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg-azul bor1  hov-btn1 p-lr-15 trans-04">
								Assinar
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">

					&copy;
					<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
> <?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>


				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>


	<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
	<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/animsition/js/animsition.min.js"><?php echo '</script'; ?>
>
	<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/bootstrap/js/popper.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$(".js-select2").each(function () {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	<?php echo '</script'; ?>
>
	<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/daterangepicker/moment.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
	<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/slick/slick.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/slick-custom.js"><?php echo '</script'; ?>
>
	<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/parallax100/parallax100.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$('.parallax100').parallax100();
	<?php echo '</script'; ?>
>
	<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/MagnificPopup/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$('.gallery-lb').each(function () { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	<?php echo '</script'; ?>
>
	<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/isotope/isotope.pkgd.min.js"><?php echo '</script'; ?>
>
	<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/sweetalert/sweetalert.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$('.js-addwish-b2').on('click', function (e) {
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function () {
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	<?php echo '</script'; ?>
>
	<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$('.js-pscroll').each(function () {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function () {
				ps.update();
			})
		});
	<?php echo '</script'; ?>
>
	<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/map-custom.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/mascara.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/adicionais.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/jquery-ias.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		var ias = jQuery.ias({
			container: '#main',
			item: '.pro',
			pagination: '#pagination',
			next: '.suivant'
		});
		ias.extension(new IASSpinnerExtension({
			src: '<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/media/gif/loading.gif',
		}));
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 async src="https://platform.twitter.com/widgets.js" charset="utf-8"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
