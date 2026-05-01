# 💻 Documentação do Site – Cálculo de Salário
## 📄 Página Inicial ('index.html')

[IMAGEM]

A página inicial tem como objetivo coletar os dados necessários para o cálculo do salário do usuário.

### 🔹 Funcionalidades:
* Apresenta um formulário simples e intuitivo.
* Permite ao usuário inserir:
    * A quantidade de horas trabalhadas.
    * O valor recebido por hora.
* Possui dois botões:
    * *Calcular*: envia os dados para processamento.
    * *Limpar*: redefine os campos do formulário.
### 🔹 Funcionamento:

Ao clicar no botão *Calcular*, os dados são enviados via método 'POST' para a página 'calcularSalario.php', onde o cálculo será realizado.

[IMAGEM]

## 📄 Página de Resultado ('calcularSalario.php')

A página de resultado é responsável por processar os dados enviados e exibir o salário calculado.

### 🔹 Funcionalidades:
* Recebe os valores de horas trabalhadas e valor por hora.
* Realiza o cálculo do salário utilizando a multiplicação dos valores.
* Exibe o resultado formatado no padrão brasileiro (R$).
### 🔹 Funcionamento:
* Verifica se a requisição foi feita pelo método 'POST'.

* Calcula o salário:
```
salário = horas trabalhadas × valor por hora
```
* Mostra o resultado na tela de forma destacada.
## 🎨 Estilização (CSS)

O site utiliza arquivos CSS separados para cada página, garantindo melhor organização e manutenção do código:

* 'index.css': responsável pelo estilo da página inicial (formulário).
* 'calcularsalario.css': responsável pelo estilo da página de resultado.
### 🔹 Características do Design:
* Layout centralizado na tela.
* Uso de cores em gradiente para o fundo.
* Formulário em formato de "card" com sombra e bordas arredondadas.
* Interface simples, moderna e de fácil utilização.