<?php
/* Smarty version 3.1.33, created on 2019-10-23 01:42:23
  from 'D:\xampp\htdocs\loja_adaptada\view\email_cliente_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daf93df994415_15496308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dad647e8d66f1013e7aa08f6ad85a9c180987ad' => 
    array (
      0 => 'D:\\xampp\\htdocs\\loja_adaptada\\view\\email_cliente_cadastro.tpl',
      1 => 1571783966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5daf93df994415_15496308 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 , obrigado por se cadastrar na <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
.</h3>

<h3> Para fazer  o login use seu email cadastrado ou nome de usuário
<br>
com a senha ( <?php echo $_smarty_tpl->tpl_vars['SENHA']->value;?>
 ).
<br>Após acessar sua conta você pode mudar sua senha acessando a aréa <a href="#">mudar senha</a>.

</h3>
<h3>
Para acessar o site e sua conta basta acessar <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
">Fazer Login</a>
    
</h3><?php }
}
