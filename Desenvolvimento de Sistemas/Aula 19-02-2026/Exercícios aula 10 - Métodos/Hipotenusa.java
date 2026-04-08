package com.mycompany.hipotenusa;

import javax.swing.JOptionPane;

public class Hipotenusa {

    public static void main(String[] args) {
        double Cb = Double.parseDouble(JOptionPane.showInputDialog("Escreva o cateto b: "));
        double Cc = Double.parseDouble(JOptionPane.showInputDialog("Escreva o cateto c: "));
        double res = hipotenusa(Cb, Cc);
        JOptionPane.showMessageDialog(null, "A hipotunusa é igual a: " + res);
    }
    
    static double hipotenusa(double cateto_b, double cateto_c) {
        double r = Math.sqrt(Math.pow(cateto_b, 2) + Math.pow(cateto_c, 2));
        return r;
    }
}
