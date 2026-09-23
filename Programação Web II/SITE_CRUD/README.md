# Clube de Assinaturas - Gestão de Membros

Site em PHP para gerenciar um clube de assinaturas: assinantes, planos, assinaturas e pagamentos, com painel de visão geral e CRUD completo de cada tabela.

## Tecnologias

- PHP 7.4+ com PDO (MySQL 8+ ou MariaDB)
- HTML e CSS puros, sem framework
- [Barba.js](https://barba.js.org/) e [GSAP](https://gsap.com/) (com DrawSVG) para a transição de página com a linha ondulada
- Fontes Bricolage Grotesque e Figtree (Google Fonts)

Barba, GSAP e as fontes são carregados por CDN, então é preciso ter internet.

## Como rodar (XAMPP)

1. Inicie **Apache** e **MySQL** no painel do XAMPP.
2. Abra o phpMyAdmin (`http://localhost/phpmyadmin`), vá em **Importar** e envie o arquivo `clube_assinaturas.sql`. Ele recria o banco `clube_assinaturas` com dados de exemplo.
   > Atenção: o script começa com `DROP DATABASE IF EXISTS`, então apaga um banco existente com esse nome.
3. Copie a pasta `SITE_CRUD` para `C:\xampp\htdocs\`.
4. Acesse `http://localhost/SITE_CRUD/`.

Se o seu MySQL tiver usuário ou senha diferentes de `root` sem senha, ajuste o arquivo `conexao.php`.

## Páginas

| Página | O que faz |
|---|---|
| `index.php` | Visão geral: assinaturas ativas, assinantes, valor recebido no mês, atrasos, assinaturas por plano e próximos vencimentos |
| `assinantes.php` | Lista, busca, cadastra, edita e exclui assinantes |
| `assinaturas.php` | Vincula assinante e plano; filtro por situação (ativa, suspensa, cancelada, expirada) |
| `pagamentos.php` | Controle de cobranças; filtro por situação (pendente, pago, atrasado, cancelado) |
| `planos.php` | Gerencia planos, valores e duração; permite desativar um plano |
| `form.php` | Formulário único de cadastro e edição (`form.php?e=planos`, `form.php?e=planos&id=2`) |
| `excluir.php` | Recebe a confirmação de exclusão (somente POST) |

## Estrutura de arquivos

```
SITE_CRUD/
├── index.php, assinantes.php, assinaturas.php, pagamentos.php, planos.php
├── form.php            criar e editar
├── excluir.php         excluir
├── conexao.php         conexão PDO com o banco
├── inc/
│   ├── bootstrap.php   funções de apoio, menu e layout (topo e rodapé)
│   ├── entidades.php   configuração de cada tabela (colunas e campos)
│   └── lista.php       listagem genérica usada pelas 4 páginas
├── CSS/estilo.css      todo o visual do site
└── JS/
    ├── transicao.js    transição de página (Barba + GSAP)
    └── app.js          busca, filtro e janela de exclusão
```

## Como funciona o CRUD

As quatro tabelas são descritas em `inc/entidades.php`. Cada entrada define:

- `sql`: a consulta usada na listagem (com JOINs, quando precisa mostrar nomes)
- `cols`: as colunas exibidas e o formato (data, moeda, CPF, situação etc.)
- `campos`: os campos do formulário, o tipo (texto, data, número, seleção, caixa de marcação), se são obrigatórios e os valores padrão

Listagem, formulário e exclusão leem essa configuração. Para adicionar ou alterar um campo, edite só esse arquivo.

## Regras e cuidados

- Todas as consultas usam *prepared statements* (PDO), e toda saída é escapada, o que protege contra SQL Injection e XSS.
- A exclusão exige confirmação e é feita por POST.
- CPF é salvo só com números (a pontuação digitada é removida) e UF é convertida para maiúsculas.
- Erros de CPF, e-mail ou nome duplicado, data de fim anterior à de início e valores negativos aparecem em português no formulário.
- Excluir um **assinante** apaga também as assinaturas e pagamentos dele (`ON DELETE CASCADE`).
- Excluir uma **assinatura** apaga os pagamentos dela.
- Um **plano** com assinaturas não pode ser excluído; desative-o na edição.

## Ideias para evoluir

- Login e controle de acesso para a área administrativa
- Atualizar automaticamente para "atrasado" os pagamentos pendentes vencidos
- Paginação nas listagens quando houver muitos registros
- Gerar cobranças mensais automaticamente ao criar uma assinatura
