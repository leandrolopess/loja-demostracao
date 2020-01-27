<!DOCTYPE html>

<html>
    <head>
        <title>Login </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="{$GET_TEMA}/assets/login/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="{$GET_TEMA}/assets/login/js/jquery-2.2.1.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMA}/assets/login/js/bootstrap.min.js" type="text/javascript"></script>
        
        <!-- meu aquivo pessoal de CSS-->
        <link href="{$GET_TEMA}/assets/login/css/tema.css" rel="stylesheet" type="text/css"/>
        <link href="{$GET_TEMA}/assets/login/css/efeitos.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    
    </head>
    <body style="background-color: #d7dcf8">
        
        <section class="container" >
            
            <section class="row">
                
                <div class="col-md-4"></div>    
               
                <div class="col-md-4 thumbnail" id="bloco_login_adm">
                 
                    <img src="{$GET_TEMA}/assets/images/icons/logo.png" class="logo">
                   
                    <div class="mt-20">
                    <form name="login" method="post" action="" class="{$SHAKE}">
                         {$ERRO}{$SUCESSO}
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

                    <a href="{$HOME}" class="btn btn-info"> Ir para Loja </a>
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
        <script src="{$GET_TEMA}/assets/login/js/adicionais.js" type="text/javascript"></script>
    </body>
</html>

