package com.mycompany.calculadora;

import javax.swing.JOptionPane;

public class Calculadora {

    public static void main(String[] args) {
        boolean continua = true;
        while (continua){
        int Escolha = Integer.parseInt(JOptionPane.showInputDialog("Escolha o que deseja fazer: \n\n 1 - Soma \n\n 2 - Subtração\n\n 3 - Divisão\n\n 4 - Multiplicação\n\n 5 - Resto da Divisão\n\n 6 - Dobro\n\n 7 - Quadrado\n\n 8 - Cubo\n\n 9 - Raiz Quadrada\n\n 0 - Sair"));
        switch (Escolha) {
            case 1: 
                    soma();
            break;
            
            case 2: 
                    subitracao();
            break;
            
            case 3: 
                    divisao();
            break;
            
            case 4: 
                    multiplicacao();
            break;
            
            case 5: 
                    modulo();
            break;
            
            case 6: 
                    dobro();
            break;
            
            case 7: 
                    quadrado();
            break;
            
            case 8: 
                    cubo();
            break;
            
            case 9: 
                    raizQuadrada();
            break;
            
            case 0: 
            continua = false;
            break;
        }
    }
}
    
    static void soma() {
        double n1 = Double.parseDouble(JOptionPane.showInputDialog("Escreva o primeiro numero que deseja utilizar: "));
        double n2 = Double.parseDouble(JOptionPane.showInputDialog("Escreva o segundo numero que deseja utilizar: "));
        double res = n1 + n2;
        JOptionPane.showMessageDialog(null, "O resultado é: " + res);
    }
    
    static void subitracao() {
        double n1 = Double.parseDouble(JOptionPane.showInputDialog("Escreva o primeiro numero que deseja utilizar: "));
        double n2 = Double.parseDouble(JOptionPane.showInputDialog("Escreva o segundo numero que deseja utilizar: "));
        double res = n1 - n2;
        JOptionPane.showMessageDialog(null, "O resultado é: " + res);
    }
    
    static void divisao() {
        double n1 = Double.parseDouble(JOptionPane.showInputDialog("Escreva o primeiro numero que deseja utilizar: "));
        double n2 = Double.parseDouble(JOptionPane.showInputDialog("Escreva o segundo numero que deseja utilizar: "));
        double res = n1 / n2;
        JOptionPane.showMessageDialog(null, "O resultado é: " + res);
    }
    
    static void multiplicacao() {
        double n1 = Double.parseDouble(JOptionPane.showInputDialog("Escreva o primeiro numero que deseja utilizar: "));
        double n2 = Double.parseDouble(JOptionPane.showInputDialog("Escreva o segundo numero que deseja utilizar: "));
        double res = n1 * n2;
        JOptionPane.showMessageDialog(null, "O resultado é: " + res);
    }
    
    static void modulo() {
        double n1 = Double.parseDouble(JOptionPane.showInputDialog("Escreva o primeiro numero que deseja utilizar: "));
        double n2 = Double.parseDouble(JOptionPane.showInputDialog("Escreva o segundo numero que deseja utilizar: "));
        double res = n1 % n2;
        JOptionPane.showMessageDialog(null, "O resultado é: " + res);
    }
    
    static void dobro() {
        double num = Double.parseDouble(JOptionPane.showInputDialog("Escreva o numero que deseja utilizar: "));
        double res = num * 2;
        JOptionPane.showMessageDialog(null, "O resultado é: " + res);
    }
    
    static void quadrado() {
        double num = Double.parseDouble(JOptionPane.showInputDialog("Escreva o numero que deseja utilizar: "));
        double res = Math.pow(num, 2);
        JOptionPane.showMessageDialog(null, "O resultado é: " + res);
    }
    
    static void cubo() {
        double num = Double.parseDouble(JOptionPane.showInputDialog("Escreva o numero que deseja utilizar: "));
        double res = Math.pow(num, 3);
        JOptionPane.showMessageDialog(null, "O resultado é: " + res);
    }
    
    static void raizQuadrada() {
        double num = Double.parseDouble(JOptionPane.showInputDialog("Escreva o numero que deseja utilizar: "));
        double res = Math.sqrt(num);
        JOptionPane.showMessageDialog(null, "O resultado é: " + res);
    }
}
