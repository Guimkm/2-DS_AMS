package com.mycompany.areadasformas;
import javax.swing.JOptionPane;
public class Quadrado {
        static public void Pedido() {
        double h = Double.parseDouble(JOptionPane.showInputDialog("Escreva a altura do quadrado: "));
        double b = Double.parseDouble(JOptionPane.showInputDialog("Escreva a base do quadrado: "));
        double res = area(h, b);
        JOptionPane.showMessageDialog(null, "A area do quadrado é: " + res);
    }
    
    static double area(double altura, double base) {
        double area = altura * base;
        return area;
    }
}
