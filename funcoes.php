<?php 
//para criar conexão.
include "conexao.php";
//variavel que recebe os dados inseridos na tabela
$grava_marca = $_POST['marca'];

//se a variavel funcão for igual a variavel gravar ele faz o bloco de gravar.
if($_GET['funcao'] == "gravar"){
//conecta e grava no db entra as ()coloque as tabelas que serão inserida os dados, separados por virgula.
//sempre colocar em ordem de acordo com as variaveis criadas.
$sql_gravar = mysql_query("INSERT INTO marca (marca) value ('$grava_marca')");
header('Location:home.php');
}

 ?>