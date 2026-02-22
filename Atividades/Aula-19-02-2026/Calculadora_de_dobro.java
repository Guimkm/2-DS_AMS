package com.mycompany.calculadora_de_dobro;

import javax.swing.JOptionPane; // Importação do JOptionPane.

public class Calculadora_de_dobro {

    public static void main(String[] args) { // classe principal.
        int a; // criação de uma variavel com o tipo integer.
        // digite(); // Essa é a parte que faz mostrar para escrever o numero duas vezes.
        a = Integer.parseInt(JOptionPane.showInputDialog("Digite um numero: ")); // Manda um input com uma mensagem que pega o numero que o usuario desejar.
        dobro(a); // Chama a classe dobro() e envia o parametro (a).
    }
    
    /* static void digite () { // Essa é a parte que faz escrever duas vezes, porque ela é inutil, já que na classe main já pega o valor.
        JOptionPane.showMessageDialog(null, "Digite um numero: ");
    }
    */
    static void dobro(int n){ // classe que calcula o dobro do numero.
        int d = n * 2; // faz o calculo
        JOptionPane.showMessageDialog(null, "Dobro de " + n + " é " + d); // mostra o resultado usando o JOptionPane.   
    }   
}