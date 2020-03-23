<?php
			$sql = "SELECT nome,valor,ref,imgRef,codigo FROM livros;";
					$conect = new mysqli('localhost','root','','bookstore');
					$stmt = $conect->prepare($sql);
					$stmt->execute();
					$stmt->store_result();
					if($stmt->num_rows > 0){
						$stmt->bind_result($nome,$valor,$ref,$imgRef,$codigo);
						while($stmt->fetch()){
							echo '
								<form action="altera.php" method="post">
								<tr>
									<td><label>'.$nome.'</label></td>
									<td><label>'.$valor.'</label></td>
									<td><label>'.$ref.'</label></td>
									<td><label>'.$imgRef.'</label></td>
									<input type="hidden" name="id" value="'.$codigo.'"/>
									<td><input type="submit" name="editar" value="editar"/></td>
									<td><input type="submit" name="excluir" value="Excluir"/></td>
								</tr>
								</form>';
						}
					}
?>