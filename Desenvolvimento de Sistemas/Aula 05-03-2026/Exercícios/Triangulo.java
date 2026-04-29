package com.mycompany.areadasformas;
import javax.swing.JOptionPane;

public class Triangulo {
    static public void Pedido() {
        double h = Double.parseDouble(JOptionPane.showInputDialog("Escreva a altura do triangulo: "));
        double b = Double.parseDouble(JOptionPane.showInputDialog("Escreva a base do triangulo: "));
        double res = area(h, b);
        JOptionPane.showMessageDialog(null, "A area do trianggulo é: " + res);
    }
    
    static double area(double altura, double base) {
        double area = altura * base / 2;
        return area;
    }
}
