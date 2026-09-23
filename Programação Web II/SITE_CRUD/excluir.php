<?php
require_once __DIR__ . '/inc/bootstrap.php';

$k = $_POST['e'] ?? '';
$cfg = $ENT[$k] ?? null;

if ($cfg && $_SERVER['REQUEST_METHOD'] === 'POST' && ctype_digit($_POST['id'] ?? '')) {
    try {
        $pdo->prepare("DELETE FROM {$cfg['tabela']} WHERE {$cfg['pk']} = ?")->execute([$_POST['id']]);
        flash('ok', ucfirst($cfg['um']) . ' excluído.');
    } catch (PDOException $x) {
        flash('erro', ($x->errorInfo[1] ?? 0) == 1451
            ? 'Este plano tem assinaturas e não pode ser excluído. Desative-o na edição.'
            : erro_amigavel($x));
    }
}
header('Location: ' . ($cfg ? "$k.php" : 'index.php'));
exit;
