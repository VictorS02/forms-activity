<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercício 5-0</title>
    </head>
    <body>
        <?php
        $opera=$_POST['radio'];
        $texto=$_POST['texto'];

        if($opera=="tamanho"){
            $resul=strlen($texto);
        }
        else if($opera=="inverter"){
            $resul=strrev($texto);
        }
        else if ($opera=="maiusculas"){
            $resul=strtoupper($texto);
        }
        else if ($opera=="minusculas"){
            $resul=strtolower($texto);
        }
        else if ($opera=="primeiraletra"){
            $resul=ucwords($texto);
        }
        ?>
        <p>Resultado da escolha </p><?php echo $resul ?>
        
    </body>
</html>