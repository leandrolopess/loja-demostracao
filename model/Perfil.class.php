<?php 
class Perfil extends Conexao{

private $cli_user_name;


function __construct(){
parent::__construct();
}


function PrepararPerfil($cli_user_name){
        
    $this->setCli_user_name($cli_user_name);
        
    }

    

        function Editar($id){     
        
        // caso passou na verificação grava no banco
        $query = " UPDATE {$this->prefix}clientes SET cli_user_name=:cli_user_name";
        
        $query .=" WHERE  cli_id = :cli_id";
      //  $query .=" (:cli_nome, :cli_sobrenome,:cli_data_nasc,:cli_rg,";
      //  $query .=" :cli_cpf, :cli_ddd,:cli_fone,:cli_celular ,:cli_endereco ,:cli_numero,:cli_bairro ,";
      //  $query .=" :cli_cidade ,:cli_uf ,:cli_cep ,:cli_email ,:cli_data_cad, :cli_hora_cad, :cli_senha)";  
   
        $params = array(
        ':cli_user_name' => $this->getCli_user_name() ,      
        ':cli_id'       => (int)$id  
        );
        
      //echo $query;          
        if($this->ExecuteSQL($query, $params)):     
        return true;
        else:
        return false;
        endif;
    }

    
 

    


    // GETTERS retornando os dados do cliente 
    

    function getCli_user_name() {
        return $this->cli_user_name;
    }








  //  SETTERS do cliente 
    
    
    function setCli_user_name($cli_user_name) {
       
        if(strlen($cli_user_name) < 2):
            echo '<script>alert("Digite um nome de usúario com pelo menos 2 letras")</script>';
            Rotas::Redirecionar(0,Rotas::pag_ClienteCadastro());
            exit();

            else:
            
            $this->cli_user_name = $cli_user_name;   
        endif;
        
     
    
        
    }

}


?>