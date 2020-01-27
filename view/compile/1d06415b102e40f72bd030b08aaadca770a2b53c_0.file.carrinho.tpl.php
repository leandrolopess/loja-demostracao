<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-11 20:50:57
  from 'D:\xampp\htdocs\vanuza\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df172d1a920b2_80493205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d06415b102e40f72bd030b08aaadca770a2b53c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\vanuza\\view\\carrinho.tpl',
      1 => 1575687966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df172d1a920b2_80493205 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['TOTAL']->value == 0) {?>
<div class="not txt-center margin-bottom margin-top">
<h4 class="margin-bottom-10">Seu carrinho está vazio!!</h4>
<a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="continuar-btn">Voltar para a loja</a>
</div>
<?php } else { ?>

<!-- Carrinho -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-xl-8 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
					<div class="page-title">
                   <h1>Meu Carrinho</h1>
                    </div>
				<div class="wrap-table-shopping-cart">
				<div class="table_wrap">
				<table class="table_type_1 shopping_cart_table shop_table cart woocommerce-cart-form__contents table-carrinho table-2" cellspacing="0">
					<thead>
						<tr>
						<th class="product_image_col"  style="border-bottom:1px solid #eaeaea;border-top:1px solid #eaeaea;border-right:1px solid #eaeaea;border-left:1px solid #eaeaea;">Imagem do Produto</th>
						<th style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;" class="product_title_col">Nome do Produto</th>
						<th style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">Preço por Unidade</th>
						<th style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;" class="product_qty_col">Quantidade</th>
						<th style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;">Total</th>
						<th style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;border-bottom:1px solid #eaeaea;" class="product_actions_col">Ação</th>
						</tr>
					</thead>
					<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
					<tr style="border-top: 1px solid #eaeaea;border-right: 1px solid #eaeaea;border-left: 1px solid #eaeaea;" class="woocommerce-cart-form__cart-item cart_item">
                    <td class="product_image_col" data-title="Imagem do Produto">
					<!-- Imagem -->
					<a href="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_link'];?>
">
					<img width="120" height="120" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
" />
				    </a>
					</td>
					<td  data-title="Nome do Produto">
					<!-- Nome -->
					<a style="font-size:16px;color:#555;" href="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a>
					</td>
                    <!-- Valor -->
					<td class="subtotal" data-title="Preço por Unidade" style="color:#555;">
					<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</span>	</td>
					<!-- Quantidade -->
					<td data-title="Quantidade">
					<div class="quantity">
					<div class="wrap-num-product flex-w m-r-20 m-tb-10">
                    <!-- Diminui -->
					<div class="cl8 hov-btn4 trans-04 flex-c-m">
					<form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
					<button title="Diminuir" type="submit" class="button_dark_grey icon_btn edit_product">
					<input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                    <input type="hidden" name="acao" value="diminui">
					<i class="fs-16 zmdi zmdi-minus cinza"></i>
				    </button>
					</div>
					</form>
                    <!-- Mostra quantidade -->
					<input class="mtext-104 cl3 txt-center num-product" type="text" name="qua" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
">
					<!-- Aumenta -->
					<div class="cl8 hov-btn4 trans-04 flex-c-m">
					<form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
					<button title="Aumentar" type="submit" class="button_dark_grey icon_btn edit_product">
					<input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                    <input type="hidden" name="acao" value="aumenta">
					<i class="fs-16 zmdi zmdi-plus cinza"></i>
					</button>
					</div>
					</div>
					</form>							
					</div>
					</td>
					<!-- Total -->
					<td class="total" data-title="Total">
					<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</span>	</td>
                    <!-- Ação -->
					<td class="acao-icone" data-title="Ação">
					<!-- Atualiza Carrinho 
					<form name="" method="post" action="">
					<input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                    <input type="hidden" name="acao" value="">
					<button title="Remover Item" type="submit" class="button_dark_grey icon_btn edit_product"><i class="zmdi zmdi-refresh black" style="font-size:30px;margin-top:-3px;"></i></img><div class="i-remover"><h5>Atualizar</h5></div></button>
				    </form>-->
					<!-- Deleta do carrinho -->
                    <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
					<input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
					<input type="hidden" name="acao" value="del">
					<button title="Remover Item" class="button_dark_grey icon_btn edit_product"><i class="zmdi zmdi-close black f-30" style="margin-top:-3px;"></i></img><div class="i-remover"><h5>Remover</h5></div></button>
					</form>		
				     </td>
					</tr>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



					</tbody>
				</table>	
		          </div>
          <!-- Continuar Comprando -->
			<div class="left_side" style="border-left: 1px solid #eaeaea;border-right: 1px solid #eaeaea;">
				<a style="margin-top: 10px;margin-left:15px;" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="continuar-btn">Continuar Comprando</a>
			</div>
			</div>
            <!-- Cupom -->
			<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
			<div class="flex-w flex-m m-r-20 m-tb-5">
			<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Código do cupom">
										
			<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
			Aplicar cupom
			</div>
			</div>
            <!-- Atualizar Carrinho -->
            <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
			
			<input type="hidden" name="acao" value="limpar">
			<input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
			<button title="Remover Item" class="flex-c-m stext-101 branco size-119 bg-red borda btn3 p-lr-15 trans-04 pointer m-tb-10">Limpar Carrinho &nbsp;<i class="fa fa-trash-o f-25"></i></button>
			
		    </form>
			</div>
			</div>
			</div>
            <!-- Total Carrinho -->
			<div class="col-sm-10 col-lg-7 col-xl-8 m-lr-auto m-b-50">
			<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
			<h4 class="mtext-109 cl2 p-b-30">
			Total no carrinho
			</h4>

			<div class="flex-w flex-t bor12 margin-top">
			<div class="size-208 w-full-ssm">
			<span class="stext-110 cl2">
			Entrega:
			</span>
			</div>

			<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">					
		   <?php if ($_smarty_tpl->tpl_vars['VALOR_FRETE']->value > 0) {?>
			
			
			<p><?php echo $_smarty_tpl->tpl_vars['SERVICO']->value;?>
 <span class="mtext-110 cl2"><?php echo $_smarty_tpl->tpl_vars['REAL']->value;
echo $_smarty_tpl->tpl_vars['VALOR_FRETE']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['PRAZO']->value;?>
</p>
		
			</span>
			<?php }?>
            
            <form  method="post"> 
			<div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
			<div class="bor8 bg0">
			<select  required class="js-select2" name="servico" >
			<option value="">Selecione o tipo de envio</option>
		    <option value="SEDEX">SEDEX</option>
			<option value="PAC">PAC</option>
		    </select>
			<div class="dropDownSelect2"></div>
		    </div>
						
			<input type="hidden" name="peso_frete" id="peso_frete" value="<?php echo $_smarty_tpl->tpl_vars['PESO']->value;?>
" class="form-control " readonly>
            
			<div class="bor8 bg0 margin-top">

		    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="destino" id="cep_frete" value="<?php echo $_smarty_tpl->tpl_vars['CEP']->value;?>
" placeholder="*CEP" required>

		    <input type="hidden" name="frete_valor" id="frete_valor" value="0">

			</div>
            <?php if ($_smarty_tpl->tpl_vars['VERIFICA']->value < 8) {?>
            <div class="margin-top">
			<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['ERRO']->value;?>
</span>
		    </div>
			<?php }?>


			<?php if ($_smarty_tpl->tpl_vars['VERIFICA']->value > 9) {?>
            <div class="margin-top">
			<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['ERRO_2']->value;?>
</span>
		    </div>
			<?php }?>

			<div class="cart-cep">
			<p class="margin-bottom-30 margin-top-5">Não sabe o CEP? <a href="<?php echo $_smarty_tpl->tpl_vars['CORREIO']->value;?>
" target="_blank">Clique aqui!</a></p>
		    </div>

			<div class="flex-w">

			<button title="Atualizar total" class="flex-c-m stext-101 cl2 hov-btn3 bor13  size-119 bg8 borda btn3 p-lr-15 trans-04 pointer btn-atualizar" id="buscar_frete">Atualizar total</button>
		    </form>
			
			
			</div>
			</div>
			</div>
			</div>

			<div class="flex-w flex-t p-b-13 margin-top text-center">
			<div class="size-208">
			<span class="stext-110 cl2">
			Subtotal:
			</span>
		    </div>

			<div class="size-209">
			<span class="mtext-110 cl2">
			$<?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

			</span>
			</div>
			</div>

            <?php if ($_smarty_tpl->tpl_vars['VALOR_FRETE']->value > 0) {?>
			<div class="flex-w flex-t p-b-13 margin-top text-center">
			<div class="size-208">
			<span class="stext-110 cl2">
			Frete:
			</span>
		    </div>
            

			<div class="size-209">
			<span class="mtext-110 cl2">
			$<?php echo $_smarty_tpl->tpl_vars['VALOR_FRETE']->value;?>

			</span>
			</div>
			</div>
            
           

			<div class="flex-w flex-t p-t-27 p-b-33 text-center">
			<div class="size-208">
			<span class="mtext-101 cl2">
			Total:
			</span>
			</div>

            
			<div class="size-209 p-t-1">
			<span class="mtext-110 cl2">
			$<?php echo $_smarty_tpl->tpl_vars['TOTAL_COM_FRETE']->value;?>
 
			
			<form name="pedido_confirmar" id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">
			<input type="hidden" name="frete_radio" id="frete_radio" value="<?php echo $_smarty_tpl->tpl_vars['VALOR_USA']->value;?>
">
			
			</span>
			</div>
			</div>
			<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['VALOR_FRETE']->value > 0) {?>
             
			<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
			 Confirmar Pedido &nbsp;<i class="zmdi zmdi-check f-25" style="margin-top: -3px;"></i>
			</button>
		    </form>
		    <?php } else { ?>
		    <div class="txt-center margin-top">
		    <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['ERRO_3']->value;?>
</span>
		    </div>
		    <?php }?>
			</div>
			</div>
			</div>
		</div>
		<?php }
}
}
