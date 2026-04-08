package com.mycompany.custosviagens;

import javax.swing.JOptionPane;

class EntradaSaidaDados {
    public String entradaDados(String mensagemEntrada) {
        String mensagem = JOptionPane.showInputDialog(mensagemEntrada);
        return mensagem;
    }

    public void saidaDados(String mensagemSaida) {
        JOptionPane.showMessageDialog(null, mensagemSaida);
    }
}
