package com.mycompany.estado_da_lampada;

import java.util.Scanner;

public class Teste_de_classe {
    
    public static void Estado() {
    Scanner sc = new Scanner(System.in);
    
    System.out.printf("\n\nEscreva o que desejar fazer: \n1 - Acender\n2 - Apagar\n");
    int escolha = sc.nextInt();
        
    Lampada.MostrarEstado(escolha);
    }
}
