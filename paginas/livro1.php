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
			  <img class="img" src="../img/revo.jpg"/>
				<div id="text">
					<h1>A Revolução Dos Bichos</h1>
					<p >Protegido por
					cães ameaçadores, Napoleão lidera a granja de uma maneira ditadora; constrói o
					moinho, e há economia de comida, os animais trabalham várias horas seguidas. Começa
					uma nova escravidão, onde agora os animais são explorados pelos porcos. Para a
					construção do moinho, são necessários materiais que não podem ser produzidos na
					granja, e com isso, Napoleão começa um contato comercial com humanos, por
					intermédio de seu advogado, Sr. Whymper. Nesse momento, os porcos se mudam para
					a casa grande, onde o Sr. Jones vivia, apesar de anteriormente ser proibido..
					</p>
				</div>
			</div>
			
			
		
			<br/>
			<div id="formulario">
				<?php include('../view/modeloDadosCompra.php');?>
				<input type="hidden" name="livro" value="A Revolução Dos Bichos"/>
				</form>
			</div>
			
		</section>
   </body>
</html>