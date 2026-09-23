<?php
// Configuração de cada tabela: colunas da listagem e campos do formulário.
// As páginas de listagem, criação, edição e exclusão leem tudo daqui.

$opcoes = fn(array $v) => array_combine($v, array_map(fn($x) => ROTULOS[$x], $v));

$JOIN_PG = "FROM assinaturas s JOIN assinantes a ON a.id_assinante = s.id_assinante
            JOIN planos p ON p.id_plano = s.id_plano";

$ENT = [

'assinantes' => [
  'tabela' => 'assinantes', 'pk' => 'id_assinante',
  'nome' => 'Assinantes', 'um' => 'assinante', 'novo' => 'Novo assinante',
  'aviso' => 'As assinaturas e pagamentos deste assinante também serão excluídos.',
  'sql' => "SELECT *, CONCAT_WS('/', cidade, estado) AS local FROM assinantes ORDER BY id_assinante DESC",
  'cols' => [
    'nome_completo' => ['Nome', null], 'cpf' => ['CPF', 'cpf'], 'email' => ['E-mail', null],
    'telefone' => ['Telefone', null], 'local' => ['Cidade', null], 'data_cadastro' => ['Cadastro', 'data'],
  ],
  'campos' => [
    'nome_completo'   => ['l' => 'Nome completo', 't' => 'text', 'r' => 1, 'max' => 100, 'largo' => 1],
    'cpf'             => ['l' => 'CPF', 't' => 'text', 'r' => 1, 'max' => 14, 'limpar' => 'digitos', 'dica' => '11 números, com ou sem pontuação'],
    'data_nascimento' => ['l' => 'Data de nascimento', 't' => 'date'],
    'email'           => ['l' => 'E-mail', 't' => 'email', 'r' => 1, 'max' => 100],
    'telefone'        => ['l' => 'Telefone', 't' => 'tel', 'max' => 20],
    'cidade'          => ['l' => 'Cidade', 't' => 'text', 'max' => 80],
    'estado'          => ['l' => 'UF', 't' => 'text', 'max' => 2, 'limpar' => 'upper'],
  ],
],

'assinaturas' => [
  'tabela' => 'assinaturas', 'pk' => 'id_assinatura',
  'nome' => 'Assinaturas', 'um' => 'assinatura', 'novo' => 'Nova assinatura',
  'aviso' => 'Os pagamentos desta assinatura também serão excluídos.',
  'filtro' => 'status',
  'sql' => "SELECT s.*, a.nome_completo AS assinante, p.nome AS plano $JOIN_PG ORDER BY s.id_assinatura DESC",
  'cols' => [
    'assinante' => ['Assinante', null], 'plano' => ['Plano', null], 'data_inicio' => ['Início', 'data'],
    'data_fim' => ['Fim', 'data'], 'status' => ['Situação', 'status'],
  ],
  'campos' => [
    'id_assinante' => ['l' => 'Assinante', 't' => 'select', 'r' => 1, 'sql' => "SELECT id_assinante, nome_completo FROM assinantes ORDER BY nome_completo"],
    'id_plano'     => ['l' => 'Plano', 't' => 'select', 'r' => 1, 'sql' => "SELECT id_plano, nome FROM planos ORDER BY nome"],
    'data_inicio'  => ['l' => 'Data de início', 't' => 'date', 'r' => 1, 'padrao' => date('Y-m-d')],
    'data_fim'     => ['l' => 'Data de fim', 't' => 'date', 'dica' => 'Deixe vazio se não houver prazo'],
    'status'       => ['l' => 'Situação', 't' => 'select', 'r' => 1, 'padrao' => 'ativa',
                       'opc' => $opcoes(['ativa', 'suspensa', 'cancelada', 'expirada'])],
  ],
],

'pagamentos' => [
  'tabela' => 'pagamentos', 'pk' => 'id_pagamento',
  'nome' => 'Pagamentos', 'um' => 'pagamento', 'novo' => 'Novo pagamento',
  'aviso' => '',
  'filtro' => 'status',
  'sql' => "SELECT pg.*, a.nome_completo AS assinante, p.nome AS plano
            FROM pagamentos pg JOIN assinaturas s ON s.id_assinatura = pg.id_assinatura
            JOIN assinantes a ON a.id_assinante = s.id_assinante JOIN planos p ON p.id_plano = s.id_plano
            ORDER BY pg.data_vencimento DESC",
  'cols' => [
    'assinante' => ['Assinante', null], 'plano' => ['Plano', null], 'data_vencimento' => ['Vencimento', 'data'],
    'data_pagamento' => ['Pago em', 'data'], 'valor' => ['Valor', 'moeda'],
    'forma_pagamento' => ['Forma', 'rotulo'], 'status' => ['Situação', 'status'],
  ],
  'campos' => [
    'id_assinatura'   => ['l' => 'Assinatura', 't' => 'select', 'r' => 1, 'largo' => 1,
                          'sql' => "SELECT s.id_assinatura, CONCAT(a.nome_completo, ' - ', p.nome, ' (#', s.id_assinatura, ')') $JOIN_PG ORDER BY a.nome_completo"],
    'data_vencimento' => ['l' => 'Vencimento', 't' => 'date', 'r' => 1],
    'data_pagamento'  => ['l' => 'Data do pagamento', 't' => 'date', 'dica' => 'Preencha quando o valor for recebido'],
    'valor'           => ['l' => 'Valor (R$)', 't' => 'number', 'r' => 1, 'step' => '0.01', 'min' => '0'],
    'forma_pagamento' => ['l' => 'Forma de pagamento', 't' => 'select',
                          'opc' => $opcoes(['cartao_credito', 'pix', 'boleto', 'debito'])],
    'status'          => ['l' => 'Situação', 't' => 'select', 'r' => 1, 'padrao' => 'pendente',
                          'opc' => $opcoes(['pendente', 'pago', 'atrasado', 'cancelado'])],
  ],
],

'planos' => [
  'tabela' => 'planos', 'pk' => 'id_plano',
  'nome' => 'Planos', 'um' => 'plano', 'novo' => 'Novo plano',
  'aviso' => 'Planos com assinaturas não podem ser excluídos; desative-os na edição.',
  'sql' => "SELECT * FROM planos ORDER BY valor_mensal",
  'cols' => [
    'nome' => ['Plano', null], 'descricao' => ['Descrição', null], 'valor_mensal' => ['Mensalidade', 'moeda'],
    'duracao_meses' => ['Duração', 'meses'], 'ativo' => ['Situação', 'ativo'],
  ],
  'campos' => [
    'nome'          => ['l' => 'Nome do plano', 't' => 'text', 'r' => 1, 'max' => 50],
    'valor_mensal'  => ['l' => 'Mensalidade (R$)', 't' => 'number', 'r' => 1, 'step' => '0.01', 'min' => '0'],
    'descricao'     => ['l' => 'Descrição', 't' => 'text', 'max' => 255, 'largo' => 1],
    'duracao_meses' => ['l' => 'Duração (meses)', 't' => 'number', 'r' => 1, 'min' => '1', 'padrao' => 1],
    'ativo'         => ['l' => 'Plano disponível para novas assinaturas', 't' => 'check', 'padrao' => 1],
  ],
],
];
