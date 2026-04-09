<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato Etec Zona Leste</title>
    <link rel="stylesheet" href="_css/contato.css">
</head>
<body>
    

<!-- ---------------------------navbar----------------------------------------- -->


    <div class="navbar">
    <nav><img src="_imagens/logo_etec.png" alt="Etec Zona Leste | CPS centro paula souza" class="logo_nav"></nav>
    <ul id="navbar">
        <li class="home"><a href="index.php"><?= "Home"?></a></li>
        <li class="cursos"><a href="cursos.php"><?= "Cursos"?></a></li>
        <li class="gestao"><a href="gestao.php"><?= "Gestão"?></a></li>
        <li class="contatos"><a href="contato.php"><?= "Contato"?></a></li>
    </ul>
    </div>


<!-- ----------------------------------formulario------------------------------------------- -->

<div class="formulario">
    
    <h2><?= "Entre em Contato"?></h2>
    <p class="subtitulo"><?= "Preencha o formulário abaixo para entrar em contato conosco.
    Responderemos o mais breve possivel!"?></p>
    
    <form action="processa.php" method="POST">
        
        <p class="nome"><label for="idNome"><?= "Nome Completo"?></label><br><input type="text" name="nome" id="idNome" placeholder="Digite seu nome completo"></p>
    
        <p class="email"><label for="idEmail"><?= "E-mail"?></label><br><input type="email" name="email" id="idEmail" placeholder="Digite seu e-mail"></p>
    
        <p class="assunt"><label for="idAssunto"><?= "Assunto"?></label><br><input type="text" name="assunt" id="idAssunto" placeholder="Informe o assunto"></p>
    
        <p class="mens"><label for="idMens"><?= "Mensagem"?></label><br><textarea name="mens" id="idMens" cols="105" rows="10" placeholder="Digite sua mensagem"></textarea></p>

        <input type="submit" value="Enviar mensagem" class="botao">
    </form>
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