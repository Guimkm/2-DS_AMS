package com.mycompany.Carro;

public class ExemploCarro {
    
        String cor;
        String Modelo;
        String Motor;
    
        public void ligar() {
            System.out.println("Ligando o carro");
        }
        
        public void desligar() {
            System.out.println("Desligando o carro");
        }
        
        public void acelerar() {
            System.out.println("Acelerando o carro");
        }
        
        public void brecar() {
            System.out.println("Brecando o carro");
        }
        
        public void mudarMarcha() {
            System.out.println("Marcha engatada");
        }
        
        public void modelo() {
            System.out.printf("Modelo: " + Modelo + "\nCor: " + cor + "\nMotor: " + Motor);
        }
     

}
