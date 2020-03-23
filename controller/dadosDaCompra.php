<?php
	require('../controller/livros.class.php');
	$email= $_POST['email'];
	$name= $_POST['name'];
	$adress= $_POST['adress'];
	$city= $_POST['city'];
	$estado = $_POST['select'];
	$cep = $_POST['cep'];
	$livro = $_POST['livro'];
	
	$livros = new Livros();
	$compra = $livros->comprar($email,$name,$adress,$city,$estado,$cep,$livro);
?>