<?php  
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'loja';

foreach($db as $key => $value){
	define(strtoupper($key), $value);
}
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Correção de caracteres especias
mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,'SET character_set_connection=utf8');
mysqli_query($conn,'SET character_set_client=utf8');
mysqli_query($conn,'SET character_set_results=utf8');
//if($conn){
//	echo "Banco de dados conectado";
//}
?>