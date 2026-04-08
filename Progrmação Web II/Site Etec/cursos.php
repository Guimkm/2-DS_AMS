<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Etec Zona Leste</title>
    <link rel="stylesheet" href="_CSS/cursos.css">
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


<!-- ----------------------------------titulo------------------------------------------- -->


<div class="titulo">
    <h1><?= "Cursos Técnicos – ETEC Zona Leste"?></h1>
    <p><?= "Conheça todos os cursos disponíveis e prepare-se para o mercado de trabalho."?></p>
</div>


<!-- ----------------------------------cursos tecnicos------------------------------------------- -->


<div class="cinza">
<div class="cards">
        <h2 class="titulo_cursos"><?= "Cursos Técnicos"?></h2>
<ul class="linha1">
<li class="curso_adm">
    <img src="_imagens/Icone_ADM.png" alt="icone adm">
    <h2><?= "Administração"?></h2>
    <p><?= "Aprenda sobre gestão empresarial, finanças, marketing e recursos humanos."?></p>

    <div class="saiba_mais">
        <img src="_imagens/calendarinho.png" alt="calendarinho">
        <p><?= "3 Semestres"?></p>
        <button><p><?= "Saiba mais"?></p> <img src="_imagens/seta.png" alt="seta"></button>
    </div>
</li>

<li class="curso_cont">
    <img src="_imagens/icone_cont.png" alt="icone contabilidade">
    <h2><?= "Contabilidade"?></h2>
    <p><?= "oferece uma formação completa e uma compreensão profunda das leis e regulamentos contábeis, preparando os alunos."?></p>

    <div class="saiba_mais">
        <img src="_imagens/calendarinho.png" alt="calendarinho">
        <p><?= "3 Semestres"?></p>
        <button><p><?= "Saiba mais"?></p> <img src="_imagens/seta.png" alt="seta"></button>
    </div>
</li>

<li class="curso_ds">
    <img src="_imagens/Icone_DS.png" alt="icone ds">
    <h2><?= "Desenvolvimento de sistemas"?></h2>
    <p><?= "Crie aplicações e sistemas com foco em tecnologia e inovação."?></p>

    <div class="saiba_mais">
        <img src="_imagens/calendarinho.png" alt="calendarinho">
        <p><?= "3 Semestres"?></p>
        <button><p><?= "Saiba mais"?></p> <img src="_imagens/seta.png" alt="seta"></button>
    </div>
</li>

<li class="curso_fin">
    <img src="_imagens/icone_finacas.png" alt="icone finaças">
    <h2><?= "Finanças"?></h2>
    <p><?= "Monitaramento e entedimento sobre a manipulação de suas finanças e de seu dinheiro."?></p>

    <div class="saiba_mais">
        <img src="_imagens/calendarinho.png" alt="calendarinho">
        <p><?= "3 Semestres"?></p>
        <button><p><?= "Saiba mais"?></p> <img src="_imagens/seta.png" alt="seta"></button>
    </div>
</li>
</ul>

<ul class="linha2">
<li class="curso_log">
    <img src="_imagens/Icone_LOG.png" alt="icone log">
    <h2><?= "Logistica"?></h2>
    <p><?= "Formação completa em gestão de processos, cadeia de suprimentos e operações logísticas. "?></p>

    <div class="saiba_mais">
        <img src="_imagens/calendarinho.png" alt="calendarinho">
        <p><?= "3 Semestres"?></p>
        <button><p><?= "Saiba mais"?></p> <img src="_imagens/seta.png" alt="seta"></button>
    </div>
</li>

<li class="curso_rh">
    <img src="_imagens/Icone_RH.png" alt="icone RH">
    <h2><?= "Recursos humanos"?></h2>
    <p><?= "O tornará responsável para poder gerir o capital humano de uma organização."?></p>

    <div class="saiba_mais">
        <img src="_imagens/calendarinho.png" alt="calendarinho">
        <p><?= "3 Semestres"?></p>
        <button><p><?= "Saiba mais"?></p> <img src="_imagens/seta.png" alt="seta"></button>
    </div>
</li>

