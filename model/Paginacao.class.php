<?php 

class Paginacao extends Conexao{
    //Utilizar variaveis de outras classes 
	public $limite, $inicio, $totalpags, $link = array();

     // Paginação de produtos
	function GetPaginacaoProdutos($campo, $tabela){
		$query = "SELECT {$campo} FROM {$tabela} ";
		// Executa a consulta
		$this->ExecuteSQL($query);
		//Faz a contagem de quantas linhas existem na tabela
		$total = $this->TotalDados();
      
		$this->limite = Config::BD_LIMIT_POR_PRODUTOS;
		$paginas = ceil($total / $this->limite);
		$this->totalpags = $paginas;

		$p = (int)isset($_GET['p']) ? $_GET['p'] : 1;

		//if($p > $paginas){
           //  $p = $paginas;
		//}

		$this->inicio = ($p * $this->limite) - $this->limite;

		$tolerancia = 2;
		$mostrar = $p + $tolerancia;
		if($mostrar > $paginas){
			$mostrar = $paginas;
		}
   //echo $mostrar;
		for($i = ($p - $tolerancia); $i <= $mostrar; $i++):
			if($i < 1){
				$i = 1;
			}
			 
			array_push($this->link, $i);
		endfor;
	}

    // Paginãção de outras páginas
	function GetPaginacao($campo, $tabela){
		$query = "SELECT {$campo} FROM {$tabela} ";
		// Executa a consulta
		$this->ExecuteSQL($query);
		//Faz a contagem de quantas linhas existem na tabela
		$total = $this->TotalDados();
      
		$this->limite = Config::BD_LIMIT_POR_PAG;
		$paginas = ceil($total / $this->limite);
		$this->totalpags = $paginas;

		$p = (int)isset($_GET['p']) ? $_GET['p'] : 1;

		//if($p > $paginas){
           //  $p = $paginas;
		//}

		$this->inicio = ($p * $this->limite) - $this->limite;

		$tolerancia = 2;
		$mostrar = $p + $tolerancia;
		if($mostrar > $paginas){
			$mostrar = $paginas;
		}
   //echo $mostrar;
		for($i = ($p - $tolerancia); $i <= $mostrar; $i++):
			if($i < 1){
				$i = 1;
			}
			 
			array_push($this->link, $i);
		endfor;
	}
} 

?>