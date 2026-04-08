package com.mycompany.custosviagens;

public class Custos {

private double totalPercurso;
public void calculaViagem(Percurso p) {
    
    totalPercurso = (p.getKmPercorrido() / 10) * p.getValorCombustivel() + p.getValorPedagio();
}

public double getTotalPercurso () {
        return totalPercurso;
}
}