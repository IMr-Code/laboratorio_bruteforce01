<html>
<h1>SISTEMA DE LOGIN</h1>
<br>
<form method="POST">
<label>Nome</label>
<input type="text" name="nome">
<br>
<br>
<label>Senha</label>
<input type="text" name="senha">
<br>
<br>
<input type="submit" value="Iniciar Sessao">
</form>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$nome = $_POST["nome"];
	$senha = $_POST["senha"];


	if($nome == "imr code" and $senha == "admin123"){

		echo "<h1>Login feito com sucesso!</h1>";
	}


else{
		echo "<h1>Usuario ou senha errada!</h1>";

   }

}

?>

</html>
