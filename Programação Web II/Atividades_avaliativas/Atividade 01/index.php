<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gerador de tabuadas</h1>
    <div class="pagina">
    <div class="flex">
    <form action="" method="post">
            <label for="idnNum">Escreva o numero desejado:</label><input type="number" name="Num" id="idNum">

            <input type="submit" value="Gerar tabuada">
    </form>
    <div class="resposta">
        <?php 

        $num = $_POST["Num"] ?? 0;

        if ($num != 0) {
        echo
        "$num * 1 = " . $num * 1 .
        "<br>$num * 2 = " . $num * 2 .
        "<br>$num * 3 = " . $num * 3 .
        "<br>$num * 4 = " . $num * 4 .
        "<br>$num * 5 = " . $num * 5 .
        "<br>$num * 6 = " . $num * 6 .
        "<br>$num * 7 = " . $num * 7 .
        "<br>$num * 8 = " . $num * 8 .
        "<br>$num * 9 = " . $num * 9 .
        "<br>$num * 10 = " . $num * 10;
        }
        ?>
    </div>
    </div>
    </div>
</body>
</html>