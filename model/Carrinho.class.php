<?php 

class Carrinho{
public $total_valor, $total_peso, $itens = array();


function GetCarrinho($sessao=NULL){

$i = 1; $sub = 1.00; $peso = 0;

foreach ($_SESSION['PRO'] as $lista) {

$sub = ($lista['VALOR_US'] * $lista['QTD']);
$this->total_valor += $sub;

$peso = $lista['PESO'] * $lista['QTD'];
$this->total_peso += $peso;

	$this->itens[$i] = array(
		'pro_id' => $lista['ID'],
		'pro_nome'  => $lista['NOME'],
        'pro_valor' => $lista['VALOR'], // 1.000,99
        'pro_valor_us' => $lista['VALOR_US'],  // 1000.99
        'pro_peso'  => $lista['PESO'],
        'pro_qtd'   => $lista['QTD'],
        'pro_img'   => $lista['IMG'],
        'pro_img_email'   => $lista['IMG2'],
        'pro_link'  => $lista['LINK'],
        'pro_subTotal'=> Sistema::MoedaBR($sub) ,         
        'pro_subTotal_us'=> $sub  

	    );
	$i++;
  }
  
  if(count($this->itens) > 0){
  	return $this->itens;
  }
  //else{
  	//echo '<h4 class="alert alert-danger"> Não há produtos no carrinho </h4>';
  //}


 }

 function GetTotal(){
 	return $this->total_valor;
 }

function GetPeso(){
	return $this->total_peso;
}

function CarrinhoADD($id){	
$produtos = new Produtos();
$produtos->GetProdutosID($id);
foreach ($produtos->GetItens() as $pro) {
	$ID = $pro['pro_id'];
	$NOME  = $pro['pro_nome'];
    $VALOR_US = $pro['pro_valor_us'];
    $VALOR  = $pro['pro_valor'];
    $PESO  = $pro['pro_peso'];
    $QTD   = $_POST['qua'];
    $QTD1   = 1;
    $IMG   = $pro['pro_img'];
    $IMG2   = $pro['pro_img_email'];
    $LINK  = Rotas::pag_ProdutosInfo().'/'.$ID.'/'.$pro['pro_slug'];
    $ACAO  = $_POST['acao'];
}

switch ($ACAO) {
	// Adiciona iten ao carrinho
	case 'add':
		if(!isset($_SESSION['PRO'][$ID]['ID'])){
		$_SESSION['PRO'][$ID]['ID'] = $ID;
		$_SESSION['PRO'][$ID]['NOME']  = $NOME;
		$_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
		$_SESSION['PRO'][$ID]['VALOR_US'] = $VALOR_US;
		$_SESSION['PRO'][$ID]['PESO']  = $PESO;
		$_SESSION['PRO'][$ID]['QTD']   = $QTD;
		$_SESSION['PRO'][$ID]['IMG']   = $IMG;
		$_SESSION['PRO'][$ID]['IMG2']   = $IMG2;
		$_SESSION['PRO'][$ID]['LINK']  = $LINK;
		}else{
			$_SESSION['PRO'][$ID]['QTD'] += $QTD1;
		}
		if($QTD == 0){
		$_SESSION['PRO'][$ID]['ID'] = $ID;
		$_SESSION['PRO'][$ID]['NOME']  = $NOME;
		$_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
		$_SESSION['PRO'][$ID]['VALOR_US'] = $VALOR_US;
		$_SESSION['PRO'][$ID]['PESO']  = $PESO;
		$_SESSION['PRO'][$ID]['QTD']   = $QTD1;
		$_SESSION['PRO'][$ID]['IMG']   = $IMG;
		$_SESSION['PRO'][$ID]['IMG2']   = $IMG2;
		$_SESSION['PRO'][$ID]['LINK']  = $LINK;

		}

		$site_tema = Config::GET_TEMA;
		echo '<div id="preloader">
         <img class="preloader" src="'.$site_tema.'/assets/images/gif/loading.gif" alt="">
      </div>';
		break;

	// Deleta itens do carrinho
	case 'del':
		$site_tema = Config::GET_TEMA;
		$this->CarrinhoDEL($id);
		echo '<div id="preloader">
         <img class="preloader" src="'.$site_tema.'/assets/images/gif/loading.gif" alt="">
      </div>';
		break;
         
    // Limpa o carrinho
	case 'limpar':
		$site_tema = Config::GET_TEMA;
		$this->CarrinhoLimpar();
		echo '<div id="preloader">
         <img class="preloader" src="'.$site_tema.'/assets/images/gif/loading.gif" alt="">
      </div>';
		break;
        
        // Aumenta a quantidade de itens no carrinho
		case 'aumenta':
		$site_tema = Config::GET_TEMA;
		if($_SESSION['PRO'][$ID]['QTD'] > 0){
		$_SESSION['PRO'][$ID]['QTD'] += $QTD1;
		}
		echo '<div id="preloader">
         <img class="preloader" src="'.$site_tema.'/assets/images/gif/loading.gif" alt="">
      </div>';
        break;

       // Diminui a quantidade de itens no carrinho
	  case 'diminui':
		$site_tema = Config::GET_TEMA;
		if($_SESSION['PRO'][$ID]['QTD'] > 1){
			$_SESSION['PRO'][$ID]['QTD'] -= $QTD1;
		}
		
		echo '<div id="preloader">
         <img class="preloader" src="'.$site_tema.'/assets/images/gif/loading.gif" alt="">
      </div>';

		break;
}


}
// Deleta item do carrinho
private function CarrinhoDEL($id){
	unset($_SESSION['PRO'][$id]);
}
// Limpar carrinho
private function CarrinhoLimpar(){
	unset($_SESSION['PRO']);
}


}

?>