package com.mycompany.calculadora_de_hipotenusa;
import javax.swing.JOptionPane;
public class Calculadora_de_hipotenusa {

    public static void main(String[] args) {
        
        int catetoB = Integer.parseInt(JOptionPane.showInputDialog("Escreva o cateto b:"));
        int catetoC = Integer.parseInt(JOptionPane.showInputDialog("Escreva o cateto c:"));
        
        double res = resultado(catetoB, catetoC);
        
        JOptionPane.showMessageDialog(null, "O resultado da hipotenusa é: " + res);
    }
    
    static double resultado(int c, int b) {
        
        double r = Math.sqrt(Math.pow(c,2) + Math.pow(b,2));
        return r;
    }
}
