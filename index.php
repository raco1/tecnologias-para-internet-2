<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tecnologias para Internet 2</title>
</head>
<body>
    <main>
        <h1>Média das notas:</h1>
        
        <p>
            <?php
                $media = calcularMedia(3, 10, "Frederico");
                echo $media;
            ?>
        </p>

        <p>
            <?php
                $media = calcularMedia(8, 10, "Igor Kendi");
                echo $media;
            ?>
        </p>
    </main>
</body>
<?php
    function calcularMedia($nota1, $nota2, $aluno1){
        return "A média das notas do aluno  " . $aluno1 . " é " . ($nota1 + $nota2)/2 . " pontos.";
    }
?>
</html>