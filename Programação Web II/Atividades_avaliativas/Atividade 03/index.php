<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculador de média</h1>
    <div class="pagina">
    <div class="flex">
    <form action="" method="post">
        <div class="grid">

            <div style="grid-areas: box_1">
            <label for="idnN1">Nota 1</label><br><input type="number" name="N1" id="idN1" min="1" max="10">
            </div>
            
            <div style="grid-areas: box_2">
            <label for="idnD2">Nota 2</label><br><input type="number" name="N2" id="idN2" min="1" max="10">
            </div>

            <div style="grid-areas: box_3">
            <label for="idN3">Nota 3</label><br><input type="number" name="N3" id="idN3" min="1" max="10">
            </div>

            <div style="grid-areas: box_4">
            <label for="idN4">Nota 4</label><br><input type="number" name="N4" id="idN4" min="1" max="10">
            </div>
        </div>
            <input type="submit" value="Calcular">
    </form>
    <div class="resposta">
        <?php 

        $n1 = $_POST["N1"] ?? 0;
        $n2 = $_POST["N2"] ?? 0;
        $n3 = $_POST["N3"] ?? 0;
        $n4 = $_POST["N4"] ?? 0;

        if ($n1 != 0 && $n2 != 0 && $n3 != 0 && $n4 != 0) {
            $media = ($n1 + $n2 + $n3 + $n4) / 4;
            if($media > 5){
                echo"Parabens o aluno passou!<br>Média: $media";
            } else {
                echo"Infelismente o aluno foi reprovado!<br>Média: $media";
            }
        }
        ?>
    </div>
    </div>
    </div>
</body>
</html>