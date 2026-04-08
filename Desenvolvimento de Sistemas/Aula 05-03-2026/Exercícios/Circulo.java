package com.mycompany.areadasformas;
import javax.swing.JOptionPane;
public class Circulo {
        static public void Pedido() {
        double r = Double.parseDouble(JOptionPane.showInputDialog("Escreva o raio do circulo: "));
        double res = area(r);
        JOptionPane.showMessageDialog(null, "A area do Circulo é: " + res);
        
    }
    
    static double area(double raio) {
        double area = Math.pow(raio, 2) * 3.14;
        return area;
    }
}
