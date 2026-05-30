<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculador de descontos</h1>
    <div class="pagina">
    <div class="flex">
    <form action="" method="post">
        <div class="grid">

            <div style="grid-areas: box_1">
            <label for="idnNum">Preço:</label><br><input type="number" name="Num" id="idNum">
            </div>
            
            <div style="grid-areas: box_2">
            <label for="idnDesc">Desconto:</label><br><input type="number" name="Desc" id="idDesc">
            </div>

        </div>
            <input type="submit" value="Calcular">
    </form>
    <div class="resposta">
        <?php 

        $num = $_POST["Num"] ?? 0;
        $desc = $_POST["Desc"] ?? 0;

        if ($num != 0 && $desc != 0) {
            $preco = $num * ($desc / 100);
            echo"Você irá pagar apenas: " . number_format($preco, "2", ",", ".") . "R$";
        }
        ?>
    </div>
    </div>
    </div>
</body>
</html>