<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>{$TITULO_SITE} - {$PAGINA}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
   
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="{$GET_TEMA}/assets/images/icons/favicon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/vendor/slick/slick.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/css/efeitos.css">
    <!-- Carrinho -->
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/css/cart-1.css">
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/css/cart-3.css">
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/css/cart-4.css">
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/css/cart-5.css">

  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/css/woo.css">
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/add/css/panel.css">
  <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/assets/add/css/style.css">

<!--===============================================================================================-->
</head>
<!-- Header -->
  <header class="header-v2 border-bottom">
    <!-- Header desktop -->
    <div class="container-menu-desktop trans-03">
      <div class="wrap-menu-desktop">
        <nav class="limiter-menu-desktop p-l-45">
          
          <!-- Logo desktop -->   
          <a href="{$GET_SITE_ADD}" class="logo">
            <img src="{$GET_TEMA}/assets/images/icons/logo.png" alt="IMG-LOGO">
          </a>

          <!-- Menu desktop -->
          <div class="menu-desktop">
          <ul class="main-menu">        
            
          <li>
          <a href='#'><i class="fa fa-home mt-3"></i> Site</a>
          <ul style="z-index:1000;" class='sub-menu'>
          <li>
          <a href="{$GET_SITE_HOME}" style="text-transform:capitalize;" target="_blank">Visitar site</a>
          </li>
          <li>
          <a href="{$PAG_BANNERS}" style="text-transform:capitalize;">Banners</a>
          </li>
          <li>
          <a href="{$PAG_LOJAS}" style="text-transform:capitalize;">Lojas</a>
          </li>
          </ul>
          </li>

          <li>
          <a href='{$PAG_PRODUTOS}'><i class="fa fa-tag mt-3"></i> Produtos</a>
          <ul style="z-index:1000;" class='sub-menu'>
          <li>
          <a href="{$PAG_PRODUTOS}" style="text-transform:capitalize;">Todos Produtos</a>
          </li>
          <li>
          <a href="{$PAG_PRODUTO_NOVO}" style="text-transform:capitalize;">Adicionar Novo</a>
          </li>
          </ul>
          </li>

          <li>
          <a href='{$PAG_CLIENTES}'><i class="fa fa-users mt-3"></i> Clientes</a>
          </li>

          <li><a href="{$PAG_SUBCATEGORIAS}"><i class="fa fa-list mt-3"></i> Subcategorias</a>
          </li>

          <li><a href="{$PAG_PEDIDOS}?p=1"><i class="fa fa-file-text mt-3"></i> Pedidos</a>
          </li>

          <li>
          <a href="{$PAG_BLOG}"><i class="fa fa-newspaper-o mt-3"></i> Blog</a>
          

          <ul style="z-index:1000;" class='sub-menu'>
          <li>
          <a href="{$PAG_BLOG}" style="text-transform:capitalize;">Todos Posts</a>
          </li>
          <li>
          <a href="{$PAG_BLOG_NOVO}" style="text-transform:capitalize;">Novo Post</a>
          </li>
          <li>
          <a href="{$PAG_BLOG_CATEGORIAS}" style="text-transform:capitalize;"> Categorias</a>
          </li>
          </li>
          </ul>


          </ul>
          </div>

          <!-- Icon header -->
          <div class="wrap-icon-header flex-w flex-r-m h-full">
            
            
            <!-- <div class="flex-c-m h-full p-l-18 bor5">
              <div class="icon-header-item cl2 hov-cl1 trans-04">
                <a href="{$PAG_MINHACONTA}"><i class="f-35 zmdi zmdi-account margin-top-negativo"></i>
                </a>
              </div>
            </div> -->
              
            <!-- <div class="flex-c-m h-full p-lr-19">
              <div class="icon-header-item cl2 hov-cl1 trans-04 js-show-sidebar">
                <i class="zmdi zmdi-menu f-30"></i>
              </div>
            </div> -->
          </div>
        </nav>
      </div>  
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
      <!-- Logo moblie -->    
      <div class="logo-mobile">
        <a href="{$GET_SITE_ADD}"><img src="{$GET_TEMA}/assets/images/icons/logo.png" alt="IMG-LOGO"></a>
      </div>

      
      <!-- Button show menu -->
      <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </div>
    </div>

        <!-- Menu Mobile -->
          <div class="menu-mobile">
          <ul class="main-menu-m bg-azul">        
          <li><a href=""><i class="fa fa-home mt-3"></i> Site</a>
          <ul class="sub-menu-m">
          <li><a href="{$GET_SITE_HOME}" target="_blank">Visitar Site</a></li> 
          <li><a href="{$PAG_BANNERS}">Banners</a></li>
          <li><a href="{$PAG_LOJAS}">Lojas</a></li>
          </ul>

          <span class="arrow-main-menu-m">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          </li>

          <li><a href="{$PAG_PRODUTOS}"><i class="fa fa-tag mt-3"></i> Produtos</a>
          <ul class="sub-menu-m">
          <li><a href="{$PAG_PRODUTOS}">Todos Produtos</a></li> 
          <li><a href="{$PAG_PRODUTO_NOVO}">Adicionar Novo</a></li>
          </ul>

          <span class="arrow-main-menu-m">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          </li>

          <li><a href="{$PAG_CLIENTES}"><i class="fa fa-users mt-3"></i> Clientes</a>
          </li>
          <li><a href="{$PAG_SUBCATEGORIAS}"><i class="fa fa-list mt-3"></i> Subcategorias</a>
          </li>
          <li><a href="{$PAG_PEDIDOS}"><i class="fa fa-file-text mt-3"></i> Pedidos</a>
          </li>

          <li><a><i class="fa fa-newspaper-o mt-3"></i> Blog</a>        
          <ul class="sub-menu-m">
          <li><a href="{$PAG_BLOG}" >Todos Posts</a></li> 
          <li><a href="{$PAG_BLOG_NOVO}">Novo Post</a></li>
          <li><a href="{$PAG_BLOG_CATEGORIAS}">Categorias</a></li>
          </ul>

          <span class="arrow-main-menu-m">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
          </li>
          
          </ul>
          </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
      <div class="container-search-header">
        <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
          <img src="{$GET_TEMA}/assets/images/icons/icon-close2.png" alt="CLOSE">
        </button>

        <form class="wrap-search-header flex-w p-l-15">
          <button class="flex-c-m trans-04">
            <i class="zmdi zmdi-search"></i>
          </button>
          <input class="plh3" type="text" name="search" placeholder="Search...">
        </form>
      </div>
    </div>
  </header>

  <!-- Sidebar -->
  <aside class="wrap-sidebar js-sidebar animsition">
    <div class="s-full js-hide-sidebar"></div>

    <div class="sidebar flex-col-l p-t-22 p-b-25">
      <div class="flex-r w-full p-b-30 p-r-27">
        <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
          <i class="zmdi zmdi-close"></i>
        </div>
      </div>

      <div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
        <ul class="sidebar-link w-full">
          <li class="p-b-13">
            <a href="index.html" class="stext-102 cl2 hov-cl1 trans-04">
              Home
            </a>
          </li>

          <li class="p-b-13">
            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
              Meus Favoritos
            </a>
          </li>
                   
          <li class="p-b-13">
            
            <a href="{$PAG_CONTA}" class="stext-102 cl2 hov-cl1 trans-04">
              Minha Conta
            </a>
            
          </li>
                    
          <li class="p-b-13">
            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
              Track Oder
            </a>
          </li>

          <li class="p-b-13">
            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
              Refunds
            </a>
          </li>

          <li class="p-b-13">
            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
              Help & FAQs
            </a>
          </li>
        </ul>

        
      </div>
    </div>
  </aside>
