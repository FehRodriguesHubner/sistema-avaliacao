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
			  <img class="img" src="../img/debord.jpg">
			  
			  <div id="text">
				<h1>A Sociedade do espetáculo</h1>
				<p>Mais importante obra teórica produzida no contexto que precedeu os acontecimentos de Maio de 1968, A sociedade do espetáculo é um livro genial e único,
				precursor de toda análise crítica da moderna sociedade de consumo. Para Antonio Negri, é um dos dez livros mais importantes do século. Para Jean–Jacques Pauvert,
				“não antecipou 1968, como normalmente se diz.</p>
			  </div>
			</div>
			
			<br/>
			<div id="formulario">
				<?php include('../view/modeloDadosCompra.php');?>
				<input type="hidden" name="livro" value="A Sociedade do espetáculo"/>
				</form>
			</div>
		
		</section>
   </body>
</html>