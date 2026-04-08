package com.mycompany.mediadanota;

import javax.swing.JOptionPane;

public class MediaDaNota {

    public static void main(String[] args) {
        String Nome = JOptionPane.showInputDialog(null, "Escreva o nome do aluno: ");
        double res = lerNota();
        JOptionPane.showMessageDialog(null, "A média das notas do " + Nome + " é: " + res);
    }
    
    static double lerNota() {
        double n1 = Double.parseDouble(JOptionPane.showInputDialog("Escreva a primeira nota: "));
        double n2 = Double.parseDouble(JOptionPane.showInputDialog("Escreva a segunda nota: "));
        double media = calcularMedia(n1, n2);
        return media;
    }
    
    static double calcularMedia(double num1, double num2) {
        double res = (num1 + num2) / 2;
        return res;
    }
}
