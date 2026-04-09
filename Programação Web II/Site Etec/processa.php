<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa</title>
    <link rel="stylesheet" href="_css/processa.css">
</head>
<body>


<!-- ---------------------------nav e baner----------------------------------------- -->


    <div class="navbar">
    <nav><img src="_imagens/logo_etec.png" alt="Etec Zona Leste | CPS centro paula souza" class="logo_nav"></nav>
    <ul id="navbar">
        <li class="home"><a href="index.php"><?= "Home"?></a></li>
        <li class="cursos"><a href="cursos.php"><?= "Cursos"?></a></li>
        <li class="gestao"><a href="gestao.php"><?= "Gestão"?></a></li>
        <li class="contatos"><a href="contato.php"><?= "Contato"?></a></li>
    </ul>
    </div>
    

<!-- ----------------------------------mensagem------------------------------------------- -->


<div class="mensagem">
    <?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunt = $_POST["assunt"];
    $mens = $_POST["mens"];

    echo "
    <div class=\"campo\"><h2>Seu nome:</h2> <p>$nome</p></div>
    <div class=\"campo\"><h2>Seu E-mail:</h2> <p>$email</p></div>
    <div class=\"campo\"><h2>Assunto da mensagem:</h2> <p>$assunt</p></div>
    <div class=\"campo\"><h2>Mensagem enviada:</h2> <p>$mens</p></div>";
    ?>
</div>



<!-- ----------------------------------Footer------------------------------------------- -->


<footer>

    <div class="logo_footer">
    <img src="_imagens/logo_etec_footer.png" alt="logo etec">
    </div>
    <div class="links">
        <h2><?= "Links Rápidos"?></h2>
        <ul class="colun_1">
            <li><a href="index.php"><?= "Home"?></a></li>
            <li><a href="cursos.php"><?= "Cursos"?></a></li>
        </ul>

        <ul class="colun_2">
            <li><a href="gestao.php"><?= "Gestão"?></a></li>
            <li><a href="contato.php"><?= "Contato"?></a></li>
        </ul>
    </div>

    <div class="redes_sociais">
        <h2><?= "Redes Socias"?></h2>
        <img src="_imagens/redes_sociais.png" alt="Redes da escola">
    </div>

    <div class="footer_bottom">
        <?= "&copy; 2026 ETEC Zona Leste. Todos os direitos reservados. "?>
    </div>


</footer>
</body>
</html>