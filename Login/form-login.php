<?php
if($_POST){	
	include 'usuario.php';
	
	$usuarioObj = new Usuario();
	$usuarioObj->setUsername($_POST['username']);
	$usuarioObj->setSenha($_POST['senha']);
	
	$mensagem=false;
	
	if($usuarioObj->getSenha()=="123#@" 
	&& $usuarioObj->getUsername()=='admin'){
		header("Location:ok.html");
	} else {
		$mensagem="Erro de Login";
	}	
		
		
	
}
?>


<form action="" method="post">
Username: <input type="text" name="username"><br>
Senha: <input type="password" name="senha"><br>
<input type="submit" value="Ok">

<?php 
if($mensagem){
	echo $mensagem;
}
?>
</form>