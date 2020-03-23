<html>
   <head>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<script src="js/bootstrap.min.js"></script>
   </head>
   
   <body>
			<p style="text-align:center;"><a href="../index.php"><img class="imgHeader" src="../img/mancada2.png" title="banner"/></a></p>
			<div class="sticky cabecario">
				<nav>
					<ul style="padding-top:5.5px;">
						<li><a href="../index.php" >Home</a></li>
						<li><a href="../view/loginAdm.php" >Cadastro</a></li>
					</ul>
				</nav>
			</div>
		<section>
			<br/>
			<form method="post" action="../view/pesquisa.php">
			<input class="barraPesquisa" name="txt" type="text" placeholder="Pesquise um livro..."/>
			<input type="submit" name="submit" value="GO"/>
			</form>
			<br/>
			<h1 >Alteração de dados</h1>
			<?php
				$nome = $_POST['nome'];
				$valor = $_POST['valor'];
				$ref = $_POST['ref'];
				$imgRef = $_POST['imgRef'];
				$id = $_POST['id'];
	
				$sql = "update livros set nome ='".$nome."' where codigo= ".$id.";
				 update livros set valor ='".$valor."' where codigo= ".$id.";
				 update livros set ref ='".$ref."' where codigo= ".$id.";
				 update livros set imgRef ='".$imgRef."' where codigo= ".$id.";
				";
				$conect = new mysqli('localhost','root','','bookstore');
				$stmt = $conect->prepare($sql);
				$stmt->execute();
				if($stmt == true){
					echo 'Edição concluída com sucesso';
				}else{
					die('Erro na conexão');
				}
				
			?>
			
			<br/>
			<br/>
			<form action="cadastrar.php">
				<input type="submit" value="retornar" name="retornar" />
			</form>
		</section>
		<footer>
			<div class="divFooter">
				<p align="center" style="padding-top:12%;">
					Copyright® Conexão Neural™
				</p>
			</div>
			
			<div class="divFooter">
				<p align="center">
					A Conexão Neural <br/> é uma startup distribuidora e comercialiazadora de livros de diversos títulos e autores
				</p>
			</div>
			
			<div class="divFooter">
				<p align="center">
					Nosso objetivo é levar os melhores títulos, selecionados a dedo, para proporcionar uma imerção a filosofia e o saber.
				</p>
			</div>
		</footer>
   </body>
</html>
