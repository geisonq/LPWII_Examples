<?php

namespace App\Curso;

include_once 'aluno.php';

$aluno = new Aluno("Pedro", "Info", "pedro@pedro.com.br");


?>


<table border="1">
    <tr>
        <td><strong>Nome:</strong></td>
        <td><?php echo $aluno->getNome(); ?></td>
    </tr>
    <tr>
        <td><strong>Curso:</strong></td>
        <td><?php echo $aluno->getCurso(); ?></td>
    </tr>
    <tr>
        <td><strong>Email:</strong></td>
        <td><?php echo $aluno->getEmail(); ?></td>
    </tr>
</table>