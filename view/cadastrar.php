<!DOCTYPE html>
<html>
   <head>
		<title>Conexão Neural - Administração
		</title>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<script src="../js/bootstrap.min.js"></script>
   </head>
   
   <body>
			<p style="text-align:center;"><a href="../index.html"><img class="imgHeader" src="../img/mancada2.png" title="banner"/></a></p>
			<div class="sticky cabecario">
				<nav>
					<ul style="padding-top:5.5px;">
						<li><a href="../index.php" >Home</a></li>
						<li><a href="#" >Cadastro</a></li>
						
					</ul>
				</nav>
			</div>
		<section>
			<div style="padding:30px;">
			<h3>Área de administração</h3>
			<br/>
			<p>Administração de livros e produtos.</p>
			<br/>
				
				<form style="border:1px solid black; width: 400px; background-color:white;" action="../controller/insere.php" method="post">
				<p><b>Cadastro de livros</b></p>
				<br/>
				<table>
					<tr>
						<td><label>Nome: </label></td>
						<td><input type="text" name="nome"/></td>
					</tr>
					
					<tr>
						<td><label>Valor: </label></td>
						<td><input type="decimal" name="valor" step="0.01"/></td>
					</tr>
					
					<tr>
						<td><label>Referência: </label></td>
						<td><input type="text" name="ref"/></td>
					</tr>
					
					<tr>
						<td><label>Referência Imagem: </label></td>
						<td><input type="text" name="imgRef"/></td>
					</tr>
					
					<tr>
						<td><label><input type="submit" value="Cadastrar" name="Insert"/></label></td>
					</tr>
				</table>
				</form>
				
				<br/>
				
				<table border="1|0" id="tableCrud">
					<tr>
						<th><label>Nome</label></th>
						<th><label>Valor</label></th>
						<th><label>Referência</label></th>
						<th><label>Referência Imagem</label></th>
						<th><label>Excluir</label></th>
						<th><label>Editar</label></th>
					</tr>
					<?php
						include('tableView.php');
					?>
				</table>
			</div>
		</section>
   </body>
</html>
