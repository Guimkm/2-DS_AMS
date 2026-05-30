<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 04</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

        $num1 = $_POST["Num1"] ?? 0;
        $num2 = $_POST["Num2"] ?? 0;

            $troca = $num1;
            $num1 = $num2;
            $num2 = $troca;
    ?>


    <h1>Troca de valores</h1>
    <div class="pagina">
    <div class="flex">
    <form action="" method="post">
        <div class="grid">

            <div style="grid-areas: box_1">
            <label for="idnNum1">Numero 1</label><br><input type="number" name="Num1" id="idNum1" value='<?php echo
            "$num1"?>'>
            </div>
            
            <div style="grid-areas: box_2">
            <label for="idnNum1">Numero 2</label><br><input type="number" name="Num2" id="idNum2" value='<?php echo
            "$num2"?>'>
            </div>

        </div>
            <input type="submit" value="Calcular">
    </form>
    </div>
    </div>
</body>
</html>