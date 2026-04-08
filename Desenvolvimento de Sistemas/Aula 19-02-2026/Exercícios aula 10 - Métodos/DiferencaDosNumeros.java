package com.mycompany.diferencadosnumeros;
import javax.swing.JOptionPane;
public class DiferencaDosNumeros {

    public static void main(String[] args) {
        double n1 = Double.parseDouble(JOptionPane.showInputDialog("Escreva o primeiro numero: "));
        double n2 = Double.parseDouble(JOptionPane.showInputDialog("Escreva o segundo numero: "));
        double res = diferenca(n1, n2);
        JOptionPane.showMessageDialog(null, "A diferença entre " + n1 + " e " + n2 + " é: " + res);
    }
    
    static double diferenca(double num1, double num2) {
        if (num2 > num1) {
        double dif = num2 - num1;
        return dif;
        } else {
            double dif = num1 - num2;
        return dif;
        }
    }
}
