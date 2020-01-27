<?php 

Class Info extends Conexao{

	
function GetInfo(){
    $query = "SELECT * FROM {$this->prefix}info";
    

     $this->ExecuteSQl($query);

     $this->GetLista();
    }


    function GetInfoLOJA($id){
    $query = "SELECT * FROM {$this->prefix}info WHERE info_id = '$id'";
    

     $this->ExecuteSQl($query);

     $this->GetLista();
    }

    



	private function GetLista(){
    	$i = 1;
    	while($lista = $this->ListarDados()):

         // Poder utilizar o valor de uma determinada variavel no template
        $facebook =   $lista['info_face'];
        $this->face =  $facebook;
        $instagram =   $lista['info_insta'];
        $this->insta =  $instagram;
        $tw =   $lista['info_twitter'];
        $this->twitter =  $tw;  

        $cep =  $lista['info_cep'];
        $this->cep =  Sistema::limpaCep($cep);
         




    	$this->itens[$i] = array(
    		'info_id' => $lista['info_id'],
    		'info_rua' => $lista['info_rua'],
    		'info_numero' => $lista['info_numero'],
            'info_cidade' => $lista['info_cidade'],
            'info_estado' => $lista['info_estado'],
    		'info_cep' => $lista['info_cep'],
            'info_telefone' => $lista['info_telefone'],
            'info_whats' => $lista['info_whats'],
            'info_email' => $lista['info_email'],
            'info_face' => $lista['info_face'],
            'info_insta' => $lista['info_insta'],
            'info_twitter' => $lista['info_twitter'],
            'info_youtube' => $lista['info_youtube'],
            'info_telegram' => $lista['info_telegram'],
            'info_loja' => $lista['info_loja'],

             );

    	$i++;
    endwhile;

    }

    function InfoFace(){
          return $this->face;
    }

    function InfoInsta(){
          return $this->insta;
    }

    function InfoTwitter(){
          return $this->twitter;
    }

     function InfoCep(){
          return $this->cep;
    }

    


    // Metodos GET

    function getInfo_rua() {
        return $this->info_rua;
    }

     function getInfo_numero() {
        return $this->info_numero;
    }

     function getInfo_cidade() {
        return $this->info_cidade;
    }

     function getInfo_estado() {
        return $this->info_estado;
    }

     function getInfo_cep() {
        return $this->info_cep;
    }

    function getInfo_telefone() {
        return $this->info_telefone;
    }

    function getInfo_whats() {
        return $this->info_whats;
    }

    function getInfo_email() {
        return $this->info_email;
    }

    function getInfo_face() {
        return $this->info_face;
    }

    function getInfo_twitter() {
        return $this->info_twitter;
    }

    function getInfo_insta() {
        return $this->info_insta;
    }

    function getInfo_loja() {
        return $this->info_loja;
    }

   


    // Metodos SET

    function setInfo_rua($info_rua) {
        $this->info_rua = $info_rua;
    }

    function setInfo_numero($info_numero) {
        $this->info_numero = $info_numero;
    }

    function setInfo_cidade($info_cidade) {
        $this->info_cidade = $info_cidade;
    }

    function setInfo_estado($info_estado) {
        $this->info_estado = $info_estado;
    }

    function setInfo_cep($info_cep) {
        
    $this->info_cep = $info_cep;
           
      
            
    }

    function setInfo_telefone($info_telefone) {
        $this->info_telefone = $info_telefone;
    }

    function setInfo_email($info_email) {
        $this->info_email = $info_email;
    }

     function setInfo_whats($info_whats) {
        $this->info_whats = $info_whats;
    }

     function setInfo_face($info_face) {
        $this->info_face = $info_face;
    }

     function setInfo_twitter($info_twitter) {
        $this->info_twitter = $info_twitter;
    }

     function setInfo_insta($info_insta) {
        $this->info_insta = $info_insta;
    }

    function setInfo_loja($info_loja) {
        $this->info_loja = $info_loja;
    }


    function Preparar($info_rua, $info_numero, $info_cidade, $info_estado, $info_cep, $info_telefone, $info_whats, $info_email, $info_face, $info_twitter, $info_insta, $info_loja){
        
                $this->setInfo_rua($info_rua);
                $this->setInfo_numero($info_numero);
                $this->setInfo_cidade($info_cidade);
                $this->setInfo_estado($info_estado);
                $this->setInfo_cep($info_cep);
                $this->setInfo_telefone($info_telefone);
                $this->setInfo_whats($info_whats);
                $this->setInfo_email($info_email);
                $this->setInfo_face($info_face);
                $this->setInfo_twitter($info_twitter);
                $this->setInfo_insta($info_insta);
                $this->setInfo_loja($info_loja);
                
                
            }




    function Inserir(){
          
        $query = "INSERT INTO {$this->prefix}info (info_loja, info_rua, info_numero, info_cidade, info_estado, info_cep,";
        $query .= " info_telefone, info_whats, info_email,";
         $query .= " info_face, info_twitter, info_insta)";
        $query.= " VALUES ";
        $query.= " ( :info_loja, :info_rua, :info_numero, :info_cidade, :info_estado, :info_cep,";
        $query .=" :info_telefone ,:info_whats ,:info_email ,:info_face ,:info_twitter, :info_insta)"; 
        
        $params = array(
        ':info_loja'=> $this->getInfo_loja(), 
        ':info_rua'=> $this->getInfo_rua(), 
        ':info_numero'=> $this->getInfo_numero(),
        ':info_cidade'=> $this->getInfo_cidade(), 
        ':info_estado'=> $this->getInfo_estado(),
        ':info_cep'=> $this->getInfo_cep(),
        ':info_telefone'=> $this->getInfo_telefone(), 
        ':info_whats'=> $this->getInfo_whats(),
        ':info_email'=> $this->getInfo_email(),
        ':info_face'=> $this->getInfo_face(), 
        ':info_twitter'=> $this->getInfo_twitter(), 
        ':info_insta'=> $this->getInfo_insta(),       
         
                     
        );


          if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        
        
           
           
        }


        function Alterar($id){
          
        $query = " UPDATE {$this->prefix}info SET info_rua=:info_rua, info_numero=:info_numero, info_cidade=:info_cidade, info_estado=:info_estado, info_cep=:info_cep," ;
        $query.= " info_telefone=:info_telefone, info_whats=:info_whats, info_email=:info_email,";
        $query.= " info_face=:info_face, info_twitter=:info_twitter, info_insta=:info_insta, info_loja=:info_loja";
       $query.= " WHERE info_id = :info_id";
       
        
        $params = array(
        ':info_rua'=> $this->getInfo_rua(),
        ':info_numero'=> $this->getInfo_numero(),
        ':info_cidade'=> $this->getInfo_cidade(),
        ':info_estado'=> $this->getInfo_estado(),
        ':info_cep'=> $this->getInfo_cep(),
        ':info_telefone'=> $this->getInfo_telefone(),
        ':info_whats'=> $this->getInfo_whats(),
        ':info_email'=> $this->getInfo_email(),
        ':info_face'=> $this->getInfo_face(),
        ':info_twitter'=> $this->getInfo_twitter(),
        ':info_insta'=> $this->getInfo_insta(),
        ':info_id'=> (int)$id,
        ':info_loja'=> $this->getInfo_loja(),   
                     
        );
        
           
        
           // executo a SQL
           if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        
        
           
           
        }



       function Apagar($id){
           $query = "DELETE FROM {$this->prefix}info WHERE info_id = :id";
           $params = array(
            ':id' => (int)$id
            );

           // executo a SQL
           if($this->ExecuteSQL($query, $params)):
               
                   return TRUE;
               
               else:
                   
                   return FALSE; 
               
           endif;
        } 







}//Fechamento classe

?>