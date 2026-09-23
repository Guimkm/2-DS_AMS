<?php
session_start();
require_once __DIR__ . '/../conexao.php';

const ROTULOS = [
  'cartao_credito' => 'Cartão de crédito', 'pix' => 'Pix', 'boleto' => 'Boleto', 'debito' => 'Débito',
  'ativa' => 'Ativa', 'suspensa' => 'Suspensa', 'cancelada' => 'Cancelada', 'expirada' => 'Expirada',
  'pendente' => 'Pendente', 'pago' => 'Pago', 'atrasado' => 'Atrasado', 'cancelado' => 'Cancelado',
];
const COR_STATUS = [
  'ativa' => 'ok', 'pago' => 'ok', 'suspensa' => 'aviso', 'pendente' => 'aviso',
  'cancelada' => 'erro', 'cancelado' => 'erro', 'atrasado' => 'erro', 'expirada' => 'neutro',
];
const NAV = [
  'index' => ['Visão geral', 'index.php'], 'assinantes' => ['Assinantes', 'assinantes.php'],
  'assinaturas' => ['Assinaturas', 'assinaturas.php'], 'pagamentos' => ['Pagamentos', 'pagamentos.php'],
  'planos' => ['Planos', 'planos.php'],
];
// A linha ondulada do site: usada na transição, no logo e no cabeçalho
const CURVA = 'M31.2222 46.3634C31.2222 46.3634 -36.7778 128.863 31.2222 128.863C72.2365 128.863 41.0785 219.533 84.2222 219.533C217.722 219.533 42.6461 73.2333 102.222 26.533C179.24 -33.8394 449.222 167.917 341 219.533C289.361 244.162 251.46 242.674 209.5 212.955C131.546 157.744 247.109 -17.1207 334.222 2.53299C414.164 20.5685 334.127 213.873 414.222 196.533C471.282 184.18 442.845 47.8838 496.222 71.533C524.744 84.1696 510.264 133.692 541.222 137.533C588.222 143.363 549.222 253.363 549.222 253.363';

function e($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
function flash($tipo, $msg) { $_SESSION['flash'] = [$tipo, $msg]; }
function data_br($v) { return $v ? date('d/m/Y', strtotime($v)) : '-'; }
function moeda($v) { return 'R$ ' . number_format((float)$v, 2, ',', '.'); }
function chip($v) {
  if ($v === null || $v === '') return '-';
  return '<span class="chip ' . (COR_STATUS[$v] ?? 'neutro') . '">' . e(ROTULOS[$v] ?? $v) . '</span>';
}
function celula($v, $fmt) {
  if ($v === null || $v === '') return '<span class="vazio-c">-</span>';
  switch ($fmt) {
    case 'cpf':    return e(preg_match('/^\d{11}$/', $v) ? preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $v) : $v);
    case 'data':   return e(data_br($v));
    case 'moeda':  return '<span class="num">' . e(moeda($v)) . '</span>';
    case 'meses':  return e($v . ($v == 1 ? ' mês' : ' meses'));
    case 'rotulo': return e(ROTULOS[$v] ?? $v);
    case 'status': return chip($v);
    case 'ativo':  return '<span class="chip ' . ($v ? 'ok' : 'neutro') . '">' . ($v ? 'Ativo' : 'Inativo') . '</span>';
    default:       return e($v);
  }
}
function erro_amigavel(PDOException $x) {
  switch ($x->errorInfo[1] ?? 0) {
    case 1062: return 'Já existe um registro com este CPF, e-mail ou nome. Use um valor diferente.';
    case 3819: return 'Algum valor não respeita as regras: a data de fim não pode ser anterior à de início e valores não podem ser negativos.';
    case 1452: return 'O assinante, plano ou assinatura escolhido não existe mais. Atualize a página e tente de novo.';
    case 1451: return 'Este registro está em uso e não pode ser excluído.';
    default:   return 'Não foi possível salvar. Confira os dados e tente novamente.';
  }
}

function topo($titulo, $ativo = '') {
  $flash = $_SESSION['flash'] ?? null; unset($_SESSION['flash']);
  ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($titulo) ?> - Clube de Assinaturas</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600;12..96,700&family=Figtree:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
  <div class="divSvg"><svg width="100%" height="100%" viewBox="0 0 566 254" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="<?= CURVA ?>" stroke="#5B5BFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>

  <nav class="nav" aria-label="Principal">
    <a class="marca" href="index.php">
      <svg viewBox="0 0 566 254" fill="none" aria-hidden="true"><path d="<?= CURVA ?>" stroke="#8F8FFF" stroke-width="22" stroke-linecap="round"/></svg>
      <span>Clube</span>
    </a>
    <ul>
      <?php foreach (NAV as $k => [$rot, $url]): ?>
      <li><a href="<?= $url ?>" <?= $k === $ativo ? 'aria-current="page"' : '' ?>><?= $rot ?></a></li>
      <?php endforeach; ?>
    </ul>
  </nav>

  <div data-barba="wrapper">
    <main data-barba="container" class="divPai">
      <?php if ($flash): ?><div class="toast <?= e($flash[0]) ?>" role="status"><?= e($flash[1]) ?></div><?php endif; ?>
<?php }

function rodape() { ?>
    </main>
  </div>
  <script src="https://unpkg.com/@barba/core"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.15/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.15/dist/DrawSVGPlugin.min.js"></script>
  <script src="JS/transicao.js"></script>
  <script src="JS/app.js"></script>
</body>
</html>
<?php }

require_once __DIR__ . '/entidades.php';
