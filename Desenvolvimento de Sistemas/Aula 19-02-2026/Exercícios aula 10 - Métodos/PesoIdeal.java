package com.mycompany.pesoideal;
import javax.swing.JOptionPane;
public class PesoIdeal {

    public static void main(String[] args) {
        String sexo = JOptionPane.showInputDialog("Escreva o seu sexo.\n M = Masculino\n F = Feminino ");
        double altura = Double.parseDouble(JOptionPane.showInputDialog("Escreva a sua altura: "));
        double res = calcularPesoIdeal(sexo, altura);
        JOptionPane.showMessageDialog(null, "O seu peso ideal é " + res);
    }
    
    static double calcularPesoIdeal(String s, double h) {
        if(s == "M") {
            double r = (72.7 * h) - 58;
            return r;
        } else {
            double r = (62.1 * h) - 44.7;
            return r;
        }
    }
}
