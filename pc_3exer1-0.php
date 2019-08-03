<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 1-0</title>
    </head>
    <body>
        <h2>Sucesso!</h2>
        <?php
        $tipo=$_POST['selTipo'];
        $cor = $_POST['txtcor'];

        echo "Seu $tipo de $cor está pronto. Dirija com cuidado!";
        ?>
    </body>
</html>