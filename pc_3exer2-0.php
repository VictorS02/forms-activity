<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 2-0</title>
    </head>
    <body>
        <h2>Seletor de Cores Interativo</h2>
        <?php
        $r=$_POST['r'];
        $g=$_POST['g'];
        $b=$_POST['b'];

        $rgb=$r.','.$g.','.$b;?>
        R:<?php echo "$r";?>
        G:<?php echo "$g";?>
        B:<?php echo "$b";?>
        <br /><br />

        <div style="width:150px; height:150px; background-color:rgb(<?php echo "$r,$g,$b";?>)"></div>
    </body>
</html>