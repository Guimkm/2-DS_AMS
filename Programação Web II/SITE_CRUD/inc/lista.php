<?php
// Listagem genérica. Cada página (assinantes.php etc.) define $k e inclui este arquivo.
require_once __DIR__ . '/bootstrap.php';
$cfg = $ENT[$k];
$linhas = $pdo->query($cfg['sql'])->fetchAll(PDO::FETCH_ASSOC);
$primeira = array_key_first($cfg['cols']);
topo($cfg['nome'], $k);
?>
<header class="cab">
  <div>
    <h1><?= e($cfg['nome']) ?></h1>
    <p class="sub"><?= count($linhas) ?> <?= count($linhas) == 1 ? 'registro' : 'registros' ?></p>
  </div>
  <a class="btn" href="form.php?e=<?= $k ?>"><?= e($cfg['novo']) ?></a>
</header>

<?php if (!$linhas): ?>
  <section class="painel vazio">
    <p>Nenhum registro em <?= strtolower(e($cfg['nome'])) ?> ainda.</p>
    <a class="btn" href="form.php?e=<?= $k ?>"><?= e($cfg['novo']) ?></a>
  </section>
<?php else: ?>
<section class="painel">
  <div class="barra">
    <input type="search" id="busca" placeholder="Buscar em <?= strtolower(e($cfg['nome'])) ?>" aria-label="Buscar">
    <?php if (($cfg['filtro'] ?? '') === 'status'): ?>
    <select id="filtro-status" aria-label="Filtrar por situação">
      <option value="">Todas as situações</option>
      <?php foreach ($cfg['campos']['status']['opc'] as $v => $r): ?><option value="<?= $v ?>"><?= $r ?></option><?php endforeach; ?>
    </select>
    <?php endif; ?>
  </div>
  <div class="rolagem">
    <table>
      <thead><tr>
        <?php foreach ($cfg['cols'] as [$rot]): ?><th><?= e($rot) ?></th><?php endforeach; ?>
        <th class="acoes"><span class="so-leitor">Ações</span></th>
      </tr></thead>
      <tbody>
      <?php foreach ($linhas as $r): $id = $r[$cfg['pk']]; ?>
        <tr data-status="<?= e($r['status'] ?? '') ?>">
          <?php foreach ($cfg['cols'] as $c => [$rot, $fmt]): ?><td><?= celula($r[$c], $fmt) ?></td><?php endforeach; ?>
          <td class="acoes">
            <a class="link" href="form.php?e=<?= $k ?>&id=<?= $id ?>">Editar</a>
            <button type="button" class="link perigo" data-excluir data-id="<?= $id ?>" data-nome="<?= e($r[$primeira]) ?>">Excluir</button>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <p class="sem-resultado" hidden>Nenhum resultado para essa busca.</p>
</section>

<dialog id="dlg-excluir">
  <form method="post" action="excluir.php">
    <h2>Excluir <?= e($cfg['um']) ?>?</h2>
    <p><strong id="dlg-nome"></strong> será excluído permanentemente. <?= e($cfg['aviso']) ?></p>
    <input type="hidden" name="e" value="<?= $k ?>">
    <input type="hidden" name="id" id="dlg-id">
    <div class="dlg-botoes">
      <button type="button" class="btn sec" data-fechar>Cancelar</button>
      <button type="submit" class="btn risco">Excluir</button>
    </div>
  </form>
</dialog>
<?php endif; rodape(); ?>
