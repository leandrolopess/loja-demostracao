<?php
/* Smarty version 3.1.33, created on 2019-10-10 05:23:25
  from 'D:\xampp\htdocs\loja\view\finalizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9ea42de74577_29381302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50d198b21dfc3a731f157534a71e2eacc699a114' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja\\view\\finalizar.tpl',
      1 => 1570676941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9ea42de74577_29381302 (Smarty_Internal_Template $_smarty_tpl) {
?>		<!-- Finalizar Pedido -->
		<div class="container-fluid">
		<div class="row">

		<div class="col-lg-10 col-xl-8 m-lr-auto m-b-50">
		<div class="alert alert-success text-center">Pedido Finalizado com Sucesso
		</div>
		<div class="page-title">
		<h1>Seu Pedido</h1> 
		</div>

	    <div id="order_review" class="woocommerce-checkout-review-order">
		<table class="table table-bordered" style="width:50%;margin-left:25%;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        <tr>
        <td class=""><img width="80" height="80" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" class="#" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"/></td> 
        <td class=""><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
 x <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 - <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>  
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
       </table>

            <!-- Voltar para o carrinho 
			<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" style="margin-top:5px;margin-left:25%;margin-bottom:15px;" class="continuar-btn margin-bottom">Voltar para o Carrinho</a>
		    -->
            <!-- Tabela Total -->
			<table cellspacing="0" class="shop_table3 shop_table_responsive">
            <!-- Subtotal -->
			<tr style="text-align: center;" class="cart-subtotal">
			<th style="text-align: center;">Total</th>
			<td  data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span><?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</span>
			</td>
			</tr>
			<!-- Frete -->
			<tr style="text-align: center;" class="cart-subtotal">
			<th style="text-align: center;">Frete</th>
			<td  data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;<?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
</span></span>
			</td>
			</tr>
            <!-- Total -->
			<tr style="text-align:center;" class="order-total">
			<th style="text-align: center;">Total do Pedido</th>
			<td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#82;&#36;</span><?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</span></strong> 
			</td>
			</tr>	
			</table>
		    </div>

            <!-- Formas de pagamento -->
            <h3 class="text-center margin-bottom"> Formas de pagamento </h3>
		    <div class="pagamento text-center">
		    
            <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/pag/logo-pagseguro.png"  alt=""> 
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>
           
           
            
            <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/pag/deposito.gif"  alt="">  
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PS_SCRIPT']->value;?>
"><?php echo '</script'; ?>
>-->
           
            </div>
			
			</div>
			</div>
	        </div>
            
          
           	
	        


		
	
	
    <?php }
}
