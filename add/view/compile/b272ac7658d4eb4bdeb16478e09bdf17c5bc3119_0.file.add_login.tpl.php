<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-22 20:41:50
  from 'D:\xampp\htdocs\vanusa\add\view\add_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dfff12ed098b5_03777257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b272ac7658d4eb4bdeb16478e09bdf17c5bc3119' => 
    array (
      0 => 'D:\\xampp\\htdocs\\vanusa\\add\\view\\add_login.tpl',
      1 => 1574650868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfff12ed098b5_03777257 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>
    <head>
        <title>Login </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/login/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/login/js/jquery-2.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/login/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        
        <!-- meu aquivo pessoal de CSS-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/login/css/tema.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/login/css/efeitos.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    
    </head>
    <body style="background-color: #d7dcf8">
        
        <section class="container" >
            
            <section class="row">
                
                <div class="col-md-4"></div>    
               
                <div class="col-md-4 thumbnail" id="bloco_login_adm">
                 
                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/images/icons/logo.png" class="logo">
                   
                    <div class="mt-20">
                    <form name="login" method="post" action="" class="<?php echo $_smarty_tpl->tpl_vars['SHAKE']->value;?>
">
                         <?php echo $_smarty_tpl->tpl_vars['ERRO']->value;
echo $_smarty_tpl->tpl_vars['SUCESSO']->value;?>

                        <input type="text" name="txt_email" class="form-control" required autocomplete="off" placeholder="Email ou nome de usúario">
                        
                        <div class="mt-15">
                        <input type="password" name="txt_senha" class="form-control visi-pass2"  required placeholder="Senha">
                        <i toggle=".visi-pass2" class="fa fa-fw fa-eye-slash field-icon toggle-password f-20 pull-right" style="position:relative;top:-25px;right:30px;"></i>
                        </div>
                        
                        <button class="btn btn-success btn-block btn-lg mt-20" name="txt_logar" value="txt_logar"> Entrar </button>
                        <br>
                                                
                    </form>
                    </div>
                    <!-- botão senha recovery -->
               
                    <center><button class="btn btn-warning" data-toggle="collapse" data-target="#recovery"> Esqueci a senha </button>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
" class="btn btn-info"> Ir para Loja </a>
                    </center>
                    
                    <div class="alert alert-danger collapse mt-20 text-center" id="recovery">
                    
                        <form name="recovery" method="post" action="">
                            <label>Digite seu email </label>
                            <input type="email" name="txt_email" class="form-control mt-10" required>
                          
                        <button class="btn btn-success mt-15" name="recovery" value="recovery">Solicitar senha</button>
                        </form> 
                        
                    </div>
                    
                </div>    
              
                <div class="col-md-4"></div>    
            </section>  
           </section>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/assets/login/js/adicionais.js" type="text/javascript"><?php echo '</script'; ?>
>
    </body>
</html>

<?php }
}
