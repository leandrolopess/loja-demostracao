<?php
/* Smarty version 3.1.33, created on 2019-11-09 20:29:37
  from '/home/vol11_7/epizy.com/epiz_22059887/htdocs/loja_adaptada/view/produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc73dd15f6972_03191274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2ba98b73649ffe0d351a27e8cdbcb3aac441358' => 
    array (
      0 => '/home/vol11_7/epizy.com/epiz_22059887/htdocs/loja_adaptada/view/produtos.tpl',
      1 => 1573067294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc73dd15f6972_03191274 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bg0 m-t-23 p-b-140">
    <div class="container">
  
          <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
          <h4 class="text-center">Nenhum produto encontrado!!</h4>
          <?php }?>

          <div class="row">
       <div class="col-md-12" id="main">

        <ul class="produtos p-b-35 isotope-item"> 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
          <!-- Produto -->
          <li class="block2 col-12 col-md-3">
            <!-- Imagem do produto -->
            <div class="block2-pic hov-img0">
              <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"></a>
            </div>

            <div class="block2-txt flex-c flex-t p-t-14 margin-bottom margin-left-10">
              <div class="block2-txt-child1 flex-col-l ">
                <!-- Nome do produto -->
                <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>

                </a>
                <!-- Valor do produto -->
                <span class="stext-105 cl3">
                  R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>

                </span>
              </div>
            
            </div>

          </li>   
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     </ul>

      <!-- Carregar mais produtos -->
      <div id="pagination">
         <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

          </div>
        </div>
      </div>
    </div>
  </div>
<?php }
}
