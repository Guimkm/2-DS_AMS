package com.mycompany.calculo_de_temperatura;

import javax.swing.JOptionPane;

public class Calculo_de_temperatura {

    public static void main(String[] args) {
        String temp = JOptionPane.showInputDialog("Escolha o tipo de temperatura:\nF = Fahrenheit\nK = Kelvin");
        
        switch (temp) {
            case "K":
            double numK = Double.parseDouble(JOptionPane.showInputDialog("Digite os graus que desejar:"));
            double r = Kelvin.Kelvin(numK);
            JOptionPane.showMessageDialog(null, "A converção de " + r + " graus Kelvins é: " + r + "K");
        break;
            case "F":
            double numF = Double.parseDouble(JOptionPane.showInputDialog("Digite os graus que desejar:"));
            double res = Fahrenheit.Fahrenheit(numF);
            JOptionPane.showMessageDialog(null, "A converção de " + res + " graus Fahrenheit é: " + res + "F");
          break;
        }
    }
}
