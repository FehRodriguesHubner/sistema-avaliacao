<!DOCTYPE html>
<html>
   <head>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<script src="../js/bootstrap.min.js"></script>
   </head>
   
   <body>
			<p style="text-align:center;"><a href="../index.php"><img class="imgHeader" src="../img/mancada2.png" title="banner"/></a></p>
			<div class="sticky cabecario">
				<nav>
					<ul style="padding-top:5.5px;">
						<li><a href="../index.php" >Home</a></li>
						<li><a href="#" >Cadastro</a></li>
						
					</ul>
				</nav>
			</div>
		<section>
			<div id="loginBox">
				<h3>Efetuar login como administrador</h3>
				<p>Acesso a área de administração</p>
				<form action="../controller/autenticar.php" method="post">
					<table>
						<tr>
							<td><label>ID:</label></td>
							<td><input type="text" name="cpf"/></td>
						</tr>
						<tr>
							<td><label>Senha:</label></td>
							<td><input type="password" name="senha"/></td>
						</tr>
						<tr>
							<td><input type="submit" value="entrar" name="entrar"/></td>
						</tr>
					</table>
				</form>
			</div>
		</section>
   </body>
</html>