<body>
<!--Mostra o conteúdo da página selecionada -->

  {php}
  Rotas::get_Pagina();
  {/php}


<!-- Footer -->
  <footer class="bg-black p-t-75 p-b-32 txt-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-6 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            Áreas
          </h4>

          <ul>
            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Produtos
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Clientes
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Blog
              </a>
            </li>

            
          </ul>
        </div>

        <div class="col-sm-6 col-lg-6 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            Ajuda
          </h4>

          <ul>
            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
               Como Adicionar
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Como Editar
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Como Apagar
              </a>
            </li>

            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Informações
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="p-t-40">

        <p class="stext-107 cl6 txt-center">
         
 &copy;<script>document.write(new Date().getFullYear());</script> {$SITE_NOME} <br>
 <a href="#" target="_blank" class="branco hov-btn1">Desenvolvido por Leandro Lopes</a>


        </p>
      </div>
    </div>
  </footer>


  <!-- Back to top -->
  <div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top">
      <i class="zmdi zmdi-chevron-up"></i>
    </span>
  </div>

  
<!--===============================================================================================-->  
  <script src="{$GET_TEMA}/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="{$GET_TEMA}/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="{$GET_TEMA}/assets/vendor/bootstrap/js/popper.js"></script>
  <script src="{$GET_TEMA}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="{$GET_TEMA}/assets/vendor/select2/select2.min.js"></script>
  <script>
    $(".js-select2").each(function(){
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });
    })
  </script>
