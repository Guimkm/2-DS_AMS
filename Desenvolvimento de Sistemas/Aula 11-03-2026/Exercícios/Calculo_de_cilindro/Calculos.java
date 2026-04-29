package com.mycompany.calculo_de_cilindro;

public class Calculos {
        static double AreaL(double raio, double altura) {
        double res = 2 * 3.14 * raio * altura;
        return res;
    }
    
    static double Volume(double raio, double altura) {
        double res = 3.14 * Math.pow(raio, 2) * altura;
        return res;
    }
}
