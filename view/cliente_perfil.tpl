<section>
	<div class="container-fluid">
		<div class="row">
    <div class="col-md-3">
        {include file="user-profile/sidebar.tpl"}
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
    <input title="* Nome de usúario" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="cli_user_name" minlength="2" value="{$USERNAME}" required>
      </div>
        </div>

        <div class="col-md-4">
          <label>Foto</label>
        <div class="user-profile">
      {if $IMG}
      <img src="{$GET_HOME}/media/img/{$IMG}" alt="Usuário">
      {else}
      <img src="{$GET_HOME}/media/img/sem-foto.jpg" alt="Usuário">
      {/if}
      </div>
      <input type="file" name="" class="margin-top">
        </div>

    
    </section>
    </form>	

    </div>

     </div>
    </div>  
</section>