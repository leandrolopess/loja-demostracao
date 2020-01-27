<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-26 20:36:27
  from 'D:\xampp\htdocs\loja_adaptada\view\pedido_retorno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ddda8eb34bf78_01959931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edabc0f42e639c4641d22d13d0b80e346188918c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\view\\pedido_retorno.tpl',
      1 => 1574801428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddda8eb34bf78_01959931 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
<h3 class="text-center azul"> Obrigado pela sua compra na <?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
 </h3>
<section class="row">
    
    <div class="col-3"></div> 
    <div class="col-sm-6 box margin-bottom margin-top padding-20 text-center">
    <h4> Informações do pagamento </h4>
    <p> <b>Código da transação:</b> <?php echo $_smarty_tpl->tpl_vars['CODIGO']->value;?>
</p>
    <p> <b>Referencia:</b> <?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
</p>
    <p> <b>Status do pagamento:</b> <?php echo $_smarty_tpl->tpl_vars['PAGO']->value;?>
</p>
    <p> <b>Forma do pagamento: </b><?php echo $_smarty_tpl->tpl_vars['FORMA_PAG']->value;?>
</p>
                        
    <form name="pagamento" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
    <input type="hidden" name="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
">  
    <button class="btn bg-azul branco btn-block btn-lg margin-top"> Detalhes do pedido</button>

    </form>        
   
    </div> 
    <div class="col-sm-3"></div> 
    
</section>
</div>
<?php }
}
