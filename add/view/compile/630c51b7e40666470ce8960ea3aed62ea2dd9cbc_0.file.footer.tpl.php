<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-19 00:29:07
  from 'D:\xampp\htdocs\loja_adaptada\add\view\inc\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dd35373127d78_42180904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '630c51b7e40666470ce8960ea3aed62ea2dd9cbc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\add\\view\\inc\\footer.tpl',
      1 => 1572458366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd35373127d78_42180904 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Rodapé -->
<footer class="text-center">Copyright &copy; <?php echo '<?php ';?>
echo date('Y');<?php echo '?>';?>
</footer>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/adicionais.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/all.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/js/custom.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
