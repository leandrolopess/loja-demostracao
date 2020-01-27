<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-27 01:34:11
  from 'D:\xampp\htdocs\loja_adaptada\view\pedido_retorno_erro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dddeeb391bda8_02748509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c42041fa566e6be11319b6c8ca484062d709fc7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\view\\pedido_retorno_erro.tpl',
      1 => 1574825648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dddeeb391bda8_02748509 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
<h3 class="text-center text-danger margin-top"> Ocorreu um problema no pagamento</h3>

<section  class="row">
    
    <div class="col-sm-3"></div>
    <div class="col-sm-6 box padding-20 margin-top margin-bottom text-center">
        
          <h4 class="mtext-105 cl2"> Caso teve algum problema entre em contato conosco, informando o seguinte código de referência:<b> <?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
 191126161138143</b>
        </h4> 
        
         <h4 class="mtext-105 cl2">você também pode fazer o pagamento na seção "Pedidos" e depois clicando em "Detalhes", onde você verá seus itens comprados e abaixo o botão "Completar Pagamento Agora".
        </h4>  
        
         <h4 class="mtext-105 cl2"> Para ir a tela do pedido e efetivar o pagamento, clique no botão abaixo.</h4>  
         
         <form name="pagamento" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
         <input type="hidden" name="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
">  
         <button class="btn btn-success btn-block btn-lg margin-top"> Fazer Pagamento Agora</button>
                  
         </form>          
         
         
    </div>
    <div class="col-sm-3"></div>
      
</section>
</div><?php }
}
