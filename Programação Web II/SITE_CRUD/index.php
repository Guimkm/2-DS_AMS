<?php
require_once __DIR__ . '/inc/bootstrap.php';

$q = fn($sql) => $pdo->query($sql)->fetchColumn();
$ativas    = $q("SELECT COUNT(*) FROM assinaturas WHERE status = 'ativa'");
$membros   = $q("SELECT COUNT(*) FROM assinantes");
$recebido  = $q("SELECT COALESCE(SUM(valor),0) FROM pagamentos WHERE status = 'pago'
                 AND DATE_FORMAT(data_pagamento,'%Y-%m') = DATE_FORMAT(CURDATE(),'%Y-%m')");
$atrasoQtd = $q("SELECT COUNT(*) FROM pagamentos WHERE status = 'atrasado'");
$atrasoVal = $q("SELECT COALESCE(SUM(valor),0) FROM pagamentos WHERE status = 'atrasado'");

$base = "FROM pagamentos pg JOIN assinaturas s ON s.id_assinatura = pg.id_assinatura
         JOIN assinantes a ON a.id_assinante = s.id_assinante";
$atrasados = $pdo->query("SELECT a.nome_completo, a.email, pg.valor, pg.data_vencimento $base
                          WHERE pg.status = 'atrasado' ORDER BY pg.data_vencimento")->fetchAll(PDO::FETCH_ASSOC);
$proximos  = $pdo->query("SELECT a.nome_completo, pg.valor, pg.data_vencimento $base
                          WHERE pg.status = 'pendente' ORDER BY pg.data_vencimento LIMIT 5")->fetchAll(PDO::FETCH_ASSOC);
$porPlano  = $pdo->query("SELECT p.nome, COUNT(s.id_assinatura) AS total FROM planos p
                          LEFT JOIN assinaturas s ON s.id_plano = p.id_plano AND s.status = 'ativa'
                          GROUP BY p.id_plano, p.nome ORDER BY total DESC, p.nome")->fetchAll(PDO::FETCH_ASSOC);
$maximo = max(1, ...array_column($porPlano ?: [['total' => 1]], 'total'));

topo('Visão geral', 'index');
?>
<header class="cab hero">
  <svg class="hero-curva" viewBox="0 0 566 254" fill="none" aria-hidden="true"><path d="<?= CURVA ?>" stroke="currentColor" stroke-width="3" stroke-linecap="round"/></svg>
  <div>
    <h1>Visão geral do clube</h1>
    <p class="sub">Situação das assinaturas e da cobrança hoje.</p>
  </div>
</header>

<section class="numeros">
  <div><strong><?= $ativas ?></strong><span>assinaturas ativas</span></div>
  <div><strong><?= $membros ?></strong><span>assinantes cadastrados</span></div>
  <div><strong><?= e(moeda($recebido)) ?></strong><span>recebidos neste mês</span></div>
  <div class="<?= $atrasoQtd ? 'alerta-n' : '' ?>"><strong><?= e(moeda($atrasoVal)) ?></strong><span><?= $atrasoQtd ?> <?= $atrasoQtd == 1 ? 'pagamento atrasado' : 'pagamentos atrasados' ?></span></div>
</section>

<div class="duas">
  <section class="painel">
    <h2>Pagamentos em atraso</h2>
    <?php if (!$atrasados): ?><p class="vazio-t">Nenhum atraso. Todos os pagamentos estão em dia.</p>
    <?php else: ?>
    <div class="rolagem"><table>
      <thead><tr><th>Assinante</th><th>Vencimento</th><th>Valor</th></tr></thead>
      <tbody><?php foreach ($atrasados as $r): ?>
        <tr><td><?= e($r['nome_completo']) ?><br><small><?= e($r['email']) ?></small></td>
            <td><?= celula($r['data_vencimento'], 'data') ?></td><td><?= celula($r['valor'], 'moeda') ?></td></tr>
      <?php endforeach; ?></tbody>
    </table></div>
    <a class="link" href="pagamentos.php">Ver todos os pagamentos</a>
    <?php endif; ?>
  </section>

  <section class="painel">
    <h2>Assinaturas ativas por plano</h2>
    <ul class="barras">
      <?php foreach ($porPlano as $p): ?>
      <li><span><?= e($p['nome']) ?></span>
          <div class="trilho"><i style="width:<?= round($p['total'] / $maximo * 100) ?>%"></i></div>
          <b><?= $p['total'] ?></b></li>
      <?php endforeach; ?>
    </ul>

    <h2 class="h2-2">Próximos vencimentos</h2>
    <?php if (!$proximos): ?><p class="vazio-t">Nenhum pagamento pendente.</p>
    <?php else: ?>
    <ul class="lista-simples">
      <?php foreach ($proximos as $r): ?>
      <li><span><?= e($r['nome_completo']) ?><small>vence em <?= e(data_br($r['data_vencimento'])) ?></small></span><?= celula($r['valor'], 'moeda') ?></li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
  </section>
</div>
<?php rodape(); ?>
