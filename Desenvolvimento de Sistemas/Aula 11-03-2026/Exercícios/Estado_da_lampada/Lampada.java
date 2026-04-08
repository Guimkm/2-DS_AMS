package com.mycompany.estado_da_lampada;


public class Lampada {
    public static void main(String[] args) {
       
        System.out.printf("\n");
        Acende();
        Apaga();
        System.out.printf("\nEstado: ");
        MostrarEstado(0);
        
        Teste_de_classe.Estado();
    }
    
    static void Acende() {
        System.out.println("A lampada esta acesa");
    }
    
    static void Apaga() {
        System.out.println("A lampada esta apagada");
    }
    
    static void MostrarEstado(int Estado) {
        if(Estado == 1){
            Acende();
        } else {
            Apaga();
    }
  }
}
