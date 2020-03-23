<?php
		function show(){
			$sql = "SELECT nome,valor,ref,imgRef FROM livros;";
					$conect = new mysqli('localhost','root','','bookstore');
					$stmt = $conect->prepare($sql);
					$stmt->execute();
					$stmt->store_result();
					if($stmt->num_rows > 0){
						$stmt->bind_result($nome,$valor,$ref,$imgRef);
						while($stmt->fetch()){
							echo '<a href="'.$ref.'" alt="Livro">
								<div class="boxItem">
										<div>
											<p class="center"><img src="'.$imgRef.'" class="img" alt="capa do livro"></p>
											<div class="card-body">
												<p class="card-text">'. mb_strimwidth($nome, 0, 20, '...').'</p>
												<br/>
												<p class="card-text" style="color:green;text-align:right;font-size:18pt;">R$'.number_format($valor,2,',','.').'</p>
											</div>
										</div>
								</div>
							</a>';
						}
					}
		}
?>