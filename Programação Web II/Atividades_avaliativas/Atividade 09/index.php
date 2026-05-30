<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Soma dos impares</h1>
    <div class="pagina">
    <div class="flex">
    <form action="" method="post">
        <div class="grid">

            <div style="grid-areas: box_1">
            <label for="idnNum1">Número 1</label><br><input type="number" name="Num1" id="idNum1">
            </div>
            
            <div style="grid-areas: box_2">
            <label for="idnNum2">Número 2</label><br><input type="number" name="Num2" id="idNum2">
            </div>

        </div>
            <input type="submit" value="Calcular">
    </form>
    <div class="resposta">
        <?php 
if (isset($_POST["Num1"]) && isset($_POST["Num2"])) {
        $num1 = (int)$_POST["Num1"];
        $num2 = (int)$_POST["Num2"];

        $max = max($num1, $num2) - 1;
        $min = min($num1, $num2) + 1;
        $soma = 0;

        
            for($i = $min; $i <= $max; $i++){
                if($i % 2 != 0){
                    $soma += $i;
                }
                }
            echo"A soma dos numeros impares é igual a: $soma";
        }
        ?>
    </div>
    </div>
    </div>
</body>
</html>