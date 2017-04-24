<?php

include "contato.php";

$contatoObj = new Contato();
$contatoObj->setNome($_POST["nome"]);

echo "TABELA:<br>";

echo $contatoObj->getNome();

?>