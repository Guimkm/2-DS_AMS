package com.mycompany.areadasformas;

import javax.swing.JOptionPane;

public class AreaDasFormas {

    public static void main(String[] args) {
        int escolha = Integer.parseInt(JOptionPane.showInputDialog("Escreva o numero para escolher o tipo de forma que deseja utilizar: \n\n1 - Quadrado\n\n2 - Triangulo\n\n3 - circulo"));
        
        switch (escolha) {
            case 1:
                Quadrado.Pedido();
            break;
            case 2:
                Triangulo.Pedido();
            break;
            case 3:
                Circulo.Pedido();
            break;
        }
    }
}
