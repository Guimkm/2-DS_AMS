<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Verificador de par e impar</h1>
    <div class="pagina">
    <div class="flex">
    <form action="" method="post">
            <label for="idnNum">Escreva um numero:</label><input type="number" name="Num" id="idNum">

            <input type="submit" value="Gerar tabuada">
    </form>
    <div class="resposta">
        <?php 

        $num = $_POST["Num"] ?? 0;

        if (isset($num)) {
            if($num % 2 == 0){
                echo"O número é par!";
            } else{
                echo"O número é impar!";
            }
        }
        ?>
    </div>
    </div>
    </div>
</body>
</html>