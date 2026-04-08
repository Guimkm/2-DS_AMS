<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão Etec Zona Leste</title>
    <link rel="stylesheet" href="_css/gestao.css">
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


<!-- ----------------------------------Inicio------------------------------------------- -->


<div class="inicio">
    <h2><?= "Gestão"?></h2>
    <p><?= "A Gestão da Etec Zona Leste trabalha para garantir uma escola organizada, transparente e eficiente, sempre focada na qualidade do ensino e no atendimento à comunidade escolar."?></p>
    <p><?= "Aqui você encontra informações sobre a estrutura administrativa, documentos institucionais, canais de atendimento e as principais ações desenvolvidas pela unidade."?></p>
    <img src="_imagens/grupo_empresarial.png" alt="grupo empresarial" class="imagem_inicio">
</div>


<!-- ----------------------------------Cards------------------------------------------- -->


<div class="cards">
    <ul>
        <li class="direcao">
            <img src="_imagens/icone_direcao.png" alt="icone direção">
            <h2><?= "Direção"?></h2>
            <p><?= "Responsavel pela coordenação geral da escola e pelo planejamento das ações pedagógicas e administrativas."?></p>
        </li>

        <li class="equipe">
            <img src="_imagens/icone_equipe.png" alt="icone equipe">
            <h2><?= "Equipe gestora"?></h2>
            <p><?= "Responsavel pela coordenação geral da escola e pelo planejamento das ações pedagógicas e administrativas."?></p>
        </li>

        <li class="documentos">
            <img src="_imagens/icone_transparencia.png" alt="icone documentos">
            <h2><?= "Documentos"?></h2>
            <p><?= "Responsavel pela coordenação geral da escola e pelo planejamento das ações pedagógicas e administrativas."?></p>
        </li>

        <li class="trasparencia">
            <img src="_imagens/icone_direcao.png" alt="icone transparencia">
            <h2><?= "Trasnparencia"?></h2>
            <p><?= "Responsavel pela coordenação geral da escola e pelo planejamento das ações pedagógicas e administrativas."?></p>
        </li>
    </ul>
</div>


<!-- ----------------------------------lista------------------------------------------- -->


<div class="lista">
    <div class="atribuicoes">
        <h2><?= "Atribuições da gestão"?></h2>
        <p class="subtitulo"><?= "A equipe gestora tem como principais responsabilidades:"?></p>
        <p><img src="_imagens/check.png" alt="check"><?= "Planejar e acompanhar as ações pedagógicas e administrativas."?></p>
        <p><img src="_imagens/check.png" alt="check"><?= "Garantir a qualidade do ensino e o bom funcionamento da escola."?></p>
        <p><img src="_imagens/check.png" alt="check"><?= "Promover um ambiente seguro, inclusivo e acolhedor."?></p>
        <p><img src="_imagens/check.png" alt="check"><?= "Gerir recursos públicos com responsabilidade e transparencia."?></p>
        <p><img src="_imagens/check.png" alt="check"><?= "Fortalecer o dialogo com alunos, familias e comunidade"?></p>
    </div>

        <div class="documentos">
        <h2><?= "Documentos e informações"?></h2>
        <p class="subtitulo"><?= "Consulte documentos importantes da escola:"?></p>
        <p><img src="_imagens/documento.png" alt="check"><?= "Regimento Escolar "?><img src="_imagens/seta_sem_fundo.png" alt="seta" class="seta"></p>
        <p><img src="_imagens/documento.png" alt="check"><?= "Calendario Escolar "?><img src="_imagens/seta_sem_fundo.png" alt="seta" class="seta"></p>
        <p><img src="_imagens/documento.png" alt="check"><?= "Relatório de gestão "?><img src="_imagens/seta_sem_fundo.png" alt="seta" class="seta"></p>
        <p><img src="_imagens/documento.png" alt="check"><?= "Prestação de contas "?><img src="_imagens/seta_sem_fundo.png" alt="seta" class="seta"></p>
        <p><img src="_imagens/documento.png" alt="check"><?= "Planos e projetos "?><img src="_imagens/seta_sem_fundo.png" alt="seta" class="seta"></p>
    </div>
</div>


<!-- ----------------------------------transparencia------------------------------------------- -->


<div class="transparencia">
    <h2><?= "Trasnparência e Prestação de Contas"?></h2>
    <p><?= "A ETEC Zona leste segue as diretrizas do centro paula Souza e do Governo do Estado de São Paulo para garantir o uso correto e transparente dos recursos públicos."?></p>
    <p><?= "Aqui você pode acompanhar relatórios, indicadores e informações que mostram o compromisso da escola com uma gestão responsavel e voltada para resultados."?></p>
    <div class="post">
        <img src="_imagens/escudo_transparencia.png" alt="escudo">
        <p><?= "Gestão transparente, nossa escola transformando vidas"?></p>
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