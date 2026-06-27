<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="_css/index.css">
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

    <figure class="poster">
    <img src="_imagens/baner.png" alt="Imagem do bloco A">
    <figcaption>
        <h1><?= "Bem-Vindo à ETEC Zona Leste"?></h1>
        <p><?= "Formando profissionais para o futuro com educação publica, gratuita e de qualidade"?></p>
        <button class="botao"><?= "Conheça nossos cursos"?></button>
    </figcaption>
    </figure>


<!-- ----------------------------Destaques--------------------------------------------- -->


<div class="destaques">
<h2 class="titulo_destaque"><?= "Destaques"?></h2>

<ul id="listaDestaque">  
<li class="avisos">
        <img src="_imagens/Avisos.png" alt="Icone avisos">
    <h2><?= "Avisos Importantes"?></h2>
    <p><?= "Fique por dentro dos comunicados e informações relevantes para os alunos e responsaveis."?></p>
</li>


<li class="eventos">
    <img src="_imagens/eventos.png" alt="Icone eventos">
    <h2><?= "Eventos"?></h2>
    <p><?= "Confira o calendário de eventos, palestras e atividades da nossa escola."?></p>
</li>

<li class="inscricoes">
        <img src="_imagens/inscrições.png" alt="Icone inscrições">
    <h2><?= "Inscrições Abertas"?></h2>
    <p><?= "Vagas abertas para novos alunos. Não perca tempo e garanta já a sua inscrição!"?></p>
</li>
</ul>
</div>


<!-- -------------------------------------Nossos cursos---------------------------------------- -->


<div class="nossos_cursos">
    
<h2 id="titulo_nossos_cursos"><?= "Nossos Cursos"?></h2>
<p><?= "Conheça os  cursos técnicos que preparam você para o mercado de trabalho."?></p>

<ul>
<li class="ds">
    <img src="_imagens/Icone_DS.png" alt="Icone DS">
    <h2><?= "Desenvolvimento de Sistemas"?></h2>
    <p><?= "Crie aplicações e sistemas com foco em tecnologia e inovação."?></p>
</li>


<li class="adm">
    <img src="_imagens/Icone_ADM.png" alt="Icone ADM">
    <h2><?= "Administração"?></h2>
    <p><?= "Aprenda sobre gestão empresarial, finanças, marketing e recursos humanos."?></p>
</li>

<li class="log">
    <img src="_imagens/Icone_LOG.png" alt="Icone_LOG">
    <h2><?= "Logistica"?></h2>
    <p><?= "Formação completa em gestão de processos, cadeia de suprimentos e operações logísticas."?></p>
</li>

<li class="rh">
    <img src="_imagens/Icone_RH.png" alt="Icone RH">
    <h2><?= "Recursos Humanos"?></h2>
    <p><?= "O tornará responsável para poder gerir o capital humano de uma organização. <span>___________</span>"?></p>
</li>
</ul>
<a href="cursos.php"><button class="botao_cursos"><?= "Ver todos os cursos"?></button></a>
</div>


<!-- ----------------------------------Sobre a Etec Zona Leste------------------------------------------- -->


<div class="sobre">

<img src="_imagens/etec_zona_leste.jpeg" alt="Entrada etec zona leste" class="etec">

<h2><?= "Sobre a ETEC Zona Leste"?></h2>

<p><?= "A ETEC zona Leste é uma escola técnica pública comprometida com a formação de profissionais qualificados , oferecendo ensino grtuito e de qualidade para preparar  jovens paraos desafios do mercado de trabalho."?></p>

<div class="missao">
<img src="_imagens/icone_missao.png" alt="icone missão" class="icone_missao">
<p><span class="negrito"><?= "Nossa Missão:"?></span><?= " Promover educação de execelencia, formando cidadãos éticos e competentes, contribuindo para o desenvolvimento da comunidade."?></p>
</div>
</div>


<!-- ----------------------------------Contato Rapido------------------------------------------- -->

<div class="contato_rapido">
<h2><?= "Contato Rápido"?></h2>

<div class="linha_contato">
    <div class="item_contato">
        <img src="_imagens/telefone.png" alt="icone telefone" class="telefone">
        <span><?= "(11) 1234-5678"?></span>
    </div>

    <div class="item_contato">
        <img src="_imagens/email.png" alt="icone email" class="email">
        <span><?= "contato@cps.sp.gov.br"?></span>
    </div>

    <div class="item_contato_endereco">
        <img src="_imagens/local.png" alt="icone local" class="local">
        <span><?= "Avenida Águia de Haia - 2633<br>Cidade AE Carvalho - SP"?></span>
    </div>

        <a href="contato.php">
            <button class="botao_contato">
                <img src="_imagens/narancia.png" alt="icone avião de papel" class="aviao">
                <?= "Fale conosco"?>
            </button>
        </a>
    </div>
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