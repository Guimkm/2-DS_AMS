<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculadora</h1>
    <div class="pagina">
    <div class="flex">
    <form action="" method="post">
        <div class="grid">
            <div style="grid-areas: box_1">
            <label for="idnN1">Numero 1</label><br><input type="number" name="N1" id="idN1">
            </div>
            
            <div style="grid-areas: box_2">
            <label for="idnD2">Numero 2</label><br><input type="number" name="N2" id="idN2">
            </div>
        </div>

            <label for="idTP">Tipo: | * | / | + | - |</label><input type="text" name="tp" id="idTp">

            <input type="submit" value="Calcular">
    </form>
    <div class="resposta">
        <?php 

        $n1 = $_POST["N1"] ?? 0;
        $n2 = $_POST["N2"] ?? 0;
        $tp = $_POST["tp"] ?? 0;

        if (isset($n1) || isset($n2) || isset($n3)) {
            switch($tp){
                case "+":
                    $res = $n1 + $n2;
                    echo"$n1 + $n2 é igual á: $res";
                break;

                case "-":
                    $res = $n1 - $n2;
                    echo"$n1 - $n2 é igual á: $res";
                break;

                case "/":
                    $res = $n1 / $n2;
                    echo"$n1 / $n2 é igual á: $res";
                break;

                case "*":
                    $res = $n1 * $n2;
                    echo"$n1 * $n2 é igual á: $res";
                break;
            }
        }
        ?>
    </div>
    </div>
    </div>
</body>
</html>