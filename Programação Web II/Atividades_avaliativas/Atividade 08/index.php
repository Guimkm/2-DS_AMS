<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Número minimo e maximo</h1>
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

            <label for="idN3">Numero 3</label><input type="number" name="N3" id="idN3">

            <input type="submit" value="Calcular">
    </form>
    <div class="resposta">
        <?php 

        $n1 = $_POST["N1"] ?? 0;
        $n2 = $_POST["N2"] ?? 0;
        $n3 = $_POST["N3"] ?? 0;

        if ($n1 != 0 && $n2 != 0 && $n3 != 0) {
            $max = max($n1, $n2, $n3);
            $min = min($n1, $n2, $n3);
            echo"O maior numero é $max e o menor é $min";
        }
        ?>
    </div>
    </div>
    </div>
</body>
</html>