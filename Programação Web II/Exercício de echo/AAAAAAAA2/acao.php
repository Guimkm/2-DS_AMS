<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acão do php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    $nome = $_POST["nome"];
    $num = $_POST["num"];

    echo "Seu nome é $nome e você tem $num anos de idade.";
    ?>
</body>
</html>