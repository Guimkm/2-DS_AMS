package com.mycompany.mavenproject2;


public class Carro {
    

    
    public static void main(String[] args) {
        Carro umCarro = new Carro();
        
        umCarro.Modelo = "Gol";
        umCarro.cor = "Preto";
        umCarro.Motor = "1.0";
        
        
        umCarro.ligar();
        umCarro.desligar();
        umCarro.acelerar();
        umCarro.brecar();
        umCarro.mudarMarcha();
    }

        String cor;
    String Modelo;
        String Motor;
        
        void ligar() {
            System.out.println("Ligando o carro");
        }
        
        void desligar() {
            System.out.println("Desligando o carro");
        }
        
        void acelerar() {
            System.out.println("Acelerando o carro");
        }
        
        void brecar() {
            System.out.println("Brecando o carro");
        }
        
        void mudarMarcha() {
            System.out.println("Marcha engatada");
        
    }
}
