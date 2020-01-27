<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-12 16:06:42
  from 'D:\xampp\htdocs\loja_adaptada\view\cliente_perfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dcaf4b257ba81_49264512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bf0aaf748ffb686820f9ba4c5a5191efeca431f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\view\\cliente_perfil.tpl',
      1 => 1573581999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user-profile/sidebar.tpl' => 1,
  ),
),false)) {
function content_5dcaf4b257ba81_49264512 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
	<div class="container-fluid">
		<div class="row">
    <div class="col-md-3">
        <?php $_smarty_tpl->_subTemplateRender("file:user-profile/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
     
    <div class="col-md-9 content-perfil">
<h1 class="mtext-105 cl2 p-b-15 f-20">Perfil</h1>
<h2 class="f-18">Aqui você pode mudar seu nome de usuário e sua foto de perfil</h2>
    <hr>

     <form name="cadcliente" id="cadcliente" method="post" action="">
    <section class="row-negativo box padding-20 container margin-top-30" class="mudar-dados" id="cadastro">
        
        
        <div class="col-md-8">
          <label>Nome de usúario</label>
        <div class="bor8 m-b-20 how-pos4-parent">
    <input title="* Nome de usúario" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_user_name" minlength="2" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" required>
      </div>
        </div>

        <div class="col-md-4">
          <label>Foto</label>
        <div class="user-profile">
      <?php if ($_smarty_tpl->tpl_vars['IMG']->value) {?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/media/img/<?php echo $_smarty_tpl->tpl_vars['IMG']->value;?>
" alt="Usuário">
      <?php } else { ?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
/media/img/sem-foto.jpg" alt="Usuário">
      <?php }?>
      </div>
      <input type="file" name="" class="margin-top">
        </div>

    
    </section>
    </form>	

    </div>

     </div>
    </div>  
</section><?php }
}
