package com.mycompany.custosviagens;

public class Percurso {
        private double kmPercorrido;
        private double valorCombustivel;
        private double valorPedagio;
        
        public void cadastrarPercurso(double kmPercorrido, double valorCombustivel, double valorPedagio){
            this.kmPercorrido = kmPercorrido;
            this.valorCombustivel = valorCombustivel;
            this.valorPedagio = valorPedagio;
        }
        // Método que retorna uma descrição do percurso em formato de texto.
        public String listarPercurso(){
        return "Km percorrido: " + kmPercorrido + "km"+
                "\nValor do combustível: R$" + valorCombustivel + 
                "\nValor do pedágio: R$" + valorPedagio;
 }

        // Getters - Métodos para acessar os valores dos atributos (encapsulamento)
        public double getKmPercorrido () {
                return kmPercorrido;
        }

        public double getValorCombustivel () {
                return valorCombustivel;
        }

        public double getValorPedagio () {
                return valorPedagio;
        }
}