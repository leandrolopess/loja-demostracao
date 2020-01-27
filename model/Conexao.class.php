<?php 
Class Conexao extends Config{
  private $host, $user, $senha, $banco;
    protected $obj, $itens=array(), $prefix;

    public $paginacao_links, $totalpags, $limite, $inicio;

// Configuração do banco de dados
  function __construct(){
    $this->host = self::BD_HOST;
    $this->user = self::BD_USER;
    $this->senha = self::BD_SENHA;
    $this->banco = self::BD_BANCO;
    $this->prefix = self::BD_PREFIX;
    // Conexão com o banco de dados
    try {
         if($this->Conectar() == null){
         $this->Conectar(); 
         }
      
        // Erro se não conectar     
    } catch (Exception $e) {
           exit($e->getMessage().'<h2> Erro ao conectar com o banco de dados! </h2>');  
    }

  }
  // Faz a conexão e a codificação com o banco de dados
  private function Conectar(){
    $options = array(
      // Faz a codificação
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
      // Mostrar erros
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    );
    // Faz a conexão PDO com o banco
    $link = new PDO("mysql:host={$this->host};dbname={$this->banco}" , 
           $this->user, $this->senha, $options);
    return $link;
         
  }
     // Executa a Query
    function ExecuteSQL($query, array $params = NULL){
      $this->obj = $this->Conectar()->prepare($query);
          
        if($params && @count($params) > 0){
          foreach($params as $key =>$value){
            $this->obj->bindvalue($key, $value);
          }
        }

      return $this->obj->execute();

    }
    //Lista os dados 
    function ListarDados(){
      return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    //Faz a contagem de linhas(itens) da tabela
    function TotalDados(){
      return $this->obj->rowCount();
    }

    //Faz a contagem de colunas(itens) da tabela
    function TotalColunas(){
      return $this->obj->columnCount();
    }

    function GetItens(){
      return $this->itens;
    }
    
    // Faz a paginação da página de produtos
    function PaginacaoLinksProdutos($campo, $tabela){
        $pag = new Paginacao();
        $pag->GetPaginacaoProdutos($campo, $tabela);
        $this->paginacao_links = $pag->link;
        // Número total de páginas
        $this->totalpags = $pag->totalpags;
        // Número limite de páginas, baseado no total de páginas
        $this->limite = $pag->limite;
        // Número que inicia a contagem do pagination
        $this->inicio = $pag->inicio;

        $inicio = $pag->inicio;
        $limite = $pag->limite;
        
        // Se o total de páginas for maior que 0 adiciona LIMIT com os valores de inicio e limite
        if($this->totalpags > 0){
        return " limit {$inicio}, {$limite}";
        }else{
            return "";
        }
    }
       
      //Faz a paginação de outras páginas 
     function PaginacaoLinks($campo, $tabela){
        $pag = new Paginacao();
        $pag->GetPaginacao($campo, $tabela);
        $this->paginacao_links = $pag->link;
        // Número total de páginas
        $this->totalpags = $pag->totalpags;
        // Número limite de páginas, baseado no total de páginas
        $this->limite = $pag->limite;
        // Número que inicia a contagem do pagination
        $this->inicio = $pag->inicio;

        $inicio = $pag->inicio;
        $limite = $pag->limite;
        
        // Se o total de páginas for maior que 0 adiciona LIMIT com os valores de inicio e limite
        if($this->totalpags > 0){
        return " limit {$inicio}, {$limite}";
        }else{
            return "";
        }
    }
        
        // Paginção Normal
    protected function Paginacao($paginas=array()){
      // Pega o valor de p
      if(isset($_GET['p'])){
      // Passa o valor de p pra uma váriavel
      $pagina_atual = $_GET['p'];
      }else{
        $pagina_atual = 1;
      }
      // Próxima página
      $proxima_pagina = $pagina_atual + 1;
      // Página anterior
      $pagina_anterior = $pagina_atual - 1;
  
      // Estrutura do pagination 
      $pag = '<nav aria-label="Page navigation example"><ul class="pagination">';
      if($pagina_atual > 1){
      // Pagination do Inicio
      $pag .= '<li class="page-item"><a class="page-link" href="?p=1"> &laquo; Inicio </a></li>';
      }
      
     // Adiciona o número da página e a classe de página ativa
      foreach($paginas as $p):
      if($this->totalpags > 0){
      $pag .= '<li class="'.($pagina_atual == $p ? "page-item active": "").'"><a class="page-link" href="?p='.$p.'">'.$p.'</a></li>';
      }
      endforeach;

      if($this->totalpags > 5){
      if($pagina_atual != $this->totalpags ){
      //Divisor 
      $pag .= '<li class="page-link">
      <span>...</span>
      </li>';
      //Mostra última página
      $pag .= '<li class="page-item"><a class="page-link" href="?p='. $this->totalpags .'"> Última </a></li>';
       }else{
        $pag .= '';
       }
      }
       
        //Próxima Página
        if($proxima_pagina <= $this->totalpags){
        $pag .='<li class="page-item">
      <a class="page-link" href="?p='.$proxima_pagina.'" aria-label="Next">
      <span aria-hidden="true">&raquo;</span>
      </a>
      </li>';
      }

      $pag .='</ul></nav>';

      // Mostra o pagination somente quando tem mais de 1 página
      if($this->totalpags > 1){
      return $pag;
      }
    }
       
       // Paginação Infinita
    protected function PaginacaoInfinita($paginas=array()){
      // Pega o valor de p
      if(isset($_GET['p'])){
      // Passa o valor de p pra uma váriavel
      $pagina_atual = $_GET['p'];
      }else{
        $pagina_atual = 1;
      }
      // Próxima página
      $proxima_pagina = $pagina_atual + 1;
      // Página anterior
      $pagina_anterior = $pagina_atual - 1;
     
      // Adiciona o número da página e a classe de página ativa
    for($i = 1; $i <= $this->totalpags; $i++){
    if($i == $pagina_atual){
    $pag = $i. '';
    }elseif ($i == $pagina_atual + 1) {
     $pag .= '<a href="?p='.$i.'" class="suivant">'.$i.'</a>';
    }else{
     $pag .= '<a href="?p='.$i.'">'.$i.'</a>';
     }
    }

      $pag .='</div>';
      return $pag;
    }

    protected function PaginacaoBusca($paginas=array()){
      // Pega o valor de p
      if(isset($_GET['p'])){
      // Passa o valor de p pra uma váriavel
      $pagina_atual = $_GET['p'];
      }else{
        $pagina_atual = 1;
      }
      // Próxima página
      $proxima_pagina = $pagina_atual + 1;
      // Página anterior
      $pagina_anterior = $pagina_atual - 1;

      // Pega o valor de p
      if(isset($_GET['s'])){
      // Passa o valor de p pra uma váriavel
      $busca = $_GET['s'];
      }else{
        $busca = "";
      }
  
      // Estrutura do pagination 
      $pag = '<nav aria-label="Page navigation example"><ul class="pagination">';
      if($pagina_atual > 1){
      // Pagination do Inicio
      $pag .= '<li class="page-item"><a class="page-link" href="?s='.$busca.'&p=1"> &laquo; Inicio </a></li>';
      }
      
     // Adiciona o número da página e a classe de página ativa
      foreach($paginas as $p):
      if($this->totalpags > 0){
      $pag .= '<li class="'.($pagina_atual == $p ? "page-item active": "").'"><a class="page-link" href="?s='.$busca.'&p='.$p.'">'.$p.'</a></li>';
      }
      endforeach;

      if($this->totalpags > 5){
      if($pagina_atual != $this->totalpags ){
      //Divisor 
      $pag .= '<li class="page-link">
      <span>...</span>
      </li>';
      //Mostra última página
      $pag .= '<li class="page-item"><a class="page-link" href="?s='.$busca.'&p='. $this->totalpags .'"> Última </a></li>';
       }else{
        $pag .= '';
       }
      }
       
        //Próxima Página
        if($proxima_pagina <= $this->totalpags){
        $pag .='<li class="page-item">
      <a class="page-link" href="?s='.$busca.'&p='.$proxima_pagina.'" aria-label="Next">
      <span aria-hidden="true">&raquo;</span>
      </a>
      </li>';
      }

      $pag .='</ul></nav>';

      // Mostra o pagination somente quando tem mais de 1 página
      if($this->totalpags > 1){
      return $pag;
      }
    }

      // Paginação Infinita da busca
    protected function PaginacaoInfinitaBusca($paginas=array()){
      // Pega o valor de p
      if(isset($_GET['p'])){
      // Passa o valor de p pra uma váriavel
      $pagina_atual = $_GET['p'];
      }else{
        $pagina_atual = 1;
      }
      // Próxima página
      $proxima_pagina = $pagina_atual + 1;
      // Página anterior
      $pagina_anterior = $pagina_atual - 1;

      if(isset($_GET['s'])){
      // Passa o valor de p pra uma váriavel
      $busca = $_GET['s'];
      }else{
        $busca = "";
      }
     
      // Adiciona o número da página e a classe de página ativa
    for($i = 1; $i <= $this->totalpags; $i++){
    if($i == $pagina_atual){
    $pag = $i. '';
    }elseif ($i == $pagina_atual + 1) {
     $pag .= '<a href="?s='.$busca.'&p='.$i.'" class="suivant">'.$i.'</a>';
    }else{
     $pag .= '<a href="?s='.$busca.'&p='.$i.'">'.$i.'</a>';
     }
    }

      $pag .='</div>';
      return $pag;
    }


// Função que junta todas as funcões e mostra o pagination
    function ShowPaginacao(){
        return $this->Paginacao($this->paginacao_links);
    }

    // Função que junta todas as funcões e mostra o pagination
    function ShowPaginacaoInfinita(){
        return $this->PaginacaoInfinita($this->paginacao_links);
    }

    // Função que junta todas as funcões e mostra o pagination
    function ShowPaginacaoBusca(){
        return $this->PaginacaoBusca($this->paginacao_links);
    }

    // Função que junta todas as funcões e mostra o pagination
    function ShowPaginacaoInfinitaBusca(){
        return $this->PaginacaoInfinitaBusca($this->paginacao_links);
    }

}


?>