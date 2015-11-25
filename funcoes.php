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



///////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////
//faz cadastro de novos clientes
$grava_nome 			= $_POST['nome'];
$grava_email 			= $_POST['email'];
$grava_telefone 			= $_POST['telefone'];
$grava_celular 			= $_POST['celular'];
$grava_CPF 			= $_POST['CPF'];
$grava_endereco 			= $_POST['endereco'];
$grava_bairro 			= $_POST['bairro'];
$grava_cep 			= $_POST['cep'];
$grava_cidade 			= $_POST['cidade'];
$grava_estado_UF 			= $_POST['estado_UF'];


if($_GET['funcao'] == "gravar_cliente_pf"){

$sql_gravar = mysql_query("INSERT INTO cliente_pf (nome, email, telefone, celular, CPF, endereco, bairro, cep, cidade, estado_UF) value
	(
'$grava_nome', 	
'$grava_email', 			
'$grava_telefone', 
'$grava_celular', 	
'$grava_CPF', 		
'$grava_endereco', 
'$grava_bairro', 		
'$grava_cep', 		 
'$grava_cidade', 		
'$grava_estado_UF')");
header('Location:cliente_pf.php');

}




if($_GET['funcao'] == "editar_cliente_pf"){
$id = $_GET['id'];
$sql_alterar = mysql_query("UPDATE cliente_pf SET 
nome='$grava_nome', 	               	
email='$grava_email', 			               
telefone='$grava_telefone',                
celular='$grava_celular', 	               
CPF='$grava_CPF', 		               
endereco='$grava_endereco',                
bairro='$grava_bairro', 		               
cep='$grava_cep', 		                
cidade='$grava_cidade', 		               
estado_UF='$grava_estado_UF'               
WHERE id = '$id'");
header('Location:cliente_pf.php');
}


 ?>