<li class="curso_sj">
    <img src="_imagens/icone_sj.png" alt="icone sj">
    <h2><?= "Serviços jurídicos"?></h2>
    <p><?= "Oferece uma abordagem abrangente das leis e normas que regem as diferentes esferas da sociedade."?></p>

    <div class="saiba_mais">
        <img src="_imagens/calendarinho.png" alt="calendarinho">
        <p><?= "3 Semestres"?></p>
        <button><p><?= "Saiba mais"?></p> <img src="_imagens/seta.png" alt="seta"></button>
    </div>
    </div>
</li>
</ul>
</div>


<!-- ----------------------------------M -Tec------------------------------------------- -->


<div class="cards">
    <div class="mtec">
        <h2><?= "Ensino médio integrado (M - Tec)"?></h2>
        <p><?= "Curso integrado ao ensino médio com formação técnica."?></p>
        <ul>
            <li class="adm_mtec">
                <img src="_imagens/icone_adm.png" alt="icone adm">
                <h2><?= "ADM.<br>(M - Tec)"?></h2>
                <p><?= "Oferece uma abordagem abrangente das leis e normas que regem as diferentes esferas da sociedade."?></p>
                <div class="saiba_mais">
                    <button><p><?= "Saiba mais"?></p> <img src="_imagens/seta.png" alt="seta"></button>
                </div>
            </li>
            <li class="log_mtec">
                <img src="_imagens/icone_log.png" alt="icone log">
                <h2><?= "LOG.<br>(M -tec)"?></h2>
                <p><?= "Oferece uma abordagem abrangente das leis e normas que regem as diferentes esferas da sociedade."?></p>
                <div class="saiba_mais">
                    <button><p><?= "Saiba mais"?></p> <img src="_imagens/seta.png" alt="seta"></button>
                </div>
            </li>
            <li class="ds_mtec">
                <img src="_imagens/icone_ds.png" alt="icone ds">
                <h2><?= "D.S.<br>(M - Tec)"?></h2>
                <p><?= "Oferece uma abordagem abrangente das leis e normas que regem as diferentes esferas da sociedade."?></p>
                <div class="saiba_mais">
                    <button><p><?= "Saiba mais"?></p> <img src="_imagens/seta.png" alt="seta"></button>
                </div>
            </li>
            <li class="rh_mtec">
                <img src="_imagens/icone_rh.png" alt="icone rh">
                <h2><?= "R.H.<br>(M -Tec)"?></h2>
                <p><?= "Oferece uma abordagem abrangente das leis e normas que regem as diferentes esferas da sociedade."?></p>
                <div class="saiba_mais">
                    <button><p><?= "Saiba mais"?></p> <img src="_imagens/seta.png" alt="seta"></button>
                </div>
            </li>
        </ul>
    </div>
</div>


<!-- ----------------------------------AMS------------------------------------------- -->


<div class="cards">
    <div class="ams">
    <h2 class="titulo_ams"><?= "Ensino médio tecnico e superior (AMS)"?></h2>
        <ul>
            <li class="ds_ams">
                <img src="_imagens/barra_ams.png" alt="barra ams" class="barra_ams">
                <img src="_imagens/icone_ds_branco.png" alt="icone ds">
                <h2><?= "D.S. / M - Tec (AMS)"?></h2>
                <p><?= "Crie aplicações e sistemas com foco em tecnologia e inovação, indo mais alem em sua facultade gratuita."?></p>

                <div class="saiba_mais">
                    <img src="_imagens/calendarinho.png" alt="calendarinho">
                    <p><?= "5 Semestres"?></p>
                    <button><p><?= "Saiba mais"?></p> <img src="_imagens/seta.png" alt="seta"></button>
                </div>
            </li>


            <li class="rh_ams">
                <img src="_imagens/barra_ams.png" alt="barra ams" class="barra_ams">
                <img src="_imagens/icone_rh_branco.png" alt="icone ds">
                <h2><?= "R.H. / M - Tec (AMS)"?></h2>
                <p><?= "O tornará responsável para poder gerir o capital humano de uma organização, de forma ainda mais profissional pela faculdade."?></p>

                <div class="saiba_mais">
                    <img src="_imagens/calendarinho.png" alt="calendarinho">
                    <p><?= "5 Semestres"?></p>
                    <button><p><?= "Saiba mais"?></p> <img src="_imagens/seta.png" alt="seta"></button>
                </div>
            </li>
        </ul>
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