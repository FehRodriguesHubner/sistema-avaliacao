<?php
	require('livros.class.php');
	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$ref = $_POST['ref'];
	$imgRef = $_POST['imgRef'];
	$livro = new Livros();
	$cadastro = $livro->cadastro($nome,$valor,$ref,$imgRef);
	
?>