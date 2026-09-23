<?php
// Criar e editar (o mesmo formulário serve para as quatro tabelas)
require_once __DIR__ . '/inc/bootstrap.php';

$k = $_GET['e'] ?? '';
if (!isset($ENT[$k])) { header('Location: index.php'); exit; }
$cfg = $ENT[$k];
$id = ctype_digit($_GET['id'] ?? '') ? $_GET['id'] : null;
$reg = [];

if ($id) {
    $st = $pdo->prepare("SELECT * FROM {$cfg['tabela']} WHERE {$cfg['pk']} = ?");
    $st->execute([$id]);
    $reg = $st->fetch(PDO::FETCH_ASSOC);
    if (!$reg) { flash('erro', 'Registro não encontrado.'); header("Location: $k.php"); exit; }
}

$erro = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = [];
    foreach ($cfg['campos'] as $c => $f) {
        if ($f['t'] === 'check') { $dados[$c] = isset($_POST[$c]) ? 1 : 0; continue; }
        $v = trim($_POST[$c] ?? '');
        if (($f['limpar'] ?? '') === 'digitos') $v = preg_replace('/\D/', '', $v);
        if (($f['limpar'] ?? '') === 'upper')   $v = mb_strtoupper($v);
        $dados[$c] = $v === '' ? null : $v;
    }
    $reg = array_merge($reg, $dados);
    try {
        if ($id) {
            $set = implode(', ', array_map(fn($c) => "$c = ?", array_keys($dados)));
            $pdo->prepare("UPDATE {$cfg['tabela']} SET $set WHERE {$cfg['pk']} = ?")->execute([...array_values($dados), $id]);
        } else {
            $cols = implode(', ', array_keys($dados));
            $marcas = implode(', ', array_fill(0, count($dados), '?'));
            $pdo->prepare("INSERT INTO {$cfg['tabela']} ($cols) VALUES ($marcas)")->execute(array_values($dados));
        }
        flash('ok', ucfirst($cfg['um']) . ($id ? ' atualizado.' : ' cadastrado.'));
        header("Location: $k.php");
        exit;
    } catch (PDOException $x) {
        $erro = erro_amigavel($x);
    }
}

topo(($id ? 'Editar ' : 'Novo ') . $cfg['um'], $k);
?>
<header class="cab">
  <div>
    <a class="voltar" href="<?= $k ?>.php">Voltar para <?= strtolower(e($cfg['nome'])) ?></a>
    <h1><?= $id ? 'Editar ' . e($cfg['um']) : e($cfg['novo']) ?></h1>
  </div>
</header>

<section class="painel form-painel">
  <?php if ($erro): ?><p class="alerta" role="alert"><?= e($erro) ?></p><?php endif; ?>
  <form method="post" class="form" autocomplete="off">
    <?php foreach ($cfg['campos'] as $c => $f):
      $val = $reg[$c] ?? ($f['padrao'] ?? '');
      $cls = 'campo' . (!empty($f['largo']) ? ' largo' : ''); ?>
    <?php if ($f['t'] === 'check'): ?>
      <label class="<?= $cls ?> marcar"><input type="checkbox" name="<?= $c ?>" <?= $val ? 'checked' : '' ?>> <?= e($f['l']) ?></label>
    <?php else: ?>
      <div class="<?= $cls ?>">
        <label for="<?= $c ?>"><?= e($f['l']) ?></label>
        <?php if ($f['t'] === 'select'):
          $opc = $f['opc'] ?? $pdo->query($f['sql'])->fetchAll(PDO::FETCH_KEY_PAIR); ?>
          <select id="<?= $c ?>" name="<?= $c ?>" <?= !empty($f['r']) ? 'required' : '' ?>>
            <?php if (empty($f['r']) || !$id && $val === ''): ?><option value="">Selecione</option><?php endif; ?>
            <?php foreach ($opc as $v => $rot): ?>
              <option value="<?= e($v) ?>" <?= (string)$v === (string)$val ? 'selected' : '' ?>><?= e($rot) ?></option>
            <?php endforeach; ?>
          </select>
        <?php else: ?>
          <input id="<?= $c ?>" name="<?= $c ?>" type="<?= $f['t'] ?>" value="<?= e($val) ?>"
            <?= !empty($f['r']) ? 'required' : '' ?>
            <?= isset($f['max']) ? 'maxlength="' . $f['max'] . '"' : '' ?>
            <?= isset($f['step']) ? 'step="' . $f['step'] . '"' : '' ?>
            <?= isset($f['min']) ? 'min="' . $f['min'] . '"' : '' ?>>
        <?php endif; ?>
        <?php if (!empty($f['dica'])): ?><small><?= e($f['dica']) ?></small><?php endif; ?>
      </div>
    <?php endif; endforeach; ?>
    <div class="form-botoes">
      <button type="submit" class="btn">Salvar</button>
      <a class="btn sec" href="<?= $k ?>.php">Cancelar</a>
    </div>
  </form>
</section>
<?php rodape(); ?>
