<!-- Sidebar -->
<div class="user-profile margin-top relative left-10">
	{if $IMG}
<img src="{$GET_HOME}/media/img/{$IMG}" alt="Usuário">
{else}
<img src="{$GET_HOME}/media/img/sem-foto.jpg" alt="Usuário">
{/if}
<p>{$USER}</p>
<br><a href="{$PAG_LOGOFF}">Sair</a>
</div>
<div class="list-group margin-bottom-50 margin-top-negativo-65 side">
<li></li>
<li><a href="{$PAG_MINHACONTA}" class="list-group-item stext-115 cl6">
Painel <i class="f-20 azul fa fa-tachometer"></i>
</a></li>
<li><a href="{$PAG_CLIENTE_PERFIL}" class="list-group-item stext-115 cl6">
Perfil <i class="f-20 azul fa fa-user"></i>
</a></li>
<li><a href="{$PAG_CLIENTE_FAVORITOS}" class='list-group-item stext-115 cl6'> Favoritos  <i class="f-20 azul fa fa-heart"></i></a></li>
<li><a href="{$PAG_CLIENTE_PEDIDOS}" class="list-group-item stext-115 cl6">
 Pedidos <i class="f-20 azul fa fa-shopping-cart"></i>
</a></li>
<li><a href="{$PAG_CLIENTE_DADOS}" class="list-group-item stext-115 cl6"> Detalhes da Conta <i class="f-20 azul fa fa-edit"></i></a></li>
<li><a href="{$PAG_CLIENTE_SENHA}" class="list-group-item stext-115 cl6"> Trocar Senha <i class="f-20 azul fa fa-lock"></i></a></li>
<li><a href="{$PAG_LOGOFF}" class="list-group-item stext-115 cl6"> Sair <i class="f-20 azul fa fa-power-off"></i></a></li>
</div>



