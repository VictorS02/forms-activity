<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 3-0</title>
    </head>
        <body>
            <h1>Sucesso!</h1>
            <p>Aqui está a informação que você submeteu:</p><br>
            <?php
                $tipo=$_POST['radio'];
                $nome=$_POST['nome'];
                $refeicao=$_POST['refei'];
            ?>
                <?php echo "Obrigado pela sua definição, $nome \n";?><br>
                <?php echo "Você realmente aprecia $refeicao\n";?><br>
                <?php echo "- especialmente com um bom vinho $tipo\n";?>   
        </body>
    </head>
</html>