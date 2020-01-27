<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-11 01:14:22
  from 'D:\xampp\htdocs\loja_adaptada\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df05f0e372210_96767606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57175462aef40ae2b24db2f8e225d2943c39a82f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\view\\contato.tpl',
      1 => 1576034058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df05f0e372210_96767606 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Contato -->
	<section class="bg0 p-t-35 p-b-116">
		<div class="container">

			<h1 class="mtext-105 cl2 txt-center p-b-30 margin-top-negativo-35">
			Fale com a gente!						
			</h1>

			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form method="post">
						<h2 class="mtext-105 cl2 txt-center p-b-30">
							Formulário de contato
						</h2>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text"  name="nome" placeholder="Nome*" required>
							<img style="width:22px;height:18px;" class="how-pos4 pointer-none" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/icons/user.png" alt="Nome">
						</div>

						<div class="bor8 m-b-20 how-pos4-parent"> 
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text"  name="email" placeholder="Email*" required>
							<img class="how-pos4 pointer-none" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/icons/icon-email.png" alt="Email">
						</div>
				

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25 no-resize" name="msg" placeholder="Mensagem*" required></textarea>
						</div>
                   
						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Enviar
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INFO']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"> </span>
						</span>
                          
						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								<?php echo $_smarty_tpl->tpl_vars['I']->value['info_loja'];?>
 
							</span>

							<p class="stext-115 cl6 p-t-18">
								<?php echo $_smarty_tpl->tpl_vars['I']->value['info_rua'];?>
, <?php echo $_smarty_tpl->tpl_vars['I']->value['info_numero'];?>
 <br><?php echo $_smarty_tpl->tpl_vars['I']->value['info_cidade'];?>
, <?php echo $_smarty_tpl->tpl_vars['I']->value['info_estado'];?>
 <br><?php echo $_smarty_tpl->tpl_vars['I']->value['info_cep'];?>

							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Telefone
							</span>

							<p class="stext-115 size-213 p-t-18">
								<a class="azul" href="tel:<?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_telefone'];?>
"><?php echo $_smarty_tpl->tpl_vars['I']->value['info_telefone'];?>
</a>
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="fa fa-whatsapp" style="color:#484848;"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Whatsapp
							</span>

							<p class="stext-115 size-213 p-t-18">
								<a class="azul" href="tel:<?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_telefone'];?>
"><?php echo $_smarty_tpl->tpl_vars['I']->value['info_whats'];?>
</a>
							</p>
						</div>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Suporte de venda
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								<a class="azul" href="mailto:<?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['INFO']->value[1]['info_email'];?>
</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	
	<!-- Map -->
	<!-- <div class="map" style="margin-top:-116px;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d728.4472333334872!2d-52.42933283455448!3d-29.71690500508545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951ca34109050189%3A0x37b0fedbc53d7d4b!2sVanusa%20Esportes%20Ltda!5e0!3m2!1spt-BR!2sbr!4v1575071240354!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div> -->



<?php }
}
