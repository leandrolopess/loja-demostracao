<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-16 03:47:16
  from 'D:\xampp\htdocs\loja_adaptada\view\cliente_favoritos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dcf8d646b3e63_82817286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4810292cea9408860afd5910e7786be298f42b36' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\view\\cliente_favoritos.tpl',
      1 => 1573883231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user-profile/sidebar.tpl' => 1,
  ),
),false)) {
function content_5dcf8d646b3e63_82817286 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
	<div class="container-fluid">
		<div class="row">
    <div class="col-md-3">
        <?php $_smarty_tpl->_subTemplateRender("file:user-profile/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="col-md-9 content-pedidos">
    <h1 class="mtext-105 cl2 p-b-15 f-20">Meus Favoritos</h1>
    <h2 class="f-18">Aqui você encontra seus produtos favoritos</h2>
    <hr>
    <?php echo $_smarty_tpl->tpl_vars['ERRO']->value;?>


      <?php if ($_smarty_tpl->tpl_vars['TOTAL_FAVORITOS']->value > 0) {?>
  <div class="col-md-12 box padding-20">
    <div class="row">
 
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FAVORITOS']->value, 'F');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['F']->value) {
?>
    
               
     <div class="col-4 col-sm-2">
      <form name="produto" method="post" action="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/produto/<?php echo $_smarty_tpl->tpl_vars['F']->value['fav_produto_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['F']->value['pro_slug'];?>
">
       <button>
      <img style="width:80px;height:80px;" src="<?php echo $_smarty_tpl->tpl_vars['F']->value['pro_img'];?>
">
      <input type="hidden" name="produto_id" value="<?php echo $_smarty_tpl->tpl_vars['F']->value['fav_produto_id'];?>
">
    </button>
        </form>
    </div>
    <div class="col-4">
      <form name="produto" method="post" action="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/produto/<?php echo $_smarty_tpl->tpl_vars['F']->value['fav_produto_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['F']->value['pro_slug'];?>
">
      <button class="stext-102">
      <?php echo $_smarty_tpl->tpl_vars['F']->value['pro_nome'];?>

      <input type="hidden" name="produto_id" value="<?php echo $_smarty_tpl->tpl_vars['F']->value['fav_produto_id'];?>
">
    </button>
    </form>
    <span class="stext-102">R$ <?php echo $_smarty_tpl->tpl_vars['F']->value['pro_valor'];?>
</span>
    </div>
    <div class="col-4">
      <div class="dropdown pull-right">
  <button class="btn bg-azul branco dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-bars"></i>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item stext-102" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/produto/<?php echo $_smarty_tpl->tpl_vars['F']->value['fav_produto_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['F']->value['pro_slug'];?>
">Ver produto </a>
    <form name="frm_apagar" method="post" action="">
              
    <input type="hidden" name="pro_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['F']->value['fav_id'];?>
">
    <input type="hidden" name="pro_apagar" value="">
    <!---botao que apagar o produto de uma vez -->
    <button class="dropdown-item stext-102" name="btn_apagar"> Excluir </button> 
         
    </form>
    
  </div>
</div>
</div>

<div class="col-12 border-bottom margin-bottom margin-top"></div>


   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   


 </div>
<div class="text-right">
  <h5 class="stext-102 cl6 f-18">Total de favoritos: <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</h5>
</div>
</div>

<div class="flex-c-m flex-w w-full p-t-45 margin-bottom">
         <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

        
      </div>

<?php } else { ?>
<div class="col-xl-9">
<div class="woo-info">
<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">Ir às compras</a>
<div class="margin-left-30 margin-top-negativo-22"> Você não tem nem um favorito ainda :(</div>
</div>
</div>
<?php }?>

</div>
</div>
</div>  
</section><?php }
}
