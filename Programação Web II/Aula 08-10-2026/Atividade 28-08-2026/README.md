# Sistema de informações sobre países

Uma página web simples onde você digita o nome de um país e vê informações como capital, região, população, moeda, idiomas, fusos horários e a bandeira. Ao consultar, os textos rolam letra por letra e a bandeira troca com uma transição suave.

## Funcionalidades

- Busca de países pelo nome, com suporte à tecla Enter.
- Exibição de nome (em português, quando disponível), capital, região, sub-região, população, moeda, idiomas, fusos horários e bandeira.
- Animação de atualização: as letras saem e entram rolando para cima ou para baixo, alternando a direção entre os campos.
- Transição na bandeira: a imagem antiga sai e a nova aparece com um efeito de revelação.
- Mensagens de erro na própria página (campo vazio, país não encontrado, falha na API).
- Layout responsivo, com boa leitura em celular e computador.
- Respeita a configuração de "reduzir movimento" do sistema, exibindo os dados sem animação.

## Tecnologias

- HTML5
- CSS3
- JavaScript (sem frameworks ou bibliotecas)
- [Web Animations API](https://developer.mozilla.org/pt-BR/docs/Web/API/Web_Animations_API) para as animações
- API de países (Rest Countries)
- Fontes Bricolage Grotesque e Figtree, via Google Fonts

## Estrutura do projeto

```
├── index.html   # estrutura da página
├── style.css    # visual e layout
├── script.js    # consulta à API e animações
└── README.md
```

## Como usar

1. Baixe os arquivos do projeto na mesma pasta.
2. Abra o `index.html` no navegador.
3. Digite o nome de um país (por exemplo, "Brasil" ou "Japan") e clique em **Consultar**.

Não é preciso instalar nada. É necessário ter conexão com a internet para acessar a API e carregar as fontes.

## Como funciona

1. O formulário captura o envio e chama a função `consultarPais()`.
2. A função faz uma requisição à API com o nome digitado e pega o primeiro resultado da lista.
3. Os dados são organizados e enviados para a função `rolar()`, que anima a troca de cada texto, e para a função `trocarBandeira()`, que anima a imagem.
4. Se algo der errado, uma mensagem explica o problema abaixo da barra de busca.

## Chave da API

A chave de acesso está definida diretamente no `script.js`. Isso funciona para estudo e testes, mas **qualquer pessoa que abrir o site consegue ver a chave**. Se for publicar o projeto, gere uma chave nova e mantenha-a em um servidor, sem expô-la no código do navegador.

## Possíveis melhorias

- Sugestões de países enquanto o usuário digita.
- Lista de resultados quando a busca encontrar mais de um país.
- Histórico das últimas consultas.
- Tema escuro.
- Mover a chave da API para um servidor.
