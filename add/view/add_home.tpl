<div class="container-fluid">
  <div class="row">
  <div class="col-md-12 text-center margin-top"> 
   <h1 class="cl2 text-center"><i class="fa fa-tachometer"></i> Painel de Controle </h1> 
   <h2 class="mt-1 mtext-105 f-20">Bem vindo, {$USER} {$SOBRENOME}</h2>
   <div class="mt-3">
  <a href="{$SENHA}" class="btn btn-warning"><i class="fa fa-lock"></i> Mudar Senha</a>
  <a href="{$LOGOFF}" class="btn btn-danger"><i class="fa fa-power-off"></i> Sair</a> 
   </div>
   <hr>
  <!-- Conteúdo -->
<div class="row tag-boxes">
<!-- Painel Produtos -->
<div class="col-md-6 col-lg-4">
<div class="panel panel-primary">
<div class="panel-heading">
<div class="row">
<div class="col-xs-3 col-lg-3">
<a href="{$PAG_PRODUTOS}"><i class="fa fa-tag white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a  class="white" href="{$PAG_PRODUTOS}">Produtos</a></div>
</div>
</div>
</div>
<a href="{$PAG_PRODUTOS}">
<div class="panel-footer blue">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fa fa-arrow-circle-right"></i></span>
</div>
</a>
</div>
</div>

<!-- Painel Clientes -->
<div class="col-md-6 col-lg-4">
<div class="panel panel-red">
<div class="panel-heading">
<div class="row">
<div class="col-xs-3 col-lg-3 panel-red">
<a href="{$PAG_CLIENTES}"><i class="fa fa-users white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a style="color:#FFF;" class="white" href="{$PAG_CLIENTES}">Clientes</a></div>
</div>
</div>
</div>
<a href="{$PAG_CLIENTES}">
<div class="panel-footer">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fa fa-arrow-circle-right"></i> </span>
</div>
</a>
</div>
</div>

<!-- Painel Subcategorias -->
<div class="col-md-6 col-lg-4">
<div class="panel panel-yellow">
<div class="panel-heading">
<div class="row">
<div class="col-xs-3 col-lg-3">
<a href="{$PAG_SUBCATEGORIAS}"><i class="fa fa-list white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a style="color:#FFF;" class="white" href="{$PAG_SUBCATEGORIAS}">Subcategorias</a></div>
</div>
</div>
</div>
<a href="{$PAG_SUBCATEGORIAS}">
<div class="panel-footer">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fa fa-arrow-circle-right"></i> </span>
</div>
</a>
</div>
</div>

<!-- Painel Pedidos -->
<div class="col-md-6 col-lg-4">
<div class="panel panel-purple">
<div class="panel-heading">
<div class="row">
<div class="col-xs-3 col-lg-3">
<a href="{$PAG_PEDIDOS}"><i class="fa fa-file-text white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a style="color:#FFF;" class="white" href="{$PAG_PEDIDOS}">Pedidos</a></div>
</div>
</div>
</div>
<a href="{$PAG_PEDIDOS}">
<div class="panel-footer">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fa fa-arrow-circle-right"></i> </span>
</div>
</a>
</div>
</div>

<!-- Painel Blog -->
<div class="col-md-6 col-lg-4">
<div class="panel panel-green">
<div class="panel-heading">
<div class="row">
<div class="col-xs-3 col-lg-3">
<a href="{$PAG_BLOG}"><i class="fa fa-newspaper-o white" style="font-size: 80px;"></i></a>
</div>
<div class="col-xs-9 col-lg-9">
<div class="text-right huge"><a style="color:#FFF;" class="white" href="{$PAG_BLOG}">Blog</a></div>
</div>
</div>
</div>
<a href="{$PAG_BLOG}">
<div class="panel-footer">
<span class="pull-left">Editar</span>
<span class="pull-right icon-arrow"><i class="fa fa-arrow-circle-right"></i> </span>
</div>
</a>
</div>
</div>




</div>
  
</div><!--/Col 12-->
</div><!--/Row-->
</div><!--/Container-->
