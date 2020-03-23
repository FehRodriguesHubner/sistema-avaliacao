<!DOCTYPE html>
<html>
   <head>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="../css/estilo2.css">
		
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
		<script src="../js/bootstrap.min.js"></script>
   </head>
   
   <body>
			<p style="text-align:center;"><a href="../index.php"><img class="imgHeader" src="../img/mancada2.png" title="banner"/></a></p>
			<div class="sticky cabecario">
				<nav>
					<ul style="padding-top:5.5px;">
						<li><a href="../index.php" >Home</a></li>
						<li><a href="../view/cadastrar.php" >Cadastro</a></li>
						
					</ul>
				</nav>
			</div>
		<section>
			<div class="box">
			  <img class="img" src="../img/ComoEuEraAntesDeVoce.jfif">
			  
			  <div id="text">
				<h1>Como eu era antes de você</h1>
				<p>Aos 26 anos, Louisa Clark não tem muitas ambições. Ela mora com os pais, a irmã mãe solteira, 
				o sobrinho pequeno e um avô que precisa de cuidados constantes desde que sofreu um derrame. Trabalha como garçonete num café,
				um emprego que não paga muito, mas ajuda nas despesas, e namora Patrick, um triatleta que não parece interessado nela.
				Não que ela se importe.Quando o café fecha as portas, Lou é obrigada a procurar outro emprego.</p>
			  </div>
			</div>
			<br/>
			<div id="formulario">
				<?php include('../view/modeloDadosCompra.php');?>
				<input type="hidden" name="livro" value="Como eu era antes de você"/>
				</form>
			</div>
		</section>
   </body>
</html>