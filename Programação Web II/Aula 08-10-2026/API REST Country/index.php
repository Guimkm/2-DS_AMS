
<?php
// ---------- API (chamada via fetch: index.php?q=país) ----------
if (isset($_GET['q'])) {
    header('Content-Type: application/json; charset=utf-8');
 
    // Ideal: definir a chave como variável de ambiente (RESTCOUNTRIES_API_KEY).
    $API_KEY = getenv('RESTCOUNTRIES_API_KEY') ?: 'rc_live_2d0bbc1e7cdb4ccfb5178d5f4231b3df';
 
    function responder(int $status, array $dados): void {
        http_response_code($status);
        echo json_encode($dados, JSON_UNESCAPED_UNICODE);
        exit;
    }
 
    $q = trim($_GET['q']);
    if ($q === '' || mb_strlen($q) > 100) {
        responder(400, ['erro' => 'Consulta inválida.']);
    }
 
    $ch = curl_init('https://api.restcountries.com/countries/v5?q=' . urlencode($q));
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 10,
        CURLOPT_HTTPHEADER     => ["Authorization: Bearer $API_KEY"],
    ]);
    $corpo  = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
 
    if ($corpo === false || $status >= 400) {
        responder(502, ['erro' => 'Falha ao consultar a API.']);
    }
 
    $pais = json_decode($corpo, true)['data']['objects'][0] ?? null;
    if (!$pais) {
        responder(404, ['erro' => 'País não encontrado.']);
    }
 
    responder(200, [
        'nome'      => $pais['names']['common'] ?? null,
        'nomePt'    => $pais['names']['translations']['por']['common'] ?? null,
        'capital'   => $pais['capitals'][0]['name'] ?? null,
        'regiao'    => $pais['region'] ?? null,
        'subregiao' => $pais['subregion'] ?? null,
        'populacao' => $pais['population'] ?? null,
        'moeda'     => $pais['currencies'][0]['name'] ?? null,
        'idiomas'   => array_map(fn($l) => $l['name'], $pais['languages'] ?? []),
        'bandeira'  => $pais['flag']['url_png'] ?? null,
        'timezones' => $pais['timezones'] ?? [],
    ]);
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema de informações sobre países</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,800&family=Figtree:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
 
  <body>
    <main class="container">
      <header class="topo">
        <h1>Sistema de informações sobre países</h1>
        <p class="apoio">
          Digite o nome de um país para ver capital, população, idiomas e mais.
        </p>
      </header>
 
      <form id="formulario" class="busca" role="search">
        <label for="pais" class="sr-only">Nome do país</label>
        <input
          type="text"
          id="pais"
          placeholder="Digite um país"
          autocomplete="off"
        />
        <button type="submit" id="botao">Consultar</button>
      </form>
 
      <p id="mensagem" class="mensagem" role="status"></p>
 
      <section class="resultado" aria-label="Resultado da consulta">
        <div class="bandeira-moldura">
          <span class="bandeira-vazia" id="bandeiraVazia">Bandeira</span>
          <img id="bandeira" alt="Bandeira do país consultado" hidden />
        </div>
 
        <div class="dados">
          <h2 id="nomePais">—</h2>
 
          <dl>
            <div>
              <dt>Capital</dt>
              <dd id="capital">—</dd>
            </div>
            <div>
              <dt>Região</dt>
              <dd id="regiao">—</dd>
            </div>
            <div>
              <dt>Sub-região</dt>
              <dd id="subRegiao">—</dd>
            </div>
            <div>
              <dt>População</dt>
              <dd id="populacao">—</dd>
            </div>
            <div>
              <dt>Moeda</dt>
              <dd id="moeda">—</dd>
            </div>
            <div class="largo">
              <dt>Idiomas</dt>
              <dd id="linguagens">—</dd>
            </div>
            <div class="largo">
              <dt>Fusos horários</dt>
              <dd id="timeZones">—</dd>
            </div>
          </dl>
        </div>
      </section>
    </main>
 
    <script src="script.js"></script>
  </body>
</html>
 