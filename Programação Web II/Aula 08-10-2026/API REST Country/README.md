# Sistema de informações sobre países

Site simples para consultar dados de qualquer país: capital, região, sub-região, população, moeda, idiomas, fusos horários e bandeira. Os textos aparecem com uma animação de letras que rolam, e a bandeira troca com uma transição suave.

A consulta à API é feita no servidor com PHP, então a chave de acesso nunca chega ao navegador.

### [Video Representativo](https://youtu.be/X_pkfXl-IVk)

## Funcionalidades

- Busca por nome de país (aceita o nome em português ou inglês, conforme a API)
- Exibe capital, região, sub-região, população, moeda, idiomas e fusos horários
- Mostra a bandeira do país
- Animações em JavaScript (Web Animations API) nos textos e na bandeira
- Respeita a preferência do sistema por menos movimento (`prefers-reduced-motion`)
- Acessível: texto lido por leitores de tela, mensagens de status com `role="status"`
- Layout responsivo para celular e desktop

## Estrutura do projeto

```
.
├── index.php    # Página (HTML) + endpoint PHP que consulta a API
├── script.js    # Lógica da consulta e animações
├── style.css    # Estilos
└── README.md
```

## Como funciona

1. O usuário digita o país e envia o formulário.
2. O `script.js` faz um `fetch` para `index.php?q=<país>`.
3. No topo do `index.php`, o PHP detecta o parâmetro `q`, chama a API REST Countries com a chave (via cURL) e devolve um JSON com só os campos necessários.
4. O `script.js` recebe o JSON e anima a troca dos textos e da bandeira.

Respostas do endpoint:

| Status | Significado |
| ------ | ----------- |
| 200 | País encontrado (retorna o JSON) |
| 400 | Consulta vazia ou inválida |
| 404 | País não encontrado |
| 502 | Falha ao consultar a API externa |

## Requisitos

- PHP 7.4 ou superior (usa funções de seta)
- Extensão **cURL** habilitada
- Uma chave de acesso da API REST Countries

## Instalação e execução

1. Baixe ou clone os arquivos em uma pasta.
2. Configure a chave da API (veja abaixo).
3. Inicie um servidor PHP na pasta do projeto:

   ```bash
   php -S localhost:8000
   ```

4. Abra `http://localhost:8000/index.php` no navegador.

> Abrir o arquivo direto no navegador (`file://`) não funciona, porque o PHP precisa ser executado por um servidor.

## Configuração da chave da API

A chave é lida da variável de ambiente `RESTCOUNTRIES_API_KEY`.

**Linux / macOS**

```bash
export RESTCOUNTRIES_API_KEY="sua_chave_aqui"
php -S localhost:8000
```

**Windows (PowerShell)**

```powershell
$env:RESTCOUNTRIES_API_KEY="sua_chave_aqui"
php -S localhost:8000
```

Alternativamente, substitua `COLE_SUA_NOVA_CHAVE_AQUI` no topo do `index.php`. Nesse caso, não envie o arquivo com a chave para repositórios públicos.

## Segurança

- Nunca coloque a chave no `script.js` ou em qualquer arquivo carregado pelo navegador.
- Se a chave já foi exposta em algum momento, revogue-a no painel da API e gere uma nova.
- O endpoint limita o tamanho da busca a 100 caracteres e usa `urlencode` antes de chamar a API.

## Tecnologias

- HTML5, CSS3 e JavaScript (sem bibliotecas)
- PHP com cURL
- API [REST Countries](https://restcountries.com)
- Fontes Google: Bricolage Grotesque e Figtree
