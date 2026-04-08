package com.mycompany.Carro;

public class Carro {

    
    public static void main(String[] args) {
        ExemploCarro umCarro = new  ExemploCarro();
        
        umCarro.Modelo = "Gol";
        umCarro.cor = "Preto";
        umCarro.Motor = "1.0";
        
        umCarro.ligar();
        umCarro.desligar();
        umCarro.acelerar();
        umCarro.brecar();
        umCarro.mudarMarcha();
        umCarro.modelo();
        
        umCarro = null;
    }   
}
