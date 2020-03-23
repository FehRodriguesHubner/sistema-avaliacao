<?php
require('../model/conexao.php');
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];
$conectar = mysqli_connect('localhost','root','','bookstore');
if(isset($entrar)){
		$verifica = mysqli_query($conectar,"select * from adms where cpf = '$cpf' and senha ='$senha'") or die("erro ao buscar do banco");
		if(mysqli_num_rows($verifica)<=0){
			echo "<script language='javascript' type='text/javascript'>
			alert('Não foi possível fazer login. Usuário/senha incorretos');
			window.location.href='../view/loginAdm.php';</script>";			
			die();
		}else{
			setcookie("login",$login);
			header("Location:../view/cadastrar.php");
		}
		
	}

?>