<?php
$servidor = "localhost";
$usuario = "root";
$pws = "";
$banco = "ideia";


$conn = mysqli_connect($servidor,$usuario,$pws,$banco);

if($conn){
	echo "ok";
}else{
	die("Não conectou ao bd ".mysqli_connect_error());
}
?>