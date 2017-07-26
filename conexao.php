<?php
$servidor   = "localhost";//Nome do servidor
$usuario    = "root";//Nome do usuário
$pws        = "";//senha
$banco      = "ideia";//Nome do Bando de dados

//Variável de conexão
$conn = mysqli_connect($servidor,$usuario,$pws,$banco);

//Verifica se a conexão foi realizada
if($conn){
    //Se conectar ele vai escrever isso, mas isso deve ser tiradado depois que o teste de conexão for realizado
    echo "ok";
}else{
    //Se não conectar ele vai matar e escrever o erro
	die("Não conectou ao bd ".mysqli_connect_error());
}
?>