<!DOCTYPE html>
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
				$id = $_POST['id'];
				if(isset($_POST['excluir'])){
					
					$sql = 'delete from livros where codigo ='.$id.';';
					$conect = new mysqli('localhost','root','','bookstore');
					$stmt = $conect->prepare($sql);
					$stmt->execute();
					if($stmt == true){
						echo "
						<form style='padding:20px;' action='cadastrar.php'>
							<p >Livro excluido com sucesso</p>
							<input type='submit' value='retornar' name='retornar' />
						</form>
						";
					}else{
						die("Falha no sistema!");
					}
				}
				if(isset($_POST['editar'])){
					$sql = 'select nome,valor,ref,imgRef from livros where codigo ='.$id.';';
					$conect = new mysqli('localhost','root','','bookstore');
					$stmt = $conect->prepare($sql);
					$stmt->execute();
					$stmt->store_result();
					if($stmt->num_rows > 0){
						$stmt->bind_result($nome,$valor,$ref,$imgRef);
						echo '
						<table>
							<form method="post" action="edita.php">
								<tbody>
									<tr>
										<td>Nome: </td>
										<td><input type="text" name="nome" value="'.$nome.'"/></td>
									</tr>
									<tr>
										<td>Valor: </td>
										<td><input type="text" name="valor" value="'.$valor.'"/></td>
									</tr>
									<tr>
										<td>Referência: </td>
										<td><input type="text" name="ref" value="'.$ref.'"/></td>
									</tr>
									<tr>
										<td>Referência de imagem: </td>
										<td><input type="text" name="imgRef" value="'.$imgRef.'"/></td>
									</tr>
									<tr>
										<td>
										<input type="hidden" name="id" value="'.$id.'"/>
										<input type="submit" value="Editar"/></td>
									</tr>
								</tbody>
							</form>
						</table>
					';
					}else{
						die('Erro no sistema.');
					}
					
					if($stmt == true){
						
					}else{
						die('Falha na conexão, tente novamente.');
					}
					
				}
			?>
			<br/>
			
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