<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-11 15:33:28
  from 'D:\xampp\htdocs\vanuza\add\view\add_banners.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df1286866cc82_11371080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37a3f726260e11f4263efe993040696436051312' => 
    array (
      0 => 'D:\\xampp\\htdocs\\vanuza\\add\\view\\add_banners.tpl',
      1 => 1576085605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1286866cc82_11371080 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
  <div class="row">
    <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 margin-top margin-left p-lr-0-lg">
      <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADD']->value;?>
" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>
      <span class="stext-109 cl4">
        <i class="fa fa-image"></i> Banners
      </span>
    </div>

  <div class="col-md-12 text-center"> 
   <h1 class="cl2 text-center"><i class="fa fa-image mt-3"></i> Banners
   </h1>
   <p class="mt-3 mtext-105 f-20">Adicione aqui os banners com suas novidades e promoções <br>para que assim que seus clientes entrarem no site fiquem por dentro de todas as novas da loja. </p>
   <hr>

  <!-- Conteúdo -->
<section class="row "> 

<!-- <div class="col-md-12 text-center margin-top"> -->

     <!-- <div class="flex-w flex-c-m m-tb-10">
          <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
            <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
             Filtro
          </div>

          <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
            <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
            <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
            Buscar
          </div>
        </div> -->
        
        <!-- Busca -->
        <!-- <div class="dis-none panel-search w-full p-t-10 p-b-15">
          <div class="bor8 dis-flex p-l-15">
            <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
              <i class="zmdi zmdi-search"></i>
            </button>

            <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Buscar">
          </div>  
        </div> -->

        <!-- Filtros -->
        <!-- <div class="dis-none panel-filter w-full p-t-10 margin-bottom">
          <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
            <div class="filter-col1 p-r-15 p-b-27"> 
              <div class="mtext-102 cl2 p-b-15">
                Buscar por subcategoria
              </div>
              
               <label>Subcategoria</label>
              <div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
                <div class="bor8 bg0 size-116">
                <select  required class="js-select2" name="pro_categoria" onchange="javascript:handleSelect(this)">
                <option value=""> MASCULINO </option> 
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>                    
                  <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link_adm'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</option>                
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   <option value=""> FEMININO </option>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASFE']->value, 'F');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['F']->value) {
?>                    
                  <option value="<?php echo $_smarty_tpl->tpl_vars['F']->value['cate_link_adm'];?>
"><?php echo $_smarty_tpl->tpl_vars['F']->value['cate_nome'];?>
</option>                
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  <option value=""> INFANTIL </option>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASIN']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>                    
                  <option value="<?php echo $_smarty_tpl->tpl_vars['I']->value['cate_link_adm'];?>
"><?php echo $_smarty_tpl->tpl_vars['I']->value['cate_nome'];?>
</option>                
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  <option value=""> BOLAS </option>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIASBO']->value, 'B');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['B']->value) {
?>                    
                  <option value="<?php echo $_smarty_tpl->tpl_vars['B']->value['cate_link_adm'];?>
"><?php echo $_smarty_tpl->tpl_vars['B']->value['cate_nome'];?>
</option>                
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                <div class="dropDownSelect2"></div>
                </div>     
                </div>
                </div> -->
             

            <!-- <div class="filter-col2 p-r-15 p-b-27">
              <div class="mtext-102 cl2 p-b-15">
                Buscar por referência
              </div>
              
              <div class="row">
                <div class="col-md-12">
                  <form name="buscarrefcod" method="post" action=""> 
                  <label>Referência</label>
                  <input type="text" name="txt_ref" class="bor8 bg0 size-116 text-center" required 
                  style="width: 80%;margin-left: 15%;">
                </div> -->

                <!-- <div class="col-md-12 margin-top">
                  <button class="btn btn-success"> Buscar </button> 
                </div> -->
              
             <!--  </div>
            </form>
            </div>

          </div>
        </div>

        </div> -->


 <div class="col-md-4"></div>
    <div class="col-md-4 margin-bottom">  
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADICIONAR_BANNER']->value;?>
" class="btn btn-success"> <i class="fa fa-plus"></i> Novo Banner</a>
    </div>
    <div class="col-md-4"></div>

</section>

  <div class="table-responsive">
   <table class="table table-hover">
     <thead>
       <tr>
         <th class="text-center" style="border-left: 1px solid #e9ecef;border-right:1px solid #e9ecef;">Imagem</th>
         <th class="text-center" style="border-right: 1px solid #e9ecef;">Titulo</th>
         <th class="text-center" style="border-right: 1px solid #e9ecef;">Descrição</th>
          <th class="text-center" style="border-right: 1px solid #e9ecef;">Ordem</th>
         <th class="text-center" style="border-right: 1px solid #e9ecef;">Editar</th>
         <!-- <th class="text-center" style="border-right: 1px solid #e9ecef;">Apagar</th> -->
       </tr>
     </thead>
     <tbody>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BANNERS']->value, 'B');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['B']->value) {
?>
       <tr>
        <td style="width:10%;" class="text-center">
        <form name="proeditar" method="get" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_EDITAR']->value;?>
">
        <input type="hidden" name="pro_id" id="pro_id" value="">
        <button><img src="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/media/banners/<?php echo $_smarty_tpl->tpl_vars['B']->value['banner_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['B']->value['banner_titulo'];?>
" width="100px"></button>
        </form>
        </td>

        <td style="width:20%;">
        <?php echo $_smarty_tpl->tpl_vars['B']->value['banner_titulo'];?>

        </td>

        <td style="width:40%;" class="text-left">
        <?php echo $_smarty_tpl->tpl_vars['B']->value['banner_descricao'];?>

        </td>

        <td style="width:10%;" class="text-center"><?php echo $_smarty_tpl->tpl_vars['B']->value['banner_ordem'];?>

        </td>

        <td style="width:10%;" class="text-center">
        <form name="proeditar" method="get" action="<?php echo $_smarty_tpl->tpl_vars['PAG_BANNER_EDITAR']->value;?>
">
        <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['B']->value['banner_id'];?>
">
        <button> <i class="fa fa-pencil"></i> </button>
        </form>  
        </td>

        <!-- <td style="width:10%;" class="text-center">
        <form name="proeditar" method="get" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_IMG']->value;?>
">
        <input type="hidden" name="pro_id" id="pro_id" value="">
        <button> <i class="fa fa-trash"></i></button>
        </form>
       </td> -->

       </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

     </tbody>
   </table>
 </div>




  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->

<?php echo '<script'; ?>
 type="text/javascript">
function handleSelect(elm)
{
window.location = elm.value+"?p=1";
}
<?php echo '</script'; ?>
><?php }
}