<!--===============================================================================================-->
  <script src="{$GET_TEMA}/assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="{$GET_TEMA}/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="{$GET_TEMA}/assets/vendor/slick/slick.min.js"></script>
  <script src="{$GET_TEMA}/assets/js/slick-custom.js"></script>
<!--===============================================================================================-->
  <script src="{$GET_TEMA}/assets/vendor/parallax100/parallax100.js"></script>
  <script>
        $('.parallax100').parallax100();
  </script>
<!--===============================================================================================-->
  <script src="{$GET_TEMA}/assets/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
  <script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
      $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
              enabled:true
            },
            mainClass: 'mfp-fade'
        });
    });
  </script>
<!--===============================================================================================-->
  <script src="{$GET_TEMA}/assets/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
  <script src="{$GET_TEMA}/assets/vendor/sweetalert/sweetalert.min.js"></script>
  <script>
    $('.js-addwish-b2').on('click', function(e){
      e.preventDefault();
    });

    $('.js-addwish-b2').each(function(){
      var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
      $(this).on('click', function(){
        swal(nameProduct, "is added to wishlist !", "success");

        $(this).addClass('js-addedwish-b2');
        $(this).off('click');
      });
    });

    $('.js-addwish-detail').each(function(){
      var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

      $(this).on('click', function(){
        swal(nameProduct, "is added to wishlist !", "success");

        $(this).addClass('js-addedwish-detail');
        $(this).off('click');
      });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function(){
      var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
      $(this).on('click', function(){
        swal(nameProduct, "Adicionado ao carrinho !", "success");
      });
    });
  </script>
<!--===============================================================================================-->
  <script src="{$GET_TEMA}/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script>
    $('.js-pscroll').each(function(){
      $(this).css('position','relative');
      $(this).css('overflow','hidden');
      var ps = new PerfectScrollbar(this, {
        wheelSpeed: 1,
        scrollingThreshold: 1000,
        wheelPropagation: false,
      });

      $(window).on('resize', function(){
        ps.update();
      })
    });
  </script>
<!--===============================================================================================-->
  <script src="{$GET_TEMA}/assets/js/main.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
  <script src="{$GET_TEMA}/assets/js/map-custom.js"></script>
  <script src="{$GET_TEMA}/assets/js/custom.js"></script>
  <script src="{$GET_TEMA}/assets/js/all.js"></script>
  <script src="{$GET_TEMA}/assets/js/mascara.js"></script>
  <script src="{$GET_TEMA}/assets/js/adicionais.js"></script> 
  <script>
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
  })
  </script>
  
    
    
</body>
</html>

  