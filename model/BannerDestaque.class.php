<?php 

Class BannerDestaque extends Conexao{
	function GetImage(){
	$query = "SELECT * FROM banner WHERE ordem = 1";

	//$params = array(':pro'=>(int)$pro);

     $this->ExecuteSQl($query);

     $this->GetLista();
	}

	private function GetLista(){
    	$i = 1;
    	while($lista = $this->ListarDados()):
    	$this->itens[$i] = array(
    		'id' => $lista['id'],
    		'img' => $lista['img'],
            'titulo' => $lista['titulo'],
            'descricao' => $lista['descricao'],
            'ordem' => $lista['ordem'],
            'destaque' => $lista['destaque'],
             );

    	$i++;
    endwhile;

    }	
}

?>