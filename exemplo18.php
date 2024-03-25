<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
            <?php
                echo " Operadores relacionais<br><br>";
                // > Maior
                // < Menor
                // == Igual
                // != Diferente
                // >= Maior ou igual
                // <= Menor ou igual
                // === Identico

                $fNota1 = $_GET["nota1"];
                $fNota2 = $_GET["nota2"];
                $fMedia = ($fNota1+$fNota2)/2;

                echo "A média entre $fNota1 e $fNota2 é igual a $fMedia<br>";
                $sSituacao = ($fMedia >=50)?"APROVADO":"REPROVADO";
                echo "A situação do aluno é $sSituacao";

                //EXEMPLO: http://localhost/BACKEND/exemplo18.php?nota1=90&nota2=80
            ?>
        </div>
    </body>
</html>