package com.mycompany.calculo_de_cilindro;

import javax.swing.JOptionPane;

public class Calculo_de_cilindro {

    public static void main(String[] args) {
        double h = Double.parseDouble(JOptionPane.showInputDialog("Escreva a altura do cilindro: "));
        double r = Double.parseDouble(JOptionPane.showInputDialog("Escreva o raio do cilindro: "));
        double AreaL = Calculos.AreaL(r, h);
        double Volume = Calculos.Volume(r, h);
        JOptionPane.showMessageDialog(null, "A area lateral do cilindro é: " + AreaL + "\nO volume do cilindro é: " + Volume);
    }
}
