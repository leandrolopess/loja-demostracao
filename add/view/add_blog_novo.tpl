 <script src="{$GET_TEMA}/assets/js/ckeditor-full/ckeditor.js"></script> 
 <div class="container-fluid">
  <!-- breadcrumb -->
    <div class="bread-crumb flex-w p-l-25 p-r-15 margin-top p-lr-0-lg">
      <a href="{$GET_SITE_ADD}" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-tachometer"></i> Painel de controle
        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
      </a>

      <a href="{$PAG_BLOG}" class="stext-109 cl8 hov-cl1 trans-04">
        <i class="fa fa-newspaper-o"></i> Blog
      </a>

    </div>

  <div class="col-md-12 margin-top"> 
   <h1 class="cl2 mtext-105"> <i class="fa fa-plus"></i> Adicionar novo post
   </h1>
   {$SUCESSO}{$ERRO}
<!-- Row Principal -->
<div class="row">
<!--  Col Conteúdo -->
<div class="col-sm-12 col-md-8 col-lg-8">
<div class="box padding-20 margin-top margin-bottom">
<form name="frm_blog" method="post" action=""  enctype="multipart/form-data">

<section class="row" id="camposblog">
  
        <div class="col-md-12">
        <p class="margin-bottom pull-right red">* Todos os campos são obrigatórios</p> 
        </div>
        
        <div class="col-md-12"> 
        <i class="fa fa-info-circle pull-right" data-toggle="tooltip" data-placement="top" title="Adicione aqui o nome do produto" style="position: relative;left:-25px"></i> 
         <label>Titulo</label>
        <div class="bor8 m-b-20 how-pos4-parent">
      <input title="* Titulo do post" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text"  name="blog_titulo" placeholder="* Titulo do post" required>
      </div>
        </div>

        <div class="col-12">
      <label>Conteúdo</label>
     <div class="m-b-30">
      <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25 no-resize" name="blog_descricao" id="blog_descricao" placeholder="Conteúdo do post" required></textarea>
      <script> 
      CKEDITOR.replace( 'blog_descricao' );
      </script>
          
      </div>
      </div>
       
      </div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="box padding-20 margin-top margin-bottom">
         <div class="col-12">
         {$AVISO}
         </div>

        <div class="col-md-12"> 
          <label>Imagem destacada</label>
        <div class="bor8 m-b-20 how-pos4-parent">

      <input type="file" name="blog_img" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30  relative top-15 text-center inputfile" id="blog_img" required onchange="previewImagemBlog()">

       <div class="text-center preview-blog">
       <label for="blog_img"><img name="preview_blog" style="width:100%;" class="padding-20"></label>
       </div>
       
        <label for="blog_img"><h5 class="text-center">600x500</h5></label>

      <label for="blog_img"><h5 class="text-center">Adicionar Imagem<br>
        <i class="fa fa-upload margin-top"></i></h5></label>

      </div>
        </div>


        <div class="col-md-12">
         <label>Categoria</label>
        <div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
      <div class="bor8 bg0 size-116">
      <select  required class="js-select2" name="blog_categorias" >
      <option value=""> Selecione a categoria </option> 
        {foreach from=$CATEGORIAS item=C}                    
        <option value="{$C.cateblog_nome}">{$C.cateblog_nome}</option>                
        {/foreach}
        </select>
      <div class="dropDownSelect2"></div>
      </div>     
      </div>
        </div>

        <div class="col-md-12">
      <label>Mostrar no site</label>
      <div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
      <div class="bor8 bg0 size-116">
      <select  required class="js-select2" name="blog_status">
      <option value=""> Escolha </option>
      <option value="publicado"> Sim </option> 
      <option value="NAO"> Não </option>
      </select>
      <div class="dropDownSelect2"></div>
      </div>     
      </div>
      </div>

     
        <div class="col-12"> 
          <button type="submit" class="botao btn-login" name="btn_gravar"> <i class="zmdi zmdi-check f-25" style="position:relative;top:3px;"></i> Gravar </button>
      </div>
        </div>

        
      </div>
    </div>
     </form> 
      </section>

  </div><!--/Col 12-->
 </div><!--/Row-->
</div><!--/Container-->
