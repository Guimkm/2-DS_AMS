<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gerador de tabuadas</h1>
    <div class="pagina">
    <div class="flex">
    <form action="" method="post">
            <label for="idnNum">Escreva o seu salario:</label><input type="number" name="Num" id="idNum">

            <input type="submit" value="Calcular">
    </form>
    <div class="resposta">
        <?php 

        $num = $_POST["Num"] ?? 0;

        if ($num != 0) {
            $res = $num * (10 / 100 + 1) / (20 / 100 + 1);
            echo "Seu sálario liquido será: " . number_format($res, 2, ",", ".") . "R$";
        }
        ?>
    </div>
    </div>
    </div>
</body>
</html>